# ProductModifierBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | BigCommerce API, which determines how it will display on the storefront. Acceptable values: &#x60;date&#x60;, &#x60;checkbox&#x60;, &#x60;file&#x60;, &#x60;text&#x60;, &#x60;multi_line_text&#x60;, &#x60;numbers_only_text&#x60;, &#x60;radio_buttons&#x60;, &#x60;rectangles&#x60;, &#x60;dropdown&#x60;, &#x60;product_list&#x60;, &#x60;product_list_with_images&#x60;, &#x60;swatch&#x60;. Required in a /POST. | 
**required** | **bool** | Whether or not this modifer is required or not at checkout. Required in a /POST. | 
**sort_order** | **int** | The order the modifiers display on the product detail page. | [optional] 
**config** | [**\BigCommerce\Catalog\Model\OptionConfig**](OptionConfig.md) |  | [optional] 
**display_name** | **string** | The name of the option shown on the storefront. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

