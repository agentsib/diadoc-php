<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/BilateralDocument.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument;

/**
 * Protobuf enum :
 * AgentSIB.Diadoc.Api.Proto.Documents.BilateralDocument.BilateralDocumentStatus
 */
class BilateralDocumentStatus extends \Protobuf\Enum
{

    /**
     * UnknownBilateralDocumentStatus = 0
     */
    const UnknownBilateralDocumentStatus_VALUE = 0;

    /**
     * OutboundWaitingForRecipientSignature = 1
     */
    const OutboundWaitingForRecipientSignature_VALUE = 1;

    /**
     * OutboundWithRecipientSignature = 2
     */
    const OutboundWithRecipientSignature_VALUE = 2;

    /**
     * OutboundWithRecipientPartiallySignature = 19
     */
    const OutboundWithRecipientPartiallySignature_VALUE = 19;

    /**
     * OutboundRecipientSignatureRequestRejected = 3
     */
    const OutboundRecipientSignatureRequestRejected_VALUE = 3;

    /**
     * OutboundWaitingForSenderSignature = 10
     */
    const OutboundWaitingForSenderSignature_VALUE = 10;

    /**
     * OutboundInvalidSenderSignature = 11
     */
    const OutboundInvalidSenderSignature_VALUE = 11;

    /**
     * InboundWaitingForRecipientSignature = 4
     */
    const InboundWaitingForRecipientSignature_VALUE = 4;

    /**
     * InboundWithRecipientSignature = 5
     */
    const InboundWithRecipientSignature_VALUE = 5;

    /**
     * InboundWithRecipientPartiallySignature = 20
     */
    const InboundWithRecipientPartiallySignature_VALUE = 20;

    /**
     * InboundRecipientSignatureRequestRejected = 6
     */
    const InboundRecipientSignatureRequestRejected_VALUE = 6;

    /**
     * InboundInvalidRecipientSignature = 12
     */
    const InboundInvalidRecipientSignature_VALUE = 12;

    /**
     * InternalWaitingForRecipientSignature = 7
     */
    const InternalWaitingForRecipientSignature_VALUE = 7;

    /**
     * InternalWithRecipientSignature = 8
     */
    const InternalWithRecipientSignature_VALUE = 8;

    /**
     * InternalWithRecipientPartiallySignature = 21
     */
    const InternalWithRecipientPartiallySignature_VALUE = 21;

    /**
     * InternalRecipientSignatureRequestRejected = 9
     */
    const InternalRecipientSignatureRequestRejected_VALUE = 9;

    /**
     * InternalWaitingForSenderSignature = 13
     */
    const InternalWaitingForSenderSignature_VALUE = 13;

    /**
     * InternalInvalidSenderSignature = 14
     */
    const InternalInvalidSenderSignature_VALUE = 14;

