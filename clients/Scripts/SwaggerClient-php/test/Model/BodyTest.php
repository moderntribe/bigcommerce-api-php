<?php
/**
 * BodyTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Scripts
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Scripts
 *
 * Inject client-side code onto a BigCommere storefront. To learn more about Scripts, see [here](/api-docs/scripts/scripts-overview).   - [OAuth Scopes](#oauth-scopes) - [Authentication](#authentication) - [Available Endpoints](#available-endpoints)  ## OAuth Scopes | UI Name                                      | Permission | Parameter                                     | |----------------------------------------------|------------|-----------------------------------------------| | Checkout Content<sup>1</sup>                             | modify     | `store_content_checkout`                      | | Checkout Content<sup>1</sup>                             | read-only  | `store_content_checkout_read_only`            | | Content                                       | modify     | `store_v2_content`                            | | Content                                       | read-only  | `store_v2_content_read_only`                  |  1. `Checkout Content` scopes are required to create or read scripts on the checkout page.  For more information on OAuth Scopes, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Authentication  Requests can be authenticated by sending a `client_id` and `access_token` via `X-Auth-Client` and `X-Auth-Token` HTTP headers:  ```http GET /stores/{$$.env.store_hash}/v3/catalog/summary host: api.bigcommerce.com Accept: application/json X-Auth-Client: {client_id} X-Auth-Token: {access_token} ```  |Header|Parameter|Description| |-|-|-| |`X-Auth-Client`|`client_id`|Obtained by creating an API account or installing an app in a BigCommerce control panel.| |`X-Auth-Token`|`access_token `|Obtained by creating an API account or installing an app in a BigCommerce control panel.|  For more information on Authenticating BigCommerce APIs, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Available Endpoints | Resource / Endpoint                     | Description                                                             | |-----------------------------------------|-------------------------------------------------------------------------| | Scripts                                 | Add client-side code to a store                                         |
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

namespace BigCommerce\Scripts;

/**
 * BodyTest Class Doc Comment
 *
 * @category    Class
 * @description Body
 * @package     BigCommerce\Scripts
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BodyTest extends \PHPUnit_Framework_TestCase
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
     * Test "Body"
     */
    public function testBody()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "html"
     */
    public function testPropertyHtml()
    {
    }

    /**
     * Test attribute "src"
     */
    public function testPropertySrc()
    {
    }

    /**
     * Test attribute "auto_uninstall"
     */
    public function testPropertyAutoUninstall()
    {
    }

    /**
     * Test attribute "load_method"
     */
    public function testPropertyLoadMethod()
    {
    }

    /**
     * Test attribute "location"
     */
    public function testPropertyLocation()
    {
    }

    /**
     * Test attribute "visibility"
     */
    public function testPropertyVisibility()
    {
    }

    /**
     * Test attribute "kind"
     */
    public function testPropertyKind()
    {
    }

    /**
     * Test attribute "api_client_id"
     */
    public function testPropertyApiClientId()
    {
    }

    /**
     * Test attribute "consent_category"
     */
    public function testPropertyConsentCategory()
    {
    }

    /**
     * Test attribute "enabled"
     */
    public function testPropertyEnabled()
    {
    }
}
