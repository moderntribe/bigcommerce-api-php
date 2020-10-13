# Timezone

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | a string identifying the time zone, in the format: &lt;Continent-name&gt;/&lt;City-name&gt;. | [optional] 
**raw_offset** | **int** | a negative or positive number, identifying the offset from UTC/GMT, in seconds, during winter/standard time. | [optional] 
**dst_offset** | **int** | \&quot;-/+\&quot; offset from UTC/GMT, in seconds, during summer/daylight saving time. | [optional] 
**dst_correction** | **bool** | a boolean indicating whether this time zone observes daylight saving time. | [optional] 
**date_format** | [**\BigCommerce\StoreInfo\Model\DateFormat**](DateFormat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

