# Bitween\DevTo\OrganizationsApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrgArticles()**](OrganizationsApi.md#getOrgArticles) | **GET** /organizations/{username}/articles | Organization&#39;s Articles
[**getOrgListings()**](OrganizationsApi.md#getOrgListings) | **GET** /organizations/{username}/listings | Organization&#39;s listings
[**getOrgUsers()**](OrganizationsApi.md#getOrgUsers) | **GET** /organizations/{username}/users | Organization&#39;s users
[**getOrganization()**](OrganizationsApi.md#getOrganization) | **GET** /organizations/{username} | An organization


## `getOrgArticles()`

```php
getOrgArticles($username, $page, $perPage): \Bitween\DevTo\Model\ArticleIndex[]
```

Organization's Articles

This endpoint allows the client to retrieve a list of Articles belonging to the organization  It supports pagination, each page will contain `30` listing by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = ecorp; // string | Username of the organization
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getOrgArticles($username, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrgArticles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username of the organization |
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]

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

## `getOrgListings()`

```php
getOrgListings($username, $page, $perPage, $category): Listing[]
```

Organization's listings

This endpoint allows the client to retrieve a list of listings belonging to the organization  It supports pagination, each page will contain `30` listing by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = ecorp; // string | Username of the organization
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).
$category = cfp; // string | Using this parameter will return listings belonging to the requested category.

try {
    $result = $apiInstance->getOrgListings($username, $page, $perPage, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrgListings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username of the organization |
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]
 **category** | **string**| Using this parameter will return listings belonging to the requested category. | [optional]

### Return type

[**Listing[]**](../Model/Listing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgUsers()`

```php
getOrgUsers($username, $page, $perPage): \Bitween\DevTo\Model\User[]
```

Organization's users

This endpoint allows the client to retrieve a list of users belonging to the organization  It supports pagination, each page will contain `30` users by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = ecorp; // string | Username of the organization
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getOrgUsers($username, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrgUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username of the organization |
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]

### Return type

[**\Bitween\DevTo\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganization()`

```php
getOrganization($username): \Bitween\DevTo\Model\Organization
```

An organization

This endpoint allows the client to retrieve a single organization by their username

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = ecorp; // string | Username of the organization

try {
    $result = $apiInstance->getOrganization($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username of the organization |

### Return type

[**\Bitween\DevTo\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
