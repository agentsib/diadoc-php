<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/ResolutionInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Events.ResolutionType
 */
class ResolutionType extends \Protobuf\Enum
{

    /**
     * UnknownResolutionType = -1
     */
    const UnknownResolutionType_VALUE = -1;

    /**
     * UndefinedResolutionType = 0
     */
    const UndefinedResolutionType_VALUE = 0;

    /**
     * Approve = 1
     */
    const Approve_VALUE = 1;

    /**
     * Disapprove = 2
     */
    const Disapprove_VALUE = 2;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    protected static $UnknownResolutionType = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    protected static $UndefinedResolutionType = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    protected static $Approve = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    protected static $Disapprove = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    public static function UnknownResolutionType()
    {
        if (self::$UnknownResolutionType !== null) {
            return self::$UnknownResolutionType;
        }

        return self::$UnknownResolutionType = new self('UnknownResolutionType', self::UnknownResolutionType_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    public static function UndefinedResolutionType()
    {
        if (self::$UndefinedResolutionType !== null) {
            return self::$UndefinedResolutionType;
        }

        return self::$UndefinedResolutionType = new self('UndefinedResolutionType', self::UndefinedResolutionType_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    public static function Approve()
    {
        if (self::$Approve !== null) {
            return self::$Approve;
        }

        return self::$Approve = new self('Approve', self::Approve_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    public static function Disapprove()
    {
        if (self::$Disapprove !== null) {
            return self::$Disapprove;
        }

        return self::$Disapprove = new self('Disapprove', self::Disapprove_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case -1: return self::UnknownResolutionType();
            case 0: return self::UndefinedResolutionType();
            case 1: return self::Approve();
            case 2: return self::Disapprove();
            default: return null;
        }
    }


}

