<?php
/**
 * MempoolApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  melmccann\rosettaserverstubs
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

namespace melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\Error;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolRequest;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolResponse;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionRequest;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionResponse;

/**
 * MempoolApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs
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
     * @param  melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolRequest $mempoolRequest   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolResponse
     *
     */
    public function mempool(MempoolRequest $mempoolRequest, &$responseCode, array &$responseHeaders);

    /**
     * Operation mempoolTransaction
     *
     * Get a Mempool Transaction
     *
     * @param  melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionRequest $mempoolTransactionRequest   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionResponse
     *
     */
    public function mempoolTransaction(MempoolTransactionRequest $mempoolTransactionRequest, &$responseCode, array &$responseHeaders);
}
