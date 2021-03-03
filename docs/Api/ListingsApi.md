# Bitween\DevTo\ListingsApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createListing()**](ListingsApi.md#createListing) | **POST** /listings | Create a new listing
[**getListingById()**](ListingsApi.md#getListingById) | **GET** /listings/{id} | A listing
[**getListings()**](ListingsApi.md#getListings) | **GET** /listings | Published listings
[**getListingsByCategory()**](ListingsApi.md#getListingsByCategory) | **GET** /listings/category/{category} | Published listings by category
[**updateListing()**](ListingsApi.md#updateListing) | **PUT** /listings/{id} | Update a listing


## `createListing()`

```php
createListing($listingCreate): \Bitween\DevTo\Model\Listing
```

Create a new listing

This endpoint allows the client to create a new listing.  \"Listings\" are classified ads that users create on DEV. They can be related to conference announcements, job offers, mentorships, upcoming events and more.  The user creating the listing or the organization on which behalf the user is creating for need to have enough creadits for this operation to be successful. The server will prioritize the organization's credits over the user's credits.  ### Additional resources  - [Rails tests for Listings API](https://github.com/forem/forem/blob/master/spec/requests/api/v0/listings_spec.rb)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Bitween\DevTo\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listingCreate = new \Bitween\DevTo\Model\ListingCreate(); // \Bitween\DevTo\Model\ListingCreate | Listing to create

try {
    $result = $apiInstance->createListing($listingCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->createListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listingCreate** | [**\Bitween\DevTo\Model\ListingCreate**](../Model/ListingCreate.md)| Listing to create | [optional]

### Return type

[**\Bitween\DevTo\Model\Listing**](../Model/Listing.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListingById()`

```php
getListingById($id): \Bitween\DevTo\Model\Listing
```

A listing

This endpoint allows the client to retrieve a single listing given its `id`.  An unpublished listing is only accessible if authentication is supplied and it belongs to the authenticated user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Bitween\DevTo\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Id of the listing

try {
    $result = $apiInstance->getListingById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the listing |

### Return type

[**\Bitween\DevTo\Model\Listing**](../Model/Listing.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListings()`

```php
getListings($page, $perPage, $category): \Bitween\DevTo\Model\Listing[]
```

Published listings

This endpoint allows the client to retrieve a list of listings.  \"Listings\" are classified ads that users create on DEV. They can be related to conference announcements, job offers, mentorships, upcoming events and more.  By default it will return published listings ordered by descending freshness.  It supports pagination, each page will contain `30` articles by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).
$category = cfp; // string | Using this parameter will return listings belonging to the requested category.

try {
    $result = $apiInstance->getListings($page, $perPage, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]
 **category** | **string**| Using this parameter will return listings belonging to the requested category. | [optional]

### Return type

[**\Bitween\DevTo\Model\Listing[]**](../Model/Listing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListingsByCategory()`

```php
getListingsByCategory($category, $page, $perPage): \Bitween\DevTo\Model\Listing[]
```

Published listings by category

This endpoint allows the client to retrieve a list of listings belonging to the specified category.  \"Listings\" are classified ads that users create on DEV. They can be related to conference announcements, job offers, mentorships, upcoming events and more.  By default it will return published listings ordered by descending freshness.  It supports pagination, each page will contain `30` articles by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = new \Bitween\DevTo\Model\\Bitween\DevTo\Model\ListingCategory(); // \Bitween\DevTo\Model\ListingCategory | The category of the listing
$page = 1; // int | Pagination page.
$perPage = 30; // int | Page size (the number of items to return per page).

try {
    $result = $apiInstance->getListingsByCategory($category, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->getListingsByCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Bitween\DevTo\Model\ListingCategory**](../Model/.md)| The category of the listing |
 **page** | **int**| Pagination page. | [optional] [default to 1]
 **perPage** | **int**| Page size (the number of items to return per page). | [optional] [default to 30]

### Return type

[**\Bitween\DevTo\Model\Listing[]**](../Model/Listing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateListing()`

```php
updateListing($id, $listingUpdate): \Bitween\DevTo\Model\ArticleShow
```

Update a listing

This endpoint allows the client to update an existing listing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bitween\DevTo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new Bitween\DevTo\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | Id of the listing
$listingUpdate = new \Bitween\DevTo\Model\ListingUpdate(); // \Bitween\DevTo\Model\ListingUpdate | Listing params for the update.  **Note**: except for bumping, publishing and unpublishing there are the following restrictions on the ability to update listings:  - the payload has to contain at least one param among `title`, `body_markdown` or `tags`/`tag_list` - the listing can't be updated if it has not been bumped in the last 24 hours - the listing can't be updated if it has been published but not recently bumped

try {
    $result = $apiInstance->updateListing($id, $listingUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->updateListing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the listing |
 **listingUpdate** | [**\Bitween\DevTo\Model\ListingUpdate**](../Model/ListingUpdate.md)| Listing params for the update.  **Note**: except for bumping, publishing and unpublishing there are the following restrictions on the ability to update listings:  - the payload has to contain at least one param among &#x60;title&#x60;, &#x60;body_markdown&#x60; or &#x60;tags&#x60;/&#x60;tag_list&#x60; - the listing can&#39;t be updated if it has not been bumped in the last 24 hours - the listing can&#39;t be updated if it has been published but not recently bumped | [optional]

### Return type

[**\Bitween\DevTo\Model\ArticleShow**](../Model/ArticleShow.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
