<?php
/**
 * StoreInfoApi
 *
 * @package  BigCommerce\Api
 */

/**
 * Store Information APIs
 *
 * The Store Information object, and Get Store Information endpoint, manage store profile settings.
 *
 * OpenAPI spec version: 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\Api;

use \BigCommerce\Api\Configuration;
use \BigCommerce\Api\ApiClient;
use \BigCommerce\Api\ApiException;
use \BigCommerce\Api\ObjectSerializer;

class StoreInfoApi
{

    /**
     * API Client
     *
     * @var \BigCommerce\Api\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BigCommerce\Api\ApiClient $apiClient The api client to use
     */
    public function __construct(\BigCommerce\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
    * Get API client
    *
    * @return \BigCommerce\Api\ApiClient get the API client
    */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
    * Set the API client
    *
    * @param \BigCommerce\Api\ApiClient $apiClient set the API client
    *
    * @return StoreInfoApi
    */
    public function setApiClient(\BigCommerce\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getStore
     * Get Store Information
     *
     *
     * @param array $params = []
     * @return \BigCommerce\Api\Model\StoreInformation
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getStore(array $params = [])
    {
        list($response) = $this->getStoreWithHttpInfo($params);
        return $response;
    }


    /**
     * Operation getStoreWithHttpInfo
     *
     * @see self::getStore()
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\StoreInformation, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStoreWithHttpInfo(array $params = [])
    {
        

        // parse inputs
        $resourcePath = "/store";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\Model\StoreInformation',
                '/store'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\StoreInformation', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\StoreInformation', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation getTime
     * Get System Timestamp
     *
     *
     * @param array $params = []
     * @return \BigCommerce\Api\Model\TimeResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getTime(array $params = [])
    {
        list($response) = $this->getTimeWithHttpInfo($params);
        return $response;
    }


    /**
     * Operation getTimeWithHttpInfo
     *
     * @see self::getTime()
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\TimeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTimeWithHttpInfo(array $params = [])
    {
        

        // parse inputs
        $resourcePath = "/time";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\Model\TimeResponse',
                '/time'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\TimeResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\TimeResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
}
