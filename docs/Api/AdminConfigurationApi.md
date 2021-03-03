# Bitween\DevTo\AdminConfigurationApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConfig()**](AdminConfigurationApi.md#getConfig) | **GET** /admin/config | Admin config
[**upsertConfig()**](AdminConfigurationApi.md#upsertConfig) | **PUT** /admin/config | Update Site-wide Config


## `getConfig()`

```php
getConfig(): object
```

Admin config

This endpoint returns the \"site config\" as set by admin.

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


$apiInstance = new Bitween\DevTo\Api\AdminConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminConfigurationApi->getConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertConfig()`

```php
upsertConfig($siteConfig)
```

Update Site-wide Config

This endpoint allows admins to declare values or update values for \"site config\".

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


$apiInstance = new Bitween\DevTo\Api\AdminConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteConfig = new \Bitween\DevTo\Model\SiteConfig(); // \Bitween\DevTo\Model\SiteConfig | Config up upsert

try {
    $apiInstance->upsertConfig($siteConfig);
} catch (Exception $e) {
    echo 'Exception when calling AdminConfigurationApi->upsertConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteConfig** | [**\Bitween\DevTo\Model\SiteConfig**](../Model/SiteConfig.md)| Config up upsert | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
