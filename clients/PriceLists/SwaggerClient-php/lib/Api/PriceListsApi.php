<?php
/**
 * PriceListsApi
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
 * PriceListsApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\PriceLists
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceListsApi
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
     * Operation createPriceList
     *
     * Create a Price List
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPost $body body (required)
     * @param  string $accept accept (optional, default to application/json)
     * @param  string $content_type content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\PriceListResponse
     */
    public function createPriceList($body, $accept = 'application/json', $content_type = 'application/json')
    {
        list($response) = $this->createPriceListWithHttpInfo($body, $accept, $content_type);
        return $response;
    }

    /**
     * Operation createPriceListWithHttpInfo
     *
     * Create a Price List
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPost $body (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\PriceListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPriceListWithHttpInfo($body, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceListResponse';
        $request = $this->createPriceListRequest($body, $accept, $content_type);

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
                        '\BigCommerce\PriceLists\Model\PriceListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\PriceLists\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\PriceLists\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createPriceListAsync
     *
     * Create a Price List
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPost $body (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPriceListAsync($body, $accept = 'application/json', $content_type = 'application/json')
    {
        return $this->createPriceListAsyncWithHttpInfo($body, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createPriceListAsyncWithHttpInfo
     *
     * Create a Price List
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPost $body (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createPriceListAsyncWithHttpInfo($body, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceListResponse';
        $request = $this->createPriceListRequest($body, $accept, $content_type);

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
     * Create request for operation 'createPriceList'
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPost $body (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createPriceListRequest($body, $accept = 'application/json', $content_type = 'application/json')
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling createPriceList'
            );
        }

        $resourcePath = '/pricelists';
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deletePriceList
     *
     * Delete a Price List
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deletePriceList($price_list_id)
    {
        $this->deletePriceListWithHttpInfo($price_list_id);
    }

    /**
     * Operation deletePriceListWithHttpInfo
     *
     * Delete a Price List
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePriceListWithHttpInfo($price_list_id)
    {
        $returnType = '';
        $request = $this->deletePriceListRequest($price_list_id);

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
     * Operation deletePriceListAsync
     *
     * Delete a Price List
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListAsync($price_list_id)
    {
        return $this->deletePriceListAsyncWithHttpInfo($price_list_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deletePriceListAsyncWithHttpInfo
     *
     * Delete a Price List
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListAsyncWithHttpInfo($price_list_id)
    {
        $returnType = '';
        $request = $this->deletePriceListRequest($price_list_id);

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
     * Create request for operation 'deletePriceList'
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deletePriceListRequest($price_list_id)
    {
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling deletePriceList'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($price_list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'price_list_id' . '}',
                ObjectSerializer::toPathValue($price_list_id),
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
     * Operation deletePriceListsByFilter
     *
     * Delete All Price Lists
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $accept accept (optional, default to application/json)
     * @param  string $content_type content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deletePriceListsByFilter($id = null, $name = null, $accept = 'application/json', $content_type = 'application/json')
    {
        $this->deletePriceListsByFilterWithHttpInfo($id, $name, $accept, $content_type);
    }

    /**
     * Operation deletePriceListsByFilterWithHttpInfo
     *
     * Delete All Price Lists
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePriceListsByFilterWithHttpInfo($id = null, $name = null, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '';
        $request = $this->deletePriceListsByFilterRequest($id, $name, $accept, $content_type);

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
     * Operation deletePriceListsByFilterAsync
     *
     * Delete All Price Lists
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListsByFilterAsync($id = null, $name = null, $accept = 'application/json', $content_type = 'application/json')
    {
        return $this->deletePriceListsByFilterAsyncWithHttpInfo($id, $name, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deletePriceListsByFilterAsyncWithHttpInfo
     *
     * Delete All Price Lists
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListsByFilterAsyncWithHttpInfo($id = null, $name = null, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '';
        $request = $this->deletePriceListsByFilterRequest($id, $name, $accept, $content_type);

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
     * Create request for operation 'deletePriceListsByFilter'
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deletePriceListsByFilterRequest($id = null, $name = null, $accept = 'application/json', $content_type = 'application/json')
    {

        $resourcePath = '/pricelists';
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
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
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
     * Operation getPriceList
     *
     * Get a Price List
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\PriceListResponse1
     */
    public function getPriceList($price_list_id, $id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null)
    {
        list($response) = $this->getPriceListWithHttpInfo($price_list_id, $id, $name, $date_created, $date_modified, $page, $limit);
        return $response;
    }

    /**
     * Operation getPriceListWithHttpInfo
     *
     * Get a Price List
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\PriceListResponse1, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPriceListWithHttpInfo($price_list_id, $id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null)
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceListResponse1';
        $request = $this->getPriceListRequest($price_list_id, $id, $name, $date_created, $date_modified, $page, $limit);

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
                        '\BigCommerce\PriceLists\Model\PriceListResponse1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPriceListAsync
     *
     * Get a Price List
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListAsync($price_list_id, $id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null)
    {
        return $this->getPriceListAsyncWithHttpInfo($price_list_id, $id, $name, $date_created, $date_modified, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPriceListAsyncWithHttpInfo
     *
     * Get a Price List
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListAsyncWithHttpInfo($price_list_id, $id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null)
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceListResponse1';
        $request = $this->getPriceListRequest($price_list_id, $id, $name, $date_created, $date_modified, $page, $limit);

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
     * Create request for operation 'getPriceList'
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPriceListRequest($price_list_id, $id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null)
    {
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling getPriceList'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}';
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
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }
        // query params
        if ($date_created !== null) {
            $queryParams['date_created'] = ObjectSerializer::toQueryValue($date_created, 'date-time');
        }
        // query params
        if ($date_modified !== null) {
            $queryParams['date_modified'] = ObjectSerializer::toQueryValue($date_modified, 'date-time');
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }

        // path params
        if ($price_list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'price_list_id' . '}',
                ObjectSerializer::toPathValue($price_list_id),
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
     * Operation getPriceListCollection
     *
     * Get All Price Lists
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $content_type content_type (optional, default to application/json)
     * @param  string $accept accept (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\PriceListCollectionResponse
     */
    public function getPriceListCollection($id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null, $content_type = 'application/json', $accept = 'application/json')
    {
        list($response) = $this->getPriceListCollectionWithHttpInfo($id, $name, $date_created, $date_modified, $page, $limit, $content_type, $accept);
        return $response;
    }

    /**
     * Operation getPriceListCollectionWithHttpInfo
     *
     * Get All Price Lists
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\PriceListCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPriceListCollectionWithHttpInfo($id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null, $content_type = 'application/json', $accept = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceListCollectionResponse';
        $request = $this->getPriceListCollectionRequest($id, $name, $date_created, $date_modified, $page, $limit, $content_type, $accept);

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
                        '\BigCommerce\PriceLists\Model\PriceListCollectionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPriceListCollectionAsync
     *
     * Get All Price Lists
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListCollectionAsync($id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null, $content_type = 'application/json', $accept = 'application/json')
    {
        return $this->getPriceListCollectionAsyncWithHttpInfo($id, $name, $date_created, $date_modified, $page, $limit, $content_type, $accept)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPriceListCollectionAsyncWithHttpInfo
     *
     * Get All Price Lists
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListCollectionAsyncWithHttpInfo($id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null, $content_type = 'application/json', $accept = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceListCollectionResponse';
        $request = $this->getPriceListCollectionRequest($id, $name, $date_created, $date_modified, $page, $limit, $content_type, $accept);

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
     * Create request for operation 'getPriceListCollection'
     *
     * @param  int $id Filter items by id. (optional)
     * @param  string $name Filter items by name. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPriceListCollectionRequest($id = null, $name = null, $date_created = null, $date_modified = null, $page = null, $limit = null, $content_type = 'application/json', $accept = 'application/json')
    {

        $resourcePath = '/pricelists';
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
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name, null);
        }
        // query params
        if ($date_created !== null) {
            $queryParams['date_created'] = ObjectSerializer::toQueryValue($date_created, 'date-time');
        }
        // query params
        if ($date_modified !== null) {
            $queryParams['date_modified'] = ObjectSerializer::toQueryValue($date_modified, 'date-time');
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
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
     * Operation updatePriceList
     *
     * Update a Price List
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPut $body body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\PriceListResponse
     */
    public function updatePriceList($body, $price_list_id)
    {
        list($response) = $this->updatePriceListWithHttpInfo($body, $price_list_id);
        return $response;
    }

    /**
     * Operation updatePriceListWithHttpInfo
     *
     * Update a Price List
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPut $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\PriceListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePriceListWithHttpInfo($body, $price_list_id)
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceListResponse';
        $request = $this->updatePriceListRequest($body, $price_list_id);

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
                        '\BigCommerce\PriceLists\Model\PriceListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\PriceLists\Model\NotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\PriceLists\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BigCommerce\PriceLists\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updatePriceListAsync
     *
     * Update a Price List
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPut $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePriceListAsync($body, $price_list_id)
    {
        return $this->updatePriceListAsyncWithHttpInfo($body, $price_list_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updatePriceListAsyncWithHttpInfo
     *
     * Update a Price List
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPut $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updatePriceListAsyncWithHttpInfo($body, $price_list_id)
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceListResponse';
        $request = $this->updatePriceListRequest($body, $price_list_id);

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
     * Create request for operation 'updatePriceList'
     *
     * @param  \BigCommerce\PriceLists\Model\PriceListPut $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updatePriceListRequest($body, $price_list_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling updatePriceList'
            );
        }
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling updatePriceList'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($price_list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'price_list_id' . '}',
                ObjectSerializer::toPathValue($price_list_id),
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
