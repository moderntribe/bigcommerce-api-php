# BrandFull

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of the *Brand*. Read-Only. | [optional] 
**name** | **string** | The name of the brand. Must be unique. Required in POST. | 
**page_title** | **string** | The title shown in the browser while viewing the brand. | [optional] 
**meta_keywords** | **string[]** | Comma-separated list of meta keywords to include in the HTML. | [optional] 
**meta_description** | **string** | A meta description to include. | [optional] 
**search_keywords** | **string** | A comma-separated list of keywords that can be used to locate this brand. | [optional] 
**image_url** | **string** | Image URL used for this category on the storefront. Images can be uploaded via form file post to &#x60;/brands/{brandId}/image&#x60;, or by providing a publicly accessible URL in this field. | [optional] 
**custom_url** | [**\BigCommerce\Catalog\Model\CustomUrlFull1**](CustomUrlFull1.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

