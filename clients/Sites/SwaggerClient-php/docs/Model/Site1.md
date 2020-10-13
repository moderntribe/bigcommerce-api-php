# Site1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**url** | **string** | The Fully Qualified URL (including host and scheme) where this site is hosted. All URLs generated for this site will be appended to this. | [optional] 
**channel_id** | **int** | The channel this site is attached to. Each site belongs to a single channel, and each channel can have either zero or one sites. | [optional] 
**created_at** | **string** | When was this site created? RFC 3339 | [optional] 
**updated_at** | **string** | When was this site defintion last updated? RFC 3339 | [optional] 
**routes** | **\Swagger\Client\Model\AllOfSite1RoutesItems[]** | (optional - if included) collection of routes defined for this site. Limited to 200 routes side loaded (query routes direction via &#x60;/routes&#x60; for bulk) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

