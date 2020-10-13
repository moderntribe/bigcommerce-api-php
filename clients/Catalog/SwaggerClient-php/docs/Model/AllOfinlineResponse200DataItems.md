# AllOfinlineResponse200DataItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_created** | [**\DateTime**](\DateTime.md) | The date on which the product was created. | [optional] 
**date_modified** | [**\DateTime**](\DateTime.md) | The date on which the product was modified. | [optional] 
**id** | **int** | ID of the product. Read Only. | [optional] 
**base_variant_id** | **int** | The unique identifier of the base variant associated with a simple product. This value is &#x60;null&#x60; for complex products. | [optional] 
**calculated_price** | **float** | The price of the product as seen on the storefront. It will be equal to the &#x60;sale_price&#x60;, if set, and the &#x60;price&#x60; if there is not a &#x60;sale_price&#x60;. | [optional] 
**options** | **object[]** |  | [optional] 
**modifiers** | **object[]** |  | [optional] 
**map_price** | **float** | Minimum Advertised Price. | [optional] 
**option_set_id** | **int** | Indicates that the product is in an Option Set (legacy V2 concept). | [optional] 
**option_set_display** | **string** | Legacy template setting which controls if the option set shows up to the side of or below the product image and description. | [optional] 
**variants** | **object** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

