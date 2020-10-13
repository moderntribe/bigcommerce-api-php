<?php
/**
 * CatalogApi
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog
 *
 * Manage products, brands and categories. To learn more about catalog resources see [Catalog Overview](https://developer.bigcommerce.com/api-docs/catalog/products-overview).  - [Authentication](#authentication) - [Differentiating Variants & Modifiers](#variants-and-modifiers) - [Available Endpoints](#available-endpoints) - [Resources](#resources)  ## Authentication Requests can be authenticated by sending a `client_id` and `access_token` via `X-Auth-Client` and `X-Auth-Token` HTTP headers:  ```http GET /stores/{$$.env.store_hash}/v3/catalog/summary host: api.bigcommerce.com Accept: application/json X-Auth-Client: {client_id} X-Auth-Token: {access_token} ```  |Header|Parameter|Description| |-|-|-| |`X-Auth-Client`|`client_id`|Obtained by creating an API account or installing an app in a BigCommerce control panel.| |`X-Auth-Token`|`access_token `|Obtained by creating an API account or installing an app in a BigCommerce control panel.|  ### OAuth Scopes | UI Name  | Permission | Parameter                     | |----------|------------|-------------------------------| | Products | modify     | `store_v2_products`           | | Products | read-only  | `store_v2_products_read_only` |  For more information on OAuth Scopes, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  For more information on Authenticating BigCommerce APIs, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Differentiating Variants and Modifiers [Variants](https://support.bigcommerce.com/s/article/Product-Options-v3#variations) represent a physical product made up of [Product Option](https://support.bigcommerce.com/s/article/Product-Options-v3) choices, i.e. a large blue t-shirt. Each variant can have a unique SKU.  Modifiers represent a choice a customer makes about a product that doesn't represent a physical item, i.e. text to be printed on a t-shirt. Assigning a SKU to a modifier will turn it into a variant.  See [Variant Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#variant-options) and [Modifier Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#modifier-options) for more information.  ## Available Endpoints | Resource / Endpoint                     | Description                                                             | |-----------------------------------------|-------------------------------------------------------------------------| | Brand Images                            | Create and manage brand images                                          | | Brand Metafields                        | Create and manage brand metafields                                      | | Brands                                  | Create and manage brands                                                | | Catalog                                 | Create and manage store categories, products, and brands                | | Categories                              | Create and manage categorties                                           | | Category Images                         | Create and manage category images                                       | | Category Metafields                     | Create and manage category metafields                                   | | Product Bulk Pricing Rules              | Create and manage product bulk pricing rules                            | | Product Complex Rules                   | Create and manage product complex rules                                 | | Product Custom Fields                   | Create and manage product custom fields                                 | | Product Images                          | Create and manage product images                                        | | Product Metafields                      | Create and manage product meta fields                                   | | Product Modifier Images                 | Create and manage product modifer images                                | | Product Modifier Values                 | Create and manage product modifier values                               | | Product Modifiers                       | Create and manage product midifiers                                     | | Product Reviews                         | Create and manage product reviews                                       | | Product Variant Option Values           | Create and manage product variant option values                         | | Product Variant Options                 | Create and manage product variant options                               | | Product Variants                        | Create and manage product variants                                      | | Product Videos                          | Create and manage product videos                                        | | Products                                | Create and manage products                                              | | ProductVariant Metafields               | Create and manage product meta flields                                  | | Variants                                | Get and update all variants                                             |  ## Resources  ### Webhooks * [Products](/api-docs/getting-started/webhooks/webhook-events#webhook-events_products) * [Categories](/api-docs/getting-started/webhooks/webhook-events#webhook-events_category) * [SKU](/api-docs/getting-started/webhooks/webhook-events#webhook-events_sku)  ### Related Endpoints * [Catalog API](/api-reference/catalog/catalog-api)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Catalog\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BigCommerce\Catalog\ApiException;
use BigCommerce\Catalog\Configuration;
use BigCommerce\Catalog\HeaderSelector;
use BigCommerce\Catalog\ObjectSerializer;

/**
 * CatalogApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deleteBrands
     *
     * Delete Brands
     *
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $page_title Filter items by page_title. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteBrands($accept, $content_type, $name = null, $page_title = null)
    {
        $this->deleteBrandsWithHttpInfo($accept, $content_type, $name, $page_title);
    }

    /**
     * Operation deleteBrandsWithHttpInfo
     *
     * Delete Brands
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $page_title Filter items by page_title. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBrandsWithHttpInfo($accept, $content_type, $name = null, $page_title = null)
    {
        $returnType = '';
        $request = $this->deleteBrandsRequest($accept, $content_type, $name, $page_title);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteBrandsAsync
     *
     * Delete Brands
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $page_title Filter items by page_title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBrandsAsync($accept, $content_type, $name = null, $page_title = null)
    {
        return $this->deleteBrandsAsyncWithHttpInfo($accept, $content_type, $name, $page_title)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteBrandsAsyncWithHttpInfo
     *
     * Delete Brands
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $page_title Filter items by page_title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteBrandsAsyncWithHttpInfo($accept, $content_type, $name = null, $page_title = null)
    {
        $returnType = '';
        $request = $this->deleteBrandsRequest($accept, $content_type, $name, $page_title);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteBrands'
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $page_title Filter items by page_title. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteBrandsRequest($accept, $content_type, $name = null, $page_title = null)
    {
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling deleteBrands'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling deleteBrands'
            );
        }

        $resourcePath = '/catalog/brands';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }
        // query params
        if ($page_title !== null) {
            $queryParams['page_title'] = ObjectSerializer::toQueryValue($page_title, null);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Client');
        if ($apiKey !== null) {
            $headers['X-Auth-Client'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteProducts
     *
     * Delete Products
     *
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteProducts($accept, $content_type, $name = null, $sku = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $inventory_level = null, $total_sold = null, $type = null, $categories = null, $keyword = null)
    {
        $this->deleteProductsWithHttpInfo($accept, $content_type, $name, $sku, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $inventory_level, $total_sold, $type, $categories, $keyword);
    }

    /**
     * Operation deleteProductsWithHttpInfo
     *
     * Delete Products
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProductsWithHttpInfo($accept, $content_type, $name = null, $sku = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $inventory_level = null, $total_sold = null, $type = null, $categories = null, $keyword = null)
    {
        $returnType = '';
        $request = $this->deleteProductsRequest($accept, $content_type, $name, $sku, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $inventory_level, $total_sold, $type, $categories, $keyword);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteProductsAsync
     *
     * Delete Products
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProductsAsync($accept, $content_type, $name = null, $sku = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $inventory_level = null, $total_sold = null, $type = null, $categories = null, $keyword = null)
    {
        return $this->deleteProductsAsyncWithHttpInfo($accept, $content_type, $name, $sku, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $inventory_level, $total_sold, $type, $categories, $keyword)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteProductsAsyncWithHttpInfo
     *
     * Delete Products
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProductsAsyncWithHttpInfo($accept, $content_type, $name = null, $sku = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $inventory_level = null, $total_sold = null, $type = null, $categories = null, $keyword = null)
    {
        $returnType = '';
        $request = $this->deleteProductsRequest($accept, $content_type, $name, $sku, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $inventory_level, $total_sold, $type, $categories, $keyword);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteProducts'
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteProductsRequest($accept, $content_type, $name = null, $sku = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $inventory_level = null, $total_sold = null, $type = null, $categories = null, $keyword = null)
    {
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling deleteProducts'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling deleteProducts'
            );
        }

        $resourcePath = '/catalog/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }
        // query params
        if ($sku !== null) {
            $queryParams['sku'] = ObjectSerializer::toQueryValue($sku, null);
        }
        // query params
        if ($price !== null) {
            $queryParams['price'] = ObjectSerializer::toQueryValue($price, null);
        }
        // query params
        if ($weight !== null) {
            $queryParams['weight'] = ObjectSerializer::toQueryValue($weight, null);
        }
        // query params
        if ($condition !== null) {
            $queryParams['condition'] = ObjectSerializer::toQueryValue($condition, null);
        }
        // query params
        if ($brand_id !== null) {
            $queryParams['brand_id'] = ObjectSerializer::toQueryValue($brand_id, null);
        }
        // query params
        if ($date_modified !== null) {
            $queryParams['date_modified'] = ObjectSerializer::toQueryValue($date_modified, 'date-time');
        }
        // query params
        if ($date_last_imported !== null) {
            $queryParams['date_last_imported'] = ObjectSerializer::toQueryValue($date_last_imported, 'date-time');
        }
        // query params
        if ($is_visible !== null) {
            $queryParams['is_visible'] = ObjectSerializer::toQueryValue($is_visible, null);
        }
        // query params
        if ($is_featured !== null) {
            $queryParams['is_featured'] = ObjectSerializer::toQueryValue($is_featured, null);
        }
        // query params
        if ($inventory_level !== null) {
            $queryParams['inventory_level'] = ObjectSerializer::toQueryValue($inventory_level, null);
        }
        // query params
        if ($total_sold !== null) {
            $queryParams['total_sold'] = ObjectSerializer::toQueryValue($total_sold, null);
        }
        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type, null);
        }
        // query params
        if ($categories !== null) {
            $queryParams['categories'] = ObjectSerializer::toQueryValue($categories, null);
        }
        // query params
        if ($keyword !== null) {
            $queryParams['keyword'] = ObjectSerializer::toQueryValue($keyword, null);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Client');
        if ($apiKey !== null) {
            $headers['X-Auth-Client'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateVariantsBatch
     *
     * Update Variants (Batch)
     *
     * @param  object[] $body body (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\VariantCollectionResponse2
     */
    public function updateVariantsBatch($body, $accept, $content_type)
    {
        list($response) = $this->updateVariantsBatchWithHttpInfo($body, $accept, $content_type);
        return $response;
    }

    /**
     * Operation updateVariantsBatchWithHttpInfo
     *
     * Update Variants (Batch)
     *
     * @param  object[] $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\VariantCollectionResponse2, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateVariantsBatchWithHttpInfo($body, $accept, $content_type)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantCollectionResponse2';
        $request = $this->updateVariantsBatchRequest($body, $accept, $content_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\VariantCollectionResponse2',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\VariantsBatchErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateVariantsBatchAsync
     *
     * Update Variants (Batch)
     *
     * @param  object[] $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVariantsBatchAsync($body, $accept, $content_type)
    {
        return $this->updateVariantsBatchAsyncWithHttpInfo($body, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateVariantsBatchAsyncWithHttpInfo
     *
     * Update Variants (Batch)
     *
     * @param  object[] $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVariantsBatchAsyncWithHttpInfo($body, $accept, $content_type)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantCollectionResponse2';
        $request = $this->updateVariantsBatchRequest($body, $accept, $content_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateVariantsBatch'
     *
     * @param  object[] $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateVariantsBatchRequest($body, $accept, $content_type)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateVariantsBatch'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling updateVariantsBatch'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling updateVariantsBatch'
            );
        }

        $resourcePath = '/catalog/variants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Client');
        if ($apiKey !== null) {
            $headers['X-Auth-Client'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Auth-Token');
        if ($apiKey !== null) {
            $headers['X-Auth-Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
