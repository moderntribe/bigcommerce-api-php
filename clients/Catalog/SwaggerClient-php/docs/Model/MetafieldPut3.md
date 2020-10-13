# MetafieldPut3

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of the *Metafield*. Read-Only. | [optional] 
**permission_set** | **string** | Determines the visibility and writeability of the field by other API consumers.  |Value|Description |-|-| |&#x60;app_only&#x60;|Private to the app that owns the field| |&#x60;read&#x60;|Visible to other API consumers| |&#x60;write&#x60;|Open for reading and writing by other API consumers| |&#x60;read_and_sf_access&#x60;|Visible to other API consumers, including on storefront| |&#x60;write_and_sf_access&#x60;|Open for reading and writing by other API consumers, including on storefront| | 
**namespace** | **string** | Namespace for the metafield, for organizational purposes. This is set set by the developer. Required for POST. | 
**key** | **string** | The name of the field, for example: &#x60;location_id&#x60;, &#x60;color&#x60;. Required for POST. | 
**value** | **string** | The value of the field, for example: &#x60;1&#x60;, &#x60;blue&#x60;. Required for POST. | 
**description** | **string** | Description for the metafields. | [optional] 
**resource_type** | **string** | The type of resource with which the metafield is associated. | [optional] 
**resource_id** | **int** | The ID for the resource with which the metafield is associated. | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) | Date and time of the metafield&#x27;s creation. Read-Only. | [optional] 
**date_modified** | [**\DateTime**](\DateTime.md) | Date and time when the metafield was last updated. Read-Only. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

