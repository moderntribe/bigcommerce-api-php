<?php
/**
 * PriceListsRecordsApi
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
 * PriceListsRecordsApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\PriceLists
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceListsRecordsApi
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
     * Operation deletePriceListRecord
     *
     * Delete a Price Record by Currency Code
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $content_type content_type (optional, default to application/json)
     * @param  string $accept accept (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deletePriceListRecord($price_list_id, $variant_id, $currency_code, $content_type = 'application/json', $accept = 'application/json')
    {
        $this->deletePriceListRecordWithHttpInfo($price_list_id, $variant_id, $currency_code, $content_type, $accept);
    }

    /**
     * Operation deletePriceListRecordWithHttpInfo
     *
     * Delete a Price Record by Currency Code
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePriceListRecordWithHttpInfo($price_list_id, $variant_id, $currency_code, $content_type = 'application/json', $accept = 'application/json')
    {
        $returnType = '';
        $request = $this->deletePriceListRecordRequest($price_list_id, $variant_id, $currency_code, $content_type, $accept);

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
     * Operation deletePriceListRecordAsync
     *
     * Delete a Price Record by Currency Code
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListRecordAsync($price_list_id, $variant_id, $currency_code, $content_type = 'application/json', $accept = 'application/json')
    {
        return $this->deletePriceListRecordAsyncWithHttpInfo($price_list_id, $variant_id, $currency_code, $content_type, $accept)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deletePriceListRecordAsyncWithHttpInfo
     *
     * Delete a Price Record by Currency Code
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListRecordAsyncWithHttpInfo($price_list_id, $variant_id, $currency_code, $content_type = 'application/json', $accept = 'application/json')
    {
        $returnType = '';
        $request = $this->deletePriceListRecordRequest($price_list_id, $variant_id, $currency_code, $content_type, $accept);

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
     * Create request for operation 'deletePriceListRecord'
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deletePriceListRecordRequest($price_list_id, $variant_id, $currency_code, $content_type = 'application/json', $accept = 'application/json')
    {
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling deletePriceListRecord'
            );
        }
        // verify the required parameter 'variant_id' is set
        if ($variant_id === null || (is_array($variant_id) && count($variant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variant_id when calling deletePriceListRecord'
            );
        }
        // verify the required parameter 'currency_code' is set
        if ($currency_code === null || (is_array($currency_code) && count($currency_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_code when calling deletePriceListRecord'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}/records/{variant_id}/{currency_code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }

        // path params
        if ($price_list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'price_list_id' . '}',
                ObjectSerializer::toPathValue($price_list_id),
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
        // path params
        if ($currency_code !== null) {
            $resourcePath = str_replace(
                '{' . 'currency_code' . '}',
                ObjectSerializer::toPathValue($currency_code),
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
     * Operation deletePriceListRecordsByFilter
     *
     * Delete a Price List Record
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $accept accept (optional, default to application/json)
     * @param  string $content_type content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\NoContent
     */
    public function deletePriceListRecordsByFilter($price_list_id, $variant_idin = null, $accept = 'application/json', $content_type = 'application/json')
    {
        list($response) = $this->deletePriceListRecordsByFilterWithHttpInfo($price_list_id, $variant_idin, $accept, $content_type);
        return $response;
    }

    /**
     * Operation deletePriceListRecordsByFilterWithHttpInfo
     *
     * Delete a Price List Record
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\NoContent, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePriceListRecordsByFilterWithHttpInfo($price_list_id, $variant_idin = null, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\NoContent';
        $request = $this->deletePriceListRecordsByFilterRequest($price_list_id, $variant_idin, $accept, $content_type);

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
                        '\BigCommerce\PriceLists\Model\NoContent',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deletePriceListRecordsByFilterAsync
     *
     * Delete a Price List Record
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListRecordsByFilterAsync($price_list_id, $variant_idin = null, $accept = 'application/json', $content_type = 'application/json')
    {
        return $this->deletePriceListRecordsByFilterAsyncWithHttpInfo($price_list_id, $variant_idin, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deletePriceListRecordsByFilterAsyncWithHttpInfo
     *
     * Delete a Price List Record
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePriceListRecordsByFilterAsyncWithHttpInfo($price_list_id, $variant_idin = null, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\NoContent';
        $request = $this->deletePriceListRecordsByFilterRequest($price_list_id, $variant_idin, $accept, $content_type);

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
     * Create request for operation 'deletePriceListRecordsByFilter'
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deletePriceListRecordsByFilterRequest($price_list_id, $variant_idin = null, $accept = 'application/json', $content_type = 'application/json')
    {
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling deletePriceListRecordsByFilter'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($variant_idin !== null) {
            $queryParams['variant_id:in'] = ObjectSerializer::toQueryValue($variant_idin, null);
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getPriceListRecord
     *
     * Get a Price Record by Currency Code
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  string $accept accept (optional, default to application/json)
     * @param  string $content_type content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\PriceRecordResponse
     */
    public function getPriceListRecord($price_list_id, $variant_id, $currency_code, $include = null, $accept = 'application/json', $content_type = 'application/json')
    {
        list($response) = $this->getPriceListRecordWithHttpInfo($price_list_id, $variant_id, $currency_code, $include, $accept, $content_type);
        return $response;
    }

    /**
     * Operation getPriceListRecordWithHttpInfo
     *
     * Get a Price Record by Currency Code
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\PriceRecordResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPriceListRecordWithHttpInfo($price_list_id, $variant_id, $currency_code, $include = null, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceRecordResponse';
        $request = $this->getPriceListRecordRequest($price_list_id, $variant_id, $currency_code, $include, $accept, $content_type);

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
                        '\BigCommerce\PriceLists\Model\PriceRecordResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPriceListRecordAsync
     *
     * Get a Price Record by Currency Code
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListRecordAsync($price_list_id, $variant_id, $currency_code, $include = null, $accept = 'application/json', $content_type = 'application/json')
    {
        return $this->getPriceListRecordAsyncWithHttpInfo($price_list_id, $variant_id, $currency_code, $include, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPriceListRecordAsyncWithHttpInfo
     *
     * Get a Price Record by Currency Code
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListRecordAsyncWithHttpInfo($price_list_id, $variant_id, $currency_code, $include = null, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceRecordResponse';
        $request = $this->getPriceListRecordRequest($price_list_id, $variant_id, $currency_code, $include, $accept, $content_type);

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
     * Create request for operation 'getPriceListRecord'
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPriceListRecordRequest($price_list_id, $variant_id, $currency_code, $include = null, $accept = 'application/json', $content_type = 'application/json')
    {
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling getPriceListRecord'
            );
        }
        // verify the required parameter 'variant_id' is set
        if ($variant_id === null || (is_array($variant_id) && count($variant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variant_id when calling getPriceListRecord'
            );
        }
        // verify the required parameter 'currency_code' is set
        if ($currency_code === null || (is_array($currency_code) && count($currency_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_code when calling getPriceListRecord'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}/records/{variant_id}/{currency_code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include !== null) {
            $queryParams['include'] = ObjectSerializer::toQueryValue($include, null);
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
        if ($price_list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'price_list_id' . '}',
                ObjectSerializer::toPathValue($price_list_id),
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
        // path params
        if ($currency_code !== null) {
            $resourcePath = str_replace(
                '{' . 'currency_code' . '}',
                ObjectSerializer::toPathValue($currency_code),
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
     * Operation getPriceListRecordCollection
     *
     * Get All Price List Records
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $product_idin A comma-separated list of ids of &#x60;Product&#x60;s whose prices were requested. (optional)
     * @param  string $currency Filter items by currency. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $sale_price Filter items by sale_price. (optional)
     * @param  float $retail_price Filter items by retail_price. (optional)
     * @param  float $map_price Filter items by map_price. (optional)
     * @param  float $calculated_price Filter items by calculated_price. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $content_type content_type (optional, default to application/json)
     * @param  string $accept accept (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\PriceRecordCollectionResponse
     */
    public function getPriceListRecordCollection($price_list_id, $variant_idin = null, $product_idin = null, $currency = null, $page = null, $limit = null, $include = null, $price = null, $sale_price = null, $retail_price = null, $map_price = null, $calculated_price = null, $date_created = null, $date_modified = null, $sku = null, $content_type = 'application/json', $accept = 'application/json')
    {
        list($response) = $this->getPriceListRecordCollectionWithHttpInfo($price_list_id, $variant_idin, $product_idin, $currency, $page, $limit, $include, $price, $sale_price, $retail_price, $map_price, $calculated_price, $date_created, $date_modified, $sku, $content_type, $accept);
        return $response;
    }

    /**
     * Operation getPriceListRecordCollectionWithHttpInfo
     *
     * Get All Price List Records
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $product_idin A comma-separated list of ids of &#x60;Product&#x60;s whose prices were requested. (optional)
     * @param  string $currency Filter items by currency. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $sale_price Filter items by sale_price. (optional)
     * @param  float $retail_price Filter items by retail_price. (optional)
     * @param  float $map_price Filter items by map_price. (optional)
     * @param  float $calculated_price Filter items by calculated_price. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\PriceRecordCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPriceListRecordCollectionWithHttpInfo($price_list_id, $variant_idin = null, $product_idin = null, $currency = null, $page = null, $limit = null, $include = null, $price = null, $sale_price = null, $retail_price = null, $map_price = null, $calculated_price = null, $date_created = null, $date_modified = null, $sku = null, $content_type = 'application/json', $accept = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceRecordCollectionResponse';
        $request = $this->getPriceListRecordCollectionRequest($price_list_id, $variant_idin, $product_idin, $currency, $page, $limit, $include, $price, $sale_price, $retail_price, $map_price, $calculated_price, $date_created, $date_modified, $sku, $content_type, $accept);

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
                        '\BigCommerce\PriceLists\Model\PriceRecordCollectionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPriceListRecordCollectionAsync
     *
     * Get All Price List Records
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $product_idin A comma-separated list of ids of &#x60;Product&#x60;s whose prices were requested. (optional)
     * @param  string $currency Filter items by currency. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $sale_price Filter items by sale_price. (optional)
     * @param  float $retail_price Filter items by retail_price. (optional)
     * @param  float $map_price Filter items by map_price. (optional)
     * @param  float $calculated_price Filter items by calculated_price. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListRecordCollectionAsync($price_list_id, $variant_idin = null, $product_idin = null, $currency = null, $page = null, $limit = null, $include = null, $price = null, $sale_price = null, $retail_price = null, $map_price = null, $calculated_price = null, $date_created = null, $date_modified = null, $sku = null, $content_type = 'application/json', $accept = 'application/json')
    {
        return $this->getPriceListRecordCollectionAsyncWithHttpInfo($price_list_id, $variant_idin, $product_idin, $currency, $page, $limit, $include, $price, $sale_price, $retail_price, $map_price, $calculated_price, $date_created, $date_modified, $sku, $content_type, $accept)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPriceListRecordCollectionAsyncWithHttpInfo
     *
     * Get All Price List Records
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $product_idin A comma-separated list of ids of &#x60;Product&#x60;s whose prices were requested. (optional)
     * @param  string $currency Filter items by currency. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $sale_price Filter items by sale_price. (optional)
     * @param  float $retail_price Filter items by retail_price. (optional)
     * @param  float $map_price Filter items by map_price. (optional)
     * @param  float $calculated_price Filter items by calculated_price. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListRecordCollectionAsyncWithHttpInfo($price_list_id, $variant_idin = null, $product_idin = null, $currency = null, $page = null, $limit = null, $include = null, $price = null, $sale_price = null, $retail_price = null, $map_price = null, $calculated_price = null, $date_created = null, $date_modified = null, $sku = null, $content_type = 'application/json', $accept = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceRecordCollectionResponse';
        $request = $this->getPriceListRecordCollectionRequest($price_list_id, $variant_idin, $product_idin, $currency, $page, $limit, $include, $price, $sale_price, $retail_price, $map_price, $calculated_price, $date_created, $date_modified, $sku, $content_type, $accept);

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
     * Create request for operation 'getPriceListRecordCollection'
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_idin The ID of the &#x60;Variant&#x60; whose prices were requested. (optional)
     * @param  string $product_idin A comma-separated list of ids of &#x60;Product&#x60;s whose prices were requested. (optional)
     * @param  string $currency Filter items by currency. (optional)
     * @param  int $page Specifies the page number in a limited (paginated) list of products. (optional)
     * @param  int $limit Controls the number of items per page in a limited (paginated) list of products. (optional)
     * @param  string $include Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. (optional)
     * @param  float $price Filter items by price. (optional)
     * @param  float $sale_price Filter items by sale_price. (optional)
     * @param  float $retail_price Filter items by retail_price. (optional)
     * @param  float $map_price Filter items by map_price. (optional)
     * @param  float $calculated_price Filter items by calculated_price. (optional)
     * @param  \DateTime $date_created Filter items by date_created. (optional)
     * @param  \DateTime $date_modified Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; (optional)
     * @param  string $sku Filter items by sku. (optional)
     * @param  string $content_type (optional, default to application/json)
     * @param  string $accept (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPriceListRecordCollectionRequest($price_list_id, $variant_idin = null, $product_idin = null, $currency = null, $page = null, $limit = null, $include = null, $price = null, $sale_price = null, $retail_price = null, $map_price = null, $calculated_price = null, $date_created = null, $date_modified = null, $sku = null, $content_type = 'application/json', $accept = 'application/json')
    {
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling getPriceListRecordCollection'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($variant_idin !== null) {
            $queryParams['variant_id:in'] = ObjectSerializer::toQueryValue($variant_idin, null);
        }
        // query params
        if ($product_idin !== null) {
            $queryParams['product_id:in'] = ObjectSerializer::toQueryValue($product_idin, null);
        }
        // query params
        if ($currency !== null) {
            $queryParams['currency'] = ObjectSerializer::toQueryValue($currency, 'ISO-4217');
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
        if ($include !== null) {
            $queryParams['include'] = ObjectSerializer::toQueryValue($include, null);
        }
        // query params
        if ($price !== null) {
            $queryParams['price'] = ObjectSerializer::toQueryValue($price, null);
        }
        // query params
        if ($sale_price !== null) {
            $queryParams['sale_price'] = ObjectSerializer::toQueryValue($sale_price, null);
        }
        // query params
        if ($retail_price !== null) {
            $queryParams['retail_price'] = ObjectSerializer::toQueryValue($retail_price, null);
        }
        // query params
        if ($map_price !== null) {
            $queryParams['map_price'] = ObjectSerializer::toQueryValue($map_price, null);
        }
        // query params
        if ($calculated_price !== null) {
            $queryParams['calculated_price'] = ObjectSerializer::toQueryValue($calculated_price, null);
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
        if ($sku !== null) {
            $queryParams['sku'] = ObjectSerializer::toQueryValue($sku, null);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
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
     * Operation getPriceListRecordsByVariantId
     *
     * Get Price Records by Variant
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept accept (optional, default to application/json)
     * @param  string $content_type content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\PriceRecordCollectionResponse
     */
    public function getPriceListRecordsByVariantId($price_list_id, $variant_id, $accept = 'application/json', $content_type = 'application/json')
    {
        list($response) = $this->getPriceListRecordsByVariantIdWithHttpInfo($price_list_id, $variant_id, $accept, $content_type);
        return $response;
    }

    /**
     * Operation getPriceListRecordsByVariantIdWithHttpInfo
     *
     * Get Price Records by Variant
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\PriceRecordCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPriceListRecordsByVariantIdWithHttpInfo($price_list_id, $variant_id, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceRecordCollectionResponse';
        $request = $this->getPriceListRecordsByVariantIdRequest($price_list_id, $variant_id, $accept, $content_type);

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
                        '\BigCommerce\PriceLists\Model\PriceRecordCollectionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPriceListRecordsByVariantIdAsync
     *
     * Get Price Records by Variant
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListRecordsByVariantIdAsync($price_list_id, $variant_id, $accept = 'application/json', $content_type = 'application/json')
    {
        return $this->getPriceListRecordsByVariantIdAsyncWithHttpInfo($price_list_id, $variant_id, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPriceListRecordsByVariantIdAsyncWithHttpInfo
     *
     * Get Price Records by Variant
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPriceListRecordsByVariantIdAsyncWithHttpInfo($price_list_id, $variant_id, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceRecordCollectionResponse';
        $request = $this->getPriceListRecordsByVariantIdRequest($price_list_id, $variant_id, $accept, $content_type);

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
     * Create request for operation 'getPriceListRecordsByVariantId'
     *
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPriceListRecordsByVariantIdRequest($price_list_id, $variant_id, $accept = 'application/json', $content_type = 'application/json')
    {
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling getPriceListRecordsByVariantId'
            );
        }
        // verify the required parameter 'variant_id' is set
        if ($variant_id === null || (is_array($variant_id) && count($variant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variant_id when calling getPriceListRecordsByVariantId'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}/records/{variant_id}';
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
        if ($price_list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'price_list_id' . '}',
                ObjectSerializer::toPathValue($price_list_id),
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
     * Operation setPriceListRecord
     *
     * Set Price List Record by Currency Code
     *
     * @param  \BigCommerce\PriceLists\Model\PriceRecordPut $body body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $accept accept (optional, default to application/json)
     * @param  string $content_type content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\PriceLists\Model\PriceRecordResponse
     */
    public function setPriceListRecord($body, $price_list_id, $variant_id, $currency_code, $accept = 'application/json', $content_type = 'application/json')
    {
        list($response) = $this->setPriceListRecordWithHttpInfo($body, $price_list_id, $variant_id, $currency_code, $accept, $content_type);
        return $response;
    }

    /**
     * Operation setPriceListRecordWithHttpInfo
     *
     * Set Price List Record by Currency Code
     *
     * @param  \BigCommerce\PriceLists\Model\PriceRecordPut $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\PriceLists\Model\PriceRecordResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setPriceListRecordWithHttpInfo($body, $price_list_id, $variant_id, $currency_code, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceRecordResponse';
        $request = $this->setPriceListRecordRequest($body, $price_list_id, $variant_id, $currency_code, $accept, $content_type);

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
                        '\BigCommerce\PriceLists\Model\PriceRecordResponse',
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
     * Operation setPriceListRecordAsync
     *
     * Set Price List Record by Currency Code
     *
     * @param  \BigCommerce\PriceLists\Model\PriceRecordPut $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setPriceListRecordAsync($body, $price_list_id, $variant_id, $currency_code, $accept = 'application/json', $content_type = 'application/json')
    {
        return $this->setPriceListRecordAsyncWithHttpInfo($body, $price_list_id, $variant_id, $currency_code, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setPriceListRecordAsyncWithHttpInfo
     *
     * Set Price List Record by Currency Code
     *
     * @param  \BigCommerce\PriceLists\Model\PriceRecordPut $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setPriceListRecordAsyncWithHttpInfo($body, $price_list_id, $variant_id, $currency_code, $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = '\BigCommerce\PriceLists\Model\PriceRecordResponse';
        $request = $this->setPriceListRecordRequest($body, $price_list_id, $variant_id, $currency_code, $accept, $content_type);

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
     * Create request for operation 'setPriceListRecord'
     *
     * @param  \BigCommerce\PriceLists\Model\PriceRecordPut $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $variant_id ID of the variant on a product, or on an associated Price List Record. (required)
     * @param  string $currency_code The currency code associated with the price record being acted upon. (required)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setPriceListRecordRequest($body, $price_list_id, $variant_id, $currency_code, $accept = 'application/json', $content_type = 'application/json')
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling setPriceListRecord'
            );
        }
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling setPriceListRecord'
            );
        }
        // verify the required parameter 'variant_id' is set
        if ($variant_id === null || (is_array($variant_id) && count($variant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $variant_id when calling setPriceListRecord'
            );
        }
        // verify the required parameter 'currency_code' is set
        if ($currency_code === null || (is_array($currency_code) && count($currency_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_code when calling setPriceListRecord'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}/records/{variant_id}/{currency_code}';
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
        if ($price_list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'price_list_id' . '}',
                ObjectSerializer::toPathValue($price_list_id),
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
        // path params
        if ($currency_code !== null) {
            $resourcePath = str_replace(
                '{' . 'currency_code' . '}',
                ObjectSerializer::toPathValue($currency_code),
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
     * Operation setPriceListRecordCollection
     *
     * Upsert Price List Records
     *
     * @param  object[] $body body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $x_strict_mode Header that determines whether the Batch API operates in strict mode or not.  Strict mode will reject the entire request if any item in the batch has an error. (optional, default to 0)
     * @param  string $accept accept (optional, default to application/json)
     * @param  string $content_type content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function setPriceListRecordCollection($body, $price_list_id, $x_strict_mode = '0', $accept = 'application/json', $content_type = 'application/json')
    {
        list($response) = $this->setPriceListRecordCollectionWithHttpInfo($body, $price_list_id, $x_strict_mode, $accept, $content_type);
        return $response;
    }

    /**
     * Operation setPriceListRecordCollectionWithHttpInfo
     *
     * Upsert Price List Records
     *
     * @param  object[] $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $x_strict_mode Header that determines whether the Batch API operates in strict mode or not.  Strict mode will reject the entire request if any item in the batch has an error. (optional, default to 0)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \BigCommerce\PriceLists\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function setPriceListRecordCollectionWithHttpInfo($body, $price_list_id, $x_strict_mode = '0', $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = 'object';
        $request = $this->setPriceListRecordCollectionRequest($body, $price_list_id, $x_strict_mode, $accept, $content_type);

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
                        '\BigCommerce\PriceLists\Model\PriceRecordBatchErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation setPriceListRecordCollectionAsync
     *
     * Upsert Price List Records
     *
     * @param  object[] $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $x_strict_mode Header that determines whether the Batch API operates in strict mode or not.  Strict mode will reject the entire request if any item in the batch has an error. (optional, default to 0)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setPriceListRecordCollectionAsync($body, $price_list_id, $x_strict_mode = '0', $accept = 'application/json', $content_type = 'application/json')
    {
        return $this->setPriceListRecordCollectionAsyncWithHttpInfo($body, $price_list_id, $x_strict_mode, $accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setPriceListRecordCollectionAsyncWithHttpInfo
     *
     * Upsert Price List Records
     *
     * @param  object[] $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $x_strict_mode Header that determines whether the Batch API operates in strict mode or not.  Strict mode will reject the entire request if any item in the batch has an error. (optional, default to 0)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setPriceListRecordCollectionAsyncWithHttpInfo($body, $price_list_id, $x_strict_mode = '0', $accept = 'application/json', $content_type = 'application/json')
    {
        $returnType = 'object';
        $request = $this->setPriceListRecordCollectionRequest($body, $price_list_id, $x_strict_mode, $accept, $content_type);

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
     * Create request for operation 'setPriceListRecordCollection'
     *
     * @param  object[] $body (required)
     * @param  int $price_list_id The ID of the &#x60;Price List&#x60; requested. (required)
     * @param  int $x_strict_mode Header that determines whether the Batch API operates in strict mode or not.  Strict mode will reject the entire request if any item in the batch has an error. (optional, default to 0)
     * @param  string $accept (optional, default to application/json)
     * @param  string $content_type (optional, default to application/json)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setPriceListRecordCollectionRequest($body, $price_list_id, $x_strict_mode = '0', $accept = 'application/json', $content_type = 'application/json')
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling setPriceListRecordCollection'
            );
        }
        // verify the required parameter 'price_list_id' is set
        if ($price_list_id === null || (is_array($price_list_id) && count($price_list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $price_list_id when calling setPriceListRecordCollection'
            );
        }

        $resourcePath = '/pricelists/{price_list_id}/records';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($x_strict_mode !== null) {
            $headerParams['X-Strict-Mode'] = ObjectSerializer::toHeaderValue($x_strict_mode);
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
