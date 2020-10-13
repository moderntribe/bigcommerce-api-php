<?php
/**
 * ThemesApiTest
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Themes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Themes
 *
 * Backup, restore, download, and activate themes; and, get the status of theme jobs and read theme configurations.  - [OAuth Scopes](#oauth-scopes) - [Authentication](#authentication)  For more information on OAuth Scopes, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Authentication  Requests can be authenticated by sending a `client_id` and `access_token` via `X-Auth-Client` and `X-Auth-Token` HTTP headers:  ```http GET /stores/{$$.env.store_hash}/v3/catalog/summary host: api.bigcommerce.com Accept: application/json X-Auth-Client: {client_id} X-Auth-Token: {access_token} ```  ### OAuth Scopes | UI Name                                      | Permission | Parameter                                     | |----------------------------------------------|------------|-----------------------------------------------| | Themes                                       | modify     | `store_themes_manage`                         |
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace BigCommerce\Themes;

use BigCommerce\Themes\Configuration;
use BigCommerce\Themes\ApiException;
use BigCommerce\Themes\ObjectSerializer;
use BigCommerce\Themes\Api\ThemesApi;

/**
 * ThemesApiTest Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Themes
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ThemesApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
        $secrets = json_decode(file_get_contents(__DIR__ . '/../../../../../gulpfile.config.json'), true);

        $config = Configuration::getDefaultConfiguration();
        $config->setApiKey('X-Auth-Client', $secrets['clientId']);
        $config->setApiKey('X-Auth-Token', $secrets['accessToken']);
        $config->setHost(str_replace('{$$.env.store_hash}', $secrets['storeId'], $config->getHost()));            
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
     * Test case for deleteStoreTheme
     *
     * Delete a Theme.
     *
     */
    public function testDeleteStoreTheme()
    {
    }

    /**
     * Test case for getStoreTheme
     *
     * Get a Theme.
     *
     */
    public function testGetStoreTheme()
    {
    }

    /**
     * Test case for getStoreThemes
     *
     * Get all Themes.
     *
     */
    public function testGetStoreThemes()
    {
        $apiInstance = new ThemesApi(
            new \GuzzleHttp\Client(),
            Configuration::getDefaultConfiguration()
        );

        try {
            $result = $apiInstance->getStoreThemes('application/json', 'application/json');
            $this->assertTrue(is_object($result));
            $this->assertTrue(is_array($result->getData()));
            $this->assertTrue(is_object($result->getMeta()));
            $this->assertEquals('Light', $result->getData()[0]->getVariations()[0]->getName());
        } catch (Exception $e) {
            echo 'Exception when calling ThemesApi->getStoreThemes: ', $e->getMessage(), PHP_EOL;
        }      
    }

    /**
     * Test case for uploadTheme
     *
     * Upload a Theme.
     *
     */
    public function testUploadTheme()
    {
    }
}
