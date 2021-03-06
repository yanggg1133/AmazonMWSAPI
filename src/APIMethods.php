<?php

namespace AmazonMWSAPI;

use AmazonMWSAPI\Helpers\Helpers;


trait APIMethods
{

    protected static function setMethod($method)
    {

        static::$method = $method;

    }

    protected static function setFeedType($feedType)
    {

        static::$feedType = $feedType;

    }

    protected static function setFeedContent($feedContent)
    {

        static::$feedContent = $feedContent;

    }

    public static function getCountry()
    {

        return getenv("AMAZON_COUNTRY");

    }

    public static function getCountryCode()
    {

        return self::$marketplaceTypes[static::getCountry()]["countryCode"];

    }

    public static function getEndpoint()
    {

        return self::$marketplaceTypes[static::getCountry()]["endpoint"];

    }

    public static function getMarketplaceId()
    {

        return self::$marketplaceTypes[static::getCountry()]["marketplaceId"];

    }

    public static function getRegion()
    {

        return self::$marketplaceTypes[static::getCountry()]["region"];

    }

    public static function getMethod()
    {

        return static::$method;

    }

    public static function getFeed()
    {

        return static::$feed;

    }

    public static function getFeedType()
    {

        return static::$feedType;

    }

    public static function getFeedContent()
    {

        return static::$feedContent;

    }

    public static function getAction()
    {

        return static::$action;

    }

    public static function getVersionDate()
    {

        return static::$versionDate;

    }

}