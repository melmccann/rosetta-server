<?php
/**
 * ConstructionApi
 * PHP version 5
 *
 * @category Class
 * @package  melmccannosettaserverstubs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rosetta
 *
 * A Standard for Blockchain Interaction
 *
 * The version of the OpenAPI document: 1.3.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace melmccannosettaserverstubs\melmccannosetta-server-stubs;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use melmccannosettaserverstubs\ApiException;
use melmccannosettaserverstubs\Configuration;
use melmccannosettaserverstubs\HeaderSelector;
use melmccannosettaserverstubs\ObjectSerializer;

/**
 * ConstructionApi Class Doc Comment
 *
 * @category Class
 * @package  melmccannosettaserverstubs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConstructionApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation constructionMetadata
     *
     * Get Transaction Construction Metadata
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataRequest $construction_metadata_request construction_metadata_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error
     */
    public function constructionMetadata($construction_metadata_request)
    {
        list($response) = $this->constructionMetadataWithHttpInfo($construction_metadata_request);
        return $response;
    }

    /**
     * Operation constructionMetadataWithHttpInfo
     *
     * Get Transaction Construction Metadata
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataRequest $construction_metadata_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function constructionMetadataWithHttpInfo($construction_metadata_request)
    {
        $request = $this->constructionMetadataRequest($construction_metadata_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\melmccannosettaserverstubs\RosettaServerStubsModel\Error' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\melmccannosettaserverstubs\RosettaServerStubsModel\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\melmccannosettaserverstubs\RosettaServerStubsModel\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation constructionMetadataAsync
     *
     * Get Transaction Construction Metadata
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataRequest $construction_metadata_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function constructionMetadataAsync($construction_metadata_request)
    {
        return $this->constructionMetadataAsyncWithHttpInfo($construction_metadata_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation constructionMetadataAsyncWithHttpInfo
     *
     * Get Transaction Construction Metadata
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataRequest $construction_metadata_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function constructionMetadataAsyncWithHttpInfo($construction_metadata_request)
    {
        $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataResponse';
        $request = $this->constructionMetadataRequest($construction_metadata_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'constructionMetadata'
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataRequest $construction_metadata_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function constructionMetadataRequest($construction_metadata_request)
    {
        // verify the required parameter 'construction_metadata_request' is set
        if ($construction_metadata_request === null || (is_array($construction_metadata_request) && count($construction_metadata_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $construction_metadata_request when calling constructionMetadata'
            );
        }

        $resourcePath = '/construction/metadata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($construction_metadata_request)) {
            $_tempBody = $construction_metadata_request;
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
     * Operation constructionSubmit
     *
     * Submit a Signed Transaction
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitRequest $construction_submit_request construction_submit_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error
     */
    public function constructionSubmit($construction_submit_request)
    {
        list($response) = $this->constructionSubmitWithHttpInfo($construction_submit_request);
        return $response;
    }

    /**
     * Operation constructionSubmitWithHttpInfo
     *
     * Submit a Signed Transaction
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitRequest $construction_submit_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function constructionSubmitWithHttpInfo($construction_submit_request)
    {
        $request = $this->constructionSubmitRequest($construction_submit_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\melmccannosettaserverstubs\RosettaServerStubsModel\Error' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\melmccannosettaserverstubs\RosettaServerStubsModel\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\melmccannosettaserverstubs\RosettaServerStubsModel\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation constructionSubmitAsync
     *
     * Submit a Signed Transaction
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitRequest $construction_submit_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function constructionSubmitAsync($construction_submit_request)
    {
        return $this->constructionSubmitAsyncWithHttpInfo($construction_submit_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation constructionSubmitAsyncWithHttpInfo
     *
     * Submit a Signed Transaction
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitRequest $construction_submit_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function constructionSubmitAsyncWithHttpInfo($construction_submit_request)
    {
        $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitResponse';
        $request = $this->constructionSubmitRequest($construction_submit_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'constructionSubmit'
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitRequest $construction_submit_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function constructionSubmitRequest($construction_submit_request)
    {
        // verify the required parameter 'construction_submit_request' is set
        if ($construction_submit_request === null || (is_array($construction_submit_request) && count($construction_submit_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $construction_submit_request when calling constructionSubmit'
            );
        }

        $resourcePath = '/construction/submit';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($construction_submit_request)) {
            $_tempBody = $construction_submit_request;
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
