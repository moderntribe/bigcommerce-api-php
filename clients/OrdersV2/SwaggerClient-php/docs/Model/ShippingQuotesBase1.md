# ShippingQuotesBase1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id of the shipping quote | [optional] 
**uuid** | **string** | uuid of the shipping quote | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Time the order was created in RFC 2822 format. | [optional] 
**shipping_provider_id** | **string** | Id of the shipping provider | [optional] 
**shipping_provider_quote** | [**array**](array.md) | This can vary based on the shipping provider. Manual shipping methods such as fixed will return an empty array. Shipping providers such as UPS will return an object with the shipping information. Since the shipping quote is tied to a shipping address only one quote will return in the response. | [optional] 
**provider_code** | **string** | Code of the shipping provider | [optional] 
**carrier_code** | **string** | Code of the shipping carrier | [optional] 
**rate_code** | **string** | Type of delivery. This can vary based on shipping quote. | [optional] 
**rate_id** | **string** | This can vary based on shipping quote | [optional] 
**method_id** | **int** | Shipping method ID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

