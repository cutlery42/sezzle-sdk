# OpenAPI\Client\TokenApi

All URIs are relative to http://localhost/sandbox.gateway.sezzle.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV2CustomerToken()**](TokenApi.md#getV2CustomerToken) | **GET** /token/{token}/customer | Get customer token
[**getV2SessionToken()**](TokenApi.md#getV2SessionToken) | **GET** /token/{token}/session | Get session token


## `getV2CustomerToken()`

```php
getV2CustomerToken($token)
```

Get customer token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Customer initiated token, e.g. generated in mobile app

try {
    $apiInstance->getV2CustomerToken($token);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->getV2CustomerToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Customer initiated token, e.g. generated in mobile app |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV2SessionToken()`

```php
getV2SessionToken($token): \OpenAPI\Client\Sezzle\Token
```

Get session token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | Merchant initiated token

try {
    $result = $apiInstance->getV2SessionToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->getV2SessionToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Merchant initiated token |

### Return type

[**\OpenAPI\Client\Sezzle\Token**](../Model/Token.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
