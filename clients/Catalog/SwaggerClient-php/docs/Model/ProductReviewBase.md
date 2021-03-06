# ProductReviewBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The title for the product review. Required in /POST. | 
**text** | **string** | The text for the product review. | [optional] 
**status** | **string** | The status of the product review. Must be one of &#x60;approved&#x60;, &#x60;disapproved&#x60; or &#x60;pending&#x60;. | [optional] 
**rating** | **int** | The rating of the product review. Must be one of 0, 1, 2, 3, 4, 5. | [optional] 
**email** | **string** | The email of the reviewer. Must be a valid email, or an empty string. | [optional] 
**name** | **string** | The name of the reviewer. | [optional] 
**date_reviewed** | [**\DateTime**](\DateTime.md) | Date the product was reviewed. Required in /POST. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

