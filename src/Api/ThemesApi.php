<?php
/**
 * ThemesApi
 *
 * @package  BigCommerce\Api
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 Themes API.
 *
 * OpenAPI spec version: 3.0.0b
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

class ThemesApi
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
    * @return ThemesApi
    */
    public function setApiClient(\BigCommerce\Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation activateStoreTheme
     * Activates a store theme.
     *
     *
     * @param \BigCommerce\Api\Model\Activate $body Request parameters. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\NoContent
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function activateStoreTheme($body, array $params = [])
    {
        list($response) = $this->activateStoreThemeWithHttpInfo( $body, $params);
        return $response;
    }


    /**
     * Operation activateStoreThemeWithHttpInfo
     *
     * @see self::activateStoreTheme()
     * @param \BigCommerce\Api\Model\Activate $body Request parameters. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\NoContent, HTTP status code, HTTP response headers (array of strings)
     */
    public function activateStoreThemeWithHttpInfo( $body, array $params = [])
    {
        
        // verify the required parameter 'body' is set
        if (!isset($body)) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling activateStoreTheme');
        }
        

        // parse inputs
        $resourcePath = "/themes/actions/activate";
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

        // body params
        $_tempBody = null;
        if (isset($body)) {
        $_tempBody = $body;
        }
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\Model\NoContent',
                '/themes/actions/activate'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\NoContent', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 204:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\NoContent', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation deleteStoreTheme
     * Deletes a specified store theme.
     *
     *
     * @param string $theme_id The theme identifier. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\NoContent
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function deleteStoreTheme($theme_id, array $params = [])
    {
        list($response) = $this->deleteStoreThemeWithHttpInfo($theme_id, $params);
        return $response;
    }


    /**
     * Operation deleteStoreThemeWithHttpInfo
     *
     * @see self::deleteStoreTheme()
     * @param string $theme_id The theme identifier. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\NoContent, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteStoreThemeWithHttpInfo($theme_id, array $params = [])
    {
        
        // verify the required parameter 'theme_id' is set
        if (!isset($theme_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $theme_id when calling deleteStoreTheme');
        }
        

        // parse inputs
        $resourcePath = "/themes/{theme_id}";
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

        // path params


        if (isset($theme_id)) {
            $resourcePath = str_replace(
                "{" . "theme_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($theme_id),
                $resourcePath
            );
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\Model\NoContent',
                '/themes/{theme_id}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\NoContent', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 204:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\NoContent', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation downloadTheme
     * Downloads a specified store theme.
     *
     *
     * @param string $theme_id The theme identifier. (required)
     * @param \BigCommerce\Api\Model\WhichThemeToDownload $which A BigCommerce object specifying which theme to download. One of: &#x60;original&#x60;: the original Marketplace or uploaded custom theme; &#x60;last_activated&#x60;: the theme version most recently applied to the store; &#x60;last_created&#x60;: the theme version most recently created. If &#x60;which&#x60; is missing or invalid in the request, its value will default to &#x60;last_activated&#x60;. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\JobId
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function downloadTheme($theme_id, $which, array $params = [])
    {
        list($response) = $this->downloadThemeWithHttpInfo($theme_id,  $which, $params);
        return $response;
    }


    /**
     * Operation downloadThemeWithHttpInfo
     *
     * @see self::downloadTheme()
     * @param string $theme_id The theme identifier. (required)
     * @param \BigCommerce\Api\Model\WhichThemeToDownload $which A BigCommerce object specifying which theme to download. One of: &#x60;original&#x60;: the original Marketplace or uploaded custom theme; &#x60;last_activated&#x60;: the theme version most recently applied to the store; &#x60;last_created&#x60;: the theme version most recently created. If &#x60;which&#x60; is missing or invalid in the request, its value will default to &#x60;last_activated&#x60;. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\JobId, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadThemeWithHttpInfo($theme_id,  $which, array $params = [])
    {
        
        // verify the required parameter 'theme_id' is set
        if (!isset($theme_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $theme_id when calling downloadTheme');
        }
        
        // verify the required parameter 'which' is set
        if (!isset($which)) {
            throw new \InvalidArgumentException('Missing the required parameter $which when calling downloadTheme');
        }
        

        // parse inputs
        $resourcePath = "/themes/{theme_id}/actions/download";
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

        // path params


        if (isset($theme_id)) {
            $resourcePath = str_replace(
                "{" . "theme_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($theme_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($which)) {
        $_tempBody = $which;
        }
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\Model\JobId',
                '/themes/{theme_id}/actions/download'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\JobId', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\JobId', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation getJob
     * Gets a specified job.
     *
     *
     * @param string $job_id The job identifier. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\JobResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getJob($job_id, array $params = [])
    {
        list($response) = $this->getJobWithHttpInfo($job_id, $params);
        return $response;
    }


    /**
     * Operation getJobWithHttpInfo
     *
     * @see self::getJob()
     * @param string $job_id The job identifier. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\JobResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getJobWithHttpInfo($job_id, array $params = [])
    {
        
        // verify the required parameter 'job_id' is set
        if (!isset($job_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $job_id when calling getJob');
        }
        

        // parse inputs
        $resourcePath = "/themes/jobs/{job_id}";
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

        // path params


        if (isset($job_id)) {
            $resourcePath = str_replace(
                "{" . "job_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($job_id),
                $resourcePath
            );
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
                '\BigCommerce\Api\Model\JobResponse',
                '/themes/jobs/{job_id}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\JobResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\JobResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation getStoreTheme
     * Gets a specified store theme.
     *
     *
     * @param string $theme_id The theme identifier. (required)
     * @param array $params = []
     * @return \BigCommerce\Api\Model\ThemeResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getStoreTheme($theme_id, array $params = [])
    {
        list($response) = $this->getStoreThemeWithHttpInfo($theme_id, $params);
        return $response;
    }


    /**
     * Operation getStoreThemeWithHttpInfo
     *
     * @see self::getStoreTheme()
     * @param string $theme_id The theme identifier. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\ThemeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStoreThemeWithHttpInfo($theme_id, array $params = [])
    {
        
        // verify the required parameter 'theme_id' is set
        if (!isset($theme_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $theme_id when calling getStoreTheme');
        }
        

        // parse inputs
        $resourcePath = "/themes/{theme_id}";
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

        // path params


        if (isset($theme_id)) {
            $resourcePath = str_replace(
                "{" . "theme_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($theme_id),
                $resourcePath
            );
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
                '\BigCommerce\Api\Model\ThemeResponse',
                '/themes/{theme_id}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\ThemeResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\ThemeResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation getStoreThemes
     * Gets all store themes.
     *
     *
     * @param array $params = []
     * @return \BigCommerce\Api\Model\ThemesCollectionResponse
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function getStoreThemes(array $params = [])
    {
        list($response) = $this->getStoreThemesWithHttpInfo($params);
        return $response;
    }


    /**
     * Operation getStoreThemesWithHttpInfo
     *
     * @see self::getStoreThemes()
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\ThemesCollectionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStoreThemesWithHttpInfo(array $params = [])
    {
        

        // parse inputs
        $resourcePath = "/themes";
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
                '\BigCommerce\Api\Model\ThemesCollectionResponse',
                '/themes'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\ThemesCollectionResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\ThemesCollectionResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation uploadTheme
     * Uploads a new theme to a BigCommerce store.
     *
     *
     * @param array $params = []
     *     - file \SplFileObject The file. (required)
     * @return \BigCommerce\Api\Model\JobId
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function uploadTheme(array $params = [])
    {
        list($response) = $this->uploadThemeWithHttpInfo($params);
        return $response;
    }


    /**
     * Operation uploadThemeWithHttpInfo
     *
     * @see self::uploadTheme()
     * @param array $params = []
     * @throws \BigCommerce\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\Model\JobId, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadThemeWithHttpInfo(array $params = [])
    {
        
        // verify the required parameter 'file' is set
        if (!isset($params[ 'file' ])) {
            throw new \InvalidArgumentException('Missing the required parameter $params[ "file" ] when calling uploadTheme');
        }
        $file = array_key_exists( 'file', $params ) ? $params[ 'file' ] : null;
        

        // parse inputs
        $resourcePath = "/themes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // form params
        if ($file !== null) {
        // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
        // See: https://wiki.php.net/rfc/curl-file-upload
        if (function_exists('curl_file_create')) {
            $formParams['file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file));
        } else {
            $formParams['file'] = '@' . $this->apiClient->getSerializer()->toFormValue($file);
        }
        }
        
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\Model\JobId',
                '/themes'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\Model\JobId', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\JobId', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
                default:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\Model\ErrorResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
}