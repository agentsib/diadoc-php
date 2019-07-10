<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocflowApiV3.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Docflow.GetDocflowsByPacketIdResponseV3
 */
class GetDocflowsByPacketIdResponseV3 extends \Protobuf\AbstractMessage
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
     * Documents repeated message = 1
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Docflow\FetchedDocumentV3>
     */
    protected $Documents = null;

    /**
     * NextPageIndexKey optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $NextPageIndexKey = null;

    /**
     * Check if 'Documents' has a value
     *
     * @return bool
     */
    public function hasDocumentsList()
    {
        return $this->Documents !== null;
    }

    /**
     * Get 'Documents' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Docflow\FetchedDocumentV3>
     */
    public function getDocumentsList()
    {
        return $this->Documents;
    }

    /**
     * Set 'Documents' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Docflow\FetchedDocumentV3> $value
     */
    public function setDocumentsList(\Protobuf\Collection $value = null)
    {
        $this->Documents = $value;
    }

    /**
     * Add a new element to 'Documents'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\FetchedDocumentV3 $value
     */
    public function addDocuments(\AgentSIB\Diadoc\Api\Proto\Docflow\FetchedDocumentV3 $value)
    {
        if ($this->Documents === null) {
            $this->Documents = new \Protobuf\MessageCollection();
        }

        $this->Documents->add($value);
    }

    /**
     * Check if 'NextPageIndexKey' has a value
     *
     * @return bool
     */
    public function hasNextPageIndexKey()
    {
        return $this->NextPageIndexKey !== null;
    }

    /**
     * Get 'NextPageIndexKey' value
     *
     * @return \Protobuf\Stream
     */
    public function getNextPageIndexKey()
    {
        return $this->NextPageIndexKey;
    }

    /**
     * Set 'NextPageIndexKey' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setNextPageIndexKey($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->NextPageIndexKey = $value;
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
            'Documents' => [],
            'NextPageIndexKey' => null
        ], $values);

        $message->setNextPageIndexKey($values['NextPageIndexKey']);

        foreach ($values['Documents'] as $item) {
            $message->addDocuments($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetDocflowsByPacketIdResponseV3',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Documents',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.FetchedDocumentV3'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'NextPageIndexKey',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
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

        if ($this->Documents !== null) {
            foreach ($this->Documents as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->NextPageIndexKey !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->NextPageIndexKey);
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
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\FetchedDocumentV3();

                if ($this->Documents === null) {
                    $this->Documents = new \Protobuf\MessageCollection();
                }

                $this->Documents->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->NextPageIndexKey = $reader->readByteStream($stream);

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

        if ($this->Documents !== null) {
            foreach ($this->Documents as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->NextPageIndexKey !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->NextPageIndexKey);
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
        $this->Documents = null;
        $this->NextPageIndexKey = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowsByPacketIdResponseV3) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Documents = ($message->Documents !== null) ? $message->Documents : $this->Documents;
        $this->NextPageIndexKey = ($message->NextPageIndexKey !== null) ? $message->NextPageIndexKey : $this->NextPageIndexKey;
    }


}
