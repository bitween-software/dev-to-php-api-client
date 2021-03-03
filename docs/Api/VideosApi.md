# Bitween\DevTo\VideosApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getArticlesWithVideo()**](VideosApi.md#getArticlesWithVideo) | **GET** /videos | Articles with a video


## `getArticlesWithVideo()`

```php
getArticlesWithVideo($page, $perPage): \Bitween\DevTo\Model\ArticleVideo[]
```

Articles with a video

This endpoint allows the client to retrieve a list of articles that are uploaded with a video.  It will only return published video articles ordered by descending popularity.  It supports pagination, each page will contain `24` articles by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\VideosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Pagination page.
$perPage = 24; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getArticlesWithVideo($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideosApi->getArticlesWithVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 24]

### Return type

[**\Bitween\DevTo\Model\ArticleVideo[]**](../Model/ArticleVideo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
