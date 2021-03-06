<?php
/**
 * Pagination1Test
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Subscribers
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Subscribers
 *
 * Manage subscribers.  ### OAuth Scopes |  **UI Name** | **Permission** | **Parameter** | | --- | --- | --- | |  Customers | modify | `store_v2_customers` | |  Customers | read-only | `store_v2_customers_read_only` |  ### Headers  |Header|Parameter|Description| |-|-|-| |`X-Auth-Client`|`client_id`|Obtained by creating an API account or installing an app in a BigCommerce control panel.| |`X-Auth-Token`|`access_token `|Obtained by creating an API account or installing an app in a BigCommerce control panel.|  ### Example  ```http GET /stores/{$$.env.store_hash}/v3/catalog/summary host: api.bigcommerce.com Content-Type: application/json X-Auth-Client: {client_id} X-Auth-Token: {access_token} ```  * For more information on Authenticating BigCommerce APIs, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).
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

namespace BigCommerce\Subscribers;

/**
 * Pagination1Test Class Doc Comment
 *
 * @category    Class
 * @description Data about the response, including pagination and collection totals.
 * @package     BigCommerce\Subscribers
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Pagination1Test extends \PHPUnit_Framework_TestCase
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
     * Test "Pagination1"
     */
    public function testPagination1()
    {
    }

    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
    }

    /**
     * Test attribute "count"
     */
    public function testPropertyCount()
    {
    }

    /**
     * Test attribute "per_page"
     */
    public function testPropertyPerPage()
    {
    }

    /**
     * Test attribute "current_page"
     */
    public function testPropertyCurrentPage()
    {
    }

    /**
     * Test attribute "total_pages"
     */
    public function testPropertyTotalPages()
    {
    }

    /**
     * Test attribute "links"
     */
    public function testPropertyLinks()
    {
    }
}
