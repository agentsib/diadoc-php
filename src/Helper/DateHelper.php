<?php
/**
 * User: ikovalenko
 */

namespace AgentSIB\Diadoc\Helper;


class DateHelper
{
    static public function convertDateTimeToTicks(\DateTime $dateTime = null)
    {
        if (is_null($dateTime)) {
            return null;
        }
        return $dateTime->getTimestamp() * 10000000 + 621355968000000000;
    }

    static public function convertTicksToDateTime($ticks)
    {
        if (is_null($ticks)) {
            return null;
        }
        $timestamp = floor(($ticks - 621355968000000000)/10000000);

        return new \DateTime('@' . $timestamp);
    }
}