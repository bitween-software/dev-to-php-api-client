# Bitween\DevTo\TagsApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFollowedTags()**](TagsApi.md#getFollowedTags) | **GET** /follows/tags | Followed tags
[**getTags()**](TagsApi.md#getTags) | **GET** /tags | Tags


## `getFollowedTags()`

```php
getFollowedTags(): \Bitween\DevTo\Model\FollowedTag[]
```

Followed tags

This endpoint allows the client to retrieve a list of the tags they follow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Bitween\DevTo\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFollowedTags();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getFollowedTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bitween\DevTo\Model\FollowedTag[]**](../Model/FollowedTag.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTags()`

```php
getTags($page, $perPage): \Bitween\DevTo\Model\Tag[]
```

Tags

This endpoint allows the client to retrieve a list of tags that can be used to tag articles.  It will return tags ordered by popularity.  It supports pagination, each page will contain `10` tags by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Pagination page.
$perPage = 10; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getTags($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 10]

### Return type

[**\Bitween\DevTo\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
