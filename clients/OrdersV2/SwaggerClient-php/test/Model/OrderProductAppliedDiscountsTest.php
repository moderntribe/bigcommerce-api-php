<?php
/**
 * OrderProductAppliedDiscountsTest
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
 * OrderProductAppliedDiscountsTest Class Doc Comment
 *
 * @category    Class
 * @description When applying a manual discount to an order (not a product level discount), the discount is distributed across products in proportion to the products price. &#x60;(total_manual_discount*price_ex_tax)/subtotal_ex_tax&#x60;
 * @package     BigCommerce\OrdersV2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderProductAppliedDiscountsTest extends \PHPUnit_Framework_TestCase
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
     * Test "OrderProductAppliedDiscounts"
     */
    public function testOrderProductAppliedDiscounts()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "code"
     */
    public function testPropertyCode()
    {
    }

    /**
     * Test attribute "target"
     */
    public function testPropertyTarget()
    {
    }
}
