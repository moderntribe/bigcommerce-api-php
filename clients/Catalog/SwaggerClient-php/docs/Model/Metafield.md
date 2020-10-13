# Metafield

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of the *Metafield*. Read-Only. | [optional] 
**permission_set** | **string** | Determines whether the field is completely private to the app that owns the field (&#x60;app_only&#x60;), or visible to other API consumers (&#x60;read&#x60;), or completely open for reading and writing to other apps (&#x60;write&#x60;). Required for POST. | 
**namespace** | **string** | Namespace for the metafield, for organizational purposes. This is set set by the developer. Required for POST. | 
**key** | **string** | The name of the field, for example: &#x60;location_id&#x60;, &#x60;color&#x60;. Required for POST. | 
**value** | **string** | The value of the field, for example: &#x60;1&#x60;, &#x60;blue&#x60;. Required for POST. | 
**description** | **string** | Description for the metafields. | [optional] 
**resource_type** | **string** | The type of resource with which the metafield is associated. | [optional] 
**resource_id** | **int** | The ID for the resource with which the metafield is associated. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Date and time of the metafield&#x27;s creation. Read-Only. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date and time when the metafield was last updated. Read-Only. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

