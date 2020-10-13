# ComplexRuleConditionBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique numeric ID of the rule condition; increments sequentially. Read-Only | [optional] 
**rule_id** | **int** | The unique numeric ID of the rule with which the condition is associated. Read-Only | [optional] 
**modifier_id** | **int** | The unique numeric ID of the modifier with which the rule condition is associated. Required in /POST. | 
**modifier_value_id** | **int** | The unique numeric ID of the modifier value with which the rule condition is associated. Required in /POST. | 
**variant_id** | **int** | The unique numeric ID of the variant with which the rule condition is associated. Required in /POST. | 
**combination_id** | **int** | (READ-ONLY:) The unique numeric ID of the SKU (v2 API), or Combination, with which the rule condition is associated. This is to maintain cross-compatibility between v2 and v3. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

