# OrderResp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_address** | **object** | Required to create an order. | [optional] 
**subtotal_ex_tax** | **string** | Override value for subtotal excluding tax. If specified, the field &#x60;subtotal_inc_tax&#x60; is also required. (Float, Float-As-String, Integer) | [optional] 
**subtotal_inc_tax** | **string** | Override value for subtotal including tax. If specified, the field &#x60;subtotal_ex_tax&#x60; is also required. (Float, Float-As-String, Integer) | [optional] 
**base_shipping_cost** | **string** | The value of the base shipping cost. (Float, Float-As-String, Integer) | [optional] 
**shipping_cost_ex_tax** | **string** | The value of shipping cost, excluding tax. (Float, Float-As-String, Integer) | [optional] 
**shipping_cost_inc_tax** | **string** | The value of shipping cost, including tax. (Float, Float-As-String, Integer) | [optional] 
**base_handling_cost** | **string** | The value of the base handling cost. (Float, Float-As-String, Integer) | [optional] 
**handling_cost_ex_tax** | **string** | The value of the handling cost, excluding tax. (Float, Float-As-String, Integer) | [optional] 
**handling_cost_inc_tax** | **string** | The value of the handling cost, including tax. (Float, Float-As-String, Integer) | [optional] 
**base_wrapping_cost** | **string** | The value of the base wrapping cost. (Float, Float-As-String, Integer) | [optional] 
**wrapping_cost_ex_tax** | **string** | The value of the wrapping cost, excluding tax. (Float, Float-As-String, Integer) | [optional] 
**wrapping_cost_inc_tax** | **string** | The value of the wrapping cost, including tax. (Float, Float-As-String, Integer) | [optional] 
**total_ex_tax** | **string** | Override value for the total, excluding tax. If specified, the field &#x60;total_inc_tax&#x60; is also required. (Float, Float-As-String, Integer) | [optional] 
**total_inc_tax** | **string** | Override value for the total, including tax. If specified, the field &#x60;total_ex_tax&#x60; is also required. (Float, Float-As-String, Integer) | [optional] 
**items_total** | **float** | The total number of items in the order. | [optional] 
**items_shipped** | **float** | The number of items that have been shipped. | [optional] 
**payment_method** | **string** | The payment method for this order. Can be one of the following: &#x60;Manual&#x60;, &#x60;Credit Card&#x60;, &#x60;cash&#x60;, &#x60;Test Payment Gateway&#x60;, etc. | [optional] 
**payment_provider_id** | **string** | The external Transaction ID/Payment ID within this order&#x27;s payment provider (if a payment provider was used). | [optional] 
**refunded_amount** | **string** | The amount refunded from this transaction. (Float, Float-As-String, Integer) | [optional] 
**order_is_digital** | **bool** | Whether this is an order for digital products. | [optional] 
**ip_address** | **string** | IP Address of the customer, if known. | [optional] 
**geoip_country** | **string** | The full name of the country where the customer made the purchase, based on the IP. | [optional] 
**geoip_country_iso2** | **string** | The country where the customer made the purchase, in ISO2 format, based on the IP. | [optional] 
**staff_notes** | **string** | Any additional notes for staff. | [optional] 
**customer_message** | **string** | Message that the customer entered (number, optional) -o the &#x60;Order Comments&#x60; box during checkout. | [optional] 
**discount_amount** | **string** | Amount of discount for this transaction. (Float, Float-As-String, Integer) | [optional] 
**is_deleted** | **bool** | Indicates whether the order was deleted (archived). Set to to true, to archive an order. | [optional] 
**ebay_order_id** | **string** | If the order was placed through eBay, the eBay order number will be included. Otherwise, the value will be &#x60;0&#x60;. | [optional] 
**external_source** | **string** | For orders submitted or modified via the API, using a PUT or POST operation, you can optionally pass in a value identifying the system used to generate the order. For example: &#x60;POS&#x60;. Otherwise, the value will be null. | [optional] 
**external_id** | **int** | ID of the order in another system. For example, the Amazon Order ID if this is an Amazon order.This field can be updated in a /POST, but using a /PUT to update the order will return a 400 error. The field &#x27;external_id&#x27; cannot be written to. Please remove it from your request before trying again. It can not be overwritten once set. | [optional] 
**channel_id** | **int** | Shows where the order originated. The channel_id will default to 1. | [optional] 
**tax_provider_id** | **string** | BasicTaxProvider - Tax is set to manual.  AvaTaxProvider - This is for when the tax provider has been set to automatic and the order was NOT created by the API. Used for Avalara.  \&quot;\&quot; (blank) - When the tax provider is unknown. This includes legacy orders and orders previously created via API. This can be set when creating an order using a POST. | [optional] 
**date_created** | **string** | The date this order was created. If not specified, will default to the current time. The date should be in RFC 2822 format. | [optional] 
**default_currency_code** | **string** | The currency code of the default currency for this type of transaction; writeable when multi-currency enabled. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

