<?php
/**
 * SiteRoutesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sites
 *
 * Create and manage [sites](#sites) and [routes](#routes) for [headless storefront](https://support.bigcommerce.com/s/article/The-Headless-Approach#what-mean) sales [channels](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api).  - [Authentication](#authentication) - [Sites](#sites) - [Site routes](#site-routes) - [Route types](#route-types) - [Route variables](#route-variables) - [Additional Information](#additional-information)  ## Authentication  Authenticate requests by sending an [OAuth](https://developer.bigcommerce.com/api-docs/getting-started/authentication) `access_token` via `X-Auth-Token` HTTP header.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites Content-Type: application/json X-Auth-Token: {{ACCESS_TOKEN}} ```  ### [OAuth Scopes](https://developer.bigcommerce.com/api-docs/getting-started/authentication/rest-api-authentication#oauth-scopes)  | UI Name        | Permission | Parameter               | |----------------|------------|-------------------------| | Sites & Routes | modify     | `store_sites`           | | Sites & Routes | read-only  | `store_sites_read_only` |  For more information on authenticating BigCommerce APIs, see [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## [Sites](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites)  Sites link [headless storefronts](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless) to sales [channels](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api). To [create a site](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site), send a `POST` request to `/stores/{{STORE_HASH}}/v3/sites`.  ```http POST https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Content-Type: application/json Accept: application/json  {   \"url\": \"http://store.example.com/\",   \"channel_id\": 5 } ```  [![Open in Request Runner](https://storage.googleapis.com/bigcommerce-production-dev-center/images/Open-Request-Runner.svg)](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site#requestrunner)  **[Response:](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site#responses)**  ```json {   \"id\": 1,   \"url\": \"http://store.example.com/\",   \"channel_id\": 5,   \"created_at\": \"2018-01-04T04:15:50.000Z\",   \"updated_at\": \"2018-01-04T04:15:50.000Z\" } ```  To [get a list of sites](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/getsites), send a `GET` request to `/stores/{{STORE_HASH}}/v3/sites`.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Accept: application/json ```  [![Open in Request Runner](https://storage.googleapis.com/bigcommerce-production-dev-center/images/Open-Request-Runner.svg)](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/getsites#requestrunner)  ## [Site routes](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes)  Site routes tell BigCommerce how to link to pages on a [headless storefront](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless). To [create a route](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/post-site-route) for a [site](#sites), send a `POST` request to `/stores/{{STORE_HASH}}/v3/sites/{site_id}/routes`.  ```http POST https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites/{site_id}/routes X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Content-Type: application/json Accept: application/json  {   \"type\": \"product\",   \"matching\": \"12\",   \"route\": \"/en/product?id=12\" } ```  [![Open in Request Runner](https://storage.googleapis.com/bigcommerce-production-dev-center/images/Open-Request-Runner.svg)](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/post-site-route#requestrunner)  ## Route types  The following route types are supported.  | Type | Description | |-|-| |`account_new_return`|Route for shopper account page| |`account_order_status`|Route for shopper order status account page| |`cart`|Route to shopper's cart| |`checkout`|Route to checkout| |`create_account`|Route to the create a shopper account page| |`forgot_password`|Route to shopper forgot password page| |`home`|Route to headless storefront homepage| |`order_confirmation`|Route to the order confirmation page| |`product`|Route for product details pages | |`recover_abandoned_cart`|Route for URL in emails for a shopper to recover their abandoned cart| |`unsubscribe`|Route for unsubscribe URL in emails|  ## Route variables  The following route variables are supported  |Variable|Description| |-|-|-| |`{id}`|The **ID** of the requested item| |`{slug}`|The **slug** for the requested item (if available). Note: the `slug` value may contain `/` slash| |`{lang}`|The **language** string that the client is using|  **Example:**  ```http POST https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites/{site_id}/routes X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Content-Type: application/json Accept: application/json  {   \"type\": \"product\",   \"matching\": \"*\",   \"route\": \"/{lang}/{slug}?id={id}\" } ```  ## Additional Information  ### Related resources * [Channels and Listings Reference](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api) * [Channels Overview](https://developer.bigcommerce.com/api-docs/channels/overview) * [Building Headless Storefronts Guide](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless)
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

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * SiteRoutesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SiteRoutesApi
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
     * Operation deleteRoute
     *
     * Delete a Site Route
     *
     * @param  string $site_id site_id (required)
     * @param  string $route_id route_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteRoute($site_id, $route_id)
    {
        $this->deleteRouteWithHttpInfo($site_id, $route_id);
    }

    /**
     * Operation deleteRouteWithHttpInfo
     *
     * Delete a Site Route
     *
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRouteWithHttpInfo($site_id, $route_id)
    {
        $returnType = '';
        $request = $this->deleteRouteRequest($site_id, $route_id);

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
     * Operation deleteRouteAsync
     *
     * Delete a Site Route
     *
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRouteAsync($site_id, $route_id)
    {
        return $this->deleteRouteAsyncWithHttpInfo($site_id, $route_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteRouteAsyncWithHttpInfo
     *
     * Delete a Site Route
     *
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRouteAsyncWithHttpInfo($site_id, $route_id)
    {
        $returnType = '';
        $request = $this->deleteRouteRequest($site_id, $route_id);

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
     * Create request for operation 'deleteRoute'
     *
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteRouteRequest($site_id, $route_id)
    {
        // verify the required parameter 'site_id' is set
        if ($site_id === null || (is_array($site_id) && count($site_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site_id when calling deleteRoute'
            );
        }
        // verify the required parameter 'route_id' is set
        if ($route_id === null || (is_array($route_id) && count($route_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $route_id when calling deleteRoute'
            );
        }

        $resourcePath = '/sites/{site_id}/routes/{route_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                '{' . 'site_id' . '}',
                ObjectSerializer::toPathValue($site_id),
                $resourcePath
            );
        }
        // path params
        if ($route_id !== null) {
            $resourcePath = str_replace(
                '{' . 'route_id' . '}',
                ObjectSerializer::toPathValue($route_id),
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
     * Operation getSiteRoute
     *
     * Get a Site Route
     *
     * @param  string $site_id site_id (required)
     * @param  string $route_id route_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2011
     */
    public function getSiteRoute($site_id, $route_id)
    {
        list($response) = $this->getSiteRouteWithHttpInfo($site_id, $route_id);
        return $response;
    }

    /**
     * Operation getSiteRouteWithHttpInfo
     *
     * Get a Site Route
     *
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2011, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSiteRouteWithHttpInfo($site_id, $route_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2011';
        $request = $this->getSiteRouteRequest($site_id, $route_id);

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
                        '\Swagger\Client\Model\InlineResponse2011',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSiteRouteAsync
     *
     * Get a Site Route
     *
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSiteRouteAsync($site_id, $route_id)
    {
        return $this->getSiteRouteAsyncWithHttpInfo($site_id, $route_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSiteRouteAsyncWithHttpInfo
     *
     * Get a Site Route
     *
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSiteRouteAsyncWithHttpInfo($site_id, $route_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2011';
        $request = $this->getSiteRouteRequest($site_id, $route_id);

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
     * Create request for operation 'getSiteRoute'
     *
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSiteRouteRequest($site_id, $route_id)
    {
        // verify the required parameter 'site_id' is set
        if ($site_id === null || (is_array($site_id) && count($site_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site_id when calling getSiteRoute'
            );
        }
        // verify the required parameter 'route_id' is set
        if ($route_id === null || (is_array($route_id) && count($route_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $route_id when calling getSiteRoute'
            );
        }

        $resourcePath = '/sites/{site_id}/routes/{route_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                '{' . 'site_id' . '}',
                ObjectSerializer::toPathValue($site_id),
                $resourcePath
            );
        }
        // path params
        if ($route_id !== null) {
            $resourcePath = str_replace(
                '{' . 'route_id' . '}',
                ObjectSerializer::toPathValue($route_id),
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
     * Operation indexSiteRoutes
     *
     * Get a Site's Routes
     *
     * @param  string $site_id site_id (required)
     * @param  string $type Filter routes by a given resource type (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function indexSiteRoutes($site_id, $type = null)
    {
        list($response) = $this->indexSiteRoutesWithHttpInfo($site_id, $type);
        return $response;
    }

    /**
     * Operation indexSiteRoutesWithHttpInfo
     *
     * Get a Site's Routes
     *
     * @param  string $site_id (required)
     * @param  string $type Filter routes by a given resource type (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function indexSiteRoutesWithHttpInfo($site_id, $type = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->indexSiteRoutesRequest($site_id, $type);

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
                        '\Swagger\Client\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation indexSiteRoutesAsync
     *
     * Get a Site's Routes
     *
     * @param  string $site_id (required)
     * @param  string $type Filter routes by a given resource type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function indexSiteRoutesAsync($site_id, $type = null)
    {
        return $this->indexSiteRoutesAsyncWithHttpInfo($site_id, $type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation indexSiteRoutesAsyncWithHttpInfo
     *
     * Get a Site's Routes
     *
     * @param  string $site_id (required)
     * @param  string $type Filter routes by a given resource type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function indexSiteRoutesAsyncWithHttpInfo($site_id, $type = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->indexSiteRoutesRequest($site_id, $type);

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
     * Create request for operation 'indexSiteRoutes'
     *
     * @param  string $site_id (required)
     * @param  string $type Filter routes by a given resource type (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function indexSiteRoutesRequest($site_id, $type = null)
    {
        // verify the required parameter 'site_id' is set
        if ($site_id === null || (is_array($site_id) && count($site_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site_id when calling indexSiteRoutes'
            );
        }

        $resourcePath = '/sites/{site_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type, null);
        }

        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                '{' . 'site_id' . '}',
                ObjectSerializer::toPathValue($site_id),
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
     * Operation postSiteRoute
     *
     * Create a Site Route
     *
     * @param  \Swagger\Client\Model\SiteRouteBase1 $body body (required)
     * @param  string $site_id site_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2011
     */
    public function postSiteRoute($body, $site_id)
    {
        list($response) = $this->postSiteRouteWithHttpInfo($body, $site_id);
        return $response;
    }

    /**
     * Operation postSiteRouteWithHttpInfo
     *
     * Create a Site Route
     *
     * @param  \Swagger\Client\Model\SiteRouteBase1 $body (required)
     * @param  string $site_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2011, HTTP status code, HTTP response headers (array of strings)
     */
    public function postSiteRouteWithHttpInfo($body, $site_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2011';
        $request = $this->postSiteRouteRequest($body, $site_id);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse2011',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse4221',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ErrorFull1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postSiteRouteAsync
     *
     * Create a Site Route
     *
     * @param  \Swagger\Client\Model\SiteRouteBase1 $body (required)
     * @param  string $site_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSiteRouteAsync($body, $site_id)
    {
        return $this->postSiteRouteAsyncWithHttpInfo($body, $site_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postSiteRouteAsyncWithHttpInfo
     *
     * Create a Site Route
     *
     * @param  \Swagger\Client\Model\SiteRouteBase1 $body (required)
     * @param  string $site_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postSiteRouteAsyncWithHttpInfo($body, $site_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2011';
        $request = $this->postSiteRouteRequest($body, $site_id);

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
     * Create request for operation 'postSiteRoute'
     *
     * @param  \Swagger\Client\Model\SiteRouteBase1 $body (required)
     * @param  string $site_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postSiteRouteRequest($body, $site_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling postSiteRoute'
            );
        }
        // verify the required parameter 'site_id' is set
        if ($site_id === null || (is_array($site_id) && count($site_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site_id when calling postSiteRoute'
            );
        }

        $resourcePath = '/sites/{site_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                '{' . 'site_id' . '}',
                ObjectSerializer::toPathValue($site_id),
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
     * Operation putSiteRoute
     *
     * Update a Site Route
     *
     * @param  \Swagger\Client\Model\SiteRouteFull1 $body body (required)
     * @param  string $site_id site_id (required)
     * @param  string $route_id route_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2011
     */
    public function putSiteRoute($body, $site_id, $route_id)
    {
        list($response) = $this->putSiteRouteWithHttpInfo($body, $site_id, $route_id);
        return $response;
    }

    /**
     * Operation putSiteRouteWithHttpInfo
     *
     * Update a Site Route
     *
     * @param  \Swagger\Client\Model\SiteRouteFull1 $body (required)
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2011, HTTP status code, HTTP response headers (array of strings)
     */
    public function putSiteRouteWithHttpInfo($body, $site_id, $route_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2011';
        $request = $this->putSiteRouteRequest($body, $site_id, $route_id);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse2011',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putSiteRouteAsync
     *
     * Update a Site Route
     *
     * @param  \Swagger\Client\Model\SiteRouteFull1 $body (required)
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putSiteRouteAsync($body, $site_id, $route_id)
    {
        return $this->putSiteRouteAsyncWithHttpInfo($body, $site_id, $route_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putSiteRouteAsyncWithHttpInfo
     *
     * Update a Site Route
     *
     * @param  \Swagger\Client\Model\SiteRouteFull1 $body (required)
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putSiteRouteAsyncWithHttpInfo($body, $site_id, $route_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2011';
        $request = $this->putSiteRouteRequest($body, $site_id, $route_id);

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
     * Create request for operation 'putSiteRoute'
     *
     * @param  \Swagger\Client\Model\SiteRouteFull1 $body (required)
     * @param  string $site_id (required)
     * @param  string $route_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putSiteRouteRequest($body, $site_id, $route_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling putSiteRoute'
            );
        }
        // verify the required parameter 'site_id' is set
        if ($site_id === null || (is_array($site_id) && count($site_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site_id when calling putSiteRoute'
            );
        }
        // verify the required parameter 'route_id' is set
        if ($route_id === null || (is_array($route_id) && count($route_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $route_id when calling putSiteRoute'
            );
        }

        $resourcePath = '/sites/{site_id}/routes/{route_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                '{' . 'site_id' . '}',
                ObjectSerializer::toPathValue($site_id),
                $resourcePath
            );
        }
        // path params
        if ($route_id !== null) {
            $resourcePath = str_replace(
                '{' . 'route_id' . '}',
                ObjectSerializer::toPathValue($route_id),
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
     * Operation sitesSiteIdRoutesPut
     *
     * Update Site's Routes
     *
     * @param  int $site_id site_id (required)
     * @param  object[] $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function sitesSiteIdRoutesPut($site_id, $body = null)
    {
        list($response) = $this->sitesSiteIdRoutesPutWithHttpInfo($site_id, $body);
        return $response;
    }

    /**
     * Operation sitesSiteIdRoutesPutWithHttpInfo
     *
     * Update Site's Routes
     *
     * @param  int $site_id (required)
     * @param  object[] $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function sitesSiteIdRoutesPutWithHttpInfo($site_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->sitesSiteIdRoutesPutRequest($site_id, $body);

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
                        '\Swagger\Client\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse422',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sitesSiteIdRoutesPutAsync
     *
     * Update Site's Routes
     *
     * @param  int $site_id (required)
     * @param  object[] $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sitesSiteIdRoutesPutAsync($site_id, $body = null)
    {
        return $this->sitesSiteIdRoutesPutAsyncWithHttpInfo($site_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sitesSiteIdRoutesPutAsyncWithHttpInfo
     *
     * Update Site's Routes
     *
     * @param  int $site_id (required)
     * @param  object[] $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sitesSiteIdRoutesPutAsyncWithHttpInfo($site_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->sitesSiteIdRoutesPutRequest($site_id, $body);

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
     * Create request for operation 'sitesSiteIdRoutesPut'
     *
     * @param  int $site_id (required)
     * @param  object[] $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sitesSiteIdRoutesPutRequest($site_id, $body = null)
    {
        // verify the required parameter 'site_id' is set
        if ($site_id === null || (is_array($site_id) && count($site_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site_id when calling sitesSiteIdRoutesPut'
            );
        }

        $resourcePath = '/sites/{site_id}/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                '{' . 'site_id' . '}',
                ObjectSerializer::toPathValue($site_id),
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
