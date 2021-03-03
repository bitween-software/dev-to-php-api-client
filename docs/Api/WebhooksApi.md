# Bitween\DevTo\WebhooksApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhook()**](WebhooksApi.md#createWebhook) | **POST** /webhooks | Create a new webhook
[**deleteWebhook()**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{id} | A webhook endpoint
[**getWebhookById()**](WebhooksApi.md#getWebhookById) | **GET** /webhooks/{id} | A webhook endpoint
[**getWebhooks()**](WebhooksApi.md#getWebhooks) | **GET** /webhooks | Webhooks


## `createWebhook()`

```php
createWebhook($webhookCreate): \Bitween\DevTo\Model\WebhookShow
```

Create a new webhook

This endpoint allows the client to create a new webhook.  \"Webhooks\" are used to register HTTP endpoints that will be called once a relevant event is triggered inside the web application, events like `article_created`, `article_updated`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitween\DevTo\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookCreate = new \Bitween\DevTo\Model\WebhookCreate(); // \Bitween\DevTo\Model\WebhookCreate | Webhook to create

try {
    $result = $apiInstance->createWebhook($webhookCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookCreate** | [**\Bitween\DevTo\Model\WebhookCreate**](../Model/WebhookCreate.md)| Webhook to create | [optional]

### Return type

[**\Bitween\DevTo\Model\WebhookShow**](../Model/WebhookShow.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($id)
```

A webhook endpoint

This endpoint allows the client to delete a single webhook given its `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitween\DevTo\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 123; // int | Id of the webhook

try {
    $apiInstance->deleteWebhook($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the webhook |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookById()`

```php
getWebhookById($id): \Bitween\DevTo\Model\WebhookShow
```

A webhook endpoint

This endpoint allows the client to retrieve a single webhook given its `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitween\DevTo\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 123; // int | Id of the webhook

try {
    $result = $apiInstance->getWebhookById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the webhook |

### Return type

[**\Bitween\DevTo\Model\WebhookShow**](../Model/WebhookShow.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooks()`

```php
getWebhooks(): \Bitween\DevTo\Model\WebhookIndex[]
```

Webhooks

This endpoint allows the client to retrieve a list of webhooks they have previously registered.  \"Webhooks\" are used to register HTTP endpoints that will be called once a relevant event is triggered inside the web application, events like `article_created`, `article_updated`.  It will return all webhooks, without pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Bitween\DevTo\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bitween\DevTo\Model\WebhookIndex[]**](../Model/WebhookIndex.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
