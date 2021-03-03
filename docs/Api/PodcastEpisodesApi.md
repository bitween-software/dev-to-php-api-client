# Bitween\DevTo\PodcastEpisodesApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPodcastEpisodes()**](PodcastEpisodesApi.md#getPodcastEpisodes) | **GET** /podcast_episodes | Published podcast episodes


## `getPodcastEpisodes()`

```php
getPodcastEpisodes($page, $perPage, $username): \Bitween\DevTo\Model\PodcastEpisode[]
```

Published podcast episodes

This endpoint allows the client to retrieve a list of podcast episodes.  \"Podcast episodes\" are episodes belonging to podcasts.  It will only return active podcast episodes that belong to published podcasts available on the platform, ordered by descending publication date.  It supports pagination, each page will contain `30` articles by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\PodcastEpisodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).
$username = codenewbie; // string | Using this parameter will retrieve episodes belonging to a specific podcast.

try {
    $result = $apiInstance->getPodcastEpisodes($page, $perPage, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PodcastEpisodesApi->getPodcastEpisodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]
 **username** | **string**| Using this parameter will retrieve episodes belonging to a specific podcast. | [optional]

### Return type

[**\Bitween\DevTo\Model\PodcastEpisode[]**](../Model/PodcastEpisode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
