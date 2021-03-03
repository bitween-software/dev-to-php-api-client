# # ListingUpdateListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  | [optional]
**bodyMarkdown** | **string** | The body of the listing in Markdown format. | [optional]
**category** | [**\Bitween\DevTo\Model\ListingCategory**](ListingCategory.md) |  | [optional]
**tags** | **string[]** | Tags related to the listing.  A maximum of 8 tags are allowed and it takes precedence over &#x60;tag_list&#x60;. | [optional]
**tagList** | **string** | Comma separated list of tags.  A maximum of 8 tags are allowed. | [optional]
**expiresAt** | [**\DateTime**](\DateTime.md) | Date and time of expiration. | [optional]
**contactViaConnect** | **bool** | True if users are allowed to contact the listing&#39;s owner via DEV connect, false otherwise.  Defaults to false. | [optional]
**location** | **string** | Geographical area or city for the listing. | [optional]
**action** | **string** | This param can be provided by itself to invoke some actions:  - &#x60;bump&#x60; bumps the listing and charge either the   organization or the user - &#x60;publish&#x60; publishes a draft listing - &#x60;unpublish&#x60; unpublishes a published listing  It will take priority on any other param in the payload. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
