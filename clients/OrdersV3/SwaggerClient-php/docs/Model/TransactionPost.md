# TransactionPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event** | **string** | Store event that created the transaction. | 
**method** | **string** | The payment method: &#x60;credit_card&#x60; - a credit-card transaction; &#x60;electronic_wallet&#x60; - an online wallet; &#x60;store_credit&#x60; - a transaction using store credit; &#x60;gift_certificate&#x60; - a transaction using a gift certificate; &#x60;custom&#x60; - manual payment methods; &#x60;token&#x60; - payment token; &#x60;nonce&#x60; - temporary payment token; &#x60;offsite&#x60; - online payment off the site (e.g., PayPal); &#x60;offline&#x60; - payment method that takes place offline. | 
**amount** | **float** | Amount of money in the transaction. | 
**currency** | **string** | Currency used for the transaction. | 
**gateway** | **string** | The payment gateway, where applicable. | 
**gateway_transaction_id** | **string** | The transaction ID returned by the payment gateway for this transaction item. | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) | The datetime of the transaction. | [optional] 
**test** | **bool** | True if the transaction performed was a test, or if the gateway is in test mode. | [optional] 
**status** | **string** | Status of the transaction. | [optional] 
**fraud_review** | **bool** | Result of gateway fraud review, if any. Default is &#x60;false&#x60;. | [optional] 
**reference_transaction_id** | **int** | Identifier for an existing transaction upon which this transaction acts. | [optional] 
**offline** | [**\BigCommerce\OrdersV3\Model\Offline1**](Offline1.md) |  | [optional] 
**custom** | [**\BigCommerce\OrdersV3\Model\Custom1**](Custom1.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

