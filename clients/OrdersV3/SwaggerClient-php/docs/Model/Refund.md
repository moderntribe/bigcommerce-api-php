# Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Refund resource ID | [optional] 
**order_id** | **int** | Reference to order id | [optional] 
**user_id** | **int** | Reference to the user&#x27;s id who create this refund. This is automatically populated by BigCommerce. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Timestamp of when this refund was created | [optional] 
**reason** | **string** | Reason for refund | [optional] 
**total_amount** | **float** | A non-negative 2 decimal place rounded value that represents that amount that can be charged/refunded via payment providers | [optional] 
**total_tax** | **float** | Total tax amount refunded back to shopper. Note: order_level_amount does not affect tax liability. This can be negative amount indicating we have collected tax by virtue of refunding less to the customer | [optional] 
**items** | [**\BigCommerce\OrdersV3\Model\RefundItem[]**](RefundItem.md) | Array of items refunded | [optional] 
**payments** | [**\BigCommerce\OrdersV3\Model\RefundPayment[]**](RefundPayment.md) | An array of refund payments made to payment providers | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

