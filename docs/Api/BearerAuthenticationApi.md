# OpenAPI\Client\BearerAuthenticationApi

All URIs are relative to http://localhost/sandbox.gateway.sezzle.com/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postV1Authentication()**](BearerAuthenticationApi.md#postV1Authentication) | **POST** /authentication | Get bearer authentication token


## `postV1Authentication()`

```php
postV1Authentication($inline_object): \OpenAPI\Client\Sezzle\InlineResponse201
```

Get bearer authentication token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BearerAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inline_object = new \OpenAPI\Client\Sezzle\InlineObject(); // \OpenAPI\Client\Sezzle\InlineObject

try {
    $result = $apiInstance->postV1Authentication($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BearerAuthenticationApi->postV1Authentication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\OpenAPI\Client\Sezzle\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\OpenAPI\Client\Sezzle\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
