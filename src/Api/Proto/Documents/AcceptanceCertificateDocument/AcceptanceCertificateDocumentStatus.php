<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/AcceptanceCertificateDocument.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument;

/**
 * Protobuf enum :
 * AgentSIB.Diadoc.Api.Proto.Documents.AcceptanceCertificateDocument.AcceptanceCertificateDocumentStatus
 */
class AcceptanceCertificateDocumentStatus extends \Protobuf\Enum
{

    /**
     * UnknownAcceptanceCertificateDocumentStatus = 0
     */
    const UnknownAcceptanceCertificateDocumentStatus_VALUE = 0;

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
     * OutboundNoRecipientSignatureRequest = 16
     */
    const OutboundNoRecipientSignatureRequest_VALUE = 16;

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
     * InboundNoRecipientSignatureRequest = 17
     */
    const InboundNoRecipientSignatureRequest_VALUE = 17;

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
     * InternalNoRecipientSignatureRequest = 18
     */
    const InternalNoRecipientSignatureRequest_VALUE = 18;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $UnknownAcceptanceCertificateDocumentStatus = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $OutboundWaitingForRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $OutboundWithRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $OutboundWithRecipientPartiallySignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $OutboundRecipientSignatureRequestRejected = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $OutboundWaitingForSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $OutboundInvalidSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $OutboundNoRecipientSignatureRequest = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InboundWaitingForRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InboundWithRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InboundWithRecipientPartiallySignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InboundRecipientSignatureRequestRejected = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InboundInvalidRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InboundNoRecipientSignatureRequest = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InternalWaitingForRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InternalWithRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InternalWithRecipientPartiallySignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InternalRecipientSignatureRequestRejected = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InternalWaitingForSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InternalInvalidSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InternalInvalidRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    protected static $InternalNoRecipientSignatureRequest = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function UnknownAcceptanceCertificateDocumentStatus()
    {
        if (self::$UnknownAcceptanceCertificateDocumentStatus !== null) {
            return self::$UnknownAcceptanceCertificateDocumentStatus;
        }

        return self::$UnknownAcceptanceCertificateDocumentStatus = new self('UnknownAcceptanceCertificateDocumentStatus', self::UnknownAcceptanceCertificateDocumentStatus_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function OutboundWaitingForRecipientSignature()
    {
        if (self::$OutboundWaitingForRecipientSignature !== null) {
            return self::$OutboundWaitingForRecipientSignature;
        }

        return self::$OutboundWaitingForRecipientSignature = new self('OutboundWaitingForRecipientSignature', self::OutboundWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function OutboundWithRecipientSignature()
    {
        if (self::$OutboundWithRecipientSignature !== null) {
            return self::$OutboundWithRecipientSignature;
        }

        return self::$OutboundWithRecipientSignature = new self('OutboundWithRecipientSignature', self::OutboundWithRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function OutboundWithRecipientPartiallySignature()
    {
        if (self::$OutboundWithRecipientPartiallySignature !== null) {
            return self::$OutboundWithRecipientPartiallySignature;
        }

        return self::$OutboundWithRecipientPartiallySignature = new self('OutboundWithRecipientPartiallySignature', self::OutboundWithRecipientPartiallySignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function OutboundRecipientSignatureRequestRejected()
    {
        if (self::$OutboundRecipientSignatureRequestRejected !== null) {
            return self::$OutboundRecipientSignatureRequestRejected;
        }

        return self::$OutboundRecipientSignatureRequestRejected = new self('OutboundRecipientSignatureRequestRejected', self::OutboundRecipientSignatureRequestRejected_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function OutboundWaitingForSenderSignature()
    {
        if (self::$OutboundWaitingForSenderSignature !== null) {
            return self::$OutboundWaitingForSenderSignature;
        }

        return self::$OutboundWaitingForSenderSignature = new self('OutboundWaitingForSenderSignature', self::OutboundWaitingForSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function OutboundInvalidSenderSignature()
    {
        if (self::$OutboundInvalidSenderSignature !== null) {
            return self::$OutboundInvalidSenderSignature;
        }

        return self::$OutboundInvalidSenderSignature = new self('OutboundInvalidSenderSignature', self::OutboundInvalidSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function OutboundNoRecipientSignatureRequest()
    {
        if (self::$OutboundNoRecipientSignatureRequest !== null) {
            return self::$OutboundNoRecipientSignatureRequest;
        }

        return self::$OutboundNoRecipientSignatureRequest = new self('OutboundNoRecipientSignatureRequest', self::OutboundNoRecipientSignatureRequest_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InboundWaitingForRecipientSignature()
    {
        if (self::$InboundWaitingForRecipientSignature !== null) {
            return self::$InboundWaitingForRecipientSignature;
        }

        return self::$InboundWaitingForRecipientSignature = new self('InboundWaitingForRecipientSignature', self::InboundWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InboundWithRecipientSignature()
    {
        if (self::$InboundWithRecipientSignature !== null) {
            return self::$InboundWithRecipientSignature;
        }

        return self::$InboundWithRecipientSignature = new self('InboundWithRecipientSignature', self::InboundWithRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InboundWithRecipientPartiallySignature()
    {
        if (self::$InboundWithRecipientPartiallySignature !== null) {
            return self::$InboundWithRecipientPartiallySignature;
        }

        return self::$InboundWithRecipientPartiallySignature = new self('InboundWithRecipientPartiallySignature', self::InboundWithRecipientPartiallySignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InboundRecipientSignatureRequestRejected()
    {
        if (self::$InboundRecipientSignatureRequestRejected !== null) {
            return self::$InboundRecipientSignatureRequestRejected;
        }

        return self::$InboundRecipientSignatureRequestRejected = new self('InboundRecipientSignatureRequestRejected', self::InboundRecipientSignatureRequestRejected_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InboundInvalidRecipientSignature()
    {
        if (self::$InboundInvalidRecipientSignature !== null) {
            return self::$InboundInvalidRecipientSignature;
        }

        return self::$InboundInvalidRecipientSignature = new self('InboundInvalidRecipientSignature', self::InboundInvalidRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InboundNoRecipientSignatureRequest()
    {
        if (self::$InboundNoRecipientSignatureRequest !== null) {
            return self::$InboundNoRecipientSignatureRequest;
        }

        return self::$InboundNoRecipientSignatureRequest = new self('InboundNoRecipientSignatureRequest', self::InboundNoRecipientSignatureRequest_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InternalWaitingForRecipientSignature()
    {
        if (self::$InternalWaitingForRecipientSignature !== null) {
            return self::$InternalWaitingForRecipientSignature;
        }

        return self::$InternalWaitingForRecipientSignature = new self('InternalWaitingForRecipientSignature', self::InternalWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InternalWithRecipientSignature()
    {
        if (self::$InternalWithRecipientSignature !== null) {
            return self::$InternalWithRecipientSignature;
        }

        return self::$InternalWithRecipientSignature = new self('InternalWithRecipientSignature', self::InternalWithRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InternalWithRecipientPartiallySignature()
    {
        if (self::$InternalWithRecipientPartiallySignature !== null) {
            return self::$InternalWithRecipientPartiallySignature;
        }

        return self::$InternalWithRecipientPartiallySignature = new self('InternalWithRecipientPartiallySignature', self::InternalWithRecipientPartiallySignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InternalRecipientSignatureRequestRejected()
    {
        if (self::$InternalRecipientSignatureRequestRejected !== null) {
            return self::$InternalRecipientSignatureRequestRejected;
        }

        return self::$InternalRecipientSignatureRequestRejected = new self('InternalRecipientSignatureRequestRejected', self::InternalRecipientSignatureRequestRejected_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InternalWaitingForSenderSignature()
    {
        if (self::$InternalWaitingForSenderSignature !== null) {
            return self::$InternalWaitingForSenderSignature;
        }

        return self::$InternalWaitingForSenderSignature = new self('InternalWaitingForSenderSignature', self::InternalWaitingForSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InternalInvalidSenderSignature()
    {
        if (self::$InternalInvalidSenderSignature !== null) {
            return self::$InternalInvalidSenderSignature;
        }

        return self::$InternalInvalidSenderSignature = new self('InternalInvalidSenderSignature', self::InternalInvalidSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InternalInvalidRecipientSignature()
    {
        if (self::$InternalInvalidRecipientSignature !== null) {
            return self::$InternalInvalidRecipientSignature;
        }

        return self::$InternalInvalidRecipientSignature = new self('InternalInvalidRecipientSignature', self::InternalInvalidRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function InternalNoRecipientSignatureRequest()
    {
        if (self::$InternalNoRecipientSignatureRequest !== null) {
            return self::$InternalNoRecipientSignatureRequest;
        }

        return self::$InternalNoRecipientSignatureRequest = new self('InternalNoRecipientSignatureRequest', self::InternalNoRecipientSignatureRequest_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\AcceptanceCertificateDocument\AcceptanceCertificateDocumentStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UnknownAcceptanceCertificateDocumentStatus();
            case 1: return self::OutboundWaitingForRecipientSignature();
            case 2: return self::OutboundWithRecipientSignature();
            case 19: return self::OutboundWithRecipientPartiallySignature();
            case 3: return self::OutboundRecipientSignatureRequestRejected();
            case 10: return self::OutboundWaitingForSenderSignature();
            case 11: return self::OutboundInvalidSenderSignature();
            case 16: return self::OutboundNoRecipientSignatureRequest();
            case 4: return self::InboundWaitingForRecipientSignature();
            case 5: return self::InboundWithRecipientSignature();
            case 20: return self::InboundWithRecipientPartiallySignature();
            case 6: return self::InboundRecipientSignatureRequestRejected();
            case 12: return self::InboundInvalidRecipientSignature();
            case 17: return self::InboundNoRecipientSignatureRequest();
            case 7: return self::InternalWaitingForRecipientSignature();
            case 8: return self::InternalWithRecipientSignature();
            case 21: return self::InternalWithRecipientPartiallySignature();
            case 9: return self::InternalRecipientSignatureRequestRejected();
            case 13: return self::InternalWaitingForSenderSignature();
            case 14: return self::InternalInvalidSenderSignature();
            case 15: return self::InternalInvalidRecipientSignature();
            case 18: return self::InternalNoRecipientSignatureRequest();
            default: return null;
        }
    }


}

