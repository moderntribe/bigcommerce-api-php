<?php
/**
 * OrderReq1Test
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\OrdersV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Orders V2
 *
 * Manage order coupons, messages, products, shipping addresses, statuses, taxes, shipments, and shipping address quotes.  - [Authentication](#authentication) - [Order](#order)  ## Authentication  Authenticate requests by including an [OAuth](https://developer.bigcommerce.com/api-docs/getting-started/authentication) `access_token` and `client_id` in the request headers.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/{{ENDPOINT}} Content-Type: application/json X-Auth-Client: {{CLIENT_ID}} X-Auth-Token: {{ACCESS_TOKEN}} ```  ### OAuth Scopes  |  **UI Name** | **Permission** | **Parameter** | | --- | --- | --- | |  Orders | modify | `store_v2_orders` | |  Orders | read-only | `store_v2_orders_read_only` |   ## Order  The Order object contains a record of the purchase agreement between a shopper and a merchant. To learn more about creating orders, see [Orders API Guide](/api-docs/orders/orders-api-overview).  ### Currency Fields  * `currency_code` - the display currency used to present prices to the shopper on the storefront. * `currency_exchange_rate`: the exchange rate between the store's default currency and the display currency; when the order is created by means of the V2 endpoints, this value is always 1 (only in the storefront this value can be different to 1).  The following additional fields are returned on orders when Multi-Currency is enabled on the store:  * `store_default_currency_code` - the store's default currency * `store_default_to_transactional_exchange_rate` - the exchange rate between the store's default currency and the transactional currency used in the order.  **Example:**  ```json {   ...   \"currency_id\": 4,   \"currency_code\": \"EUR\",   \"currency_exchange_rate\": 1,   \"default_currency_id\": 4,   \"default_currency_code\": \"EUR\",   \"store_default_currency_code: \"USD\",   \"store_default_to_transactional_exchange_rate\": \"100.0000000000\"   ... } ```
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace BigCommerce\OrdersV2;

/**
 * OrderReq1Test Class Doc Comment
 *
 * @category    Class
 * @description Order properties used in &#x60;POST&#x60; and &#x60;PUT&#x60; request bodies; **required** : &#x60;products&#x60;, &#x60;billing_address&#x60;.
 * @package     BigCommerce\OrdersV2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderReq1Test extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "OrderReq1"
     */
    public function testOrderReq1()
    {
    }

    /**
     * Test attribute "billing_address"
     */
    public function testPropertyBillingAddress()
    {
    }

    /**
     * Test attribute "subtotal_ex_tax"
     */
    public function testPropertySubtotalExTax()
    {
    }

    /**
     * Test attribute "subtotal_inc_tax"
     */
    public function testPropertySubtotalIncTax()
    {
    }

    /**
     * Test attribute "base_shipping_cost"
     */
    public function testPropertyBaseShippingCost()
    {
    }

    /**
     * Test attribute "shipping_cost_ex_tax"
     */
    public function testPropertyShippingCostExTax()
    {
    }

    /**
     * Test attribute "shipping_cost_inc_tax"
     */
    public function testPropertyShippingCostIncTax()
    {
    }

    /**
     * Test attribute "base_handling_cost"
     */
    public function testPropertyBaseHandlingCost()
    {
    }

    /**
     * Test attribute "handling_cost_ex_tax"
     */
    public function testPropertyHandlingCostExTax()
    {
    }

    /**
     * Test attribute "handling_cost_inc_tax"
     */
    public function testPropertyHandlingCostIncTax()
    {
    }

    /**
     * Test attribute "base_wrapping_cost"
     */
    public function testPropertyBaseWrappingCost()
    {
    }

    /**
     * Test attribute "wrapping_cost_ex_tax"
     */
    public function testPropertyWrappingCostExTax()
    {
    }

    /**
     * Test attribute "wrapping_cost_inc_tax"
     */
    public function testPropertyWrappingCostIncTax()
    {
    }

    /**
     * Test attribute "total_ex_tax"
     */
    public function testPropertyTotalExTax()
    {
    }

    /**
     * Test attribute "total_inc_tax"
     */
    public function testPropertyTotalIncTax()
    {
    }

    /**
     * Test attribute "items_total"
     */
    public function testPropertyItemsTotal()
    {
    }

    /**
     * Test attribute "items_shipped"
     */
    public function testPropertyItemsShipped()
    {
    }

    /**
     * Test attribute "payment_method"
     */
    public function testPropertyPaymentMethod()
    {
    }

    /**
     * Test attribute "payment_provider_id"
     */
    public function testPropertyPaymentProviderId()
    {
    }

    /**
     * Test attribute "refunded_amount"
     */
    public function testPropertyRefundedAmount()
    {
    }

    /**
     * Test attribute "order_is_digital"
     */
    public function testPropertyOrderIsDigital()
    {
    }

    /**
     * Test attribute "ip_address"
     */
    public function testPropertyIpAddress()
    {
    }

    /**
     * Test attribute "geoip_country"
     */
    public function testPropertyGeoipCountry()
    {
    }

    /**
     * Test attribute "geoip_country_iso2"
     */
    public function testPropertyGeoipCountryIso2()
    {
    }

    /**
     * Test attribute "staff_notes"
     */
    public function testPropertyStaffNotes()
    {
    }

    /**
     * Test attribute "customer_message"
     */
    public function testPropertyCustomerMessage()
    {
    }

    /**
     * Test attribute "discount_amount"
     */
    public function testPropertyDiscountAmount()
    {
    }

    /**
     * Test attribute "is_deleted"
     */
    public function testPropertyIsDeleted()
    {
    }

    /**
     * Test attribute "ebay_order_id"
     */
    public function testPropertyEbayOrderId()
    {
    }

    /**
     * Test attribute "external_source"
     */
    public function testPropertyExternalSource()
    {
    }

    /**
     * Test attribute "external_id"
     */
    public function testPropertyExternalId()
    {
    }

    /**
     * Test attribute "channel_id"
     */
    public function testPropertyChannelId()
    {
    }

    /**
     * Test attribute "tax_provider_id"
     */
    public function testPropertyTaxProviderId()
    {
    }

    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
    }

    /**
     * Test attribute "default_currency_code"
     */
    public function testPropertyDefaultCurrencyCode()
    {
    }
}
