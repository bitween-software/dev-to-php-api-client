# Bitween\DevTo\UsersApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUser()**](UsersApi.md#getUser) | **GET** /users/{id} | A user
[**getUserAllArticles()**](UsersApi.md#getUserAllArticles) | **GET** /articles/me/all | User&#39;s all articles
[**getUserArticles()**](UsersApi.md#getUserArticles) | **GET** /articles/me | User&#39;s articles
[**getUserMe()**](UsersApi.md#getUserMe) | **GET** /users/me | The authenticated user
[**getUserPublishedArticles()**](UsersApi.md#getUserPublishedArticles) | **GET** /articles/me/published | User&#39;s published articles
[**getUserUnpublishedArticles()**](UsersApi.md#getUserUnpublishedArticles) | **GET** /articles/me/unpublished | User&#39;s unpublished articles


## `getUser()`

```php
getUser($id, $url): \Bitween\DevTo\Model\User
```

A user

This endpoint allows the client to retrieve a single user, either by id or by the user's username

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // string | Id of the user.  It can be either of the following two values:    - an integer representing the id of the user   - the string `by_username` (needs to be used in conjuction with the param `url`)
$url = ben; // string | Username of the user

try {
    $result = $apiInstance->getUser($id, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the user.  It can be either of the following two values:    - an integer representing the id of the user   - the string &#x60;by_username&#x60; (needs to be used in conjuction with the param &#x60;url&#x60;) |
 **url** | **string**| Username of the user | [optional]

### Return type

[**\Bitween\DevTo\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAllArticles()`

```php
getUserAllArticles($page, $perPage): \Bitween\DevTo\Model\ArticleMe[]
```

User's all articles

This endpoint allows the client to retrieve a list of all articles on behalf of an authenticated user.  \"Articles\" are all the posts that users create on DEV that typically show up in the feed. They can be a blog post, a discussion question, a help thread etc. but is referred to as article within the code.  It will return both published and unpublished articles with pagination.  Unpublished articles will be at the top of the list in reverse chronological creation order. Published articles will follow in reverse chronological publication order.  By default a page will contain `30` articles.

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


$apiInstance = new Bitween\DevTo\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getUserAllArticles($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserAllArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]

### Return type

[**\Bitween\DevTo\Model\ArticleMe[]**](../Model/ArticleMe.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserArticles()`

```php
getUserArticles($page, $perPage): \Bitween\DevTo\Model\ArticleMe[]
```

User's articles

This endpoint allows the client to retrieve a list of published articles on behalf of an authenticated user.  \"Articles\" are all the posts that users create on DEV that typically show up in the feed. They can be a blog post, a discussion question, a help thread etc. but is referred to as article within the code.  Published articles will be in reverse chronological publication order.  It will return published articles with pagination. By default a page will contain `30` articles.

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


$apiInstance = new Bitween\DevTo\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getUserArticles($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]

### Return type

[**\Bitween\DevTo\Model\ArticleMe[]**](../Model/ArticleMe.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserMe()`

```php
getUserMe(): \Bitween\DevTo\Model\User
```

The authenticated user

This endpoint allows the client to retrieve information about the authenticated user

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


$apiInstance = new Bitween\DevTo\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bitween\DevTo\Model\User**](../Model/User.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPublishedArticles()`

```php
getUserPublishedArticles($page, $perPage): \Bitween\DevTo\Model\ArticleMe[]
```

User's published articles

This endpoint allows the client to retrieve a list of published articles on behalf of an authenticated user.  \"Articles\" are all the posts that users create on DEV that typically show up in the feed. They can be a blog post, a discussion question, a help thread etc. but is referred to as article within the code.  Published articles will be in reverse chronological publication order.  It will return published articles with pagination. By default a page will contain `30` articles.

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


$apiInstance = new Bitween\DevTo\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getUserPublishedArticles($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserPublishedArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]

### Return type

[**\Bitween\DevTo\Model\ArticleMe[]**](../Model/ArticleMe.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserUnpublishedArticles()`

```php
getUserUnpublishedArticles($page, $perPage): \Bitween\DevTo\Model\ArticleMe[]
```

User's unpublished articles

This endpoint allows the client to retrieve a list of unpublished articles on behalf of an authenticated user.  \"Articles\" are all the posts that users create on DEV that typically show up in the feed. They can be a blog post, a discussion question, a help thread etc. but is referred to as article within the code.  Unpublished articles will be in reverse chronological creation order.  It will return unpublished articles with pagination. By default a page will contain `30` articles.

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


$apiInstance = new Bitween\DevTo\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getUserUnpublishedArticles($page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserUnpublishedArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]

### Return type

[**\Bitween\DevTo\Model\ArticleMe[]**](../Model/ArticleMe.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
