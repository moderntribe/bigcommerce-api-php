<?php
/**
 * TimeZoneApi
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\StoreInfo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Store Information
 *
 * Get Store Information endpoint, manage store profile settings.
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

namespace BigCommerce\StoreInfo\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BigCommerce\StoreInfo\ApiException;
use BigCommerce\StoreInfo\Configuration;
use BigCommerce\StoreInfo\HeaderSelector;
use BigCommerce\StoreInfo\ObjectSerializer;

/**
 * TimeZoneApi Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\StoreInfo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeZoneApi
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
     * Operation timeGet
     *
     * Get System Timestamp
     *
     * @param  string $accept accept (required)
     * @param  string $content_type content_type (required)
     *
     * @throws \BigCommerce\StoreInfo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \BigCommerce\StoreInfo\Model\TimeStampFull1
     */
    public function timeGet($accept, $content_type)
    {
        list($response) = $this->timeGetWithHttpInfo($accept, $content_type);
        return $response;
    }

    /**
     * Operation timeGetWithHttpInfo
     *
     * Get System Timestamp
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \BigCommerce\StoreInfo\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\StoreInfo\Model\TimeStampFull1, HTTP status code, HTTP response headers (array of strings)
     */
    public function timeGetWithHttpInfo($accept, $content_type)
    {
        $returnType = '\BigCommerce\StoreInfo\Model\TimeStampFull1';
        $request = $this->timeGetRequest($accept, $content_type);

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
                        '\BigCommerce\StoreInfo\Model\TimeStampFull1',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation timeGetAsync
     *
     * Get System Timestamp
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function timeGetAsync($accept, $content_type)
    {
        return $this->timeGetAsyncWithHttpInfo($accept, $content_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation timeGetAsyncWithHttpInfo
     *
     * Get System Timestamp
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function timeGetAsyncWithHttpInfo($accept, $content_type)
    {
        $returnType = '\BigCommerce\StoreInfo\Model\TimeStampFull1';
        $request = $this->timeGetRequest($accept, $content_type);

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
     * Create request for operation 'timeGet'
     *
     * @param  string $accept (required)
     * @param  string $content_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function timeGetRequest($accept, $content_type)
    {
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling timeGet'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling timeGet'
            );
        }

        $resourcePath = '/time';
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
