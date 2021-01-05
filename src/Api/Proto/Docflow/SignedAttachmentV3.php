<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/AttachmentV3.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Docflow.SignedAttachmentV3
 */
class SignedAttachmentV3 extends \Protobuf\AbstractMessage
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
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\Attachment
     */
    protected $Attachment = null;

    /**
     * Signature optional message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\SignatureV3
     */
    protected $Signature = null;

    /**
     * Comment optional message = 3
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\Entity
     */
    protected $Comment = null;

    /**
     * ContentTypeId required string = 4
     *
     * @var string
     */
    protected $ContentTypeId = null;

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
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\Attachment
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }

    /**
     * Set 'Attachment' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\Attachment $value
     */
    public function setAttachment(\AgentSIB\Diadoc\Api\Proto\Docflow\Attachment $value)
    {
        $this->Attachment = $value;
    }

    /**
     * Check if 'Signature' has a value
     *
     * @return bool
     */
    public function hasSignature()
    {
        return $this->Signature !== null;
    }

    /**
     * Get 'Signature' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\SignatureV3
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * Set 'Signature' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\SignatureV3 $value
     */
    public function setSignature(\AgentSIB\Diadoc\Api\Proto\Docflow\SignatureV3 $value = null)
    {
        $this->Signature = $value;
    }

    /**
     * Check if 'Comment' has a value
     *
     * @return bool
     */
    public function hasComment()
    {
        return $this->Comment !== null;
    }

    /**
     * Get 'Comment' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\Entity
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Set 'Comment' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\Entity $value
     */
    public function setComment(\AgentSIB\Diadoc\Api\Proto\Docflow\Entity $value = null)
    {
        $this->Comment = $value;
    }

    /**
     * Check if 'ContentTypeId' has a value
     *
     * @return bool
     */
    public function hasContentTypeId()
    {
        return $this->ContentTypeId !== null;
    }

    /**
     * Get 'ContentTypeId' value
     *
     * @return string
     */
    public function getContentTypeId()
    {
        return $this->ContentTypeId;
    }

    /**
     * Set 'ContentTypeId' value
     *
     * @param string $value
     */
    public function setContentTypeId($value)
    {
        $this->ContentTypeId = $value;
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

        if ( ! isset($values['ContentTypeId'])) {
            throw new \InvalidArgumentException('Field "ContentTypeId" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Signature' => null,
            'Comment' => null,
        ], $values);

        $message->setAttachment($values['Attachment']);
        $message->setSignature($values['Signature']);
        $message->setComment($values['Comment']);
        $message->setContentTypeId($values['ContentTypeId']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SignedAttachmentV3',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Attachment',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.Attachment'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Signature',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.SignatureV3'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Comment',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.Entity'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ContentTypeId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
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
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\SignedAttachmentV3#Attachment" (tag 1) is required but has no value.');
        }

        if ($this->ContentTypeId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\SignedAttachmentV3#ContentTypeId" (tag 4) is required but has no value.');
        }

        if ($this->Attachment !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->Attachment->serializedSize($sizeContext));
            $this->Attachment->writeTo($context);
        }

        if ($this->Signature !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->Signature->serializedSize($sizeContext));
            $this->Signature->writeTo($context);
        }

        if ($this->Comment !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->Comment->serializedSize($sizeContext));
            $this->Comment->writeTo($context);
        }

        if ($this->ContentTypeId !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->ContentTypeId);
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
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\Attachment();

                $this->Attachment = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\SignatureV3();

                $this->Signature = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\Entity();

                $this->Comment = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ContentTypeId = $reader->readString($stream);

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

        if ($this->Signature !== null) {
            $innerSize = $this->Signature->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Comment !== null) {
            $innerSize = $this->Comment->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->ContentTypeId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ContentTypeId);
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
        $this->Signature = null;
        $this->Comment = null;
        $this->ContentTypeId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Attachment = ($message->Attachment !== null) ? $message->Attachment : $this->Attachment;
        $this->Signature = ($message->Signature !== null) ? $message->Signature : $this->Signature;
        $this->Comment = ($message->Comment !== null) ? $message->Comment : $this->Comment;
        $this->ContentTypeId = ($message->ContentTypeId !== null) ? $message->ContentTypeId : $this->ContentTypeId;
    }


}

