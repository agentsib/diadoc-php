<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc\Model;


use Symfony\Component\Process\ProcessBuilder;

class OpensslSignerProvider implements SignerProviderInterface
{
    private $caFile;
    private $certFile;
    private $privateKey;
    private $opensslBin;

    public function __construct($caFile, $certFile, $privateKey, $opensslBin = '/usr/bin/openssl')
    {
        $this->caFile = $caFile;
        $this->certFile = $certFile;
        $this->privateKey = $privateKey;
        $this->opensslBin = $opensslBin;
    }

    private function getOpensslProcess(array $args = [], $input = null)
    {
        return ProcessBuilder::create($args)
            ->setPrefix($this->opensslBin)
            ->setInput($input)->getProcess();
    }

    public function encrypt($plainData)
    {
        $process = $this->getOpensslProcess([
            'smime',
            '-encrypt',
            '-binary',
            '-noattr',
            '-outform', 'DER',
            '-gost89',
            $this->certFile
        ], $plainData);

        return $process->mustRun()->getOutput();
    }

    public function decrypt($encriptedData)
    {
        $process = $this->getOpensslProcess([
            'smime',
            '-decrypt',
            '-binary',
            '-noattr',
            '-inform', 'der',
            '-inkey', $this->privateKey
        ], $encriptedData);

        return $process->mustRun()->getOutput();
    }

    public function sign($data)
    {
        $process = $this->getOpensslProcess([
            'smime',
            '-sign',
            '-binary',
            '-noattr',
            '-gost89',
            '-signer', $this->certFile,
            '-inkey', $this->privateKey,
            '-outform', 'der'
        ], $data);

        return $process->mustRun()->getOutput();
    }

    public function checkSign($data, $sign)
    {
        $file = tmpfile();
        $metaDatas = stream_get_meta_data($file);
        $tmpFilename = $metaDatas['uri'];
        fwrite($file, $data);

        $process = $this->getOpensslProcess([
            'smime',
            '-verify',
            '-binary',
            '-noattr',
            '-gost89',
            '-inform', 'der',
            '-CAfile', $this->caFile,
            '-content', $tmpFilename
        ], $sign);

        $result = $process->run();
        fclose($file);

        return $result == 0;
    }

}