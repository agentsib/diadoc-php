<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocflowV3.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Docflow.StatusEntity
 */
class StatusEntity extends \Protobuf\AbstractMessage
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
     * Attachment required message = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3
     */
    protected $Attachment = null;

    /**
     * Status required message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Status
     */
    protected $Status = null;

    /**
     * Check if 'Attachment' has a value
     *
     * @return bool
     */
    public function hasAttachment()
    {
        return $this->Attachment !== null;
    }

    /**
     * Get 'Attachment' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }

    /**
     * Set 'Attachment' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3 $value
     */
    public function setAttachment(\AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3 $value)
    {
        $this->Attachment = $value;
    }

    /**
     * Check if 'Status' has a value
     *
     * @return bool
     */
    public function hasStatus()
    {
        return $this->Status !== null;
    }

    /**
     * Get 'Status' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Status
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set 'Status' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Status $value
     */
    public function setStatus(\AgentSIB\Diadoc\Api\Proto\Status $value)
    {
        $this->Status = $value;
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
        if ( ! isset($values['Attachment'])) {
            throw new \InvalidArgumentException('Field "Attachment" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['Status'])) {
            throw new \InvalidArgumentException('Field "Status" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setAttachment($values['Attachment']);
        $message->setStatus($values['Status']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'StatusEntity',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Attachment',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.SignedAttachmentV3'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Status'
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

        if ($this->Attachment === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\StatusEntity#Attachment" (tag 1) is required but has no value.');
        }

        if ($this->Status === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\StatusEntity#Status" (tag 2) is required but has no value.');
        }

        if ($this->Attachment !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->Attachment->serializedSize($sizeContext));
            $this->Attachment->writeTo($context);
        }

        if ($this->Status !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->Status->serializedSize($sizeContext));
            $this->Status->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3();

                $this->Attachment = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Status();

                $this->Status = $innerMessage;

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

        if ($this->Attachment !== null) {
            $innerSize = $this->Attachment->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Status !== null) {
            $innerSize = $this->Status->serializedSize($context);

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
        $this->Attachment = null;
        $this->Status = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\StatusEntity) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Attachment = ($message->Attachment !== null) ? $message->Attachment : $this->Attachment;
        $this->Status = ($message->Status !== null) ? $message->Status : $this->Status;
    }


}