    /**
     * InternalInvalidRecipientSignature = 15
     */
    const InternalInvalidRecipientSignature_VALUE = 15;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $UnknownBilateralDocumentStatus = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $OutboundWaitingForRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $OutboundWithRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $OutboundWithRecipientPartiallySignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $OutboundRecipientSignatureRequestRejected = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $OutboundWaitingForSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $OutboundInvalidSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InboundWaitingForRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InboundWithRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InboundWithRecipientPartiallySignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InboundRecipientSignatureRequestRejected = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InboundInvalidRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InternalWaitingForRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InternalWithRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InternalWithRecipientPartiallySignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InternalRecipientSignatureRequestRejected = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InternalWaitingForSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InternalInvalidSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected static $InternalInvalidRecipientSignature = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function UnknownBilateralDocumentStatus()
    {
        if (self::$UnknownBilateralDocumentStatus !== null) {
            return self::$UnknownBilateralDocumentStatus;
        }

        return self::$UnknownBilateralDocumentStatus = new self('UnknownBilateralDocumentStatus', self::UnknownBilateralDocumentStatus_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function OutboundWaitingForRecipientSignature()
    {
        if (self::$OutboundWaitingForRecipientSignature !== null) {
            return self::$OutboundWaitingForRecipientSignature;
        }

        return self::$OutboundWaitingForRecipientSignature = new self('OutboundWaitingForRecipientSignature', self::OutboundWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function OutboundWithRecipientSignature()
    {
        if (self::$OutboundWithRecipientSignature !== null) {
            return self::$OutboundWithRecipientSignature;
        }

        return self::$OutboundWithRecipientSignature = new self('OutboundWithRecipientSignature', self::OutboundWithRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function OutboundWithRecipientPartiallySignature()
    {
        if (self::$OutboundWithRecipientPartiallySignature !== null) {
            return self::$OutboundWithRecipientPartiallySignature;
        }

        return self::$OutboundWithRecipientPartiallySignature = new self('OutboundWithRecipientPartiallySignature', self::OutboundWithRecipientPartiallySignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function OutboundRecipientSignatureRequestRejected()
    {
        if (self::$OutboundRecipientSignatureRequestRejected !== null) {
            return self::$OutboundRecipientSignatureRequestRejected;
        }

        return self::$OutboundRecipientSignatureRequestRejected = new self('OutboundRecipientSignatureRequestRejected', self::OutboundRecipientSignatureRequestRejected_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function OutboundWaitingForSenderSignature()
    {
        if (self::$OutboundWaitingForSenderSignature !== null) {
            return self::$OutboundWaitingForSenderSignature;
        }

        return self::$OutboundWaitingForSenderSignature = new self('OutboundWaitingForSenderSignature', self::OutboundWaitingForSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function OutboundInvalidSenderSignature()
    {
        if (self::$OutboundInvalidSenderSignature !== null) {
            return self::$OutboundInvalidSenderSignature;
        }

        return self::$OutboundInvalidSenderSignature = new self('OutboundInvalidSenderSignature', self::OutboundInvalidSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InboundWaitingForRecipientSignature()
    {
        if (self::$InboundWaitingForRecipientSignature !== null) {
            return self::$InboundWaitingForRecipientSignature;
        }

        return self::$InboundWaitingForRecipientSignature = new self('InboundWaitingForRecipientSignature', self::InboundWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InboundWithRecipientSignature()
    {
        if (self::$InboundWithRecipientSignature !== null) {
            return self::$InboundWithRecipientSignature;
        }

        return self::$InboundWithRecipientSignature = new self('InboundWithRecipientSignature', self::InboundWithRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InboundWithRecipientPartiallySignature()
    {
        if (self::$InboundWithRecipientPartiallySignature !== null) {
            return self::$InboundWithRecipientPartiallySignature;
        }

        return self::$InboundWithRecipientPartiallySignature = new self('InboundWithRecipientPartiallySignature', self::InboundWithRecipientPartiallySignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InboundRecipientSignatureRequestRejected()
    {
        if (self::$InboundRecipientSignatureRequestRejected !== null) {
            return self::$InboundRecipientSignatureRequestRejected;
        }

        return self::$InboundRecipientSignatureRequestRejected = new self('InboundRecipientSignatureRequestRejected', self::InboundRecipientSignatureRequestRejected_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InboundInvalidRecipientSignature()
    {
        if (self::$InboundInvalidRecipientSignature !== null) {
            return self::$InboundInvalidRecipientSignature;
        }

        return self::$InboundInvalidRecipientSignature = new self('InboundInvalidRecipientSignature', self::InboundInvalidRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InternalWaitingForRecipientSignature()
    {
        if (self::$InternalWaitingForRecipientSignature !== null) {
            return self::$InternalWaitingForRecipientSignature;
        }

        return self::$InternalWaitingForRecipientSignature = new self('InternalWaitingForRecipientSignature', self::InternalWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InternalWithRecipientSignature()
    {
        if (self::$InternalWithRecipientSignature !== null) {
            return self::$InternalWithRecipientSignature;
        }

        return self::$InternalWithRecipientSignature = new self('InternalWithRecipientSignature', self::InternalWithRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InternalWithRecipientPartiallySignature()
    {
        if (self::$InternalWithRecipientPartiallySignature !== null) {
            return self::$InternalWithRecipientPartiallySignature;
        }

        return self::$InternalWithRecipientPartiallySignature = new self('InternalWithRecipientPartiallySignature', self::InternalWithRecipientPartiallySignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InternalRecipientSignatureRequestRejected()
    {
        if (self::$InternalRecipientSignatureRequestRejected !== null) {
            return self::$InternalRecipientSignatureRequestRejected;
        }

        return self::$InternalRecipientSignatureRequestRejected = new self('InternalRecipientSignatureRequestRejected', self::InternalRecipientSignatureRequestRejected_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InternalWaitingForSenderSignature()
    {
        if (self::$InternalWaitingForSenderSignature !== null) {
            return self::$InternalWaitingForSenderSignature;
        }

        return self::$InternalWaitingForSenderSignature = new self('InternalWaitingForSenderSignature', self::InternalWaitingForSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InternalInvalidSenderSignature()
    {
        if (self::$InternalInvalidSenderSignature !== null) {
            return self::$InternalInvalidSenderSignature;
        }

        return self::$InternalInvalidSenderSignature = new self('InternalInvalidSenderSignature', self::InternalInvalidSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function InternalInvalidRecipientSignature()
    {
        if (self::$InternalInvalidRecipientSignature !== null) {
            return self::$InternalInvalidRecipientSignature;
        }

        return self::$InternalInvalidRecipientSignature = new self('InternalInvalidRecipientSignature', self::InternalInvalidRecipientSignature_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UnknownBilateralDocumentStatus();
            case 1: return self::OutboundWaitingForRecipientSignature();
            case 2: return self::OutboundWithRecipientSignature();
            case 19: return self::OutboundWithRecipientPartiallySignature();
            case 3: return self::OutboundRecipientSignatureRequestRejected();
            case 10: return self::OutboundWaitingForSenderSignature();
            case 11: return self::OutboundInvalidSenderSignature();
            case 4: return self::InboundWaitingForRecipientSignature();
            case 5: return self::InboundWithRecipientSignature();
            case 20: return self::InboundWithRecipientPartiallySignature();
            case 6: return self::InboundRecipientSignatureRequestRejected();
            case 12: return self::InboundInvalidRecipientSignature();
            case 7: return self::InternalWaitingForRecipientSignature();
            case 8: return self::InternalWithRecipientSignature();
            case 21: return self::InternalWithRecipientPartiallySignature();
            case 9: return self::InternalRecipientSignatureRequestRejected();
            case 13: return self::InternalWaitingForSenderSignature();
            case 14: return self::InternalInvalidSenderSignature();
            case 15: return self::InternalInvalidRecipientSignature();
            default: return null;
        }
    }


}

