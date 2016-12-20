<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc\Model;


use Symfony\Component\Process\ProcessBuilder;

class OpenSslCryptoProvider implements CryptoProviderInterface
{
    private $certFile;
    private $privateKey;

    public function __construct($certFile, $privateKey)
    {
        $this->certFile = $certFile;
        $this->privateKey = $privateKey;
    }

    public function encrypt($encriptedData)
    {

    }

    public function decrypt($plainData)
    {
        $process = ProcessBuilder::create([
            'openssl',
            'smime',
            '-decrypt',
            '-inform', 'DER',
            '-inkey', $this->privateKey

        ])->setInput($plainData)->getProcess();

        return $process->mustRun()->getOutput();
    }

    public function sign($data)
    {
        // TODO: Implement sign() method.
    }

    public function checkSign($data, $sign)
    {
        // TODO: Implement checkSign() method.
    }

}