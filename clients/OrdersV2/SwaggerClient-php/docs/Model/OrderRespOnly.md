# OrderRespOnly

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Read-only. The ID of the order. | [optional] 
**date_modified** | **string** | A read-only value representing the last modification of the order. Do not attempt to modify or set this value in a POST or PUT operation. RFC-2822 | [optional] 
**date_shipped** | **string** | A read-only value representing the date of shipment. Do not attempt to modify or set this value in a POST or PUT operation. RFC-2822 | [optional] 
**cart_id** | **string** | The cart ID from which this order originated, if applicable. Correlates with the Cart API. This is a READ-ONLY field; do not set or modify its value in a POST or PUT request. | [optional] 
**status** | **string** | The status will include one of the (string, optiona) - values defined under Order Statuses. This value is read-only. Do not attempt to modify or set this value in a POST or PUT operation. | [optional] 
**subtotal_tax** | **string** | A read-only value. Do not attempt to set or modify this value in a POST or PUT operation. (Float, Float-As-String, Integer) | [optional] 
**shipping_cost_tax** | **string** | A read-only value. Do not attempt to modify or set this value in a POST or PUT operation. (Float, Float-As-String, Integer) | [optional] 
**shipping_cost_tax_class_id** | **int** | Shipping-cost tax class. A read-only value. Do not attempt to modify or set this value in a POST or PUT operation. (NOTE: Value ignored if automatic tax is enabled on the store.) | [optional] 
**handling_cost_tax** | **string** | A read-only value. Do not attempt to modify or set this value in a POST or PUT operation. (Float, Float-As-String, Integer) | [optional] 
**handling_cost_tax_class_id** | **int** | A read-only value. Do not attempt to set or modify this value in a POST or PUT operation. (NOTE: Value ignored if automatic tax is enabled on the store.) | [optional] 
**wrapping_cost_tax** | **string** | A read-only value. Do not attempt to modify or set this value in a POST or PUT operation. (Float, Float-As-String, Integer) | [optional] 
**wrapping_cost_tax_class_id** | **int** | A read-only value. Do not attempt to set or modify this value in a POST or PUT operation. (NOTE: Value ignored if automatic tax is enabled on the store.) | [optional] 
**payment_status** | **string** | A read-only value. Do not attempt to set or modify this value in a POST or PUT operation. | [optional] 
**store_credit_amount** | **string** | Represents the store credit that the shopper has redeemed on this individual order. This is a read-only value. Do not pass in a POST or PUT. (Float, Float-As-String, Integer) | [optional] 
**gift_certificate_amount** | **string** | A read-only value. Do not pass in a POST or PUT. (Float, Float-As-String, Integer) | [optional] 
**currency_id** | **int** | The ID of the currency being used in this transaction. A read-only value. Do not pass in a POST or PUT. | [optional] 
**currency_code** | **string** | The currency code of the currency being used in this transaction. A read-only value. Do not pass in a POST or PUT. | [optional] 
**currency_exchange_rate** | **string** | A read-only value. Do not pass in a POST or PUT. (Float, Float-As-String, Integer) | [optional] 
**default_currency_id** | **int** | A read-only value. Do not pass in a POST or PUT. | [optional] 
**coupon_discount** | **string** | A read-only value. Do not pass in a POST or PUT. (Float, Float-As-String, Integer) | [optional] 
**shipping_address_count** | **float** | The number of shipping addresses associated with this transaction. A read-only value. Do not pass in a POST or PUT. | [optional] 
**is_email_opt_in** | **bool** | Indicates whether the shopper has selected an opt-in check box (on the checkout page) to receive emails. A read-only value. Do not pass in a POST or PUT. | [optional] 
**order_source** | **string** | Orders submitted via the store&#x27;s website will include a &#x60;www&#x60; value. Orders submitted via the API will be set to &#x60;external&#x60;. A read-only value. Do not pass in a POST or PUT. | [optional] 
**products** | [**\BigCommerce\OrdersV2\Model\ProductsResource1**](ProductsResource1.md) |  | [optional] 
**shipping_addresses** | [**\BigCommerce\OrdersV2\Model\ShippingAddressResource**](ShippingAddressResource.md) |  | [optional] 
**coupons** | [**\BigCommerce\OrdersV2\Model\CouponsResource1**](CouponsResource1.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

