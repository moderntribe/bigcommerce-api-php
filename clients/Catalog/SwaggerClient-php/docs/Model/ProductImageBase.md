# ProductImageBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_file** | **string** | The local path to the original image file uploaded to BigCommerce. | [optional] 
**is_thumbnail** | **bool** | Flag for identifying whether the image is used as the product&#x27;s thumbnail. | [optional] 
**sort_order** | **int** | The order in which the image will be displayed on the product page. Higher integers give the image a lower priority. When updating, if the image is given a lower priority, all images with a &#x60;sort_order&#x60; the same as or greater than the image&#x27;s new &#x60;sort_order&#x60; value will have their &#x60;sort_order&#x60;s reordered. | [optional] 
**description** | **string** | The description for the image. | [optional] 
**image_url** | **string** | Must be a fully qualified URL path, including protocol. Limit of 8MB per file. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

