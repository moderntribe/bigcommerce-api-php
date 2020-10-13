# OrderProducts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Numeric ID of this product within this order. | [optional] 
**order_id** | **int** | Numeric ID of the associated order. | [optional] 
**product_id** | **int** | Numeric ID of the product. | [optional] 
**order_address_id** | **int** | Numeric ID of the associated order address. | [optional] 
**name** | **string** | The product name. | [optional] 
**sku** | **string** | User-defined product code/stock keeping unit (SKU). | [optional] 
**type** | **string** | Type of product | [optional] 
**base_price** | **string** | The product&#x27;s base price. (Float, Float-As-String, Integer) | [optional] 
**price_ex_tax** | **string** | The product’s price excluding tax. (Float, Float-As-String, Integer) | [optional] 
**price_inc_tax** | **string** | The product’s price including tax. (Float, Float-As-String, Integer) | [optional] 
**price_tax** | **string** | Amount of tax applied to a single product.  Price tax is calculated as: &#x60;price_tax &#x3D; price_inc_tax - price_ex_tax&#x60;  (Float, Float-As-String, Integer) | [optional] 
**base_total** | **string** | Total base price. (Float, Float-As-String, Integer) | [optional] 
**total_ex_tax** | **string** | Total base price excluding tax. (Float, Float-As-String, Integer) | [optional] 
**total_inc_tax** | **string** | Total base price including tax. (Float, Float-As-String, Integer) | [optional] 
**total_tax** | **string** | Total tax applied to products. For example, if quantity if 2, base price is 5 and tax rate is 10%. price_tax will be $.50 and total_tax will be $1.00.  If there is a manual discount applied total_tax is calcuted as the following: &#x60;(price_ex_tax - discount)*tax_rate&#x3D;total_tax&#x60;. (Float, Float-As-String, Integer) | [optional] 
**quantity** | **float** | Quantity of the product ordered. | [optional] 
**base_cost_price** | **string** | The product&#x27;s cost price.  This can be set using the Catalog API. (Float, Float-As-String, Integer) Read Only | [optional] 
**cost_price_inc_tax** | **string** | The product&#x27;s cost price including tax. (Float, Float-As-String, Integer) The cost of your products to you; this is never shown to customers, but can be used for accounting purposes. Read Only | [optional] 
**cost_price_ex_tax** | **string** | The products cost price excluding tax. (Float, Float-As-String, Integer) The cost of your products to you; this is never shown to customers, but can be used for accounting purposes. Read Only | [optional] 
**weight** | **float** | Weight of the product. (Float, Float-As-String, Integer) | [optional] 
**cost_price_tax** | **string** | Tax applied to the product’s cost price. (Float, Float-As-String, Integer) The cost of your products to you; this is never shown to customers, but can be used for accounting purposes. Read Only | [optional] 
**is_refunded** | **bool** | Whether the product has been refunded. | [optional] 
**refunded_amount** | **string** | The amount refunded from this transaction. (Float, Float-As-String, Integer) | [optional] 
**return_id** | **float** | Numeric ID for the refund. | [optional] 
**wrapping_name** | **string** | Name of gift-wrapping option | [optional] 
**base_wrapping_cost** | **string** | The value of the base wrapping cost. (Float, Float-As-String, Integer) | [optional] 
**wrapping_cost_ex_tax** | **string** | The value of the wrapping cost, excluding tax. (Float, Float-As-String, Integer) | [optional] 
**wrapping_cost_inc_tax** | **string** | The value of the wrapping cost, including tax. (Float, Float-As-String, Integer) | [optional] 
**wrapping_cost_tax** | **string** | Tax applied to gift-wrapping option. (Float, Float-As-String, Integer) | [optional] 
**wrapping_message** | **string** | Message to accompany gift-wrapping option. | [optional] 
**quantity_shipped** | **float** | Quantity of this item shipped. | [optional] 
**event_name** | **string** | Name of promotional event/delivery date. | [optional] 
**event_date** | [**\DateTime**](\DateTime.md) | Date of the promotional event/scheduled delivery. | [optional] 
**fixed_shipping_cost** | **string** | Fixed shipping cost for this product. (Float, Float-As-String, Integer) | [optional] 
**ebay_item_id** | **string** | Item ID for this product on eBay. | [optional] 
**ebay_transaction_id** | **string** | Transaction ID for this product on eBay. | [optional] 
**option_set_id** | **int** | Numeric ID of the option set applied to the product. | [optional] 
**parent_order_product_id** | **int** | ID of a parent product. | [optional] 
**is_bundled_product** | **bool** | Whether this product is bundled with other products. | [optional] 
**bin_picking_number** | **string** | Bin picking number for the physical product. | [optional] 
**applied_discounts** | [**\BigCommerce\OrdersV2\Model\OrderProductAppliedDiscounts1[]**](OrderProductAppliedDiscounts1.md) | Array of objects containing discounts applied to the product. | [optional] 
**product_options** | [**\BigCommerce\OrdersV2\Model\OrderProductOptions1[]**](OrderProductOptions1.md) | Array of product option objects. | [optional] 
**external_id** | **int** | ID of the order in another system. For example, the Amazon Order ID if this is an Amazon order.This field can be updated in a /POST, but using a /PUT to update the order will return a 400 error. The field &#x27;external_id&#x27; cannot be written to. Please remove it from your request before trying again. It can not be overwritten once set. | [optional] 
**upc** | **string** | Universal Product Code. Can be written to for custom products and catalog products. | [optional] 
**variant_id** | **int** | Products &#x60;variant_id&#x60;. PUT or POST. This field is not available for custom products. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
