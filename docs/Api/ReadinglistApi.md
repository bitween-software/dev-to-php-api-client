# Bitween\DevTo\ReadinglistApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReadinglist()**](ReadinglistApi.md#getReadinglist) | **GET** /readinglist | User&#39;s reading list


## `getReadinglist()`

```php
getReadinglist($page, $perPage): \Bitween\DevTo\Model\ReadingList[]
```

User's reading list

This endpoint allows the client to retrieve a list of readinglist reactions along with the related article for the authenticated user.  Reading list will be in reverse chronological order base on the creation of the reaction.  It will return paginated reading list items along with the articles they refer to. By default a page will contain `30` items

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


$apiInstance = new Bitween\DevTo\Api\ReadinglistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getReadinglist($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReadinglistApi->getReadinglist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]

### Return type

[**\Bitween\DevTo\Model\ReadingList[]**](../Model/ReadingList.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
