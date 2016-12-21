<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc\Model;


use Symfony\Component\Process\ProcessBuilder;

class OpenSslCryptoProvider implements CryptoProviderInterface
{
    private $caFile;
    private $certFile;
    private $privateKey;

    public function __construct($caFile, $certFile, $privateKey)
    {
        $this->caFile = $caFile;
        $this->certFile = $certFile;
        $this->privateKey = $privateKey;
    }

    public function encrypt($plainData)
    {
        $process = ProcessBuilder::create([
            'openssl',
            'smime',
            '-encrypt',
            '-binary',
            '-noattr',
            '-outform', 'DER',
            '-gost89',
            $this->certFile
        ])->setInput($plainData)->getProcess();

        return $process->mustRun()->getOutput();
    }

    public function decrypt($encriptedData)
    {
        $process = ProcessBuilder::create([
            'openssl',
            'smime',
            '-decrypt',
            '-binary',
            '-noattr',
            '-inform', 'der',
            '-inkey', $this->privateKey

        ])->setInput($encriptedData)->getProcess();

        return $process->mustRun()->getOutput();
    }

    public function sign($data)
    {
        $process = ProcessBuilder::create([
            'openssl',
            'smime',
            '-sign',
            '-binary',
            '-noattr',
            '-gost89',
            '-signer', $this->certFile,
            '-inkey', $this->privateKey,
            '-outform', 'der'
        ])->setInput($data)->getProcess();

        return $process->mustRun()->getOutput();
    }

    public function checkSign($data, $sign)
    {
        $file = tmpfile();
        $metaDatas = stream_get_meta_data($file);
        $tmpFilename = $metaDatas['uri'];
        fwrite($file, $data);
        $process = ProcessBuilder::create([
            'openssl',
            'smime',
            '-verify',
            '-binary',
            '-noattr',
            '-gost89',
            '-inform', 'der',
            '-CAfile', $this->caFile,
            '-content', $tmpFilename

        ])->setInput($sign)->getProcess();

        $result = $process->run();
        fclose($file);

        return $result == 0;
    }

}