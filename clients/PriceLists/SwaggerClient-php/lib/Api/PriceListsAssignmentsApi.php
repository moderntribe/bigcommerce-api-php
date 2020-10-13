<?php
/**
 * PriceListsAssignmentsApi
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\PriceLists
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Price Lists
 *
 * Populate different versions of catalog pricing and assign them to different [customer groups](/api-reference/customer-subscribers/customers-api) at the variant level.  - [Authentication](#authentication) - [Price Lists](#price-lists) - [Price list assignments](#price-list-assignments) - [Usage notes](#usage-notes) - [Additional information](#additional-information)  ## Authentication  Authenticate requests by including an [OAuth](https://developer.bigcommerce.com/api-docs/getting-started/authentication) `access_token` and `client_id` in the request headers.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/{{ENDPOINT}} Content-Type: application/json X-Auth-Client: {{CLIENT_ID}} X-Auth-Token: {{ACCESS_TOKEN}} ```  ### OAuth Scopes  | UI Name                                      | Permission | Parameter                                     | |----------------------------------------------|------------|-----------------------------------------------| | Products                                     | modify     | `store_v2_products`                           | | Products                                     | read-only  | `store_v2_products_read_only`                 |  ## Price Lists  The association of a Price List to a Customer Group can be done either via the Control Panel or using the [Customer Groups API.](/api-reference/customer-subscribers/customers-api)  Additionally, [Price List Assignments](https://developer.bigcommerce.com/api-reference/store-management/price-lists/price-lists-records/) can be created to assign Price Lists to a specific [Channel](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api). Price lists assigned to a channel apply to all shoppers on that channel, unless there is a more specific assignment.  If an active Price List does not contain prices for a variant then the Catalog pricing will be used. The association of a Price List to a Customer Group can be done either via the Control Panel or using the [Customer Groups API.](/api-reference/customer-subscribers/customers-api)  Price Lists will provide overridden price values to the Stencil storefront. Final price display can be further customized within the Stencil template. See the [Price Object](https://stencil.bigcommerce.com/docs/price-object-properties) in Stencil for further documentation.  To learn more about Price Lists, see [here](/api-docs/price-lists/price-list-overview).  ## Price list assignments  ### Order of operations  The `Price List Assignment` Pricing Order of Operations is as follows:  **IF** `Price list` assigned to current `Customer Group` **AND** `Price List` assigned to current `Channel`: * Use this Price List -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE IF**: `Price List` assigned to current `Channel`: * Use this price list -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE IF** `Price List` assigned to current `Customer Group`: * Use this price list -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE IF** `Customer Group Discounts`: * Use them -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE IF** `channel` has a `default price list`: * Use this price list -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE**: * Fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **Note:** Price Lists cannot be assigned to a customer group that has custom group discounts -- the customer group discounts must be deleted first.  ## Usage notes - Price Lists cannot be assigned to a customer group that has custom group discounts -- the customer group discounts must be deleted first. - Bulk pricing Tiers may additionally be associated with a price record to indicate different pricing as the quantity in cart increases. - If a variant has a `Price Record` any existing product-level bulk pricing will not apply in the cart. For variants without `Price Records`, any existing product bulk pricing will apply. - Price Lists Records accepts bulk upsert. Only one [Bulk upsert](https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-records/setpricelistrecordcollection) can done at a time. Running more than one in parallel on the **same store** will cause a 429 error and the request will fail. - There are no direct webhooks available for Price Lists. Since Price Lists directly relate to products, webhooks related to products will fire for corresponding changes such as pricing.  ## Additional information  ### Webhooks  * [Products](/api-docs/getting-started/webhooks/webhook-events#webhook-events_products) * [SKU](/api-docs/getting-started/webhooks/webhook-events#webhook-events_sku)  ### Related endpoints * [Get Price List Collection](/api-reference/catalog/pricelists-api/price-lists/getpricelistcollection)
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

namespace BigCommerce\PriceLists\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BigCommerce\PriceLists\ApiException;
use BigCommerce\PriceLists\Configuration;
use BigCommerce\PriceLists\HeaderSelector;
use BigCommerce\PriceLists\ObjectSerializer;

/**
 * PriceListsAssignmentsApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\PriceLists
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceListsAssignmentsApi
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
     * Operation createPriceListAssignments
     *
     * Create Price List Assignments
     *
     * @param  \BigCommerce\PriceLists\Model\Body[] $body A BigCommerce &#x60;Price List Assignments&#x60; request. (required)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function createPriceListAssignments($body)
    {
        list($response) = $this->createPriceListAssignmentsWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createPriceListAssignmentsWithHttpInfo
     *
     * Create Price List Assignments
     *
     * @param  \BigCommerce\PriceLists\Model\Body[] $body A BigCommerce &#x60;Price List Assignments&#x60; request. (required)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPriceListAssignmentsWithHttpInfo($body)
    {
        $returnType = 'object';
        $request = $this->createPriceListAssignmentsRequest($body);

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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\PriceLists\Model\InlineResponse422',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createPriceListAssignmentsAsync
     *
     * Create Price List Assignments
     *
     * @param  \BigCommerce\PriceLists\Model\Body[] $body A BigCommerce &#x60;Price List Assignments&#x60; request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPriceListAssignmentsAsync($body)
    {
        return $this->createPriceListAssignmentsAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createPriceListAssignmentsAsyncWithHttpInfo
     *
     * Create Price List Assignments
     *
     * @param  \BigCommerce\PriceLists\Model\Body[] $body A BigCommerce &#x60;Price List Assignments&#x60; request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPriceListAssignmentsAsyncWithHttpInfo($body)
    {
        $returnType = 'object';
        $request = $this->createPriceListAssignmentsRequest($body);

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
     * Create request for operation 'createPriceListAssignments'
     *
     * @param  \BigCommerce\PriceLists\Model\Body[] $body A BigCommerce &#x60;Price List Assignments&#x60; request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createPriceListAssignmentsRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createPriceListAssignments'
            );
        }

        $resourcePath = '/pricelists/assignments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation deletePriceListAssignmentsByFilter
     *
     * Delete Price List Assignments
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\InlineResponse204
     */
    public function deletePriceListAssignmentsByFilter($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {
        list($response) = $this->deletePriceListAssignmentsByFilterWithHttpInfo($id, $price_list_id, $customer_group_id, $channel_id);
        return $response;
    }

    /**
     * Operation deletePriceListAssignmentsByFilterWithHttpInfo
     *
     * Delete Price List Assignments
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\InlineResponse204, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePriceListAssignmentsByFilterWithHttpInfo($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {
        $returnType = '\BigCommerce\PriceLists\Model\InlineResponse204';
        $request = $this->deletePriceListAssignmentsByFilterRequest($id, $price_list_id, $customer_group_id, $channel_id);

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
                case 204:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\PriceLists\Model\InlineResponse204',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deletePriceListAssignmentsByFilterAsync
     *
     * Delete Price List Assignments
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListAssignmentsByFilterAsync($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {
        return $this->deletePriceListAssignmentsByFilterAsyncWithHttpInfo($id, $price_list_id, $customer_group_id, $channel_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deletePriceListAssignmentsByFilterAsyncWithHttpInfo
     *
     * Delete Price List Assignments
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListAssignmentsByFilterAsyncWithHttpInfo($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {
        $returnType = '\BigCommerce\PriceLists\Model\InlineResponse204';
        $request = $this->deletePriceListAssignmentsByFilterRequest($id, $price_list_id, $customer_group_id, $channel_id);

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
     * Create request for operation 'deletePriceListAssignmentsByFilter'
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deletePriceListAssignmentsByFilterRequest($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {

        $resourcePath = '/pricelists/assignments';
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
        if ($price_list_id !== null) {
            $queryParams['price_list_id'] = ObjectSerializer::toQueryValue($price_list_id, null);
        }
        // query params
        if ($customer_group_id !== null) {
            $queryParams['customer_group_id'] = ObjectSerializer::toQueryValue($customer_group_id, null);
        }
        // query params
        if ($channel_id !== null) {
            $queryParams['channel_id'] = ObjectSerializer::toQueryValue($channel_id, null);
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getListOfPriceListAssignments
     *
     * Get Price List Assignments
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\InlineResponse200
     */
    public function getListOfPriceListAssignments($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {
        list($response) = $this->getListOfPriceListAssignmentsWithHttpInfo($id, $price_list_id, $customer_group_id, $channel_id);
        return $response;
    }

    /**
     * Operation getListOfPriceListAssignmentsWithHttpInfo
     *
     * Get Price List Assignments
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListOfPriceListAssignmentsWithHttpInfo($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {
        $returnType = '\BigCommerce\PriceLists\Model\InlineResponse200';
        $request = $this->getListOfPriceListAssignmentsRequest($id, $price_list_id, $customer_group_id, $channel_id);

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
                        '\BigCommerce\PriceLists\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getListOfPriceListAssignmentsAsync
     *
     * Get Price List Assignments
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListOfPriceListAssignmentsAsync($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {
        return $this->getListOfPriceListAssignmentsAsyncWithHttpInfo($id, $price_list_id, $customer_group_id, $channel_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListOfPriceListAssignmentsAsyncWithHttpInfo
     *
     * Get Price List Assignments
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListOfPriceListAssignmentsAsyncWithHttpInfo($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {
        $returnType = '\BigCommerce\PriceLists\Model\InlineResponse200';
        $request = $this->getListOfPriceListAssignmentsRequest($id, $price_list_id, $customer_group_id, $channel_id);

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
     * Create request for operation 'getListOfPriceListAssignments'
     *
     * @param  int $id The ID of the &#x60;Price List Assignment&#x60;. (optional)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60;. (optional)
     * @param  int $customer_group_id The ID of the &#x60;Customer Group&#x60;. (optional)
     * @param  int $channel_id The ID of the &#x60;Channel&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getListOfPriceListAssignmentsRequest($id = null, $price_list_id = null, $customer_group_id = null, $channel_id = null)
    {

        $resourcePath = '/pricelists/assignments';
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
        if ($price_list_id !== null) {
            $queryParams['price_list_id'] = ObjectSerializer::toQueryValue($price_list_id, null);
        }
        // query params
        if ($customer_group_id !== null) {
            $queryParams['customer_group_id'] = ObjectSerializer::toQueryValue($customer_group_id, null);
        }
        // query params
        if ($channel_id !== null) {
            $queryParams['channel_id'] = ObjectSerializer::toQueryValue($channel_id, null);
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
