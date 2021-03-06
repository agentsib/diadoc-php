<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/UniversalTransferDocument.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument;

/**
 * Protobuf enum :
 * AgentSIB.Diadoc.Api.Proto.Documents.UniversalTransferDocument.UniversalTransferDocumentStatus
 */
class UniversalTransferDocumentStatus extends \Protobuf\Enum
{

    /**
     * UnknownDocumentStatus = 0
     */
    const UnknownDocumentStatus_VALUE = 0;

    /**
     * OutboundWaitingForSenderSignature = 1
     */
    const OutboundWaitingForSenderSignature_VALUE = 1;

    /**
     * OutboundWaitingForInvoiceReceiptAndRecipientSignature = 2
     */
    const OutboundWaitingForInvoiceReceiptAndRecipientSignature_VALUE = 2;

    /**
     * OutboundWaitingForInvoiceReceipt = 3
     */
    const OutboundWaitingForInvoiceReceipt_VALUE = 3;

    /**
     * OutboundWaitingForRecipientSignature = 4
     */
    const OutboundWaitingForRecipientSignature_VALUE = 4;

    /**
     * OutboundInvalidSenderSignature = 5
     */
    const OutboundInvalidSenderSignature_VALUE = 5;

    /**
     * InboundWaitingForInvoiceReceiptAndRecipientSignature = 6
     */
    const InboundWaitingForInvoiceReceiptAndRecipientSignature_VALUE = 6;

    /**
     * InboundWaitingForRecipientSignature = 7
     */
    const InboundWaitingForRecipientSignature_VALUE = 7;

    /**
     * InboundWaitingForInvoiceReceipt = 8
     */
    const InboundWaitingForInvoiceReceipt_VALUE = 8;

    /**
     * InboundWithRecipientSignature = 9
     */
    const InboundWithRecipientSignature_VALUE = 9;

    /**
     * InboundInvalidRecipientSignature = 10
     */
    const InboundInvalidRecipientSignature_VALUE = 10;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $UnknownDocumentStatus = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $OutboundWaitingForSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $OutboundWaitingForInvoiceReceiptAndRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $OutboundWaitingForInvoiceReceipt = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $OutboundWaitingForRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $OutboundInvalidSenderSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $InboundWaitingForInvoiceReceiptAndRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $InboundWaitingForRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $InboundWaitingForInvoiceReceipt = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $InboundWithRecipientSignature = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    protected static $InboundInvalidRecipientSignature = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function UnknownDocumentStatus()
    {
        if (self::$UnknownDocumentStatus !== null) {
            return self::$UnknownDocumentStatus;
        }

        return self::$UnknownDocumentStatus = new self('UnknownDocumentStatus', self::UnknownDocumentStatus_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function OutboundWaitingForSenderSignature()
    {
        if (self::$OutboundWaitingForSenderSignature !== null) {
            return self::$OutboundWaitingForSenderSignature;
        }

        return self::$OutboundWaitingForSenderSignature = new self('OutboundWaitingForSenderSignature', self::OutboundWaitingForSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function OutboundWaitingForInvoiceReceiptAndRecipientSignature()
    {
        if (self::$OutboundWaitingForInvoiceReceiptAndRecipientSignature !== null) {
            return self::$OutboundWaitingForInvoiceReceiptAndRecipientSignature;
        }

        return self::$OutboundWaitingForInvoiceReceiptAndRecipientSignature = new self('OutboundWaitingForInvoiceReceiptAndRecipientSignature', self::OutboundWaitingForInvoiceReceiptAndRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function OutboundWaitingForInvoiceReceipt()
    {
        if (self::$OutboundWaitingForInvoiceReceipt !== null) {
            return self::$OutboundWaitingForInvoiceReceipt;
        }

        return self::$OutboundWaitingForInvoiceReceipt = new self('OutboundWaitingForInvoiceReceipt', self::OutboundWaitingForInvoiceReceipt_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function OutboundWaitingForRecipientSignature()
    {
        if (self::$OutboundWaitingForRecipientSignature !== null) {
            return self::$OutboundWaitingForRecipientSignature;
        }

        return self::$OutboundWaitingForRecipientSignature = new self('OutboundWaitingForRecipientSignature', self::OutboundWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function OutboundInvalidSenderSignature()
    {
        if (self::$OutboundInvalidSenderSignature !== null) {
            return self::$OutboundInvalidSenderSignature;
        }

        return self::$OutboundInvalidSenderSignature = new self('OutboundInvalidSenderSignature', self::OutboundInvalidSenderSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function InboundWaitingForInvoiceReceiptAndRecipientSignature()
    {
        if (self::$InboundWaitingForInvoiceReceiptAndRecipientSignature !== null) {
            return self::$InboundWaitingForInvoiceReceiptAndRecipientSignature;
        }

        return self::$InboundWaitingForInvoiceReceiptAndRecipientSignature = new self('InboundWaitingForInvoiceReceiptAndRecipientSignature', self::InboundWaitingForInvoiceReceiptAndRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function InboundWaitingForRecipientSignature()
    {
        if (self::$InboundWaitingForRecipientSignature !== null) {
            return self::$InboundWaitingForRecipientSignature;
        }

        return self::$InboundWaitingForRecipientSignature = new self('InboundWaitingForRecipientSignature', self::InboundWaitingForRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function InboundWaitingForInvoiceReceipt()
    {
        if (self::$InboundWaitingForInvoiceReceipt !== null) {
            return self::$InboundWaitingForInvoiceReceipt;
        }

        return self::$InboundWaitingForInvoiceReceipt = new self('InboundWaitingForInvoiceReceipt', self::InboundWaitingForInvoiceReceipt_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function InboundWithRecipientSignature()
    {
        if (self::$InboundWithRecipientSignature !== null) {
            return self::$InboundWithRecipientSignature;
        }

        return self::$InboundWithRecipientSignature = new self('InboundWithRecipientSignature', self::InboundWithRecipientSignature_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function InboundInvalidRecipientSignature()
    {
        if (self::$InboundInvalidRecipientSignature !== null) {
            return self::$InboundInvalidRecipientSignature;
        }

        return self::$InboundInvalidRecipientSignature = new self('InboundInvalidRecipientSignature', self::InboundInvalidRecipientSignature_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UnknownDocumentStatus();
            case 1: return self::OutboundWaitingForSenderSignature();
            case 2: return self::OutboundWaitingForInvoiceReceiptAndRecipientSignature();
            case 3: return self::OutboundWaitingForInvoiceReceipt();
            case 4: return self::OutboundWaitingForRecipientSignature();
            case 5: return self::OutboundInvalidSenderSignature();
            case 6: return self::InboundWaitingForInvoiceReceiptAndRecipientSignature();
            case 7: return self::InboundWaitingForRecipientSignature();
            case 8: return self::InboundWaitingForInvoiceReceipt();
            case 9: return self::InboundWithRecipientSignature();
            case 10: return self::InboundInvalidRecipientSignature();
            default: return null;
        }
    }


}

