# OrderCouponsBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Numeric ID of the coupon code. | [optional] 
**coupon_id** | **int** | Numeric ID of the associated coupon. | [optional] 
**order_id** | **int** | Numeric ID of the associated order. | [optional] 
**code** | **string** | Coupon code, as a string. | [optional] 
**amount** | **string** | Amount of the discount. This information is returned as in integer. Dollar and percentage discounts will return the same. For example, $3 returns as &#x27;3&#x27; while 5% will return as 5. Check the discount type to see what type of discount is available. (Float, Float-As-String, Integer) | [optional] 
**type** | **int** | type 0: per_item_discount type 1: percentage_discount type 2: per_total_discount type 3: shipping_discount type 4: free_shipping type 5: promotions | [optional] 
**discount** | **float** | The amount off the order the discount is worth. For example, if an order subtotal is $90 and the discount is $3 then it will return as 3.000. If the discount is 3% then will return as 2.7000 or the amount of the order.  (Float, Float-As-String, Integer) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

