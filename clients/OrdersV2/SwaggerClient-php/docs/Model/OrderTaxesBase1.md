# OrderTaxesBase1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique numeric identifier of the taxes object. | [optional] 
**order_id** | **int** | The unique numeric identifier of the order to which the tax was applied. NOTE: Not included if the store was using the automatic tax feature. | [optional] 
**order_address_id** | **int** | The unique numeric identifier of the order address object associated with the order. NOTE: Not included if the store was using the automatic tax feature. | [optional] 
**tax_rate_id** | **int** | The unique numeric identifier of the tax rate. | [optional] 
**tax_class_id** | **int** | The unique numeric identifier of the tax class object. NOTE: Will be 0 if automatic tax was enabled, or if the default tax class was used. | [optional] 
**name** | **string** | The name of the tax class object. | [optional] 
**class** | **string** | The name of the type of tax that was applied. NOTE: will be “Automatic Tax” if automatic tax was enabled. | [optional] 
**rate** | **string** | The tax rate.  The priority order in which the tax is applied (Float, Float-As-String, Integer) | [optional] 
**priority** | **float** | The order in which the tax is applied | [optional] 
**priority_amount** | **string** | The amount of tax calculated on the order.   (Float, Float-As-String, Integer) | [optional] 
**line_amount** | **string** | (Float, Float-As-String, Integer) | [optional] 
**order_product_id** | **string** | If the &#x60;line_item_type&#x60; is &#x60;item&#x60; or &#x60;handling&#x60; then this field will be the order product id. Otherwise the field will return as null. | [optional] 
**line_item_type** | **string** | Type of tax on item | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

