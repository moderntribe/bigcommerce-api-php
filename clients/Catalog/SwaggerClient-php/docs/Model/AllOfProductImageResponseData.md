# AllOfProductImageResponseData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique numeric ID of the image; increments sequentially. | [optional] 
**product_id** | **int** | The unique numeric identifier for the product with which the image is associated. | [optional] 
**image_file** | **string** | The local path to the original image file uploaded to BigCommerce. Use image_url when creating a product. | [optional] 
**url_zoom** | **string** | The zoom URL for this image. By default, this is used as the zoom image on product pages when zoom images are enabled. | [optional] 
**url_standard** | **string** | The standard URL for this image. By default, this is used for product-page images. | [optional] 
**url_thumbnail** | **string** | The thumbnail URL for this image. By default, this is the image size used on the category page and in side panels. | [optional] 
**url_tiny** | **string** | The tiny URL for this image. By default, this is the image size used for thumbnails beneath the product image on a product page. | [optional] 
**date_modified** | [**\DateTime**](\DateTime.md) | The date on which the product image was modified. | [optional] 
**image_url** | **string** | Publically available URL.  Use the image_url when creating a product. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

