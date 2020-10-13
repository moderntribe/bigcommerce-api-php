# AllOfinlineResponse200DataItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the transaction. | [optional] 
**order_id** | **string** | Identifier for the BigCommerce Order with which this transaction is associated. | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) | The datetime of the transaction. | [optional] 
**payment_instrument_token** | **string** | This field contains internal BigPay token for stored card that is then mapped to the actual third-party token. We currently do not offer a way to get third party tokens.These tokens are read-only and do not return any information about the payment. | [optional] 
**avs_result** | **object** | Address Verification Service (AVS) result from the payment gateway. | [optional] 
**cvv_result** | **object** | Card Verification Value result from the payment gateway. | [optional] 
**credit_card** | **object** | A credit-card model. | [optional] 
**gift_certificate** | **object** | A gift-certificate model. | [optional] 
**store_credit** | **object** | A store credit model. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

