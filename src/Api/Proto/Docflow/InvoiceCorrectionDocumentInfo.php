<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocumentInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Docflow.InvoiceCorrectionDocumentInfo
 */
class InvoiceCorrectionDocumentInfo extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * TotalInc optional string = 1
     *
     * @var string
     */
    protected $TotalInc = null;

    /**
     * TotalDec optional string = 2
     *
     * @var string
     */
    protected $TotalDec = null;

    /**
     * VatInc optional string = 3
     *
     * @var string
     */
    protected $VatInc = null;

    /**
     * VatDec optional string = 4
     *
     * @var string
     */
    protected $VatDec = null;

    /**
     * CurrencyCode optional int32 = 5
     *
     * @var int
     */
    protected $CurrencyCode = null;

    /**
     * OriginalInvoiceDateAndNumber optional message = 6
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    protected $OriginalInvoiceDateAndNumber = null;

    /**
     * OriginalInvoiceRevisionDateAndNumber optional message = 7
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    protected $OriginalInvoiceRevisionDateAndNumber = null;

    /**
     * OriginalInvoiceCorrectionDateAndNumber optional message = 8
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    protected $OriginalInvoiceCorrectionDateAndNumber = null;

    /**
     * Check if 'TotalInc' has a value
     *
     * @return bool
     */
    public function hasTotalInc()
    {
        return $this->TotalInc !== null;
    }

    /**
     * Get 'TotalInc' value
     *
     * @return string
     */
    public function getTotalInc()
    {
        return $this->TotalInc;
    }

    /**
     * Set 'TotalInc' value
     *
     * @param string $value
     */
    public function setTotalInc($value = null)
    {
        $this->TotalInc = $value;
    }

    /**
     * Check if 'TotalDec' has a value
     *
     * @return bool
     */
    public function hasTotalDec()
    {
        return $this->TotalDec !== null;
    }

    /**
     * Get 'TotalDec' value
     *
     * @return string
     */
    public function getTotalDec()
    {
        return $this->TotalDec;
    }

    /**
     * Set 'TotalDec' value
     *
     * @param string $value
     */
    public function setTotalDec($value = null)
    {
        $this->TotalDec = $value;
    }

    /**
     * Check if 'VatInc' has a value
     *
     * @return bool
     */
    public function hasVatInc()
    {
        return $this->VatInc !== null;
    }

    /**
     * Get 'VatInc' value
     *
     * @return string
     */
    public function getVatInc()
    {
        return $this->VatInc;
    }

    /**
     * Set 'VatInc' value
     *
     * @param string $value
     */
    public function setVatInc($value = null)
    {
        $this->VatInc = $value;
    }

    /**
     * Check if 'VatDec' has a value
     *
     * @return bool
     */
    public function hasVatDec()
    {
        return $this->VatDec !== null;
    }

    /**
     * Get 'VatDec' value
     *
     * @return string
     */
    public function getVatDec()
    {
        return $this->VatDec;
    }

    /**
     * Set 'VatDec' value
     *
     * @param string $value
     */
    public function setVatDec($value = null)
    {
        $this->VatDec = $value;
    }

    /**
     * Check if 'CurrencyCode' has a value
     *
     * @return bool
     */
    public function hasCurrencyCode()
    {
        return $this->CurrencyCode !== null;
    }

    /**
     * Get 'CurrencyCode' value
     *
     * @return int
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * Set 'CurrencyCode' value
     *
     * @param int $value
     */
    public function setCurrencyCode($value = null)
    {
        $this->CurrencyCode = $value;
    }

    /**
     * Check if 'OriginalInvoiceDateAndNumber' has a value
     *
     * @return bool
     */
    public function hasOriginalInvoiceDateAndNumber()
    {
        return $this->OriginalInvoiceDateAndNumber !== null;
    }

    /**
     * Get 'OriginalInvoiceDateAndNumber' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalInvoiceDateAndNumber()
    {
        return $this->OriginalInvoiceDateAndNumber;
    }

    /**
     * Set 'OriginalInvoiceDateAndNumber' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value
     */
    public function setOriginalInvoiceDateAndNumber(\AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value = null)
    {
        $this->OriginalInvoiceDateAndNumber = $value;
    }

    /**
     * Check if 'OriginalInvoiceRevisionDateAndNumber' has a value
     *
     * @return bool
     */
    public function hasOriginalInvoiceRevisionDateAndNumber()
    {
        return $this->OriginalInvoiceRevisionDateAndNumber !== null;
    }

    /**
     * Get 'OriginalInvoiceRevisionDateAndNumber' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalInvoiceRevisionDateAndNumber()
    {
        return $this->OriginalInvoiceRevisionDateAndNumber;
    }

    /**
     * Set 'OriginalInvoiceRevisionDateAndNumber' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value
     */
    public function setOriginalInvoiceRevisionDateAndNumber(\AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value = null)
    {
        $this->OriginalInvoiceRevisionDateAndNumber = $value;
    }

    /**
     * Check if 'OriginalInvoiceCorrectionDateAndNumber' has a value
     *
     * @return bool
     */
    public function hasOriginalInvoiceCorrectionDateAndNumber()
    {
        return $this->OriginalInvoiceCorrectionDateAndNumber !== null;
    }

    /**
     * Get 'OriginalInvoiceCorrectionDateAndNumber' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalInvoiceCorrectionDateAndNumber()
    {
        return $this->OriginalInvoiceCorrectionDateAndNumber;
    }

    /**
     * Set 'OriginalInvoiceCorrectionDateAndNumber' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value
     */
    public function setOriginalInvoiceCorrectionDateAndNumber(\AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value = null)
    {
        $this->OriginalInvoiceCorrectionDateAndNumber = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'TotalInc' => null,
            'TotalDec' => null,
            'VatInc' => null,
            'VatDec' => null,
            'CurrencyCode' => null,
            'OriginalInvoiceDateAndNumber' => null,
            'OriginalInvoiceRevisionDateAndNumber' => null,
            'OriginalInvoiceCorrectionDateAndNumber' => null
        ], $values);

        $message->setTotalInc($values['TotalInc']);
        $message->setTotalDec($values['TotalDec']);
        $message->setVatInc($values['VatInc']);
        $message->setVatDec($values['VatDec']);
        $message->setCurrencyCode($values['CurrencyCode']);
        $message->setOriginalInvoiceDateAndNumber($values['OriginalInvoiceDateAndNumber']);
        $message->setOriginalInvoiceRevisionDateAndNumber($values['OriginalInvoiceRevisionDateAndNumber']);
        $message->setOriginalInvoiceCorrectionDateAndNumber($values['OriginalInvoiceCorrectionDateAndNumber']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InvoiceCorrectionDocumentInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'TotalInc',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'TotalDec',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'VatInc',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'VatDec',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'CurrencyCode',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'OriginalInvoiceDateAndNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'OriginalInvoiceRevisionDateAndNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'OriginalInvoiceCorrectionDateAndNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber'
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->TotalInc !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->TotalInc);
        }

        if ($this->TotalDec !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->TotalDec);
        }

        if ($this->VatInc !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->VatInc);
        }

        if ($this->VatDec !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->VatDec);
        }

        if ($this->CurrencyCode !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->CurrencyCode);
        }

        if ($this->OriginalInvoiceDateAndNumber !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeVarint($stream, $this->OriginalInvoiceDateAndNumber->serializedSize($sizeContext));
            $this->OriginalInvoiceDateAndNumber->writeTo($context);
        }

        if ($this->OriginalInvoiceRevisionDateAndNumber !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->OriginalInvoiceRevisionDateAndNumber->serializedSize($sizeContext));
            $this->OriginalInvoiceRevisionDateAndNumber->writeTo($context);
        }

        if ($this->OriginalInvoiceCorrectionDateAndNumber !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->OriginalInvoiceCorrectionDateAndNumber->serializedSize($sizeContext));
            $this->OriginalInvoiceCorrectionDateAndNumber->writeTo($context);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TotalInc = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TotalDec = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->VatInc = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->VatDec = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->CurrencyCode = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber();

                $this->OriginalInvoiceDateAndNumber = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber();

                $this->OriginalInvoiceRevisionDateAndNumber = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber();

                $this->OriginalInvoiceCorrectionDateAndNumber = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->TotalInc !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TotalInc);
        }

        if ($this->TotalDec !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TotalDec);
        }

        if ($this->VatInc !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->VatInc);
        }

        if ($this->VatDec !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->VatDec);
        }

        if ($this->CurrencyCode !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->CurrencyCode);
        }

        if ($this->OriginalInvoiceDateAndNumber !== null) {
            $innerSize = $this->OriginalInvoiceDateAndNumber->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->OriginalInvoiceRevisionDateAndNumber !== null) {
            $innerSize = $this->OriginalInvoiceRevisionDateAndNumber->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->OriginalInvoiceCorrectionDateAndNumber !== null) {
            $innerSize = $this->OriginalInvoiceCorrectionDateAndNumber->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->TotalInc = null;
        $this->TotalDec = null;
        $this->VatInc = null;
        $this->VatDec = null;
        $this->CurrencyCode = null;
        $this->OriginalInvoiceDateAndNumber = null;
        $this->OriginalInvoiceRevisionDateAndNumber = null;
        $this->OriginalInvoiceCorrectionDateAndNumber = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceCorrectionDocumentInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->TotalInc = ($message->TotalInc !== null) ? $message->TotalInc : $this->TotalInc;
        $this->TotalDec = ($message->TotalDec !== null) ? $message->TotalDec : $this->TotalDec;
        $this->VatInc = ($message->VatInc !== null) ? $message->VatInc : $this->VatInc;
        $this->VatDec = ($message->VatDec !== null) ? $message->VatDec : $this->VatDec;
        $this->CurrencyCode = ($message->CurrencyCode !== null) ? $message->CurrencyCode : $this->CurrencyCode;
        $this->OriginalInvoiceDateAndNumber = ($message->OriginalInvoiceDateAndNumber !== null) ? $message->OriginalInvoiceDateAndNumber : $this->OriginalInvoiceDateAndNumber;
        $this->OriginalInvoiceRevisionDateAndNumber = ($message->OriginalInvoiceRevisionDateAndNumber !== null) ? $message->OriginalInvoiceRevisionDateAndNumber : $this->OriginalInvoiceRevisionDateAndNumber;
        $this->OriginalInvoiceCorrectionDateAndNumber = ($message->OriginalInvoiceCorrectionDateAndNumber !== null) ? $message->OriginalInvoiceCorrectionDateAndNumber : $this->OriginalInvoiceCorrectionDateAndNumber;
    }


}

