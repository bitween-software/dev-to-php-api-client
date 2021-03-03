# Bitween\DevTo\CommentsApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommentById()**](CommentsApi.md#getCommentById) | **GET** /comments/{id} | Comment
[**getCommentsByArticleId()**](CommentsApi.md#getCommentsByArticleId) | **GET** /comments | Comments


## `getCommentById()`

```php
getCommentById($id): \Bitween\DevTo\Model\Comment
```

Comment

This endpoint allows the client to retrieve a comment as well as his descendants comments.  It will return the required comment (the root) with its nested descendants as a thread.  See the format specification for further details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = m35m; // string | Comment identifier.

try {
    $result = $apiInstance->getCommentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Comment identifier. |

### Return type

[**\Bitween\DevTo\Model\Comment**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentsByArticleId()`

```php
getCommentsByArticleId($aId, $pId): \Bitween\DevTo\Model\Comment[]
```

Comments

This endpoint allows the client to retrieve all comments belonging to an article or podcast episode as threaded conversations.  It will return the all top level comments with their nested comments as threads. See the format specification for further details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$aId = 270180; // int | Article identifier.
$pId = 124; // int | Podcast Episode identifier.

try {
    $result = $apiInstance->getCommentsByArticleId($aId, $pId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentsByArticleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aId** | **int**| Article identifier. | [optional]
 **pId** | **int**| Podcast Episode identifier. | [optional]

### Return type

[**\Bitween\DevTo\Model\Comment[]**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
