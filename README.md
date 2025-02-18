# Sezzle

The Sezzle API is intended for merchants interested in accepting Sezzle Pay as a payment option.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Sezzle/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost/sandbox.gateway.sezzle.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BearerAuthenticationApi* | [**postV1Authentication**](docs/Api/BearerAuthenticationApi.md#postv1authentication) | **POST** /authentication | Get bearer authentication token
*CustomerApi* | [**deleteV2Token**](docs/Api/CustomerApi.md#deletev2token) | **DELETE** /customer/{customer_uuid} | Delete customer
*CustomerApi* | [**getV2Customer**](docs/Api/CustomerApi.md#getv2customer) | **GET** /customer/{customer_uuid} | Get customer
*CustomerApi* | [**getV2CustomerList**](docs/Api/CustomerApi.md#getv2customerlist) | **GET** /customer | Get list of customers
*CustomerApi* | [**postV2CustomerOrder**](docs/Api/CustomerApi.md#postv2customerorder) | **POST** /customer/{customer_uuid}/order | Create order by customer
*CustomerApi* | [**preapproveV2Token**](docs/Api/CustomerApi.md#preapprovev2token) | **POST** /customer/{customer_uuid}/preapprove | Preapprove amount by customer
*OrderApi* | [**deleteV2DeleteCheckoutByOrder**](docs/Api/OrderApi.md#deletev2deletecheckoutbyorder) | **DELETE** /order/{order_uuid}/checkout | Delete checkout by order
*OrderApi* | [**getV2Order**](docs/Api/OrderApi.md#getv2order) | **GET** /order/{order_uuid} | Get order details
*OrderApi* | [**patchV2Checkout**](docs/Api/OrderApi.md#patchv2checkout) | **PATCH** /order/{order_uuid} | Update order
*OrderApi* | [**postV2CaptureByOrder**](docs/Api/OrderApi.md#postv2capturebyorder) | **POST** /order/{order_uuid}/capture | Capture amount by order
*OrderApi* | [**postV2ReauthorizeByOrder**](docs/Api/OrderApi.md#postv2reauthorizebyorder) | **POST** /order/{order_uuid}/reauthorize | Reauthorize amount by order
*OrderApi* | [**postV2RefundByOrder**](docs/Api/OrderApi.md#postv2refundbyorder) | **POST** /order/{order_uuid}/refund | Refund amount by order
*OrderApi* | [**postV2ReleaseByOrder**](docs/Api/OrderApi.md#postv2releasebyorder) | **POST** /order/{order_uuid}/release | Release amount by order
*OrderApi* | [**postV2UpchargeByOrder**](docs/Api/OrderApi.md#postv2upchargebyorder) | **POST** /order/{order_uuid}/upcharge | Upcharge amount by order
*ReportsApi* | [**getInterestAccountActivity**](docs/Api/ReportsApi.md#getinterestaccountactivity) | **GET** /interest/activity | Interest Account Activity
*ReportsApi* | [**getInterestAccountBalance**](docs/Api/ReportsApi.md#getinterestaccountbalance) | **GET** /interest/balance | Interest Account Balance
*ReportsApi* | [**getSettlementDetails**](docs/Api/ReportsApi.md#getsettlementdetails) | **GET** /settlements/details/{payout_uuid} | Settlement Details
*ReportsApi* | [**getSettlementSummaries**](docs/Api/ReportsApi.md#getsettlementsummaries) | **GET** /settlements/summaries | Settlement Summaries
*SessionApi* | [**getV2Session**](docs/Api/SessionApi.md#getv2session) | **GET** /session/{session_uuid} | Get session status
*SessionApi* | [**postV2Session**](docs/Api/SessionApi.md#postv2session) | **POST** /session | Create a new session
*TokenApi* | [**getV2CustomerToken**](docs/Api/TokenApi.md#getv2customertoken) | **GET** /token/{token}/customer | Get customer token
*TokenApi* | [**getV2SessionToken**](docs/Api/TokenApi.md#getv2sessiontoken) | **GET** /token/{token}/session | Get session token
*WebhooksApi* | [**deleteV2Webhooks**](docs/Api/WebhooksApi.md#deletev2webhooks) | **DELETE** /webhooks/{webhooks_uuid} | Delete webhooks
*WebhooksApi* | [**getV2Webhook**](docs/Api/WebhooksApi.md#getv2webhook) | **GET** /webhooks/{webhooks_uuid} | get webhook
*WebhooksApi* | [**getV2Webhooks**](docs/Api/WebhooksApi.md#getv2webhooks) | **GET** /webhooks | List webhooks
*WebhooksApi* | [**postV2WebhookTest**](docs/Api/WebhooksApi.md#postv2webhooktest) | **POST** /webhooks/test | Trigger a test webhook
*WebhooksApi* | [**postV2Webhooks**](docs/Api/WebhooksApi.md#postv2webhooks) | **POST** /webhooks | Create webhooks

## Models

- [Address](docs/Model/Address.md)
- [Authorization](docs/Model/Authorization.md)
- [Capture](docs/Model/Capture.md)
- [Customer](docs/Model/Customer.md)
- [Discount](docs/Model/Discount.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse201](docs/Model/InlineResponse201.md)
- [InlineResponse2011](docs/Model/InlineResponse2011.md)
- [InlineResponse2011Order](docs/Model/InlineResponse2011Order.md)
- [InlineResponse2011Tokenize](docs/Model/InlineResponse2011Tokenize.md)
- [InstallmentPlan](docs/Model/InstallmentPlan.md)
- [Intent](docs/Model/Intent.md)
- [LineItem](docs/Model/LineItem.md)
- [Link](docs/Model/Link.md)
- [Notification](docs/Model/Notification.md)
- [Order](docs/Model/Order.md)
- [OrderAuthorization](docs/Model/OrderAuthorization.md)
- [Price](docs/Model/Price.md)
- [Refund](docs/Model/Refund.md)
- [Session](docs/Model/Session.md)
- [SessionCancelUrl](docs/Model/SessionCancelUrl.md)
- [SessionStatus](docs/Model/SessionStatus.md)
- [Token](docs/Model/Token.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookTest](docs/Model/WebhookTest.md)

## Authorization

### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
