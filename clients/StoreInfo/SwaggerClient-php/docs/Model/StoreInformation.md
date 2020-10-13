# StoreInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique store identifier. | [optional] 
**domain** | **string** | Primary domain name. | [optional] 
**secure_url** | **string** | Store’s current HTTPS URL. | [optional] 
**control_panel_base_url** | **string** | The secure hostname of the control panel. | [optional] 
**name** | **string** | Store&#x27;s name. | [optional] 
**first_name** | **string** | Primary contact’s first name (as defined during the store sign-up process). | [optional] 
**last_name** | **string** | Primary contact’s last name (as defined during the store sign-up process). | [optional] 
**address** | **string** | Display address. | [optional] 
**country** | **string** | Country where the store is located (as defined during the store sign-up process). | [optional] 
**phone** | **string** | Display phone number. | [optional] 
**admin_email** | **string** | Email address of the store administrator/owner. | [optional] 
**order_email** | **string** | Email address for orders and fulfillment. | [optional] 
**timezone** | [**\BigCommerce\StoreInfo\Model\TimeZone**](TimeZone.md) |  | [optional] 
**language** | **string** | Default language code. | [optional] 
**currency** | **string** | Default currency code | [optional] 
**currency_symbol** | **string** | Default symbol for values in the currency. | [optional] 
**decimal_separator** | **string** | Default decimal separator for values in the currency. | [optional] 
**thousands_separator** | **string** | Default thousands separator for values in the currency. | [optional] 
**decimal_places** | **int** | Default decimal places for values in the currency. | [optional] 
**currency_symbol_location** | **string** | Default position of the currency symbol (left or right). | [optional] 
**weight_units** | **string** | Default weight units (metric or imperial). | [optional] 
**dimension_units** | **string** | Default dimension units (metric or imperial). | [optional] 
**dimension_decimal_places** | **int** | The number of decimal places. | [optional] 
**dimension_decimal_token** | **string** | The symbol that separates the whole numbers from the decimal points. | [optional] 
**dimension_thousands_token** | **string** | The symbol used to denote thousands. | [optional] 
**plan_name** | **string** | Name of the BigCommerce plan to which this store is subscribed. | [optional] 
**plan_level** | **string** | Level of the BigCommerce plan to which this store is subscribed. | [optional] 
**industry** | **string** | Industry, or vertical category, in which the business operates. (As selected from drop-down list during the store sign-up process.) | [optional] 
**logo** | [**\BigCommerce\StoreInfo\Model\StoreInformationLogo**](StoreInformationLogo.md) |  | [optional] 
**is_price_entered_with_tax** | **bool** | A Boolean value that indicates whether or not prices are entered with tax. | [optional] 
**active_comparison_modules** | **object[]** |  | [optional] 
**features** | [**\BigCommerce\StoreInfo\Model\StoreInformationFeatures**](StoreInformationFeatures.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

