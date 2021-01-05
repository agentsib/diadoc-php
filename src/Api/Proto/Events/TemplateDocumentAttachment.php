<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Events.TemplateDocumentAttachment
 */
class TemplateDocumentAttachment extends \Protobuf\AbstractMessage
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
     * UnsignedContent required message = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Events\UnsignedContent
     */
    protected $UnsignedContent = null;

    /**
     * Comment optional string = 2
     *
     * @var string
     */
    protected $Comment = null;

    /**
     * TypeNamedId required string = 3
     *
     * @var string
     */
    protected $TypeNamedId = null;

    /**
     * Function optional string = 4
     *
     * @var string
     */
    protected $Function = null;

    /**
     * Version optional string = 5
     *
     * @var string
     */
    protected $Version = null;

    /**
     * Metadata repeated message = 6
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Events\MetadataItem>
     */
    protected $Metadata = null;

    /**
     * WorkflowId optional int32 = 7
     *
     * @var int
     */
    protected $WorkflowId = null;

    /**
     * CustomDocumentId optional string = 8
     *
     * @var string
     */
    protected $CustomDocumentId = null;

    /**
     * EditingSettingId optional string = 9
     *
     * @var string
     */
    protected $EditingSettingId = null;

    /**
     * NeedRecipientSignature optional bool = 10
     *
     * @var bool
     */
    protected $NeedRecipientSignature = null;

    /**
     * PredefinedRecipientTitle optional message = 11
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Events\PredefinedRecipientTitle
     */
    protected $PredefinedRecipientTitle = null;

    /**
     * RefusalDisabled optional bool = 12
     *
     * @var bool
     */
    protected $RefusalDisabled = null;

    /**
     * CustomData repeated message = 13
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\CustomDataItem>
     */
    protected $CustomData = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->NeedRecipientSignature = false;
        $this->RefusalDisabled = false;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'UnsignedContent' has a value
     *
     * @return bool
     */
    public function hasUnsignedContent()
    {
        return $this->UnsignedContent !== null;
    }

    /**
     * Get 'UnsignedContent' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Events\UnsignedContent
     */
    public function getUnsignedContent()
    {
        return $this->UnsignedContent;
    }

    /**
     * Set 'UnsignedContent' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Events\UnsignedContent $value
     */
    public function setUnsignedContent(\AgentSIB\Diadoc\Api\Proto\Events\UnsignedContent $value)
    {
        $this->UnsignedContent = $value;
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
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Set 'Comment' value
     *
     * @param string $value
     */
    public function setComment($value = null)
    {
        $this->Comment = $value;
    }

    /**
     * Check if 'TypeNamedId' has a value
     *
     * @return bool
     */
    public function hasTypeNamedId()
    {
        return $this->TypeNamedId !== null;
    }

    /**
     * Get 'TypeNamedId' value
     *
     * @return string
     */
    public function getTypeNamedId()
    {
        return $this->TypeNamedId;
    }

    /**
     * Set 'TypeNamedId' value
     *
     * @param string $value
     */
    public function setTypeNamedId($value)
    {
        $this->TypeNamedId = $value;
    }

    /**
     * Check if 'Function' has a value
     *
     * @return bool
     */
    public function hasFunction()
    {
        return $this->Function !== null;
    }

    /**
     * Get 'Function' value
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * Set 'Function' value
     *
     * @param string $value
     */
    public function setFunction($value = null)
    {
        $this->Function = $value;
    }

    /**
     * Check if 'Version' has a value
     *
     * @return bool
     */
    public function hasVersion()
    {
        return $this->Version !== null;
    }

    /**
     * Get 'Version' value
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * Set 'Version' value
     *
     * @param string $value
     */
    public function setVersion($value = null)
    {
        $this->Version = $value;
    }

    /**
     * Check if 'Metadata' has a value
     *
     * @return bool
     */
    public function hasMetadataList()
    {
        return $this->Metadata !== null;
    }

    /**
     * Get 'Metadata' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Events\MetadataItem>
     */
    public function getMetadataList()
    {
        return $this->Metadata;
    }

    /**
     * Set 'Metadata' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Events\MetadataItem> $value
     */
    public function setMetadataList(\Protobuf\Collection $value = null)
    {
        $this->Metadata = $value;
    }

    /**
     * Add a new element to 'Metadata'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Events\MetadataItem $value
     */
    public function addMetadata(\AgentSIB\Diadoc\Api\Proto\Events\MetadataItem $value)
    {
        if ($this->Metadata === null) {
            $this->Metadata = new \Protobuf\MessageCollection();
        }

        $this->Metadata->add($value);
    }

    /**
     * Check if 'WorkflowId' has a value
     *
     * @return bool
     */
    public function hasWorkflowId()
    {
        return $this->WorkflowId !== null;
    }

    /**
     * Get 'WorkflowId' value
     *
     * @return int
     */
    public function getWorkflowId()
    {
        return $this->WorkflowId;
    }

    /**
     * Set 'WorkflowId' value
     *
     * @param int $value
     */
    public function setWorkflowId($value = null)
    {
        $this->WorkflowId = $value;
    }

    /**
     * Check if 'CustomDocumentId' has a value
     *
     * @return bool
     */
    public function hasCustomDocumentId()
    {
        return $this->CustomDocumentId !== null;
    }

    /**
     * Get 'CustomDocumentId' value
     *
     * @return string
     */
    public function getCustomDocumentId()
    {
        return $this->CustomDocumentId;
    }

    /**
     * Set 'CustomDocumentId' value
     *
     * @param string $value
     */
    public function setCustomDocumentId($value = null)
    {
        $this->CustomDocumentId = $value;
    }

    /**
     * Check if 'EditingSettingId' has a value
     *
     * @return bool
     */
    public function hasEditingSettingId()
    {
        return $this->EditingSettingId !== null;
    }

    /**
     * Get 'EditingSettingId' value
     *
     * @return string
     */
    public function getEditingSettingId()
    {
        return $this->EditingSettingId;
    }

    /**
     * Set 'EditingSettingId' value
     *
     * @param string $value
     */
    public function setEditingSettingId($value = null)
    {
        $this->EditingSettingId = $value;
    }

    /**
     * Check if 'NeedRecipientSignature' has a value
     *
     * @return bool
     */
    public function hasNeedRecipientSignature()
    {
        return $this->NeedRecipientSignature !== null;
    }

    /**
     * Get 'NeedRecipientSignature' value
     *
     * @return bool
     */
    public function getNeedRecipientSignature()
    {
        return $this->NeedRecipientSignature;
    }

    /**
     * Set 'NeedRecipientSignature' value
     *
     * @param bool $value
     */
    public function setNeedRecipientSignature($value = null)
    {
        $this->NeedRecipientSignature = $value;
    }

    /**
     * Check if 'PredefinedRecipientTitle' has a value
     *
     * @return bool
     */
    public function hasPredefinedRecipientTitle()
    {
        return $this->PredefinedRecipientTitle !== null;
    }

    /**
     * Get 'PredefinedRecipientTitle' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Events\PredefinedRecipientTitle
     */
    public function getPredefinedRecipientTitle()
    {
        return $this->PredefinedRecipientTitle;
    }

    /**
     * Set 'PredefinedRecipientTitle' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Events\PredefinedRecipientTitle $value
     */
    public function setPredefinedRecipientTitle(\AgentSIB\Diadoc\Api\Proto\Events\PredefinedRecipientTitle $value = null)
    {
        $this->PredefinedRecipientTitle = $value;
    }

    /**
     * Check if 'RefusalDisabled' has a value
     *
     * @return bool
     */
    public function hasRefusalDisabled()
    {
        return $this->RefusalDisabled !== null;
    }

    /**
     * Get 'RefusalDisabled' value
     *
     * @return bool
     */
    public function getRefusalDisabled()
    {
        return $this->RefusalDisabled;
    }

    /**
     * Set 'RefusalDisabled' value
     *
     * @param bool $value
     */
    public function setRefusalDisabled($value = null)
    {
        $this->RefusalDisabled = $value;
    }

    /**
     * Check if 'CustomData' has a value
     *
     * @return bool
     */
    public function hasCustomDataList()
    {
        return $this->CustomData !== null;
    }

    /**
     * Get 'CustomData' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\CustomDataItem>
     */
    public function getCustomDataList()
    {
        return $this->CustomData;
    }

    /**
     * Set 'CustomData' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\CustomDataItem> $value
     */
    public function setCustomDataList(\Protobuf\Collection $value = null)
    {
        $this->CustomData = $value;
    }

    /**
     * Add a new element to 'CustomData'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\CustomDataItem $value
     */
    public function addCustomData(\AgentSIB\Diadoc\Api\Proto\CustomDataItem $value)
    {
        if ($this->CustomData === null) {
            $this->CustomData = new \Protobuf\MessageCollection();
        }

        $this->CustomData->add($value);
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
        if ( ! isset($values['UnsignedContent'])) {
            throw new \InvalidArgumentException('Field "UnsignedContent" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['TypeNamedId'])) {
            throw new \InvalidArgumentException('Field "TypeNamedId" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Comment' => null,
            'Function' => null,
            'Version' => null,
            'Metadata' => [],
            'WorkflowId' => null,
            'CustomDocumentId' => null,
            'EditingSettingId' => null,
            'NeedRecipientSignature' => false,
            'PredefinedRecipientTitle' => null,
            'RefusalDisabled' => false,
            'CustomData' => []
        ], $values);

        $message->setUnsignedContent($values['UnsignedContent']);
        $message->setComment($values['Comment']);
        $message->setTypeNamedId($values['TypeNamedId']);
        $message->setFunction($values['Function']);
        $message->setVersion($values['Version']);
        $message->setWorkflowId($values['WorkflowId']);
        $message->setCustomDocumentId($values['CustomDocumentId']);
        $message->setEditingSettingId($values['EditingSettingId']);
        $message->setNeedRecipientSignature($values['NeedRecipientSignature']);
        $message->setPredefinedRecipientTitle($values['PredefinedRecipientTitle']);
        $message->setRefusalDisabled($values['RefusalDisabled']);

        foreach ($values['Metadata'] as $item) {
            $message->addMetadata($item);
        }

        foreach ($values['CustomData'] as $item) {
            $message->addCustomData($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'TemplateDocumentAttachment',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'UnsignedContent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Events.UnsignedContent'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Comment',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'TypeNamedId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Function',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Metadata',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Events.MetadataItem'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'WorkflowId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'CustomDocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'EditingSettingId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'NeedRecipientSignature',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'PredefinedRecipientTitle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Events.PredefinedRecipientTitle'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'RefusalDisabled',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'CustomData',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.CustomDataItem'
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

        if ($this->UnsignedContent === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\TemplateDocumentAttachment#UnsignedContent" (tag 1) is required but has no value.');
        }

        if ($this->TypeNamedId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\TemplateDocumentAttachment#TypeNamedId" (tag 3) is required but has no value.');
        }

        if ($this->UnsignedContent !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->UnsignedContent->serializedSize($sizeContext));
            $this->UnsignedContent->writeTo($context);
        }

        if ($this->Comment !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Comment);
        }

        if ($this->TypeNamedId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->TypeNamedId);
        }

        if ($this->Function !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->Function);
        }

        if ($this->Version !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->Version);
        }

        if ($this->Metadata !== null) {
            foreach ($this->Metadata as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->WorkflowId !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->WorkflowId);
        }

        if ($this->CustomDocumentId !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->CustomDocumentId);
        }

        if ($this->EditingSettingId !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->EditingSettingId);
        }

        if ($this->NeedRecipientSignature !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeBool($stream, $this->NeedRecipientSignature);
        }

        if ($this->PredefinedRecipientTitle !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeVarint($stream, $this->PredefinedRecipientTitle->serializedSize($sizeContext));
            $this->PredefinedRecipientTitle->writeTo($context);
        }

        if ($this->RefusalDisabled !== null) {
            $writer->writeVarint($stream, 96);
            $writer->writeBool($stream, $this->RefusalDisabled);
        }

        if ($this->CustomData !== null) {
            foreach ($this->CustomData as $val) {
                $writer->writeVarint($stream, 106);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Events\UnsignedContent();

                $this->UnsignedContent = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Comment = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TypeNamedId = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Function = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Version = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Events\MetadataItem();

                if ($this->Metadata === null) {
                    $this->Metadata = new \Protobuf\MessageCollection();
                }

                $this->Metadata->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->WorkflowId = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->CustomDocumentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->EditingSettingId = $reader->readString($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->NeedRecipientSignature = $reader->readBool($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Events\PredefinedRecipientTitle();

                $this->PredefinedRecipientTitle = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->RefusalDisabled = $reader->readBool($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\CustomDataItem();

                if ($this->CustomData === null) {
                    $this->CustomData = new \Protobuf\MessageCollection();
                }

                $this->CustomData->add($innerMessage);

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

        if ($this->UnsignedContent !== null) {
            $innerSize = $this->UnsignedContent->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Comment !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Comment);
        }

        if ($this->TypeNamedId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TypeNamedId);
        }

        if ($this->Function !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Function);
        }

        if ($this->Version !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Version);
        }

        if ($this->Metadata !== null) {
            foreach ($this->Metadata as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->WorkflowId !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->WorkflowId);
        }

        if ($this->CustomDocumentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->CustomDocumentId);
        }

        if ($this->EditingSettingId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->EditingSettingId);
        }

        if ($this->NeedRecipientSignature !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->PredefinedRecipientTitle !== null) {
            $innerSize = $this->PredefinedRecipientTitle->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->RefusalDisabled !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->CustomData !== null) {
            foreach ($this->CustomData as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->UnsignedContent = null;
        $this->Comment = null;
        $this->TypeNamedId = null;
        $this->Function = null;
        $this->Version = null;
        $this->Metadata = null;
        $this->WorkflowId = null;
        $this->CustomDocumentId = null;
        $this->EditingSettingId = null;
        $this->NeedRecipientSignature = false;
        $this->PredefinedRecipientTitle = null;
        $this->RefusalDisabled = false;
        $this->CustomData = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Events\TemplateDocumentAttachment) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->UnsignedContent = ($message->UnsignedContent !== null) ? $message->UnsignedContent : $this->UnsignedContent;
        $this->Comment = ($message->Comment !== null) ? $message->Comment : $this->Comment;
        $this->TypeNamedId = ($message->TypeNamedId !== null) ? $message->TypeNamedId : $this->TypeNamedId;
        $this->Function = ($message->Function !== null) ? $message->Function : $this->Function;
        $this->Version = ($message->Version !== null) ? $message->Version : $this->Version;
        $this->Metadata = ($message->Metadata !== null) ? $message->Metadata : $this->Metadata;
        $this->WorkflowId = ($message->WorkflowId !== null) ? $message->WorkflowId : $this->WorkflowId;
        $this->CustomDocumentId = ($message->CustomDocumentId !== null) ? $message->CustomDocumentId : $this->CustomDocumentId;
        $this->EditingSettingId = ($message->EditingSettingId !== null) ? $message->EditingSettingId : $this->EditingSettingId;
        $this->NeedRecipientSignature = ($message->NeedRecipientSignature !== null) ? $message->NeedRecipientSignature : $this->NeedRecipientSignature;
        $this->PredefinedRecipientTitle = ($message->PredefinedRecipientTitle !== null) ? $message->PredefinedRecipientTitle : $this->PredefinedRecipientTitle;
        $this->RefusalDisabled = ($message->RefusalDisabled !== null) ? $message->RefusalDisabled : $this->RefusalDisabled;
        $this->CustomData = ($message->CustomData !== null) ? $message->CustomData : $this->CustomData;
    }


}

