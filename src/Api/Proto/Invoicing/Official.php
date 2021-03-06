<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/Official.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Invoicing.Official
 */
class Official extends \Protobuf\AbstractMessage
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
     * Surname required string = 1
     *
     * @var string
     */
    protected $Surname = null;

    /**
     * FirstName required string = 2
     *
     * @var string
     */
    protected $FirstName = null;

    /**
     * Patronymic optional string = 3
     *
     * @var string
     */
    protected $Patronymic = null;

    /**
     * JobTitle optional string = 4
     *
     * @var string
     */
    protected $JobTitle = null;

    /**
     * Check if 'Surname' has a value
     *
     * @return bool
     */
    public function hasSurname()
    {
        return $this->Surname !== null;
    }

    /**
     * Get 'Surname' value
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * Set 'Surname' value
     *
     * @param string $value
     */
    public function setSurname($value)
    {
        $this->Surname = $value;
    }

    /**
     * Check if 'FirstName' has a value
     *
     * @return bool
     */
    public function hasFirstName()
    {
        return $this->FirstName !== null;
    }

    /**
     * Get 'FirstName' value
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set 'FirstName' value
     *
     * @param string $value
     */
    public function setFirstName($value)
    {
        $this->FirstName = $value;
    }

    /**
     * Check if 'Patronymic' has a value
     *
     * @return bool
     */
    public function hasPatronymic()
    {
        return $this->Patronymic !== null;
    }

    /**
     * Get 'Patronymic' value
     *
     * @return string
     */
    public function getPatronymic()
    {
        return $this->Patronymic;
    }

    /**
     * Set 'Patronymic' value
     *
     * @param string $value
     */
    public function setPatronymic($value = null)
    {
        $this->Patronymic = $value;
    }

    /**
     * Check if 'JobTitle' has a value
     *
     * @return bool
     */
    public function hasJobTitle()
    {
        return $this->JobTitle !== null;
    }

    /**
     * Get 'JobTitle' value
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }

    /**
     * Set 'JobTitle' value
     *
     * @param string $value
     */
    public function setJobTitle($value = null)
    {
        $this->JobTitle = $value;
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
        if ( ! isset($values['Surname'])) {
            throw new \InvalidArgumentException('Field "Surname" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['FirstName'])) {
            throw new \InvalidArgumentException('Field "FirstName" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Patronymic' => null,
            'JobTitle' => null
        ], $values);

        $message->setSurname($values['Surname']);
        $message->setFirstName($values['FirstName']);
        $message->setPatronymic($values['Patronymic']);
        $message->setJobTitle($values['JobTitle']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Official',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Surname',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'FirstName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Patronymic',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'JobTitle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->Surname === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Invoicing\\Official#Surname" (tag 1) is required but has no value.');
        }

        if ($this->FirstName === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Invoicing\\Official#FirstName" (tag 2) is required but has no value.');
        }

        if ($this->Surname !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Surname);
        }

        if ($this->FirstName !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->FirstName);
        }

        if ($this->Patronymic !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Patronymic);
        }

        if ($this->JobTitle !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->JobTitle);
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

                $this->Surname = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->FirstName = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Patronymic = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->JobTitle = $reader->readString($stream);

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

        if ($this->Surname !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Surname);
        }

        if ($this->FirstName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->FirstName);
        }

        if ($this->Patronymic !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Patronymic);
        }

        if ($this->JobTitle !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->JobTitle);
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
        $this->Surname = null;
        $this->FirstName = null;
        $this->Patronymic = null;
        $this->JobTitle = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Invoicing\Official) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Surname = ($message->Surname !== null) ? $message->Surname : $this->Surname;
        $this->FirstName = ($message->FirstName !== null) ? $message->FirstName : $this->FirstName;
        $this->Patronymic = ($message->Patronymic !== null) ? $message->Patronymic : $this->Patronymic;
        $this->JobTitle = ($message->JobTitle !== null) ? $message->JobTitle : $this->JobTitle;
    }


}

