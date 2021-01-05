<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Document.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Documents.LastOuterDocflow
 */
class LastOuterDocflow extends \Protobuf\AbstractMessage
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
     * ParentEntityId required string = 1
     *
     * @var string
     */
    protected $ParentEntityId = null;

    /**
     * OuterDocflow required message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\OuterDocflowInfo
     */
    protected $OuterDocflow = null;

    /**
     * Check if 'ParentEntityId' has a value
     *
     * @return bool
     */
    public function hasParentEntityId()
    {
        return $this->ParentEntityId !== null;
    }

    /**
     * Get 'ParentEntityId' value
     *
     * @return string
     */
    public function getParentEntityId()
    {
        return $this->ParentEntityId;
    }

    /**
     * Set 'ParentEntityId' value
     *
     * @param string $value
     */
    public function setParentEntityId($value)
    {
        $this->ParentEntityId = $value;
    }

    /**
     * Check if 'OuterDocflow' has a value
     *
     * @return bool
     */
    public function hasOuterDocflow()
    {
        return $this->OuterDocflow !== null;
    }

    /**
     * Get 'OuterDocflow' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\OuterDocflowInfo
     */
    public function getOuterDocflow()
    {
        return $this->OuterDocflow;
    }

    /**
     * Set 'OuterDocflow' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\OuterDocflowInfo $value
     */
    public function setOuterDocflow(\AgentSIB\Diadoc\Api\Proto\OuterDocflowInfo $value)
    {
        $this->OuterDocflow = $value;
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
        if ( ! isset($values['ParentEntityId'])) {
            throw new \InvalidArgumentException('Field "ParentEntityId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['OuterDocflow'])) {
            throw new \InvalidArgumentException('Field "OuterDocflow" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setParentEntityId($values['ParentEntityId']);
        $message->setOuterDocflow($values['OuterDocflow']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'LastOuterDocflow',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ParentEntityId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'OuterDocflow',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.OuterDocflowInfo'
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

        if ($this->ParentEntityId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\LastOuterDocflow#ParentEntityId" (tag 1) is required but has no value.');
        }

        if ($this->OuterDocflow === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\LastOuterDocflow#OuterDocflow" (tag 2) is required but has no value.');
        }

        if ($this->ParentEntityId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->ParentEntityId);
        }

        if ($this->OuterDocflow !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->OuterDocflow->serializedSize($sizeContext));
            $this->OuterDocflow->writeTo($context);
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

                $this->ParentEntityId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\OuterDocflowInfo();

                $this->OuterDocflow = $innerMessage;

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

        if ($this->ParentEntityId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ParentEntityId);
        }

        if ($this->OuterDocflow !== null) {
            $innerSize = $this->OuterDocflow->serializedSize($context);

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
        $this->ParentEntityId = null;
        $this->OuterDocflow = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Documents\LastOuterDocflow) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ParentEntityId = ($message->ParentEntityId !== null) ? $message->ParentEntityId : $this->ParentEntityId;
        $this->OuterDocflow = ($message->OuterDocflow !== null) ? $message->OuterDocflow : $this->OuterDocflow;
    }


}
