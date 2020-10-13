<?php
/**
 * ProductsApi
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
 * ProductsApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsApi
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
     * Operation createProduct
     *
     * Create a Product
     *
     * @param  \BigCommerce\Catalog\Model\ProductBase1 $body body (required)
     * @param  string $content_type content_type (required)
     * @param  string $accept accept (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\ProductResponse
     */
    public function createProduct($body, $content_type, $accept, $include_fields = null)
    {
        list($response) = $this->createProductWithHttpInfo($body, $content_type, $accept, $include_fields);
        return $response;
    }

    /**
     * Operation createProductWithHttpInfo
     *
     * Create a Product
     *
     * @param  \BigCommerce\Catalog\Model\ProductBase1 $body (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\ProductResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProductWithHttpInfo($body, $content_type, $accept, $include_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ProductResponse';
        $request = $this->createProductRequest($body, $content_type, $accept, $include_fields);

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
                        '\BigCommerce\Catalog\Model\ProductResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createProductAsync
     *
     * Create a Product
     *
     * @param  \BigCommerce\Catalog\Model\ProductBase1 $body (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createProductAsync($body, $content_type, $accept, $include_fields = null)
    {
        return $this->createProductAsyncWithHttpInfo($body, $content_type, $accept, $include_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createProductAsyncWithHttpInfo
     *
     * Create a Product
     *
     * @param  \BigCommerce\Catalog\Model\ProductBase1 $body (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createProductAsyncWithHttpInfo($body, $content_type, $accept, $include_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ProductResponse';
        $request = $this->createProductRequest($body, $content_type, $accept, $include_fields);

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
     * Create request for operation 'createProduct'
     *
     * @param  \BigCommerce\Catalog\Model\ProductBase1 $body (required)
     * @param  string $content_type (required)
     * @param  string $accept (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createProductRequest($body, $content_type, $accept, $include_fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createProduct'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling createProduct'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling createProduct'
            );
        }

        $resourcePath = '/catalog/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_fields !== null) {
            $queryParams['include_fields'] = ObjectSerializer::toQueryValue($include_fields, null);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteProductById
     *
     * Delete a Product
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteProductById($product_id, $accept, $content_type)
    {
        $this->deleteProductByIdWithHttpInfo($product_id, $accept, $content_type);
    }

    /**
     * Operation deleteProductByIdWithHttpInfo
     *
     * Delete a Product
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProductByIdWithHttpInfo($product_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteProductByIdRequest($product_id, $accept, $content_type);

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
     * Operation deleteProductByIdAsync
     *
     * Delete a Product
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProductByIdAsync($product_id, $accept, $content_type)
    {
        return $this->deleteProductByIdAsyncWithHttpInfo($product_id, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteProductByIdAsyncWithHttpInfo
     *
     * Delete a Product
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteProductByIdAsyncWithHttpInfo($product_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteProductByIdRequest($product_id, $accept, $content_type);

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
     * Create request for operation 'deleteProductById'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteProductByIdRequest($product_id, $accept, $content_type)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling deleteProductById'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling deleteProductById'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling deleteProductById'
            );
        }

        $resourcePath = '/catalog/products/{product_id}';
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

        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
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
     * Operation getProductById
     *
     * Get a Product
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\ProductResponse
     */
    public function getProductById($product_id, $accept, $content_type, $include = null, $include_fields = null, $exclude_fields = null, $price_list_id = null)
    {
        list($response) = $this->getProductByIdWithHttpInfo($product_id, $accept, $content_type, $include, $include_fields, $exclude_fields, $price_list_id);
        return $response;
    }

    /**
     * Operation getProductByIdWithHttpInfo
     *
     * Get a Product
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\ProductResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductByIdWithHttpInfo($product_id, $accept, $content_type, $include = null, $include_fields = null, $exclude_fields = null, $price_list_id = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ProductResponse';
        $request = $this->getProductByIdRequest($product_id, $accept, $content_type, $include, $include_fields, $exclude_fields, $price_list_id);

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
                        '\BigCommerce\Catalog\Model\ProductResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\NotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductByIdAsync
     *
     * Get a Product
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductByIdAsync($product_id, $accept, $content_type, $include = null, $include_fields = null, $exclude_fields = null, $price_list_id = null)
    {
        return $this->getProductByIdAsyncWithHttpInfo($product_id, $accept, $content_type, $include, $include_fields, $exclude_fields, $price_list_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductByIdAsyncWithHttpInfo
     *
     * Get a Product
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductByIdAsyncWithHttpInfo($product_id, $accept, $content_type, $include = null, $include_fields = null, $exclude_fields = null, $price_list_id = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ProductResponse';
        $request = $this->getProductByIdRequest($product_id, $accept, $content_type, $include, $include_fields, $exclude_fields, $price_list_id);

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
     * Create request for operation 'getProductById'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProductByIdRequest($product_id, $accept, $content_type, $include = null, $include_fields = null, $exclude_fields = null, $price_list_id = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling getProductById'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getProductById'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getProductById'
            );
        }

        $resourcePath = '/catalog/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include !== null) {
            $queryParams['include'] = ObjectSerializer::toQueryValue($include, null);
        }
        // query params
        if ($include_fields !== null) {
            $queryParams['include_fields'] = ObjectSerializer::toQueryValue($include_fields, null);
        }
        // query params
        if ($exclude_fields !== null) {
            $queryParams['exclude_fields'] = ObjectSerializer::toQueryValue($exclude_fields, null);
        }
        // query params
        if ($price_list_id !== null) {
            $queryParams['price_list_id'] = ObjectSerializer::toQueryValue($price_list_id, null);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProducts
     *
     * Get All Products
     *
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin idin (optional)
     * @param  int[] $idnot_in idnot_in (optional)
     * @param  int[] $idmin idmin (optional)
     * @param  int[] $idmax idmax (optional)
     * @param  int[] $idgreater idgreater (optional)
     * @param  int[] $idless idless (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $upc Filter items by upc. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. &#x60;0&#x60; for true, &#x60;1&#x60; for false. (optional)
     * @param  int $is_free_shipping Filter items by is_free_shipping. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $inventory_low Filter items by inventory_low. Values: 1, 0. (optional)
     * @param  int $out_of_stock Filter items by out_of_stock. To enable the filter, pass &#x60;out_of_stock&#x60;&#x3D;&#x60;1&#x60;. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     * @param  string $keyword_context Set context for a product search. (optional)
     * @param  int $status Filter items by status. (optional)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  string $availability Filter items by availability. Values are: available, disabled, preorder. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $direction Sort direction. Acceptable values are: &#x60;asc&#x60;, &#x60;desc&#x60;. (optional)
     * @param  string $sort Field name to sort by. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\InlineResponse200
     */
    public function getProducts($id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $name = null, $sku = null, $upc = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $is_free_shipping = null, $inventory_level = null, $inventory_low = null, $out_of_stock = null, $total_sold = null, $type = null, $categories = null, $keyword = null, $keyword_context = null, $status = null, $include = null, $include_fields = null, $exclude_fields = null, $availability = null, $price_list_id = null, $page = null, $limit = null, $direction = null, $sort = null)
    {
        list($response) = $this->getProductsWithHttpInfo($id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $name, $sku, $upc, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $is_free_shipping, $inventory_level, $inventory_low, $out_of_stock, $total_sold, $type, $categories, $keyword, $keyword_context, $status, $include, $include_fields, $exclude_fields, $availability, $price_list_id, $page, $limit, $direction, $sort);
        return $response;
    }

    /**
     * Operation getProductsWithHttpInfo
     *
     * Get All Products
     *
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $upc Filter items by upc. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. &#x60;0&#x60; for true, &#x60;1&#x60; for false. (optional)
     * @param  int $is_free_shipping Filter items by is_free_shipping. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $inventory_low Filter items by inventory_low. Values: 1, 0. (optional)
     * @param  int $out_of_stock Filter items by out_of_stock. To enable the filter, pass &#x60;out_of_stock&#x60;&#x3D;&#x60;1&#x60;. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     * @param  string $keyword_context Set context for a product search. (optional)
     * @param  int $status Filter items by status. (optional)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  string $availability Filter items by availability. Values are: available, disabled, preorder. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $direction Sort direction. Acceptable values are: &#x60;asc&#x60;, &#x60;desc&#x60;. (optional)
     * @param  string $sort Field name to sort by. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductsWithHttpInfo($id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $name = null, $sku = null, $upc = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $is_free_shipping = null, $inventory_level = null, $inventory_low = null, $out_of_stock = null, $total_sold = null, $type = null, $categories = null, $keyword = null, $keyword_context = null, $status = null, $include = null, $include_fields = null, $exclude_fields = null, $availability = null, $price_list_id = null, $page = null, $limit = null, $direction = null, $sort = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\InlineResponse200';
        $request = $this->getProductsRequest($id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $name, $sku, $upc, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $is_free_shipping, $inventory_level, $inventory_low, $out_of_stock, $total_sold, $type, $categories, $keyword, $keyword_context, $status, $include, $include_fields, $exclude_fields, $availability, $price_list_id, $page, $limit, $direction, $sort);

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
                        '\BigCommerce\Catalog\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductsAsync
     *
     * Get All Products
     *
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $upc Filter items by upc. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. &#x60;0&#x60; for true, &#x60;1&#x60; for false. (optional)
     * @param  int $is_free_shipping Filter items by is_free_shipping. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $inventory_low Filter items by inventory_low. Values: 1, 0. (optional)
     * @param  int $out_of_stock Filter items by out_of_stock. To enable the filter, pass &#x60;out_of_stock&#x60;&#x3D;&#x60;1&#x60;. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     * @param  string $keyword_context Set context for a product search. (optional)
     * @param  int $status Filter items by status. (optional)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  string $availability Filter items by availability. Values are: available, disabled, preorder. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $direction Sort direction. Acceptable values are: &#x60;asc&#x60;, &#x60;desc&#x60;. (optional)
     * @param  string $sort Field name to sort by. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductsAsync($id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $name = null, $sku = null, $upc = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $is_free_shipping = null, $inventory_level = null, $inventory_low = null, $out_of_stock = null, $total_sold = null, $type = null, $categories = null, $keyword = null, $keyword_context = null, $status = null, $include = null, $include_fields = null, $exclude_fields = null, $availability = null, $price_list_id = null, $page = null, $limit = null, $direction = null, $sort = null)
    {
        return $this->getProductsAsyncWithHttpInfo($id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $name, $sku, $upc, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $is_free_shipping, $inventory_level, $inventory_low, $out_of_stock, $total_sold, $type, $categories, $keyword, $keyword_context, $status, $include, $include_fields, $exclude_fields, $availability, $price_list_id, $page, $limit, $direction, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductsAsyncWithHttpInfo
     *
     * Get All Products
     *
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $upc Filter items by upc. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. &#x60;0&#x60; for true, &#x60;1&#x60; for false. (optional)
     * @param  int $is_free_shipping Filter items by is_free_shipping. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $inventory_low Filter items by inventory_low. Values: 1, 0. (optional)
     * @param  int $out_of_stock Filter items by out_of_stock. To enable the filter, pass &#x60;out_of_stock&#x60;&#x3D;&#x60;1&#x60;. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     * @param  string $keyword_context Set context for a product search. (optional)
     * @param  int $status Filter items by status. (optional)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  string $availability Filter items by availability. Values are: available, disabled, preorder. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $direction Sort direction. Acceptable values are: &#x60;asc&#x60;, &#x60;desc&#x60;. (optional)
     * @param  string $sort Field name to sort by. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductsAsyncWithHttpInfo($id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $name = null, $sku = null, $upc = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $is_free_shipping = null, $inventory_level = null, $inventory_low = null, $out_of_stock = null, $total_sold = null, $type = null, $categories = null, $keyword = null, $keyword_context = null, $status = null, $include = null, $include_fields = null, $exclude_fields = null, $availability = null, $price_list_id = null, $page = null, $limit = null, $direction = null, $sort = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\InlineResponse200';
        $request = $this->getProductsRequest($id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $name, $sku, $upc, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $is_free_shipping, $inventory_level, $inventory_low, $out_of_stock, $total_sold, $type, $categories, $keyword, $keyword_context, $status, $include, $include_fields, $exclude_fields, $availability, $price_list_id, $page, $limit, $direction, $sort);

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
     * Create request for operation 'getProducts'
     *
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $upc Filter items by upc. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $weight Filter items by weight. (optional)
     * @param  string $condition Filter items by condition. (optional)
     * @param  int $brand_id Filter items by brand_id. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; (optional)
     * @param  \DateTime $date_last_imported Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  bool $is_visible Filter items by if visible on the storefront. (optional)
     * @param  int $is_featured Filter items by is_featured. &#x60;0&#x60; for true, &#x60;1&#x60; for false. (optional)
     * @param  int $is_free_shipping Filter items by is_free_shipping. (optional)
     * @param  int $inventory_level Filter items by inventory_level. (optional)
     * @param  int $inventory_low Filter items by inventory_low. Values: 1, 0. (optional)
     * @param  int $out_of_stock Filter items by out_of_stock. To enable the filter, pass &#x60;out_of_stock&#x60;&#x3D;&#x60;1&#x60;. (optional)
     * @param  int $total_sold Filter items by total_sold. (optional)
     * @param  string $type Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. (optional)
     * @param  int $categories Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. (optional)
     * @param  string $keyword Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. (optional)
     * @param  string $keyword_context Set context for a product search. (optional)
     * @param  int $status Filter items by status. (optional)
     * @param  string $include Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     * @param  string $availability Filter items by availability. Values are: available, disabled, preorder. (optional)
     * @param  int $price_list_id This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $direction Sort direction. Acceptable values are: &#x60;asc&#x60;, &#x60;desc&#x60;. (optional)
     * @param  string $sort Field name to sort by. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getProductsRequest($id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $name = null, $sku = null, $upc = null, $price = null, $weight = null, $condition = null, $brand_id = null, $date_modified = null, $date_last_imported = null, $is_visible = null, $is_featured = null, $is_free_shipping = null, $inventory_level = null, $inventory_low = null, $out_of_stock = null, $total_sold = null, $type = null, $categories = null, $keyword = null, $keyword_context = null, $status = null, $include = null, $include_fields = null, $exclude_fields = null, $availability = null, $price_list_id = null, $page = null, $limit = null, $direction = null, $sort = null)
    {

        $resourcePath = '/catalog/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id, null);
        }
        // query params
        if (is_array($idin)) {
            $idin = ObjectSerializer::serializeCollection($idin, 'csv', true);
        }
        if ($idin !== null) {
            $queryParams['id:in'] = ObjectSerializer::toQueryValue($idin, null);
        }
        // query params
        if (is_array($idnot_in)) {
            $idnot_in = ObjectSerializer::serializeCollection($idnot_in, 'csv', true);
        }
        if ($idnot_in !== null) {
            $queryParams['id:not_in'] = ObjectSerializer::toQueryValue($idnot_in, null);
        }
        // query params
        if (is_array($idmin)) {
            $idmin = ObjectSerializer::serializeCollection($idmin, 'csv', true);
        }
        if ($idmin !== null) {
            $queryParams['id:min'] = ObjectSerializer::toQueryValue($idmin, null);
        }
        // query params
        if (is_array($idmax)) {
            $idmax = ObjectSerializer::serializeCollection($idmax, 'csv', true);
        }
        if ($idmax !== null) {
            $queryParams['id:max'] = ObjectSerializer::toQueryValue($idmax, null);
        }
        // query params
        if (is_array($idgreater)) {
            $idgreater = ObjectSerializer::serializeCollection($idgreater, 'csv', true);
        }
        if ($idgreater !== null) {
            $queryParams['id:greater'] = ObjectSerializer::toQueryValue($idgreater, null);
        }
        // query params
        if (is_array($idless)) {
            $idless = ObjectSerializer::serializeCollection($idless, 'csv', true);
        }
        if ($idless !== null) {
            $queryParams['id:less'] = ObjectSerializer::toQueryValue($idless, null);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }
        // query params
        if ($sku !== null) {
            $queryParams['sku'] = ObjectSerializer::toQueryValue($sku, null);
        }
        // query params
        if ($upc !== null) {
            $queryParams['upc'] = ObjectSerializer::toQueryValue($upc, null);
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
        if ($is_free_shipping !== null) {
            $queryParams['is_free_shipping'] = ObjectSerializer::toQueryValue($is_free_shipping, null);
        }
        // query params
        if ($inventory_level !== null) {
            $queryParams['inventory_level'] = ObjectSerializer::toQueryValue($inventory_level, null);
        }
        // query params
        if ($inventory_low !== null) {
            $queryParams['inventory_low'] = ObjectSerializer::toQueryValue($inventory_low, null);
        }
        // query params
        if ($out_of_stock !== null) {
            $queryParams['out_of_stock'] = ObjectSerializer::toQueryValue($out_of_stock, null);
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
        // query params
        if ($keyword_context !== null) {
            $queryParams['keyword_context'] = ObjectSerializer::toQueryValue($keyword_context, null);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status, null);
        }
        // query params
        if ($include !== null) {
            $queryParams['include'] = ObjectSerializer::toQueryValue($include, null);
        }
        // query params
        if ($include_fields !== null) {
            $queryParams['include_fields'] = ObjectSerializer::toQueryValue($include_fields, null);
        }
        // query params
        if ($exclude_fields !== null) {
            $queryParams['exclude_fields'] = ObjectSerializer::toQueryValue($exclude_fields, null);
        }
        // query params
        if ($availability !== null) {
            $queryParams['availability'] = ObjectSerializer::toQueryValue($availability, null);
        }
        // query params
        if ($price_list_id !== null) {
            $queryParams['price_list_id'] = ObjectSerializer::toQueryValue($price_list_id, null);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($direction !== null) {
            $queryParams['direction'] = ObjectSerializer::toQueryValue($direction, null);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateProduct
     *
     * Update a Product
     *
     * @param  \BigCommerce\Catalog\Model\ProductPut1 $body body (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\ProductResponse
     */
    public function updateProduct($body, $accept, $content_type, $product_id, $include_fields = null)
    {
        list($response) = $this->updateProductWithHttpInfo($body, $accept, $content_type, $product_id, $include_fields);
        return $response;
    }

    /**
     * Operation updateProductWithHttpInfo
     *
     * Update a Product
     *
     * @param  \BigCommerce\Catalog\Model\ProductPut1 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\ProductResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateProductWithHttpInfo($body, $accept, $content_type, $product_id, $include_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ProductResponse';
        $request = $this->updateProductRequest($body, $accept, $content_type, $product_id, $include_fields);

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
                        '\BigCommerce\Catalog\Model\ProductResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\NotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateProductAsync
     *
     * Update a Product
     *
     * @param  \BigCommerce\Catalog\Model\ProductPut1 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateProductAsync($body, $accept, $content_type, $product_id, $include_fields = null)
    {
        return $this->updateProductAsyncWithHttpInfo($body, $accept, $content_type, $product_id, $include_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateProductAsyncWithHttpInfo
     *
     * Update a Product
     *
     * @param  \BigCommerce\Catalog\Model\ProductPut1 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateProductAsyncWithHttpInfo($body, $accept, $content_type, $product_id, $include_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ProductResponse';
        $request = $this->updateProductRequest($body, $accept, $content_type, $product_id, $include_fields);

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
     * Create request for operation 'updateProduct'
     *
     * @param  \BigCommerce\Catalog\Model\ProductPut1 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateProductRequest($body, $accept, $content_type, $product_id, $include_fields = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateProduct'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling updateProduct'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling updateProduct'
            );
        }
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling updateProduct'
            );
        }

        $resourcePath = '/catalog/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_fields !== null) {
            $queryParams['include_fields'] = ObjectSerializer::toQueryValue($include_fields, null);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
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
     * Operation updateProducts
     *
     * Update Products (Batch)
     *
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  object[][] $body body (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\InlineResponse200
     */
    public function updateProducts($accept, $content_type, $body = null, $include_fields = null)
    {
        list($response) = $this->updateProductsWithHttpInfo($accept, $content_type, $body, $include_fields);
        return $response;
    }

    /**
     * Operation updateProductsWithHttpInfo
     *
     * Update Products (Batch)
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  object[][] $body (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateProductsWithHttpInfo($accept, $content_type, $body = null, $include_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\InlineResponse200';
        $request = $this->updateProductsRequest($accept, $content_type, $body, $include_fields);

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
                        '\BigCommerce\Catalog\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\NotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateProductsAsync
     *
     * Update Products (Batch)
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  object[][] $body (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateProductsAsync($accept, $content_type, $body = null, $include_fields = null)
    {
        return $this->updateProductsAsyncWithHttpInfo($accept, $content_type, $body, $include_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateProductsAsyncWithHttpInfo
     *
     * Update Products (Batch)
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  object[][] $body (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateProductsAsyncWithHttpInfo($accept, $content_type, $body = null, $include_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\InlineResponse200';
        $request = $this->updateProductsRequest($accept, $content_type, $body, $include_fields);

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
     * Create request for operation 'updateProducts'
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  object[][] $body (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateProductsRequest($accept, $content_type, $body = null, $include_fields = null)
    {
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling updateProducts'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling updateProducts'
            );
        }

        $resourcePath = '/catalog/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_fields !== null) {
            $queryParams['include_fields'] = ObjectSerializer::toQueryValue($include_fields, null);
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
