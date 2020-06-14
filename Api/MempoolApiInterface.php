<?php
/**
 * MempoolApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * Rosetta
 *
 * A Standard for Blockchain Interaction
 *
 * The version of the OpenAPI document: 1.3.1
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use OpenAPI\Server\Model\Error;
use OpenAPI\Server\Model\MempoolRequest;
use OpenAPI\Server\Model\MempoolResponse;
use OpenAPI\Server\Model\MempoolTransactionRequest;
use OpenAPI\Server\Model\MempoolTransactionResponse;

/**
 * MempoolApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface MempoolApiInterface
{

    /**
     * Operation mempool
     *
     * Get All Mempool Transactions
     *
     * @param  OpenAPI\Server\Model\MempoolRequest $mempoolRequest   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\MempoolResponse
     *
     */
    public function mempool(MempoolRequest $mempoolRequest, &$responseCode, array &$responseHeaders);

    /**
     * Operation mempoolTransaction
     *
     * Get a Mempool Transaction
     *
     * @param  OpenAPI\Server\Model\MempoolTransactionRequest $mempoolTransactionRequest   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\MempoolTransactionResponse
     *
     */
    public function mempoolTransaction(MempoolTransactionRequest $mempoolTransactionRequest, &$responseCode, array &$responseHeaders);
}
