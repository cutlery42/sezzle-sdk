# OpenAPI\Client\SessionApi

All URIs are relative to http://localhost/sandbox.gateway.sezzle.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getV2Session()**](SessionApi.md#getV2Session) | **GET** /session/{session_uuid} | Get session status
[**postV2Session()**](SessionApi.md#postV2Session) | **POST** /session | Create a new session


## `getV2Session()`

```php
getV2Session($session_uuid): SessionStatus
```

Get session status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_uuid = 'session_uuid_example'; // string | Session UUID

try {
    $result = $apiInstance->getV2Session($session_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getV2Session: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_uuid** | **string**| Session UUID |

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

## `postV2Session()`

```php
postV2Session($session): \OpenAPI\Client\Sezzle\InlineResponse2011
```

Create a new session

Create new customer checkout and/or tokenize customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session = new \OpenAPI\Client\Sezzle\Session(); // \OpenAPI\Client\Sezzle\Session | Session request

try {
    $result = $apiInstance->postV2Session($session);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->postV2Session: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session** | [**\OpenAPI\Client\Sezzle\Session**](../Model/Session.md)| Session request |

### Return type

[**\OpenAPI\Client\Sezzle\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
