# OpenAPI\Client\WebhooksApi

All URIs are relative to http://localhost/sandbox.gateway.sezzle.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteV2Webhooks()**](WebhooksApi.md#deleteV2Webhooks) | **DELETE** /webhooks/{webhooks_uuid} | Delete webhooks
[**getV2Webhook()**](WebhooksApi.md#getV2Webhook) | **GET** /webhooks/{webhooks_uuid} | get webhook
[**getV2Webhooks()**](WebhooksApi.md#getV2Webhooks) | **GET** /webhooks | List webhooks
[**postV2WebhookTest()**](WebhooksApi.md#postV2WebhookTest) | **POST** /webhooks/test | Trigger a test webhook
[**postV2Webhooks()**](WebhooksApi.md#postV2Webhooks) | **POST** /webhooks | Create webhooks


## `deleteV2Webhooks()`

```php
deleteV2Webhooks($webhooks_uuid)
```

Delete webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhooks_uuid = 'webhooks_uuid_example'; // string | Webhooks UUID

try {
    $apiInstance->deleteV2Webhooks($webhooks_uuid);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteV2Webhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhooks_uuid** | **string**| Webhooks UUID |

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

## `getV2Webhook()`

```php
getV2Webhook($webhooks_uuid): object
```

get webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhooks_uuid = 'webhooks_uuid_example'; // string | Webhooks UUID

try {
    $result = $apiInstance->getV2Webhook($webhooks_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getV2Webhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhooks_uuid** | **string**| Webhooks UUID |

### Return type

**object**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV2Webhooks()`

```php
getV2Webhooks(): object[]
```

List webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getV2Webhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getV2Webhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `postV2WebhookTest()`

```php
postV2WebhookTest($webhook_test)
```

Trigger a test webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_test = new \OpenAPI\Client\Sezzle\WebhookTest(); // \OpenAPI\Client\Sezzle\WebhookTest | request

try {
    $apiInstance->postV2WebhookTest($webhook_test);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postV2WebhookTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_test** | [**\OpenAPI\Client\Sezzle\WebhookTest**](../Model/WebhookTest.md)| request |

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

## `postV2Webhooks()`

```php
postV2Webhooks($webhook): \OpenAPI\Client\Sezzle\InlineResponse2003
```

Create webhooks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook = new \OpenAPI\Client\Sezzle\Webhook(); // \OpenAPI\Client\Sezzle\Webhook | Webhooks request

try {
    $result = $apiInstance->postV2Webhooks($webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->postV2Webhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\OpenAPI\Client\Sezzle\Webhook**](../Model/Webhook.md)| Webhooks request |

### Return type

[**\OpenAPI\Client\Sezzle\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
