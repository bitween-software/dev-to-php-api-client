# OpenAPIClient-php


Access Forem articles, users and other resources via API.

For a real-world example of Forem in action, check out [DEV](https://www.dev.to).

All endpoints that don't require authentication are CORS enabled.

Dates and date times, unless otherwise specified, must be in
the [RFC 3339](https://tools.ietf.org/html/rfc3339) format.

# Authentication

<!-- ReDoc-Inject: <security-definitions> -->

For more information, please visit [https://dev.to/contact](https://dev.to/contact).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/bitween-software/dev-to-open-api-client.git"
    }
  ],
  "require": {
    "bitween-software/dev-to-open-api-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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


$apiInstance = new Bitween\DevTo\Api\AdminConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminConfigurationApi->getConfig: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://dev.to/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminConfigurationApi* | [**getConfig**](docs/Api/AdminConfigurationApi.md#getconfig) | **GET** /admin/config | Admin config
*AdminConfigurationApi* | [**upsertConfig**](docs/Api/AdminConfigurationApi.md#upsertconfig) | **PUT** /admin/config | Update Site-wide Config
*ArticlesApi* | [**createArticle**](docs/Api/ArticlesApi.md#createarticle) | **POST** /articles | Create a new article
*ArticlesApi* | [**getArticleById**](docs/Api/ArticlesApi.md#getarticlebyid) | **GET** /articles/{id} | A published article by ID
*ArticlesApi* | [**getArticleByPath**](docs/Api/ArticlesApi.md#getarticlebypath) | **GET** /articles/{username}/{slug} | A published article by path
*ArticlesApi* | [**getArticles**](docs/Api/ArticlesApi.md#getarticles) | **GET** /articles | Published articles
*ArticlesApi* | [**getArticlesWithVideo**](docs/Api/ArticlesApi.md#getarticleswithvideo) | **GET** /videos | Articles with a video
*ArticlesApi* | [**getUserAllArticles**](docs/Api/ArticlesApi.md#getuserallarticles) | **GET** /articles/me/all | User&#39;s all articles
*ArticlesApi* | [**getUserArticles**](docs/Api/ArticlesApi.md#getuserarticles) | **GET** /articles/me | User&#39;s articles
*ArticlesApi* | [**getUserPublishedArticles**](docs/Api/ArticlesApi.md#getuserpublishedarticles) | **GET** /articles/me/published | User&#39;s published articles
*ArticlesApi* | [**getUserUnpublishedArticles**](docs/Api/ArticlesApi.md#getuserunpublishedarticles) | **GET** /articles/me/unpublished | User&#39;s unpublished articles
*ArticlesApi* | [**updateArticle**](docs/Api/ArticlesApi.md#updatearticle) | **PUT** /articles/{id} | Update an article
*CommentsApi* | [**getCommentById**](docs/Api/CommentsApi.md#getcommentbyid) | **GET** /comments/{id} | Comment
*CommentsApi* | [**getCommentsByArticleId**](docs/Api/CommentsApi.md#getcommentsbyarticleid) | **GET** /comments | Comments
*FollowersApi* | [**getFollowers**](docs/Api/FollowersApi.md#getfollowers) | **GET** /followers/users | Followers
*FollowsApi* | [**getFollowedTags**](docs/Api/FollowsApi.md#getfollowedtags) | **GET** /follows/tags | Followed tags
*ListingsApi* | [**createListing**](docs/Api/ListingsApi.md#createlisting) | **POST** /listings | Create a new listing
*ListingsApi* | [**getListingById**](docs/Api/ListingsApi.md#getlistingbyid) | **GET** /listings/{id} | A listing
*ListingsApi* | [**getListings**](docs/Api/ListingsApi.md#getlistings) | **GET** /listings | Published listings
*ListingsApi* | [**getListingsByCategory**](docs/Api/ListingsApi.md#getlistingsbycategory) | **GET** /listings/category/{category} | Published listings by category
*ListingsApi* | [**updateListing**](docs/Api/ListingsApi.md#updatelisting) | **PUT** /listings/{id} | Update a listing
*OrganizationsApi* | [**getOrgArticles**](docs/Api/OrganizationsApi.md#getorgarticles) | **GET** /organizations/{username}/articles | Organization&#39;s Articles
*OrganizationsApi* | [**getOrgListings**](docs/Api/OrganizationsApi.md#getorglistings) | **GET** /organizations/{username}/listings | Organization&#39;s listings
*OrganizationsApi* | [**getOrgUsers**](docs/Api/OrganizationsApi.md#getorgusers) | **GET** /organizations/{username}/users | Organization&#39;s users
*OrganizationsApi* | [**getOrganization**](docs/Api/OrganizationsApi.md#getorganization) | **GET** /organizations/{username} | An organization
*PodcastEpisodesApi* | [**getPodcastEpisodes**](docs/Api/PodcastEpisodesApi.md#getpodcastepisodes) | **GET** /podcast_episodes | Published podcast episodes
*ProfileImagesApi* | [**getProfileImage**](docs/Api/ProfileImagesApi.md#getprofileimage) | **GET** /profile_images/{username} | User or organization profile picture
*ReadinglistApi* | [**getReadinglist**](docs/Api/ReadinglistApi.md#getreadinglist) | **GET** /readinglist | User&#39;s reading list
*TagsApi* | [**getFollowedTags**](docs/Api/TagsApi.md#getfollowedtags) | **GET** /follows/tags | Followed tags
*TagsApi* | [**getTags**](docs/Api/TagsApi.md#gettags) | **GET** /tags | Tags
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{id} | A user
*UsersApi* | [**getUserAllArticles**](docs/Api/UsersApi.md#getuserallarticles) | **GET** /articles/me/all | User&#39;s all articles
*UsersApi* | [**getUserArticles**](docs/Api/UsersApi.md#getuserarticles) | **GET** /articles/me | User&#39;s articles
*UsersApi* | [**getUserMe**](docs/Api/UsersApi.md#getuserme) | **GET** /users/me | The authenticated user
*UsersApi* | [**getUserPublishedArticles**](docs/Api/UsersApi.md#getuserpublishedarticles) | **GET** /articles/me/published | User&#39;s published articles
*UsersApi* | [**getUserUnpublishedArticles**](docs/Api/UsersApi.md#getuserunpublishedarticles) | **GET** /articles/me/unpublished | User&#39;s unpublished articles
*VideosApi* | [**getArticlesWithVideo**](docs/Api/VideosApi.md#getarticleswithvideo) | **GET** /videos | Articles with a video
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Create a new webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{id} | A webhook endpoint
*WebhooksApi* | [**getWebhookById**](docs/Api/WebhooksApi.md#getwebhookbyid) | **GET** /webhooks/{id} | A webhook endpoint
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | Webhooks

## Models

- [APIError](docs/Model/APIError.md)
- [ArticleCreate](docs/Model/ArticleCreate.md)
- [ArticleCreateArticle](docs/Model/ArticleCreateArticle.md)
- [ArticleFlareTag](docs/Model/ArticleFlareTag.md)
- [ArticleIndex](docs/Model/ArticleIndex.md)
- [ArticleMe](docs/Model/ArticleMe.md)
- [ArticleShow](docs/Model/ArticleShow.md)
- [ArticleUpdate](docs/Model/ArticleUpdate.md)
- [ArticleUpdateArticle](docs/Model/ArticleUpdateArticle.md)
- [ArticleVideo](docs/Model/ArticleVideo.md)
- [ArticleVideoUser](docs/Model/ArticleVideoUser.md)
- [Comment](docs/Model/Comment.md)
- [FollowedTag](docs/Model/FollowedTag.md)
- [Follower](docs/Model/Follower.md)
- [Listing](docs/Model/Listing.md)
- [ListingCategory](docs/Model/ListingCategory.md)
- [ListingCreate](docs/Model/ListingCreate.md)
- [ListingCreateListing](docs/Model/ListingCreateListing.md)
- [ListingUpdate](docs/Model/ListingUpdate.md)
- [ListingUpdateListing](docs/Model/ListingUpdateListing.md)
- [Organization](docs/Model/Organization.md)
- [PodcastEpisode](docs/Model/PodcastEpisode.md)
- [PodcastEpisodePodcast](docs/Model/PodcastEpisodePodcast.md)
- [ProfileImage](docs/Model/ProfileImage.md)
- [ReadingList](docs/Model/ReadingList.md)
- [SharedOrganization](docs/Model/SharedOrganization.md)
- [SharedUser](docs/Model/SharedUser.md)
- [SiteConfig](docs/Model/SiteConfig.md)
- [Tag](docs/Model/Tag.md)
- [User](docs/Model/User.md)
- [WebhookCreate](docs/Model/WebhookCreate.md)
- [WebhookCreateWebhookEndpoint](docs/Model/WebhookCreateWebhookEndpoint.md)
- [WebhookIndex](docs/Model/WebhookIndex.md)
- [WebhookShow](docs/Model/WebhookShow.md)

## Authorization

### api_key

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: HTTP header



### oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A


### oauth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://dev.to/oauth/authorize`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

yo@dev.to

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.9.5`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
