<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Employees/EmployeeToCreate.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Employees;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Employees.EmployeeToCreateByLogin
 */
class EmployeeToCreateByLogin extends \Protobuf\AbstractMessage
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
     * Login required string = 1
     *
     * @var string
     */
    protected $Login = null;

    /**
     * FullName optional message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\FullName
     */
    protected $FullName = null;

    /**
     * Check if 'Login' has a value
     *
     * @return bool
     */
    public function hasLogin()
    {
        return $this->Login !== null;
    }

    /**
     * Get 'Login' value
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Set 'Login' value
     *
     * @param string $value
     */
    public function setLogin($value)
    {
        $this->Login = $value;
    }

    /**
     * Check if 'FullName' has a value
     *
     * @return bool
     */
    public function hasFullName()
    {
        return $this->FullName !== null;
    }

    /**
     * Get 'FullName' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\FullName
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * Set 'FullName' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\FullName $value
     */
    public function setFullName(\AgentSIB\Diadoc\Api\Proto\FullName $value = null)
    {
        $this->FullName = $value;
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
        if ( ! isset($values['Login'])) {
            throw new \InvalidArgumentException('Field "Login" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'FullName' => null
        ], $values);

        $message->setLogin($values['Login']);
        $message->setFullName($values['FullName']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'EmployeeToCreateByLogin',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Login',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'FullName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.FullName'
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

        if ($this->Login === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Employees\\EmployeeToCreateByLogin#Login" (tag 1) is required but has no value.');
        }

        if ($this->Login !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Login);
        }

        if ($this->FullName !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->FullName->serializedSize($sizeContext));
            $this->FullName->writeTo($context);
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

                $this->Login = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\FullName();

                $this->FullName = $innerMessage;

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

        if ($this->Login !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Login);
        }

        if ($this->FullName !== null) {
            $innerSize = $this->FullName->serializedSize($context);

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
        $this->Login = null;
        $this->FullName = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Employees\EmployeeToCreateByLogin) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Login = ($message->Login !== null) ? $message->Login : $this->Login;
        $this->FullName = ($message->FullName !== null) ? $message->FullName : $this->FullName;
    }


}
