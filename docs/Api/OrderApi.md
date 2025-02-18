# OpenAPI\Client\OrderApi

All URIs are relative to http://localhost/sandbox.gateway.sezzle.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV2DeleteCheckoutByOrder()**](OrderApi.md#deleteV2DeleteCheckoutByOrder) | **DELETE** /order/{order_uuid}/checkout | Delete checkout by order
[**getV2Order()**](OrderApi.md#getV2Order) | **GET** /order/{order_uuid} | Get order details
[**patchV2Checkout()**](OrderApi.md#patchV2Checkout) | **PATCH** /order/{order_uuid} | Update order
[**postV2CaptureByOrder()**](OrderApi.md#postV2CaptureByOrder) | **POST** /order/{order_uuid}/capture | Capture amount by order
[**postV2ReauthorizeByOrder()**](OrderApi.md#postV2ReauthorizeByOrder) | **POST** /order/{order_uuid}/reauthorize | Reauthorize amount by order
[**postV2RefundByOrder()**](OrderApi.md#postV2RefundByOrder) | **POST** /order/{order_uuid}/refund | Refund amount by order
[**postV2ReleaseByOrder()**](OrderApi.md#postV2ReleaseByOrder) | **POST** /order/{order_uuid}/release | Release amount by order
[**postV2UpchargeByOrder()**](OrderApi.md#postV2UpchargeByOrder) | **POST** /order/{order_uuid}/upcharge | Upcharge amount by order


## `deleteV2DeleteCheckoutByOrder()`

```php
deleteV2DeleteCheckoutByOrder($order_uuid)
```

Delete checkout by order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_uuid = 'order_uuid_example'; // string | Order UUID

try {
    $apiInstance->deleteV2DeleteCheckoutByOrder($order_uuid);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteV2DeleteCheckoutByOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_uuid** | **string**| Order UUID |

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

## `getV2Order()`

```php
getV2Order($order_uuid): SessionStatus
```

Get order details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_uuid = 'order_uuid_example'; // string | Order UUID

try {
    $result = $apiInstance->getV2Order($order_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getV2Order: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_uuid** | **string**| Order UUID |

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

## `patchV2Checkout()`

```php
patchV2Checkout($order_uuid, $inline_object1)
```

Update order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_uuid = 'order_uuid_example'; // string | Order UUID
$inline_object1 = new \OpenAPI\Client\Sezzle\InlineObject1(); // \OpenAPI\Client\Sezzle\InlineObject1

try {
    $apiInstance->patchV2Checkout($order_uuid, $inline_object1);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->patchV2Checkout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_uuid** | **string**| Order UUID |
 **inline_object1** | [**\OpenAPI\Client\Sezzle\InlineObject1**](../Model/InlineObject1.md)|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV2CaptureByOrder()`

```php
postV2CaptureByOrder($order_uuid, $sezzle_request_id, $inline_object2): \OpenAPI\Client\Sezzle\InlineResponse2002
```

Capture amount by order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_uuid = 'order_uuid_example'; // string | Order UUID
$sezzle_request_id = 'sezzle_request_id_example'; // string | Unique client-generated ID to enforce idempotency
$inline_object2 = new \OpenAPI\Client\Sezzle\InlineObject2(); // \OpenAPI\Client\Sezzle\InlineObject2

try {
    $result = $apiInstance->postV2CaptureByOrder($order_uuid, $sezzle_request_id, $inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postV2CaptureByOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_uuid** | **string**| Order UUID |
 **sezzle_request_id** | **string**| Unique client-generated ID to enforce idempotency | [optional]
 **inline_object2** | [**\OpenAPI\Client\Sezzle\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Sezzle\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV2ReauthorizeByOrder()`

```php
postV2ReauthorizeByOrder($order_uuid, $sezzle_request_id, $price): SessionStatus
```

Reauthorize amount by order

### DEVELOPER PREVIEW   *This API is subject to change and limited to select merchants. Bug fixes and new features will be released based on feedback throughout the preview period.*   - Response will be a new order whose `uuid` can be used on the Order API endpoints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_uuid = 'order_uuid_example'; // string | Order UUID
$sezzle_request_id = 'sezzle_request_id_example'; // string | Unique client-generated ID to enforce idempotency
$price = new \OpenAPI\Client\Sezzle\Price(); // \OpenAPI\Client\Sezzle\Price | Reauthorize request

try {
    $result = $apiInstance->postV2ReauthorizeByOrder($order_uuid, $sezzle_request_id, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postV2ReauthorizeByOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_uuid** | **string**| Order UUID |
 **sezzle_request_id** | **string**| Unique client-generated ID to enforce idempotency | [optional]
 **price** | [**\OpenAPI\Client\Sezzle\Price**](../Model/Price.md)| Reauthorize request | [optional]

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

## `postV2RefundByOrder()`

```php
postV2RefundByOrder($order_uuid, $sezzle_request_id, $price): \OpenAPI\Client\Sezzle\InlineResponse2002
```

Refund amount by order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_uuid = 'order_uuid_example'; // string | Order UUID
$sezzle_request_id = 'sezzle_request_id_example'; // string | Unique client-generated ID to enforce idempotency
$price = new \OpenAPI\Client\Sezzle\Price(); // \OpenAPI\Client\Sezzle\Price | Refund request

try {
    $result = $apiInstance->postV2RefundByOrder($order_uuid, $sezzle_request_id, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postV2RefundByOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_uuid** | **string**| Order UUID |
 **sezzle_request_id** | **string**| Unique client-generated ID to enforce idempotency | [optional]
 **price** | [**\OpenAPI\Client\Sezzle\Price**](../Model/Price.md)| Refund request | [optional]

### Return type

[**\OpenAPI\Client\Sezzle\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV2ReleaseByOrder()`

```php
postV2ReleaseByOrder($order_uuid, $sezzle_request_id, $price): \OpenAPI\Client\Sezzle\InlineResponse2002
```

Release amount by order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_uuid = 'order_uuid_example'; // string | Order UUID
$sezzle_request_id = 'sezzle_request_id_example'; // string | Unique client-generated ID to enforce idempotency
$price = new \OpenAPI\Client\Sezzle\Price(); // \OpenAPI\Client\Sezzle\Price | Release request

try {
    $result = $apiInstance->postV2ReleaseByOrder($order_uuid, $sezzle_request_id, $price);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postV2ReleaseByOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_uuid** | **string**| Order UUID |
 **sezzle_request_id** | **string**| Unique client-generated ID to enforce idempotency | [optional]
 **price** | [**\OpenAPI\Client\Sezzle\Price**](../Model/Price.md)| Release request | [optional]

### Return type

[**\OpenAPI\Client\Sezzle\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postV2UpchargeByOrder()`

```php
postV2UpchargeByOrder($order_uuid, $sezzle_request_id, $inline_object3): SessionStatus
```

Upcharge amount by order

### DEVELOPER PREVIEW *This API is subject to change and limited to select merchants. Bug fixes and new features will be released based on feedback throughout the preview period.* - Response will be a new order for the upcharge amount and its `uuid` can be used on the Order API endpoints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_uuid = 'order_uuid_example'; // string | Order UUID
$sezzle_request_id = 'sezzle_request_id_example'; // string | Unique client-generated ID to enforce idempotency
$inline_object3 = new \OpenAPI\Client\Sezzle\InlineObject3(); // \OpenAPI\Client\Sezzle\InlineObject3

try {
    $result = $apiInstance->postV2UpchargeByOrder($order_uuid, $sezzle_request_id, $inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postV2UpchargeByOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_uuid** | **string**| Order UUID |
 **sezzle_request_id** | **string**| Unique client-generated ID to enforce idempotency | [optional]
 **inline_object3** | [**\OpenAPI\Client\Sezzle\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

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
