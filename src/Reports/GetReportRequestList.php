<?php

namespace AmazonMWSAPI\Reports;

class GetReportRequestList extends Reports
{

    protected static $requestQuota = 10;
    protected static $restoreRate = 1;
    protected static $restoreRateTime = 45;
    protected static $restoreRateTimePeriod = "second";
    protected static $hourlyRequestQuota = 80;
    protected static $method = "POST";
    protected static $curlParameters = [];
    private static $apiUrl = "http://docs.developer.amazonservices.com/en_US/reports/Reports_GetReportRequestList.html";
    protected static $requiredParameters = [];
    protected static $allowedParameters = [];
    protected static $parameters = [
        "ReportRequestIdList",
        "ReportTypeList" => [
            "format" => "ReportType"
        ],
        "ReportProcessingStatusList" => [
            "validWith" => [
                "_SUBMITTED_",
                "_IN_PROGRESS_",
                "_CANCELLED_",
                "_DONE_",
                "_DONE_NO_DATA_"
            ]
        ],
        "MaxCount" => [
            "rangeWithin" => [
                "min" => 1,
                "max" => 100
            ]
        ],
        "RequestedFromDate" => [
            "format" => "dateTime"
        ],
        "RequestedToDate" => [
            "format" => "dateTime"
        ],
        "SellerId" => [
            "required"
        ]
    ];

}