# OpenAPI\Client\CustomerApi

All URIs are relative to http://localhost/sandbox.gateway.sezzle.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV2Token()**](CustomerApi.md#deleteV2Token) | **DELETE** /customer/{customer_uuid} | Delete customer
[**getV2Customer()**](CustomerApi.md#getV2Customer) | **GET** /customer/{customer_uuid} | Get customer
[**getV2CustomerList()**](CustomerApi.md#getV2CustomerList) | **GET** /customer | Get list of customers
[**postV2CustomerOrder()**](CustomerApi.md#postV2CustomerOrder) | **POST** /customer/{customer_uuid}/order | Create order by customer
[**preapproveV2Token()**](CustomerApi.md#preapproveV2Token) | **POST** /customer/{customer_uuid}/preapprove | Preapprove amount by customer


## `deleteV2Token()`

```php
deleteV2Token($customer_uuid)
```

Delete customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_uuid = 'customer_uuid_example'; // string | Customer UUID

try {
    $apiInstance->deleteV2Token($customer_uuid);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteV2Token: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_uuid** | **string**| Customer UUID |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV2Customer()`

```php
getV2Customer($customer_uuid): SessionStatus
```

Get customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_uuid = 'customer_uuid_example'; // string | Customer UUID

try {
    $result = $apiInstance->getV2Customer($customer_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getV2Customer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_uuid** | **string**| Customer UUID |

### Return type

[**SessionStatus**](../Model/SessionStatus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV2CustomerList()`

```php
getV2CustomerList(): \OpenAPI\Client\Sezzle\InlineResponse200[]
```

Get list of customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV2CustomerList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getV2CustomerList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Sezzle\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV2CustomerOrder()`

```php
postV2CustomerOrder($customer_uuid, $sezzle_request_id, $unknown_base_type): SessionStatus
```

Create order by customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_uuid = 'customer_uuid_example'; // string | Customer UUID
$sezzle_request_id = 'sezzle_request_id_example'; // string | Unique client-generated ID to enforce idempotency
$unknown_base_type = new \OpenAPI\Client\Sezzle\UNKNOWN_BASE_TYPE(); // \OpenAPI\Client\Sezzle\UNKNOWN_BASE_TYPE | Order request

try {
    $result = $apiInstance->postV2CustomerOrder($customer_uuid, $sezzle_request_id, $unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->postV2CustomerOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_uuid** | **string**| Customer UUID |
 **sezzle_request_id** | **string**| Unique client-generated ID to enforce idempotency | [optional]
 **unknown_base_type** | [**\OpenAPI\Client\Sezzle\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)| Order request | [optional]

### Return type

[**SessionStatus**](../Model/SessionStatus.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `preapproveV2Token()`

```php
preapproveV2Token($customer_uuid, $price): \OpenAPI\Client\Sezzle\InlineResponse2001
```

Preapprove amount by customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_uuid = 'customer_uuid_example'; // string | Customer UUID
$price = new \OpenAPI\Client\Sezzle\Price(); // \OpenAPI\Client\Sezzle\Price | Preapproval request

try {
    $result = $apiInstance->preapproveV2Token($customer_uuid, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->preapproveV2Token: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_uuid** | **string**| Customer UUID |
 **price** | [**\OpenAPI\Client\Sezzle\Price**](../Model/Price.md)| Preapproval request | [optional]

### Return type

[**\OpenAPI\Client\Sezzle\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
