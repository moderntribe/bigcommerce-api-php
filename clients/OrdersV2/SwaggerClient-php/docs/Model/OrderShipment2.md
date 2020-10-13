# OrderShipment2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Shipment ID. | [optional] 
**order_id** | **int** | ID of the order associated with this shipment. | [optional] 
**customer_id** | **int** | ID of this order’s customer. | [optional] 
**order_address_id** | **int** | ID of the desired &#x60;shipping_address&#x60; associated with the shipment. | [optional] 
**date_created** | **string** | Creation date for the shipment. | [optional] 
**tracking_number** | **string** | Tracking number of the shipment. | [optional] 
**shipping_method** | **string** | Additional information to describe the method of shipment (ex. Standard, Ship by Weight, Custom Shipment). Can be used for live quotes from certain shipping providers. If different from &#x60;shipping_provider&#x60;, &#x60;shipping_method&#x60; should correspond to &#x60;tracking_carrier&#x60;. | [optional] 
**shipping_provider** | **string** | Enum of the BigCommerce shipping-carrier integration/module. | [optional] 
**tracking_carrier** | **string** | Tracking carrier for the shipment. Acceptable values include an empty string (&#x60;\&quot;\&quot;&#x60;) or one of the valid tracking-carrier values viewable [here](https://docs.google.com/spreadsheets/d/1w9c_aECSCGyf-oOrvGeUniDl-ARGKemfZl0qSsav8D4/pubhtml?gid&#x3D;0&amp;single&#x3D;true) and downloadable as a .CSV file [here](https://docs.google.com/spreadsheets/d/1mTueEynfcEmwsU2y2Jd2MX-8GKwNZrmlRMBcIElg9aY/pub?gid&#x3D;0&amp;single&#x3D;true&amp;output&#x3D;csv). | [optional] 
**comments** | **string** | Comments the shipper wishes to add. | [optional] 
**billing_address** | [**\BigCommerce\OrdersV2\Model\BillingAddressBase1**](BillingAddressBase1.md) |  | [optional] 
**shipping_address** | [**\BigCommerce\OrdersV2\Model\ShippingAddressBase1**](ShippingAddressBase1.md) |  | [optional] 
**items** | [**\BigCommerce\OrdersV2\Model\OrdersorderIdshipmentsItems[]**](OrdersorderIdshipmentsItems.md) | The items in the shipment. This object has the following members, all integer: order_product_id (required), quantity (required), product_id (read-only). A sample items value might be: [ {\&quot;order_product_id\&quot;:16,\&quot;product_id\&quot;: 0,\&quot;quantity\&quot;:2} ] | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

