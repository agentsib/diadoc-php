<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Document.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Documents.SenderSignatureStatus
 */
class SenderSignatureStatus extends \Protobuf\Enum
{

    /**
     * UnknownSenderSignatureStatus = 0
     */
    const UnknownSenderSignatureStatus_VALUE = 0;

    /**
     * WaitingForSenderSignature = 1
     */
    const WaitingForSenderSignature_VALUE = 1;

    /**
     * SenderSignatureUnchecked = 2
     */
    const SenderSignatureUnchecked_VALUE = 2;

    /**
     * SenderSignatureCheckedAndValid = 3
     */
    const SenderSignatureCheckedAndValid_VALUE = 3;

    /**
     * SenderSignatureCheckedAndInvalid = 4
     */
    const SenderSignatureCheckedAndInvalid_VALUE = 4;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    protected static $UnknownSenderSignatureStatus = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    protected static $WaitingForSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    protected static $SenderSignatureUnchecked = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    protected static $SenderSignatureCheckedAndValid = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    protected static $SenderSignatureCheckedAndInvalid = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    public static function UnknownSenderSignatureStatus()
    {
        if (self::$UnknownSenderSignatureStatus !== null) {
            return self::$UnknownSenderSignatureStatus;
        }

        return self::$UnknownSenderSignatureStatus = new self('UnknownSenderSignatureStatus', self::UnknownSenderSignatureStatus_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    public static function WaitingForSenderSignature()
    {
        if (self::$WaitingForSenderSignature !== null) {
            return self::$WaitingForSenderSignature;
        }

        return self::$WaitingForSenderSignature = new self('WaitingForSenderSignature', self::WaitingForSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    public static function SenderSignatureUnchecked()
    {
        if (self::$SenderSignatureUnchecked !== null) {
            return self::$SenderSignatureUnchecked;
        }

        return self::$SenderSignatureUnchecked = new self('SenderSignatureUnchecked', self::SenderSignatureUnchecked_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    public static function SenderSignatureCheckedAndValid()
    {
        if (self::$SenderSignatureCheckedAndValid !== null) {
            return self::$SenderSignatureCheckedAndValid;
        }

        return self::$SenderSignatureCheckedAndValid = new self('SenderSignatureCheckedAndValid', self::SenderSignatureCheckedAndValid_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    public static function SenderSignatureCheckedAndInvalid()
    {
        if (self::$SenderSignatureCheckedAndInvalid !== null) {
            return self::$SenderSignatureCheckedAndInvalid;
        }

        return self::$SenderSignatureCheckedAndInvalid = new self('SenderSignatureCheckedAndInvalid', self::SenderSignatureCheckedAndInvalid_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\SenderSignatureStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UnknownSenderSignatureStatus();
            case 1: return self::WaitingForSenderSignature();
            case 2: return self::SenderSignatureUnchecked();
            case 3: return self::SenderSignatureCheckedAndValid();
            case 4: return self::SenderSignatureCheckedAndInvalid();
            default: return null;
        }
    }


}

