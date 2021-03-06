<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/InvoiceInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Invoicing.TaxRate
 */
class TaxRate extends \Protobuf\Enum
{

    /**
     * NoVat = 0
     */
    const NoVat_VALUE = 0;

    /**
     * Percent_0 = 1
     */
    const Percent_0_VALUE = 1;

    /**
     * Percent_10 = 2
     */
    const Percent_10_VALUE = 2;

    /**
     * Percent_18 = 3
     */
    const Percent_18_VALUE = 3;

    /**
     * Percent_20 = 4
     */
    const Percent_20_VALUE = 4;

    /**
     * Fraction_10_110 = 5
     */
    const Fraction_10_110_VALUE = 5;

    /**
     * Fraction_18_118 = 6
     */
    const Fraction_18_118_VALUE = 6;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    protected static $NoVat = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    protected static $Percent_0 = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    protected static $Percent_10 = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    protected static $Percent_18 = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    protected static $Percent_20 = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    protected static $Fraction_10_110 = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    protected static $Fraction_18_118 = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    public static function NoVat()
    {
        if (self::$NoVat !== null) {
            return self::$NoVat;
        }

        return self::$NoVat = new self('NoVat', self::NoVat_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    public static function Percent_0()
    {
        if (self::$Percent_0 !== null) {
            return self::$Percent_0;
        }

        return self::$Percent_0 = new self('Percent_0', self::Percent_0_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    public static function Percent_10()
    {
        if (self::$Percent_10 !== null) {
            return self::$Percent_10;
        }

        return self::$Percent_10 = new self('Percent_10', self::Percent_10_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    public static function Percent_18()
    {
        if (self::$Percent_18 !== null) {
            return self::$Percent_18;
        }

        return self::$Percent_18 = new self('Percent_18', self::Percent_18_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    public static function Percent_20()
    {
        if (self::$Percent_20 !== null) {
            return self::$Percent_20;
        }

        return self::$Percent_20 = new self('Percent_20', self::Percent_20_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    public static function Fraction_10_110()
    {
        if (self::$Fraction_10_110 !== null) {
            return self::$Fraction_10_110;
        }

        return self::$Fraction_10_110 = new self('Fraction_10_110', self::Fraction_10_110_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    public static function Fraction_18_118()
    {
        if (self::$Fraction_18_118 !== null) {
            return self::$Fraction_18_118;
        }

        return self::$Fraction_18_118 = new self('Fraction_18_118', self::Fraction_18_118_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::NoVat();
            case 1: return self::Percent_0();
            case 2: return self::Percent_10();
            case 3: return self::Percent_18();
            case 4: return self::Percent_20();
            case 5: return self::Fraction_10_110();
            case 6: return self::Fraction_18_118();
            default: return null;
        }
    }


}

