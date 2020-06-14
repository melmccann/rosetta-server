<?php
/**
 * BlockApi
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
 * BlockApi Class Doc Comment
 *
 * @category Class
 * @package  melmccannosettaserverstubs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BlockApi
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
     * Operation block
     *
     * Get a Block
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockRequest $block_request block_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\BlockResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error
     */
    public function block($block_request)
    {
        list($response) = $this->blockWithHttpInfo($block_request);
        return $response;
    }

    /**
     * Operation blockWithHttpInfo
     *
     * Get a Block
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockRequest $block_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \melmccannosettaserverstubs\RosettaServerStubsModel\BlockResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function blockWithHttpInfo($block_request)
    {
        $request = $this->blockRequest($block_request);

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
                    if ('\melmccannosettaserverstubs\RosettaServerStubsModel\BlockResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockResponse', []),
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

            $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockResponse';
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
                        '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockResponse',
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
     * Operation blockAsync
     *
     * Get a Block
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockRequest $block_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blockAsync($block_request)
    {
        return $this->blockAsyncWithHttpInfo($block_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blockAsyncWithHttpInfo
     *
     * Get a Block
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockRequest $block_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blockAsyncWithHttpInfo($block_request)
    {
        $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockResponse';
        $request = $this->blockRequest($block_request);

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
     * Create request for operation 'block'
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockRequest $block_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function blockRequest($block_request)
    {
        // verify the required parameter 'block_request' is set
        if ($block_request === null || (is_array($block_request) && count($block_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $block_request when calling block'
            );
        }

        $resourcePath = '/block';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($block_request)) {
            $_tempBody = $block_request;
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
     * Operation blockTransaction
     *
     * Get a Block Transaction
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionRequest $block_transaction_request block_transaction_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error
     */
    public function blockTransaction($block_transaction_request)
    {
        list($response) = $this->blockTransactionWithHttpInfo($block_transaction_request);
        return $response;
    }

    /**
     * Operation blockTransactionWithHttpInfo
     *
     * Get a Block Transaction
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionRequest $block_transaction_request (required)
     *
     * @throws \melmccannosettaserverstubs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionResponse|\melmccannosettaserverstubs\RosettaServerStubsModel\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function blockTransactionWithHttpInfo($block_transaction_request)
    {
        $request = $this->blockTransactionRequest($block_transaction_request);

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
                    if ('\melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionResponse', []),
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

            $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionResponse';
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
                        '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionResponse',
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
     * Operation blockTransactionAsync
     *
     * Get a Block Transaction
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionRequest $block_transaction_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blockTransactionAsync($block_transaction_request)
    {
        return $this->blockTransactionAsyncWithHttpInfo($block_transaction_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation blockTransactionAsyncWithHttpInfo
     *
     * Get a Block Transaction
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionRequest $block_transaction_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function blockTransactionAsyncWithHttpInfo($block_transaction_request)
    {
        $returnType = '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionResponse';
        $request = $this->blockTransactionRequest($block_transaction_request);

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
     * Create request for operation 'blockTransaction'
     *
     * @param  \melmccannosettaserverstubs\RosettaServerStubsModel\BlockTransactionRequest $block_transaction_request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function blockTransactionRequest($block_transaction_request)
    {
        // verify the required parameter 'block_transaction_request' is set
        if ($block_transaction_request === null || (is_array($block_transaction_request) && count($block_transaction_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $block_transaction_request when calling blockTransaction'
            );
        }

        $resourcePath = '/block/transaction';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        // body params
        $_tempBody = null;
        if (isset($block_transaction_request)) {
            $_tempBody = $block_transaction_request;
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
