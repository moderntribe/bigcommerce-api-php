<?php
/**
 * ProductVariantsApi
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
 * ProductVariantsApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductVariantsApi
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
     * Operation createVariant
     *
     * Create a Product Variant
     *
     * @param  \BigCommerce\Catalog\Model\VariantPost $body body (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\VariantResponse
     */
    public function createVariant($body, $product_id)
    {
        list($response) = $this->createVariantWithHttpInfo($body, $product_id);
        return $response;
    }

    /**
     * Operation createVariantWithHttpInfo
     *
     * Create a Product Variant
     *
     * @param  \BigCommerce\Catalog\Model\VariantPost $body (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\VariantResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createVariantWithHttpInfo($body, $product_id)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantResponse';
        $request = $this->createVariantRequest($body, $product_id);

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
                        '\BigCommerce\Catalog\Model\VariantResponse',
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
     * Operation createVariantAsync
     *
     * Create a Product Variant
     *
     * @param  \BigCommerce\Catalog\Model\VariantPost $body (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createVariantAsync($body, $product_id)
    {
        return $this->createVariantAsyncWithHttpInfo($body, $product_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createVariantAsyncWithHttpInfo
     *
     * Create a Product Variant
     *
     * @param  \BigCommerce\Catalog\Model\VariantPost $body (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createVariantAsyncWithHttpInfo($body, $product_id)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantResponse';
        $request = $this->createVariantRequest($body, $product_id);

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
     * Create request for operation 'createVariant'
     *
     * @param  \BigCommerce\Catalog\Model\VariantPost $body (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createVariantRequest($body, $product_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createVariant'
            );
        }
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling createVariant'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/variants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createVariantImage
     *
     * Create a Variant Image
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body body (optional)
     * @param  string $image_url image_url (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\ImageResponse
     */
    public function createVariantImage($product_id, $variant_id, $body = null, $image_url = null)
    {
        list($response) = $this->createVariantImageWithHttpInfo($product_id, $variant_id, $body, $image_url);
        return $response;
    }

    /**
     * Operation createVariantImageWithHttpInfo
     *
     * Create a Variant Image
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body (optional)
     * @param  string $image_url (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\ImageResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createVariantImageWithHttpInfo($product_id, $variant_id, $body = null, $image_url = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ImageResponse';
        $request = $this->createVariantImageRequest($product_id, $variant_id, $body, $image_url);

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
                        '\BigCommerce\Catalog\Model\ImageResponse',
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
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
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
     * Operation createVariantImageAsync
     *
     * Create a Variant Image
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body (optional)
     * @param  string $image_url (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createVariantImageAsync($product_id, $variant_id, $body = null, $image_url = null)
    {
        return $this->createVariantImageAsyncWithHttpInfo($product_id, $variant_id, $body, $image_url)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createVariantImageAsyncWithHttpInfo
     *
     * Create a Variant Image
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body (optional)
     * @param  string $image_url (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createVariantImageAsyncWithHttpInfo($product_id, $variant_id, $body = null, $image_url = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ImageResponse';
        $request = $this->createVariantImageRequest($product_id, $variant_id, $body, $image_url);

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
     * Create request for operation 'createVariantImage'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body (optional)
     * @param  string $image_url (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createVariantImageRequest($product_id, $variant_id, $body = null, $image_url = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling createVariantImage'
            );
        }
        // verify the required parameter 'variant_id' is set
        if ($variant_id === null || (is_array($variant_id) && count($variant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variant_id when calling createVariantImage'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/variants/{variant_id}/image';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }
        // path params
        if ($variant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'variant_id' . '}',
                ObjectSerializer::toPathValue($variant_id),
                $resourcePath
            );
        }

        // form params
        if ($image_url !== null) {
            $formParams['image_url'] = ObjectSerializer::toFormValue($image_url);
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
                ['application/json', 'multipart/form-data']
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
     * Operation createVariantImage
     *
     * Create a Variant Image
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body body (optional)
     * @param  string $image_url image_url (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\ImageResponse
     */
    public function createVariantImage($product_id, $variant_id, $body = null, $image_url = null)
    {
        list($response) = $this->createVariantImageWithHttpInfo($product_id, $variant_id, $body, $image_url);
        return $response;
    }

    /**
     * Operation createVariantImageWithHttpInfo
     *
     * Create a Variant Image
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body (optional)
     * @param  string $image_url (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\ImageResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createVariantImageWithHttpInfo($product_id, $variant_id, $body = null, $image_url = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ImageResponse';
        $request = $this->createVariantImageRequest($product_id, $variant_id, $body, $image_url);

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
                        '\BigCommerce\Catalog\Model\ImageResponse',
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
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\Catalog\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
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
     * Operation createVariantImageAsync
     *
     * Create a Variant Image
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body (optional)
     * @param  string $image_url (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createVariantImageAsync($product_id, $variant_id, $body = null, $image_url = null)
    {
        return $this->createVariantImageAsyncWithHttpInfo($product_id, $variant_id, $body, $image_url)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createVariantImageAsyncWithHttpInfo
     *
     * Create a Variant Image
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body (optional)
     * @param  string $image_url (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createVariantImageAsyncWithHttpInfo($product_id, $variant_id, $body = null, $image_url = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\ImageResponse';
        $request = $this->createVariantImageRequest($product_id, $variant_id, $body, $image_url);

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
     * Create request for operation 'createVariantImage'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  \BigCommerce\Catalog\Model\ResourceImage $body (optional)
     * @param  string $image_url (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createVariantImageRequest($product_id, $variant_id, $body = null, $image_url = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling createVariantImage'
            );
        }
        // verify the required parameter 'variant_id' is set
        if ($variant_id === null || (is_array($variant_id) && count($variant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variant_id when calling createVariantImage'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/variants/{variant_id}/image';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }
        // path params
        if ($variant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'variant_id' . '}',
                ObjectSerializer::toPathValue($variant_id),
                $resourcePath
            );
        }

        // form params
        if ($image_url !== null) {
            $formParams['image_url'] = ObjectSerializer::toFormValue($image_url);
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
                ['application/json', 'multipart/form-data']
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
     * Operation deleteVariantById
     *
     * Delete a Product Variant
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteVariantById($product_id, $variant_id, $accept, $content_type)
    {
        $this->deleteVariantByIdWithHttpInfo($product_id, $variant_id, $accept, $content_type);
    }

    /**
     * Operation deleteVariantByIdWithHttpInfo
     *
     * Delete a Product Variant
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteVariantByIdWithHttpInfo($product_id, $variant_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteVariantByIdRequest($product_id, $variant_id, $accept, $content_type);

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
     * Operation deleteVariantByIdAsync
     *
     * Delete a Product Variant
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteVariantByIdAsync($product_id, $variant_id, $accept, $content_type)
    {
        return $this->deleteVariantByIdAsyncWithHttpInfo($product_id, $variant_id, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteVariantByIdAsyncWithHttpInfo
     *
     * Delete a Product Variant
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteVariantByIdAsyncWithHttpInfo($product_id, $variant_id, $accept, $content_type)
    {
        $returnType = '';
        $request = $this->deleteVariantByIdRequest($product_id, $variant_id, $accept, $content_type);

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
     * Create request for operation 'deleteVariantById'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteVariantByIdRequest($product_id, $variant_id, $accept, $content_type)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling deleteVariantById'
            );
        }
        // verify the required parameter 'variant_id' is set
        if ($variant_id === null || (is_array($variant_id) && count($variant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variant_id when calling deleteVariantById'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling deleteVariantById'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling deleteVariantById'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/variants/{variant_id}';
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
        // path params
        if ($variant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'variant_id' . '}',
                ObjectSerializer::toPathValue($variant_id),
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
     * Operation getVariantById
     *
     * Get a Product Variant
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\VariantResponse1
     */
    public function getVariantById($product_id, $variant_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        list($response) = $this->getVariantByIdWithHttpInfo($product_id, $variant_id, $accept, $content_type, $include_fields, $exclude_fields);
        return $response;
    }

    /**
     * Operation getVariantByIdWithHttpInfo
     *
     * Get a Product Variant
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\VariantResponse1, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVariantByIdWithHttpInfo($product_id, $variant_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantResponse1';
        $request = $this->getVariantByIdRequest($product_id, $variant_id, $accept, $content_type, $include_fields, $exclude_fields);

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
                        '\BigCommerce\Catalog\Model\VariantResponse1',
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
     * Operation getVariantByIdAsync
     *
     * Get a Product Variant
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVariantByIdAsync($product_id, $variant_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        return $this->getVariantByIdAsyncWithHttpInfo($product_id, $variant_id, $accept, $content_type, $include_fields, $exclude_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVariantByIdAsyncWithHttpInfo
     *
     * Get a Product Variant
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVariantByIdAsyncWithHttpInfo($product_id, $variant_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantResponse1';
        $request = $this->getVariantByIdRequest($product_id, $variant_id, $accept, $content_type, $include_fields, $exclude_fields);

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
     * Create request for operation 'getVariantById'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getVariantByIdRequest($product_id, $variant_id, $accept, $content_type, $include_fields = null, $exclude_fields = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling getVariantById'
            );
        }
        // verify the required parameter 'variant_id' is set
        if ($variant_id === null || (is_array($variant_id) && count($variant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variant_id when calling getVariantById'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getVariantById'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getVariantById'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/variants/{variant_id}';
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }
        // path params
        if ($variant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'variant_id' . '}',
                ObjectSerializer::toPathValue($variant_id),
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
     * Operation getVariantsByProductId
     *
     * Get All Product Variants
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\VariantCollectionResponse
     */
    public function getVariantsByProductId($product_id, $accept, $content_type, $page = null, $limit = null, $include_fields = null, $exclude_fields = null)
    {
        list($response) = $this->getVariantsByProductIdWithHttpInfo($product_id, $accept, $content_type, $page, $limit, $include_fields, $exclude_fields);
        return $response;
    }

    /**
     * Operation getVariantsByProductIdWithHttpInfo
     *
     * Get All Product Variants
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\VariantCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVariantsByProductIdWithHttpInfo($product_id, $accept, $content_type, $page = null, $limit = null, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantCollectionResponse';
        $request = $this->getVariantsByProductIdRequest($product_id, $accept, $content_type, $page, $limit, $include_fields, $exclude_fields);

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
                        '\BigCommerce\Catalog\Model\VariantCollectionResponse',
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
     * Operation getVariantsByProductIdAsync
     *
     * Get All Product Variants
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVariantsByProductIdAsync($product_id, $accept, $content_type, $page = null, $limit = null, $include_fields = null, $exclude_fields = null)
    {
        return $this->getVariantsByProductIdAsyncWithHttpInfo($product_id, $accept, $content_type, $page, $limit, $include_fields, $exclude_fields)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVariantsByProductIdAsyncWithHttpInfo
     *
     * Get All Product Variants
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVariantsByProductIdAsyncWithHttpInfo($product_id, $accept, $content_type, $page = null, $limit = null, $include_fields = null, $exclude_fields = null)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantCollectionResponse';
        $request = $this->getVariantsByProductIdRequest($product_id, $accept, $content_type, $page, $limit, $include_fields, $exclude_fields);

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
     * Create request for operation 'getVariantsByProductId'
     *
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include_fields Fields to include, in a comma-separated list. The ID and the specified fields will be returned. (optional)
     * @param  string $exclude_fields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getVariantsByProductIdRequest($product_id, $accept, $content_type, $page = null, $limit = null, $include_fields = null, $exclude_fields = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling getVariantsByProductId'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getVariantsByProductId'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getVariantsByProductId'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/variants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
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
     * Operation updateVariant
     *
     * Update a Product Variant
     *
     * @param  \BigCommerce\Catalog\Model\ProductVariantPut1 $body body (required)
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\Catalog\Model\VariantResponse1
     */
    public function updateVariant($body, $accept, $content_type, $product_id, $variant_id)
    {
        list($response) = $this->updateVariantWithHttpInfo($body, $accept, $content_type, $product_id, $variant_id);
        return $response;
    }

    /**
     * Operation updateVariantWithHttpInfo
     *
     * Update a Product Variant
     *
     * @param  \BigCommerce\Catalog\Model\ProductVariantPut1 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     *
     * @throws \BigCommerce\Catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Catalog\Model\VariantResponse1, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateVariantWithHttpInfo($body, $accept, $content_type, $product_id, $variant_id)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantResponse1';
        $request = $this->updateVariantRequest($body, $accept, $content_type, $product_id, $variant_id);

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
                        '\BigCommerce\Catalog\Model\VariantResponse1',
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
     * Operation updateVariantAsync
     *
     * Update a Product Variant
     *
     * @param  \BigCommerce\Catalog\Model\ProductVariantPut1 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVariantAsync($body, $accept, $content_type, $product_id, $variant_id)
    {
        return $this->updateVariantAsyncWithHttpInfo($body, $accept, $content_type, $product_id, $variant_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateVariantAsyncWithHttpInfo
     *
     * Update a Product Variant
     *
     * @param  \BigCommerce\Catalog\Model\ProductVariantPut1 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVariantAsyncWithHttpInfo($body, $accept, $content_type, $product_id, $variant_id)
    {
        $returnType = '\BigCommerce\Catalog\Model\VariantResponse1';
        $request = $this->updateVariantRequest($body, $accept, $content_type, $product_id, $variant_id);

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
     * Create request for operation 'updateVariant'
     *
     * @param  \BigCommerce\Catalog\Model\ProductVariantPut1 $body (required)
     * @param  string $accept (required)
     * @param  string $content_type (required)
     * @param  int $product_id The ID of the &#x60;Product&#x60; to which the resource belongs. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateVariantRequest($body, $accept, $content_type, $product_id, $variant_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updateVariant'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling updateVariant'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling updateVariant'
            );
        }
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling updateVariant'
            );
        }
        // verify the required parameter 'variant_id' is set
        if ($variant_id === null || (is_array($variant_id) && count($variant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variant_id when calling updateVariant'
            );
        }

        $resourcePath = '/catalog/products/{product_id}/variants/{variant_id}';
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
        // path params
        if ($variant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'variant_id' . '}',
                ObjectSerializer::toPathValue($variant_id),
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
