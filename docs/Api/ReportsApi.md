# OpenAPI\Client\ReportsApi

All URIs are relative to http://localhost/sandbox.gateway.sezzle.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInterestAccountActivity()**](ReportsApi.md#getInterestAccountActivity) | **GET** /interest/activity | Interest Account Activity
[**getInterestAccountBalance()**](ReportsApi.md#getInterestAccountBalance) | **GET** /interest/balance | Interest Account Balance
[**getSettlementDetails()**](ReportsApi.md#getSettlementDetails) | **GET** /settlements/details/{payout_uuid} | Settlement Details
[**getSettlementSummaries()**](ReportsApi.md#getSettlementSummaries) | **GET** /settlements/summaries | Settlement Summaries


## `getInterestAccountActivity()`

```php
getInterestAccountActivity($start_date, $end_date, $offset, $currency_code): \SplFileObject
```

Interest Account Activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 'start_date_example'; // string | Start Date
$end_date = 'end_date_example'; // string | End Date
$offset = 'offset_example'; // string | Pagination Offset (Limit 20)
$currency_code = 'currency_code_example'; // string | ISO-4217 Currency Code

try {
    $result = $apiInstance->getInterestAccountActivity($start_date, $end_date, $offset, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getInterestAccountActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Start Date |
 **end_date** | **string**| End Date | [optional]
 **offset** | **string**| Pagination Offset (Limit 20) | [optional]
 **currency_code** | **string**| ISO-4217 Currency Code | [optional]

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInterestAccountBalance()`

```php
getInterestAccountBalance($currency_code): \OpenAPI\Client\Sezzle\InlineResponse2004
```

Interest Account Balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_code = 'currency_code_example'; // string | ISO-4217 Currency Code

try {
    $result = $apiInstance->getInterestAccountBalance($currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getInterestAccountBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_code** | **string**| ISO-4217 Currency Code | [optional]

### Return type

[**\OpenAPI\Client\Sezzle\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSettlementDetails()`

```php
getSettlementDetails($payout_uuid): \SplFileObject
```

Settlement Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payout_uuid = 'payout_uuid_example'; // string | Payout UUID

try {
    $result = $apiInstance->getSettlementDetails($payout_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getSettlementDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payout_uuid** | **string**| Payout UUID |

### Return type

**\SplFileObject**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSettlementSummaries()`

```php
getSettlementSummaries($start_date, $end_date, $offset, $currency_code): object[]
```

Settlement Summaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 'start_date_example'; // string | Start Date
$end_date = 'end_date_example'; // string | End Date
$offset = 'offset_example'; // string | Pagination Offset (Limit 20)
$currency_code = 'currency_code_example'; // string | ISO-4217 Currency Code

try {
    $result = $apiInstance->getSettlementSummaries($start_date, $end_date, $offset, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getSettlementSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Start Date |
 **end_date** | **string**| End Date | [optional]
 **offset** | **string**| Pagination Offset (Limit 20) | [optional]
 **currency_code** | **string**| ISO-4217 Currency Code | [optional]

### Return type

**object[]**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
