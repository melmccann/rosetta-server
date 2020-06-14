<?php
/**
 * NetworkApi
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
 * NetworkApi Class Doc Comment
 *
 * @category Class
 * @package  melmccannosettaserverstubs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NetworkApi
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
     * Operation networkList
     *
     * Get List of Available Networks
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\MetadataRequest $metadata_request metadata_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkListResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error
     */
    public function networkList($metadata_request)
    {
        list($response) = $this->networkListWithHttpInfo($metadata_request);
        return $response;
    }

    /**
     * Operation networkListWithHttpInfo
     *
     * Get List of Available Networks
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\MetadataRequest $metadata_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkListResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function networkListWithHttpInfo($metadata_request)
    {
        $request = $this->networkListRequest($metadata_request);

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
                    if ('\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkListResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkListResponse', []),
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

            $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkListResponse';
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
                        '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkListResponse',
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
     * Operation networkListAsync
     *
     * Get List of Available Networks
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\MetadataRequest $metadata_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function networkListAsync($metadata_request)
    {
        return $this->networkListAsyncWithHttpInfo($metadata_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation networkListAsyncWithHttpInfo
     *
     * Get List of Available Networks
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\MetadataRequest $metadata_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function networkListAsyncWithHttpInfo($metadata_request)
    {
        $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkListResponse';
        $request = $this->networkListRequest($metadata_request);

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
     * Create request for operation 'networkList'
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\MetadataRequest $metadata_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function networkListRequest($metadata_request)
    {
        // verify the required parameter 'metadata_request' is set
        if ($metadata_request === null || (is_array($metadata_request) && count($metadata_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $metadata_request when calling networkList'
            );
        }

        $resourcePath = '/network/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($metadata_request)) {
            $_tempBody = $metadata_request;
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
     * Operation networkOptions
     *
     * Get Network Options
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request network_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkOptionsResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error
     */
    public function networkOptions($network_request)
    {
        list($response) = $this->networkOptionsWithHttpInfo($network_request);
        return $response;
    }

    /**
     * Operation networkOptionsWithHttpInfo
     *
     * Get Network Options
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkOptionsResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function networkOptionsWithHttpInfo($network_request)
    {
        $request = $this->networkOptionsRequest($network_request);

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
                    if ('\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkOptionsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkOptionsResponse', []),
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

            $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkOptionsResponse';
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
                        '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkOptionsResponse',
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
     * Operation networkOptionsAsync
     *
     * Get Network Options
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function networkOptionsAsync($network_request)
    {
        return $this->networkOptionsAsyncWithHttpInfo($network_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation networkOptionsAsyncWithHttpInfo
     *
     * Get Network Options
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function networkOptionsAsyncWithHttpInfo($network_request)
    {
        $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkOptionsResponse';
        $request = $this->networkOptionsRequest($network_request);

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
     * Create request for operation 'networkOptions'
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function networkOptionsRequest($network_request)
    {
        // verify the required parameter 'network_request' is set
        if ($network_request === null || (is_array($network_request) && count($network_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network_request when calling networkOptions'
            );
        }

        $resourcePath = '/network/options';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($network_request)) {
            $_tempBody = $network_request;
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
     * Operation networkStatus
     *
     * Get Network Status
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request network_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkStatusResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error
     */
    public function networkStatus($network_request)
    {
        list($response) = $this->networkStatusWithHttpInfo($network_request);
        return $response;
    }

    /**
     * Operation networkStatusWithHttpInfo
     *
     * Get Network Status
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkStatusResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function networkStatusWithHttpInfo($network_request)
    {
        $request = $this->networkStatusRequest($network_request);

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
                    if ('\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkStatusResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkStatusResponse', []),
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

            $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkStatusResponse';
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
                        '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkStatusResponse',
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
     * Operation networkStatusAsync
     *
     * Get Network Status
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function networkStatusAsync($network_request)
    {
        return $this->networkStatusAsyncWithHttpInfo($network_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation networkStatusAsyncWithHttpInfo
     *
     * Get Network Status
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function networkStatusAsyncWithHttpInfo($network_request)
    {
        $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\NetworkStatusResponse';
        $request = $this->networkStatusRequest($network_request);

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
     * Create request for operation 'networkStatus'
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\NetworkRequest $network_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function networkStatusRequest($network_request)
    {
        // verify the required parameter 'network_request' is set
        if ($network_request === null || (is_array($network_request) && count($network_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network_request when calling networkStatus'
            );
        }

        $resourcePath = '/network/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($network_request)) {
            $_tempBody = $network_request;
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
