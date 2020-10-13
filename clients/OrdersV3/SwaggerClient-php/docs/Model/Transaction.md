# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the transaction. | [optional] 
**order_id** | **string** | Identifier for the BigCommerce Order with which this transaction is associated. | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) | The datetime of the transaction. | [optional] 
**payment_instrument_token** | **string** | This field contains internal BigPay token for stored card that is then mapped to the actual third-party token. We currently do not offer a way to get third party tokens.These tokens are read-only and do not return any information about the payment. | [optional] 
**avs_result** | [**\BigCommerce\OrdersV3\Model\AVSResults**](AVSResults.md) |  | [optional] 
**cvv_result** | [**\BigCommerce\OrdersV3\Model\CVVResult**](CVVResult.md) |  | [optional] 
**credit_card** | [**\BigCommerce\OrdersV3\Model\CreditCard**](CreditCard.md) |  | [optional] 
**gift_certificate** | [**\BigCommerce\OrdersV3\Model\GiftCertificate**](GiftCertificate.md) |  | [optional] 
**store_credit** | [**\BigCommerce\OrdersV3\Model\TransactionStoreCredit**](TransactionStoreCredit.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

