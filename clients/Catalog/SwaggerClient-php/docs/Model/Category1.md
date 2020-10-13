# Category1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of the *Category*. Increments sequentially. Read-Only. | [optional] 
**parent_id** | **int** | The unique numeric ID of the category&#x27;s parent. This field controls where the category sits in the tree of categories that organize the catalog. Required in a POST if creating a child category. | 
**name** | **string** | The name displayed for the category. Name is unique with respect to the category&#x27;s siblings. Required in a POST. | 
**description** | **string** | The product description, which can include HTML formatting. | [optional] 
**views** | **int** | Number of views the category has on the storefront. | [optional] 
**sort_order** | **int** | Priority this category will be given when included in the menu and category pages. The lower the number, the closer to the top of the results the category will be. | [optional] 
**page_title** | **string** | Custom title for the category page. If not defined, the category name will be used as the meta title. | [optional] 
**search_keywords** | **string** | A comma-separated list of keywords that can be used to locate the category when searching the store. | [optional] 
**meta_keywords** | **string[]** | Custom meta keywords for the category page. If not defined, the store&#x27;s default keywords will be used. Must post as an array like: [\&quot;awesome\&quot;,\&quot;sauce\&quot;]. | [optional] 
**meta_description** | **string** | Custom meta description for the category page. If not defined, the store&#x27;s default meta description will be used. | [optional] 
**layout_file** | **string** | A valid layout file. (Please refer to [this article](https://support.bigcommerce.com/articles/Public/Creating-Custom-Template-Files/) on creating category files.) This field is writable only for stores with a Blueprint theme applied. | [optional] 
**is_visible** | **bool** | Flag to determine whether the product should be displayed to customers browsing the store. If &#x60;true&#x60;, the category will be displayed. If &#x60;false&#x60;, the category will be hidden from view. | [optional] 
**default_product_sort** | **string** | Determines how the products are sorted on category page load. | [optional] 
**image_url** | **string** | Image URL used for this category on the storefront. Images can be uploaded via form file post to &#x60;/categories/{categoryId}/image&#x60;, or by providing a publicly accessible URL in this field. | [optional] 
**custom_url** | [**\BigCommerce\Catalog\Model\CustomUrlFull1**](CustomUrlFull1.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

