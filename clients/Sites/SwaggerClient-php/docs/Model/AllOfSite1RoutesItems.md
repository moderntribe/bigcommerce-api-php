# AllOfSite1RoutesItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of resource being routed to; [supported types](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api#route-types). | [optional] 
**matching** | **string** | (entity_id?) For a given type, which resources should match this route? e.g For a route with the type: \&quot;product\&quot; and matching: \&quot;5\&quot; this route would be used for the product with the ID of 5.  Depending on the type of resource, this may be an ID (matching a specific item), or a \&quot;*\&quot; wildcard matching all items of that type. | [optional] 
**route** | **string** | The route template that will be used to generate the URL for the requested resource.  Supports several tokens: - &#x60;{id}&#x60; The **ID** of the requested item - &#x60;{slug}&#x60; The **slug** for the requested item (if available). Note: the &#x60;slug&#x60; value may contain &#x60;/&#x60; slash - &#x60;{language}&#x60; The **language** string that the client is using | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

