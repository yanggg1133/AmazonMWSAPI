<?php

namespace AmazonMWSAPI\Operations\Subscriptions;

class UpdateSubscription extends Subscriptions
{

    protected static $requestQuota = 25;
    protected static $restoreRate = 2;
    protected static $restoreRateTime = 1;
    protected static $restoreRateTimePeriod = "second";
    protected static $hourlyRequestQuota = 7200;
    protected static $method = "POST";
    protected static $curlParameters = [];
    private static $apiUrl = "http://docs.developer.amazonservices.com/en_US/subscriptions/Subscriptions_UpdateSubscription.html";
    protected static $requiredParameters = [];
    protected static $allowedParameters = [];
    protected static $parameters = [
        "MarketplaceId" => [
            "notIncremented",
            "required"
        ],
        "Subscription" => [
            "format" => "Subscription",
            "required"
        ],
        "SellerId" => [
            "required"
        ]
    ];

}