# Bitween\DevTo\ArticlesApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createArticle()**](ArticlesApi.md#createArticle) | **POST** /articles | Create a new article
[**getArticleById()**](ArticlesApi.md#getArticleById) | **GET** /articles/{id} | A published article by ID
[**getArticleByPath()**](ArticlesApi.md#getArticleByPath) | **GET** /articles/{username}/{slug} | A published article by path
[**getArticles()**](ArticlesApi.md#getArticles) | **GET** /articles | Published articles
[**getArticlesWithVideo()**](ArticlesApi.md#getArticlesWithVideo) | **GET** /videos | Articles with a video
[**getUserAllArticles()**](ArticlesApi.md#getUserAllArticles) | **GET** /articles/me/all | User&#39;s all articles
[**getUserArticles()**](ArticlesApi.md#getUserArticles) | **GET** /articles/me | User&#39;s articles
[**getUserPublishedArticles()**](ArticlesApi.md#getUserPublishedArticles) | **GET** /articles/me/published | User&#39;s published articles
[**getUserUnpublishedArticles()**](ArticlesApi.md#getUserUnpublishedArticles) | **GET** /articles/me/unpublished | User&#39;s unpublished articles
[**updateArticle()**](ArticlesApi.md#updateArticle) | **PUT** /articles/{id} | Update an article


## `createArticle()`

```php
createArticle($articleCreate): \Bitween\DevTo\Model\ArticleShow
```

Create a new article

This endpoint allows the client to create a new article.  \"Articles\" are all the posts that users create on DEV that typically show up in the feed. They can be a blog post, a discussion question, a help thread etc. but is referred to as article within the code.  ### Rate limiting  There is a limit of 10 requests per 30 seconds.  ### Additional resources  - [Rails tests for Articles API](https://github.com/forem/forem/blob/master/spec/requests/api/v0/articles_spec.rb)

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


$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$articleCreate = new \Bitween\DevTo\Model\ArticleCreate(); // \Bitween\DevTo\Model\ArticleCreate | Article to create

try {
    $result = $apiInstance->createArticle($articleCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->createArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **articleCreate** | [**\Bitween\DevTo\Model\ArticleCreate**](../Model/ArticleCreate.md)| Article to create | [optional]

### Return type

[**\Bitween\DevTo\Model\ArticleShow**](../Model/ArticleShow.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticleById()`

```php
getArticleById($id): \Bitween\DevTo\Model\ArticleShow
```

A published article by ID

This endpoint allows the client to retrieve a single published article given its `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 150589; // int | Id of the article

try {
    $result = $apiInstance->getArticleById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->getArticleById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the article |

### Return type

[**\Bitween\DevTo\Model\ArticleShow**](../Model/ArticleShow.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticleByPath()`

```php
getArticleByPath($username, $slug): \Bitween\DevTo\Model\ArticleShow
```

A published article by path

This endpoint allows the client to retrieve a single published article given its `path`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = devteam; // string | User or organization username.
$slug = for-empowering-community-2k6h; // string | Slug of the article.

try {
    $result = $apiInstance->getArticleByPath($username, $slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->getArticleByPath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| User or organization username. |
 **slug** | **string**| Slug of the article. |

### Return type

[**\Bitween\DevTo\Model\ArticleShow**](../Model/ArticleShow.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArticles()`

```php
getArticles($page, $perPage, $tag, $tags, $tagsExclude, $username, $state, $top, $collectionId): \Bitween\DevTo\Model\ArticleIndex[]
```

Published articles

This endpoint allows the client to retrieve a list of articles.  \"Articles\" are all the posts that users create on DEV that typically show up in the feed. They can be a blog post, a discussion question, a help thread etc. but is referred to as article within the code.  By default it will return featured, published articles ordered by descending popularity.  It supports pagination, each page will contain `30` articles by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).
$tag = discuss; // string | Using this parameter will retrieve articles that contain the requested tag.  Articles will be ordered by descending popularity.  This parameter can be used in conjuction with `top`.
$tags = javascript, css; // string | Using this parameter will retrieve articles with any of the comma-separated tags.  Articles will be ordered by descending popularity.
$tagsExclude = node, java; // string | Using this parameter will retrieve articles that do _not_ contain _any_ of comma-separated tags.  Articles will be ordered by descending popularity.
$username = ben; // string | Using this parameter will retrieve articles belonging to a User or Organization ordered by descending publication date.  If `state=all` the number of items returned will be `1000` instead of the default `30`.  This parameter can be used in conjuction with `state`.
$state = fresh; // string | Using this parameter will allow the client to check which articles are fresh or rising.  If `state=fresh` the server will return fresh articles. If `state=rising` the server will return rising articles.  This param can be used in conjuction with `username`, only if set to `all`.
$top = 2; // int | Using this parameter will allow the client to return the most popular articles in the last `N` days.  `top` indicates the number of days since publication of the articles returned.  This param can be used in conjuction with `tag`.
$collectionId = 99; // int | Adding this will allow the client to return the list of articles belonging to the requested collection, ordered by ascending publication date.

try {
    $result = $apiInstance->getArticles($page, $perPage, $tag, $tags, $tagsExclude, $username, $state, $top, $collectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->getArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]
 **tag** | **string**| Using this parameter will retrieve articles that contain the requested tag.  Articles will be ordered by descending popularity.  This parameter can be used in conjuction with &#x60;top&#x60;. | [optional]
 **tags** | **string**| Using this parameter will retrieve articles with any of the comma-separated tags.  Articles will be ordered by descending popularity. | [optional]
 **tagsExclude** | **string**| Using this parameter will retrieve articles that do _not_ contain _any_ of comma-separated tags.  Articles will be ordered by descending popularity. | [optional]
 **username** | **string**| Using this parameter will retrieve articles belonging to a User or Organization ordered by descending publication date.  If &#x60;state&#x3D;all&#x60; the number of items returned will be &#x60;1000&#x60; instead of the default &#x60;30&#x60;.  This parameter can be used in conjuction with &#x60;state&#x60;. | [optional]
 **state** | **string**| Using this parameter will allow the client to check which articles are fresh or rising.  If &#x60;state&#x3D;fresh&#x60; the server will return fresh articles. If &#x60;state&#x3D;rising&#x60; the server will return rising articles.  This param can be used in conjuction with &#x60;username&#x60;, only if set to &#x60;all&#x60;. | [optional]
 **top** | **int**| Using this parameter will allow the client to return the most popular articles in the last &#x60;N&#x60; days.  &#x60;top&#x60; indicates the number of days since publication of the articles returned.  This param can be used in conjuction with &#x60;tag&#x60;. | [optional]
 **collectionId** | **int**| Adding this will allow the client to return the list of articles belonging to the requested collection, ordered by ascending publication date. | [optional]

### Return type

[**\Bitween\DevTo\Model\ArticleIndex[]**](../Model/ArticleIndex.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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



$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
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
    echo 'Exception when calling ArticlesApi->getArticlesWithVideo: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
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
    echo 'Exception when calling ArticlesApi->getUserAllArticles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
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
    echo 'Exception when calling ArticlesApi->getUserArticles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
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
    echo 'Exception when calling ArticlesApi->getUserPublishedArticles: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
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
    echo 'Exception when calling ArticlesApi->getUserUnpublishedArticles: ', $e->getMessage(), PHP_EOL;
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

## `updateArticle()`

```php
updateArticle($id, $articleUpdate): \Bitween\DevTo\Model\ArticleShow
```

Update an article

This endpoint allows the client to update an existing article.  \"Articles\" are all the posts that users create on DEV that typically show up in the feed. They can be a blog post, a discussion question, a help thread etc. but is referred to as article within the code.  ### Rate limiting  There is a limit of 30 requests per 30 seconds.  ### Additional resources  - [Rails tests for Articles API](https://github.com/forem/forem/blob/master/spec/requests/api/v0/articles_spec.rb)

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


$apiInstance = new Bitween\DevTo\Api\ArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 150589; // int | Id of the article
$articleUpdate = new \Bitween\DevTo\Model\ArticleUpdate(); // \Bitween\DevTo\Model\ArticleUpdate | Article params for the update.  *Note: if the article contains a front matter in its body, its front matter properties will still take precedence over any JSON equivalent params, which means that the full body_markdown with the modified front matter params needs to be provided for an update to be successful*

try {
    $result = $apiInstance->updateArticle($id, $articleUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticlesApi->updateArticle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the article |
 **articleUpdate** | [**\Bitween\DevTo\Model\ArticleUpdate**](../Model/ArticleUpdate.md)| Article params for the update.  *Note: if the article contains a front matter in its body, its front matter properties will still take precedence over any JSON equivalent params, which means that the full body_markdown with the modified front matter params needs to be provided for an update to be successful* | [optional]

### Return type

[**\Bitween\DevTo\Model\ArticleShow**](../Model/ArticleShow.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
