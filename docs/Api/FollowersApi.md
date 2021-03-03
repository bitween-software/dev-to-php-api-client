# Bitween\DevTo\FollowersApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFollowers()**](FollowersApi.md#getFollowers) | **GET** /followers/users | Followers


## `getFollowers()`

```php
getFollowers($page, $perPage): \Bitween\DevTo\Model\Follower[]
```

Followers

This endpoint allows the client to retrieve a list of the followers they have.  \"Followers\" are users that are following other users on the website.  It supports pagination, each page will contain `80` followers by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Bitween\DevTo\Api\FollowersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Pagination page.
$perPage = 80; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getFollowers($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowersApi->getFollowers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 80]

### Return type

[**\Bitween\DevTo\Model\Follower[]**](../Model/Follower.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
