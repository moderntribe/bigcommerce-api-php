<?php
/**
 * CategoryMetafieldsApi
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
 * CategoryMetafieldsApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoryMetafieldsApi
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
     * Operation createCategoryMetafield
     *
     * Create a Category Metafield
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPost2 $body body (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\MetafieldResponse
     */
    public function createCategoryMetafield($body, $accept, $content_type, $category_id)
    {
        list($response) = $this->createCategoryMetafieldWithHttpInfo($body, $accept, $content_type, $category_id);
        return $response;
    }

    /**
     * Operation createCategoryMetafieldWithHttpInfo
     *
     * Create a Category Metafield
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPost2 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\MetafieldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCategoryMetafieldWithHttpInfo($body, $accept, $content_type, $category_id)
    {
        $returnType = '\BigCommerce\Catalog\Model\MetafieldResponse';
        $request = $this->createCategoryMetafieldRequest($body, $accept, $content_type, $category_id);

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
                        '\BigCommerce\Catalog\Model\MetafieldResponse',
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
     * Operation createCategoryMetafieldAsync
     *
     * Create a Category Metafield
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPost2 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCategoryMetafieldAsync($body, $accept, $content_type, $category_id)
    {
        return $this->createCategoryMetafieldAsyncWithHttpInfo($body, $accept, $content_type, $category_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createCategoryMetafieldAsyncWithHttpInfo
     *
     * Create a Category Metafield
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPost2 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCategoryMetafieldAsyncWithHttpInfo($body, $accept, $content_type, $category_id)
    {
        $returnType = '\BigCommerce\Catalog\Model\MetafieldResponse';
        $request = $this->createCategoryMetafieldRequest($body, $accept, $content_type, $category_id);

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
     * Create request for operation 'createCategoryMetafield'
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPost2 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createCategoryMetafieldRequest($body, $accept, $content_type, $category_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createCategoryMetafield'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling createCategoryMetafield'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling createCategoryMetafield'
            );
        }
        // verify the required parameter 'category_id' is set
        if ($category_id === null || (is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $category_id when calling createCategoryMetafield'
            );
        }

        $resourcePath = '/catalog/categories/{category_id}/metafields';
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
        if ($category_id !== null) {
            $resourcePath = str_replace(
                '{' . 'category_id' . '}',
                ObjectSerializer::toPathValue($category_id),
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteCategoryMetafieldById
     *
     * Delete a Category Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteCategoryMetafieldById($metafield_id, $category_id, $accept, $content_type)
    {
        $this->deleteCategoryMetafieldByIdWithHttpInfo($metafield_id, $category_id, $accept, $content_type);
    }

    /**
     * Operation deleteCategoryMetafieldByIdWithHttpInfo
     *
     * Delete a Category Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCategoryMetafieldByIdWithHttpInfo($metafield_id, $category_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteCategoryMetafieldByIdRequest($metafield_id, $category_id, $accept, $content_type);

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
     * Operation deleteCategoryMetafieldByIdAsync
     *
     * Delete a Category Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCategoryMetafieldByIdAsync($metafield_id, $category_id, $accept, $content_type)
    {
        return $this->deleteCategoryMetafieldByIdAsyncWithHttpInfo($metafield_id, $category_id, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteCategoryMetafieldByIdAsyncWithHttpInfo
     *
     * Delete a Category Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCategoryMetafieldByIdAsyncWithHttpInfo($metafield_id, $category_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteCategoryMetafieldByIdRequest($metafield_id, $category_id, $accept, $content_type);

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
     * Create request for operation 'deleteCategoryMetafieldById'
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteCategoryMetafieldByIdRequest($metafield_id, $category_id, $accept, $content_type)
    {
        // verify the required parameter 'metafield_id' is set
        if ($metafield_id === null || (is_array($metafield_id) && count($metafield_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $metafield_id when calling deleteCategoryMetafieldById'
            );
        }
        // verify the required parameter 'category_id' is set
        if ($category_id === null || (is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $category_id when calling deleteCategoryMetafieldById'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling deleteCategoryMetafieldById'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling deleteCategoryMetafieldById'
            );
        }

        $resourcePath = '/catalog/categories/{category_id}/metafields/{metafield_id}';
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
        if ($metafield_id !== null) {
            $resourcePath = str_replace(
                '{' . 'metafield_id' . '}',
                ObjectSerializer::toPathValue($metafield_id),
                $resourcePath
            );
        }
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                '{' . 'category_id' . '}',
                ObjectSerializer::toPathValue($category_id),
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
     * Operation getCategoryMetafieldByCategoryId
     *
     * Get a Category Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\MetafieldResponse2
     */
    public function getCategoryMetafieldByCategoryId($metafield_id, $category_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        list($response) = $this->getCategoryMetafieldByCategoryIdWithHttpInfo($metafield_id, $category_id, $accept, $content_type, $include_fields, $exclude_fields);
        return $response;
    }

    /**
     * Operation getCategoryMetafieldByCategoryIdWithHttpInfo
     *
     * Get a Category Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\MetafieldResponse2, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryMetafieldByCategoryIdWithHttpInfo($metafield_id, $category_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\MetafieldResponse2';
        $request = $this->getCategoryMetafieldByCategoryIdRequest($metafield_id, $category_id, $accept, $content_type, $include_fields, $exclude_fields);

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
                        '\BigCommerce\Catalog\Model\MetafieldResponse2',
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
     * Operation getCategoryMetafieldByCategoryIdAsync
     *
     * Get a Category Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryMetafieldByCategoryIdAsync($metafield_id, $category_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        return $this->getCategoryMetafieldByCategoryIdAsyncWithHttpInfo($metafield_id, $category_id, $accept, $content_type, $include_fields, $exclude_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCategoryMetafieldByCategoryIdAsyncWithHttpInfo
     *
     * Get a Category Metafield
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryMetafieldByCategoryIdAsyncWithHttpInfo($metafield_id, $category_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\MetafieldResponse2';
        $request = $this->getCategoryMetafieldByCategoryIdRequest($metafield_id, $category_id, $accept, $content_type, $include_fields, $exclude_fields);

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
     * Create request for operation 'getCategoryMetafieldByCategoryId'
     *
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCategoryMetafieldByCategoryIdRequest($metafield_id, $category_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        // verify the required parameter 'metafield_id' is set
        if ($metafield_id === null || (is_array($metafield_id) && count($metafield_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $metafield_id when calling getCategoryMetafieldByCategoryId'
            );
        }
        // verify the required parameter 'category_id' is set
        if ($category_id === null || (is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $category_id when calling getCategoryMetafieldByCategoryId'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getCategoryMetafieldByCategoryId'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getCategoryMetafieldByCategoryId'
            );
        }

        $resourcePath = '/catalog/categories/{category_id}/metafields/{metafield_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_fields !== null) {
            $queryParams['include_fields'] = ObjectSerializer::toQueryValue($include_fields, null);
        }
        // query params
        if ($exclude_fields !== null) {
            $queryParams['exclude_fields'] = ObjectSerializer::toQueryValue($exclude_fields, null);
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
        if ($metafield_id !== null) {
            $resourcePath = str_replace(
                '{' . 'metafield_id' . '}',
                ObjectSerializer::toPathValue($metafield_id),
                $resourcePath
            );
        }
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                '{' . 'category_id' . '}',
                ObjectSerializer::toPathValue($category_id),
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
     * Operation getCategoryMetafieldsByCategoryId
     *
     * Get All Category Metafields
     *
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin idin (optional)
     * @param  int[] $idnot_in idnot_in (optional)
     * @param  int[] $idmin idmin (optional)
     * @param  int[] $idmax idmax (optional)
     * @param  int[] $idgreater idgreater (optional)
     * @param  int[] $idless idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#x27;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#x27;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\MetaFieldCollectionResponse1
     */
    public function getCategoryMetafieldsByCategoryId($category_id, $accept, $content_type, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        list($response) = $this->getCategoryMetafieldsByCategoryIdWithHttpInfo($category_id, $accept, $content_type, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields);
        return $response;
    }

    /**
     * Operation getCategoryMetafieldsByCategoryIdWithHttpInfo
     *
     * Get All Category Metafields
     *
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#x27;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#x27;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\MetaFieldCollectionResponse1, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryMetafieldsByCategoryIdWithHttpInfo($category_id, $accept, $content_type, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\MetaFieldCollectionResponse1';
        $request = $this->getCategoryMetafieldsByCategoryIdRequest($category_id, $accept, $content_type, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields);

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
                        '\BigCommerce\Catalog\Model\MetaFieldCollectionResponse1',
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
     * Operation getCategoryMetafieldsByCategoryIdAsync
     *
     * Get All Category Metafields
     *
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#x27;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#x27;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryMetafieldsByCategoryIdAsync($category_id, $accept, $content_type, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        return $this->getCategoryMetafieldsByCategoryIdAsyncWithHttpInfo($category_id, $accept, $content_type, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCategoryMetafieldsByCategoryIdAsyncWithHttpInfo
     *
     * Get All Category Metafields
     *
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#x27;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#x27;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCategoryMetafieldsByCategoryIdAsyncWithHttpInfo($category_id, $accept, $content_type, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\MetaFieldCollectionResponse1';
        $request = $this->getCategoryMetafieldsByCategoryIdRequest($category_id, $accept, $content_type, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields);

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
     * Create request for operation 'getCategoryMetafieldsByCategoryId'
     *
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $id Filter items by id. (optional)
     * @param  int[] $idin (optional)
     * @param  int[] $idnot_in (optional)
     * @param  int[] $idmin (optional)
     * @param  int[] $idmax (optional)
     * @param  int[] $idgreater (optional)
     * @param  int[] $idless (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $key Filter based on a metafield&#x27;s key. (optional)
     * @param  string $namespace Filter based on a metafield&#x27;s namespace. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCategoryMetafieldsByCategoryIdRequest($category_id, $accept, $content_type, $id = null, $idin = null, $idnot_in = null, $idmin = null, $idmax = null, $idgreater = null, $idless = null, $page = null, $limit = null, $key = null, $namespace = null, $include_fields = null, $exclude_fields = null)
    {
        // verify the required parameter 'category_id' is set
        if ($category_id === null || (is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $category_id when calling getCategoryMetafieldsByCategoryId'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getCategoryMetafieldsByCategoryId'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getCategoryMetafieldsByCategoryId'
            );
        }

        $resourcePath = '/catalog/categories/{category_id}/metafields';
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
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key, null);
        }
        // query params
        if ($namespace !== null) {
            $queryParams['namespace'] = ObjectSerializer::toQueryValue($namespace, null);
        }
        // query params
        if ($include_fields !== null) {
            $queryParams['include_fields'] = ObjectSerializer::toQueryValue($include_fields, null);
        }
        // query params
        if ($exclude_fields !== null) {
            $queryParams['exclude_fields'] = ObjectSerializer::toQueryValue($exclude_fields, null);
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
        if ($category_id !== null) {
            $resourcePath = str_replace(
                '{' . 'category_id' . '}',
                ObjectSerializer::toPathValue($category_id),
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
     * Operation updateCategoryMetafield
     *
     * Update a Category Metafield
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPut3 $body body (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\MetafieldResponse1
     */
    public function updateCategoryMetafield($body, $accept, $content_type, $metafield_id, $category_id)
    {
        list($response) = $this->updateCategoryMetafieldWithHttpInfo($body, $accept, $content_type, $metafield_id, $category_id);
        return $response;
    }

    /**
     * Operation updateCategoryMetafieldWithHttpInfo
     *
     * Update a Category Metafield
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPut3 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\MetafieldResponse1, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCategoryMetafieldWithHttpInfo($body, $accept, $content_type, $metafield_id, $category_id)
    {
        $returnType = '\BigCommerce\Catalog\Model\MetafieldResponse1';
        $request = $this->updateCategoryMetafieldRequest($body, $accept, $content_type, $metafield_id, $category_id);

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
                        '\BigCommerce\Catalog\Model\MetafieldResponse1',
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
     * Operation updateCategoryMetafieldAsync
     *
     * Update a Category Metafield
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPut3 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCategoryMetafieldAsync($body, $accept, $content_type, $metafield_id, $category_id)
    {
        return $this->updateCategoryMetafieldAsyncWithHttpInfo($body, $accept, $content_type, $metafield_id, $category_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateCategoryMetafieldAsyncWithHttpInfo
     *
     * Update a Category Metafield
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPut3 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateCategoryMetafieldAsyncWithHttpInfo($body, $accept, $content_type, $metafield_id, $category_id)
    {
        $returnType = '\BigCommerce\Catalog\Model\MetafieldResponse1';
        $request = $this->updateCategoryMetafieldRequest($body, $accept, $content_type, $metafield_id, $category_id);

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
     * Create request for operation 'updateCategoryMetafield'
     *
     * @param  \BigCommerce\Catalog\Model\MetafieldPut3 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $metafield_id The ID of the &#x60;Metafield&#x60;. (required)
     * @param  int $category_id The ID of the &#x60;Category&#x60; to which the resource belongs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateCategoryMetafieldRequest($body, $accept, $content_type, $metafield_id, $category_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateCategoryMetafield'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling updateCategoryMetafield'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling updateCategoryMetafield'
            );
        }
        // verify the required parameter 'metafield_id' is set
        if ($metafield_id === null || (is_array($metafield_id) && count($metafield_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $metafield_id when calling updateCategoryMetafield'
            );
        }
        // verify the required parameter 'category_id' is set
        if ($category_id === null || (is_array($category_id) && count($category_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $category_id when calling updateCategoryMetafield'
            );
        }

        $resourcePath = '/catalog/categories/{category_id}/metafields/{metafield_id}';
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
        if ($metafield_id !== null) {
            $resourcePath = str_replace(
                '{' . 'metafield_id' . '}',
                ObjectSerializer::toPathValue($metafield_id),
                $resourcePath
            );
        }
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                '{' . 'category_id' . '}',
                ObjectSerializer::toPathValue($category_id),
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
