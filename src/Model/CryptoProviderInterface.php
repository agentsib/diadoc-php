<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc\Model;


interface CryptoProviderInterface
{
    public function encrypt($encriptedData);

    public function decrypt($plainData);

    public function sign($data);

    public function checkSign($data, $sign);
}