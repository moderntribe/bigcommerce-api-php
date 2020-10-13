# OrderShippingAddress1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_cost** | **string** | The base value of the order’s items. (Float, Float-As-String, Integer) | [optional] 
**base_handling_cost** | **string** | The base handling charge. (Float, Float-As-String, Integer) | [optional] 
**city** | **string** |  | [optional] 
**company** | **string** |  | [optional] 
**cost_ex_tax** | **string** | The value of the order’s items, excluding tax. (Float, Float-As-String, Integer) | [optional] 
**cost_inc_tax** | **string** | The value of the order’s items, including tax. (Float, Float-As-String, Integer) | [optional] 
**cost_tax** | **string** | The tax amount on the order. (Float, Float-As-String, Integer) | [optional] 
**cost_tax_class_id** | **int** | The ID of the tax class applied to the product. (NOTE: Value ignored if automatic tax is enabled.) | [optional] 
**country** | **string** |  | [optional] 
**country_iso2** | **string** | 2-letter ISO Alpha-2 code for the country. | [optional] 
**email** | **string** | Recipient&#x27;s email address. | [optional] 
**first_name** | **string** |  | [optional] 
**form_fields** | [**\BigCommerce\OrdersV2\Model\FormFields1[]**](FormFields1.md) |  | [optional] 
**handling_cost_ex_tax** | **string** | The handling charge, excluding tax. (Float, Float-As-String, Integer) | [optional] 
**handling_cost_inc_tax** | **string** | The handling charge, including tax. (Float, Float-As-String, Integer) | [optional] 
**handling_cost_tax** | **string** |  | [optional] 
**handling_cost_tax_class_id** | **int** | A read-only value. Do not attempt to set or modify this value in a POST or PUT operation. (NOTE: Value ignored if automatic tax is enabled on the store.) | [optional] 
**id** | **int** | ID of this shipping address. | [optional] 
**items_shipped** | **float** | The number of items that have been shipped. | [optional] 
**items_total** | **float** | The total number of items in the order. | [optional] 
**last_name** | **string** |  | [optional] 
**order_id** | **int** | ID of the order. | [optional] 
**phone** | **string** | Recipient&#x27;s telephone number. | [optional] 
**shipping_method** | **string** | Text code identifying the BigCommerce shipping module selected by the customer. | [optional] 
**shipping_quotes** | [**\BigCommerce\OrdersV2\Model\ShippingQuotesResource1**](ShippingQuotesResource1.md) |  | [optional] 
**shipping_zone_id** | **float** | Numeric ID of the shipping zone. | [optional] 
**shipping_zone_name** | **string** | Name of the shipping zone. | [optional] 
**state** | **string** |  | [optional] 
**street_1** | **string** | Street address (first line). | [optional] 
**street_2** | **string** | Street address (second line). | [optional] 
**zip** | **string** | Zip or postal code, as a string. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

