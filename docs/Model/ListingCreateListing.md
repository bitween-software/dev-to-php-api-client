# # ListingCreateListing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  |
**bodyMarkdown** | **string** | The body of the listing in Markdown format. |
**category** | [**\Bitween\DevTo\Model\ListingCategory**](ListingCategory.md) |  |
**tags** | **string[]** | Tags related to the listing.  A maximum of 8 tags are allowed and it takes precedence over &#x60;tag_list&#x60;. | [optional]
**tagList** | **string** | Comma separated list of tags.  A maximum of 8 tags are allowed. | [optional]
**expiresAt** | [**\DateTime**](\DateTime.md) | Date and time of expiration. | [optional]
**contactViaConnect** | **bool** | True if users are allowed to contact the listing&#39;s owner via DEV connect, false otherwise.  Defaults to false. | [optional]
**location** | **string** | Geographical area or city for the listing. | [optional]
**organizationId** | **int** | The id of the organization the user is creating the listing for.  Only users belonging to an organization can assign the listing to it. | [optional]
**action** | **string** | Set it to \&quot;draft\&quot; to create an unpublished listing | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
