<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Content_v2.proto
 */


namespace AgentSIB\Diadoc\Api\Proto;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Content_v2
 */
class Content_v2 extends \Protobuf\AbstractMessage
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
     * Content optional bytes = 1
     *
     * @var \Protobuf\Stream
     */
    protected $Content = null;

    /**
     * NameOnShelf optional string = 2
     *
     * @var string
     */
    protected $NameOnShelf = null;

    /**
     * PatchedContentId optional string = 3
     *
     * @var string
     */
    protected $PatchedContentId = null;

    /**
     * DocumentId optional message = 4
     *
     * @var \AgentSIB\Diadoc\Api\Proto\DocumentIdEx
     */
    protected $DocumentId = null;

    /**
     * Check if 'Content' has a value
     *
     * @return bool
     */
    public function hasContent()
    {
        return $this->Content !== null;
    }

    /**
     * Get 'Content' value
     *
     * @return \Protobuf\Stream
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * Set 'Content' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setContent($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->Content = $value;
    }

    /**
     * Check if 'NameOnShelf' has a value
     *
     * @return bool
     */
    public function hasNameOnShelf()
    {
        return $this->NameOnShelf !== null;
    }

    /**
     * Get 'NameOnShelf' value
     *
     * @return string
     */
    public function getNameOnShelf()
    {
        return $this->NameOnShelf;
    }

    /**
     * Set 'NameOnShelf' value
     *
     * @param string $value
     */
    public function setNameOnShelf($value = null)
    {
        $this->NameOnShelf = $value;
    }

    /**
     * Check if 'PatchedContentId' has a value
     *
     * @return bool
     */
    public function hasPatchedContentId()
    {
        return $this->PatchedContentId !== null;
    }

    /**
     * Get 'PatchedContentId' value
     *
     * @return string
     */
    public function getPatchedContentId()
    {
        return $this->PatchedContentId;
    }

    /**
     * Set 'PatchedContentId' value
     *
     * @param string $value
     */
    public function setPatchedContentId($value = null)
    {
        $this->PatchedContentId = $value;
    }

    /**
     * Check if 'DocumentId' has a value
     *
     * @return bool
     */
    public function hasDocumentId()
    {
        return $this->DocumentId !== null;
    }

    /**
     * Get 'DocumentId' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\DocumentIdEx
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * Set 'DocumentId' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\DocumentIdEx $value
     */
    public function setDocumentId(\AgentSIB\Diadoc\Api\Proto\DocumentIdEx $value = null)
    {
        $this->DocumentId = $value;
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
            'Content' => null,
            'NameOnShelf' => null,
            'PatchedContentId' => null,
            'DocumentId' => null
        ], $values);

        $message->setContent($values['Content']);
        $message->setNameOnShelf($values['NameOnShelf']);
        $message->setPatchedContentId($values['PatchedContentId']);
        $message->setDocumentId($values['DocumentId']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Content_v2',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Content',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'NameOnShelf',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'PatchedContentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'DocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.DocumentIdEx'
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

        if ($this->Content !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeByteStream($stream, $this->Content);
        }

        if ($this->NameOnShelf !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->NameOnShelf);
        }

        if ($this->PatchedContentId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->PatchedContentId);
        }

        if ($this->DocumentId !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->DocumentId->serializedSize($sizeContext));
            $this->DocumentId->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->Content = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->NameOnShelf = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->PatchedContentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\DocumentIdEx();

                $this->DocumentId = $innerMessage;

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

        if ($this->Content !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->Content);
        }

        if ($this->NameOnShelf !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->NameOnShelf);
        }

        if ($this->PatchedContentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->PatchedContentId);
        }

        if ($this->DocumentId !== null) {
            $innerSize = $this->DocumentId->serializedSize($context);

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
        $this->Content = null;
        $this->NameOnShelf = null;
        $this->PatchedContentId = null;
        $this->DocumentId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Content_v2) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Content = ($message->Content !== null) ? $message->Content : $this->Content;
        $this->NameOnShelf = ($message->NameOnShelf !== null) ? $message->NameOnShelf : $this->NameOnShelf;
        $this->PatchedContentId = ($message->PatchedContentId !== null) ? $message->PatchedContentId : $this->PatchedContentId;
        $this->DocumentId = ($message->DocumentId !== null) ? $message->DocumentId : $this->DocumentId;
    }


}

