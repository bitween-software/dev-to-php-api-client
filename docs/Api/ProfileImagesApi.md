# Bitween\DevTo\ProfileImagesApi

All URIs are relative to https://dev.to/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProfileImage()**](ProfileImagesApi.md#getProfileImage) | **GET** /profile_images/{username} | User or organization profile picture


## `getProfileImage()`

```php
getProfileImage($username): \Bitween\DevTo\Model\ProfileImage
```

User or organization profile picture

This endpoint allows the client to retrieve a user or organization profile image information by its corresponding username

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bitween\DevTo\Api\ProfileImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = diogoosorio; // string | Username of the user or organization

try {
    $result = $apiInstance->getProfileImage($username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileImagesApi->getProfileImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username of the user or organization |

### Return type

[**\Bitween\DevTo\Model\ProfileImage**](../Model/ProfileImage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
