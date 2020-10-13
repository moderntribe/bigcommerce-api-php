# BulkPricingTier

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quantity_min** | **int** | The minimum quantity of associated variant in the cart needed to qualify for this tiers pricing. | [optional] 
**quantity_max** | **int** | The maximum allowed quantity of associated variant in the cart to qualify for this tiers pricing. | [optional] 
**type** | **string** | The type of adjustment that is made. Acceptable values: price – the adjustment amount per product; percent – the adjustment as a percentage of the original price; fixed – the adjusted absolute price of the product. | [optional] 
**amount** | **double** | The price adjustment amount. This value along with the type will decide the price per variant for the pricing tier. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

