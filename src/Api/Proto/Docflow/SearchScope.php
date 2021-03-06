<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocflowApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Docflow.SearchScope
 */
class SearchScope extends \Protobuf\Enum
{

    /**
     * SearchScopeAny = 0
     */
    const SearchScopeAny_VALUE = 0;

    /**
     * SearchScopeIncoming = 1
     */
    const SearchScopeIncoming_VALUE = 1;

    /**
     * SearchScopeOutgoing = 2
     */
    const SearchScopeOutgoing_VALUE = 2;

    /**
     * SearchScopeDeleted = 3
     */
    const SearchScopeDeleted_VALUE = 3;

    /**
     * SearchScopeInternal = 4
     */
    const SearchScopeInternal_VALUE = 4;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    protected static $SearchScopeAny = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    protected static $SearchScopeIncoming = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    protected static $SearchScopeOutgoing = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    protected static $SearchScopeDeleted = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    protected static $SearchScopeInternal = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    public static function SearchScopeAny()
    {
        if (self::$SearchScopeAny !== null) {
            return self::$SearchScopeAny;
        }

        return self::$SearchScopeAny = new self('SearchScopeAny', self::SearchScopeAny_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    public static function SearchScopeIncoming()
    {
        if (self::$SearchScopeIncoming !== null) {
            return self::$SearchScopeIncoming;
        }

        return self::$SearchScopeIncoming = new self('SearchScopeIncoming', self::SearchScopeIncoming_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    public static function SearchScopeOutgoing()
    {
        if (self::$SearchScopeOutgoing !== null) {
            return self::$SearchScopeOutgoing;
        }

        return self::$SearchScopeOutgoing = new self('SearchScopeOutgoing', self::SearchScopeOutgoing_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    public static function SearchScopeDeleted()
    {
        if (self::$SearchScopeDeleted !== null) {
            return self::$SearchScopeDeleted;
        }

        return self::$SearchScopeDeleted = new self('SearchScopeDeleted', self::SearchScopeDeleted_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    public static function SearchScopeInternal()
    {
        if (self::$SearchScopeInternal !== null) {
            return self::$SearchScopeInternal;
        }

        return self::$SearchScopeInternal = new self('SearchScopeInternal', self::SearchScopeInternal_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\SearchScope
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::SearchScopeAny();
            case 1: return self::SearchScopeIncoming();
            case 2: return self::SearchScopeOutgoing();
            case 3: return self::SearchScopeDeleted();
            case 4: return self::SearchScopeInternal();
            default: return null;
        }
    }


}

