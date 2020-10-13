# AllOfScriptsResponseDataItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The user-friendly description. | [optional] 
**html** | **string** | An html string containing exactly one &#x60;script&#x60; tag. Only present if &#x60;kind&#x60; is &#x60;script_tag&#x60; | [optional] 
**src** | **string** | The &#x60;src&#x60; attribute of the script to load. Only present if &#x60;kind&#x60; is &#x60;src&#x60;. | [optional] 
**auto_uninstall** | **bool** | It will enable automatic cleanup of the script when the single click app is uninstalled or OAuth token is revoked. | [optional] 
**load_method** | **string** | The load method to use for the script. Values are &#x60;default&#x60;, &#x60;async&#x60;, or &#x60;defer&#x60;. It determines how the script should be loaded into the page. | [optional] 
**location** | **string** | Where on the page to place the script. Values are &#x60;head&#x60; or &#x60;footer&#x60;. | [optional] 
**visibility** | **string** | Which set of pages the script should load on.   Please note that you need to have &#x60;Checkout content&#x60; scope to use &#x60;all_pages&#x60; and &#x60;checkout&#x60;.  - The current visibility options are &#x60;storefront&#x60;, &#x60;checkout&#x60;, &#x60;all_pages&#x60; and &#x60;order_confirmation&#x60;.       &#x60;storefront&#x60;: All pages that are not &#x60;checkout&#x60; or &#x60;order_confirmation&#x60;.     For a list of all locations visit [Scripts Visibility](https://developer.bigcommerce.com/api-docs/storefront/scripts-overview#scripts_scripts-visibility). | [optional] 
**kind** | **string** | What type of script this is.  &#x60;src&#x60; - a &#x60;script&#x60; tag will be generated with its &#x60;src&#x60; attribute set to the value of &#x60;src&#x60;; For scripts that use the src url. By providing a path to the script, we can optimize and serve the script tag automatically for you.  &#x60;script_tag&#x60; - The value of &#x60;html&#x60; will be injected directly onto the page. For scripts which include a raw HTML script_tag to be inserted into the page. The load_method must be default. | [optional] 
**api_client_id** | **string** | The client id of the API user that created this script, or blank if created by other means. | [optional] 
**consent_category** | **string** | What category of script this is for the purposes of GDPR/CCPA compliance. | [optional] 
**enabled** | **bool** | Indicates whether a script is enabled. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

