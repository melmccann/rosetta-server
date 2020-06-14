<?php
/**
 * BlockApiInterface
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

namespace melmccann\rosettaserverstubs\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use melmccann\rosettaserverstubs\Model\BlockRequest;
use melmccann\rosettaserverstubs\Model\BlockResponse;
use melmccann\rosettaserverstubs\Model\BlockTransactionRequest;
use melmccann\rosettaserverstubs\Model\BlockTransactionResponse;
use melmccann\rosettaserverstubs\Model\Error;

/**
 * BlockApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  melmccann\rosettaserverstubs\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface BlockApiInterface
{

    /**
     * Operation block
     *
     * Get a Block
     *
     * @param  melmccann\rosettaserverstubs\Model\BlockRequest $blockRequest   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return melmccann\rosettaserverstubs\Model\BlockResponse
     *
     */
    public function block(BlockRequest $blockRequest, &$responseCode, array &$responseHeaders);

    /**
     * Operation blockTransaction
     *
     * Get a Block Transaction
     *
     * @param  melmccann\rosettaserverstubs\Model\BlockTransactionRequest $blockTransactionRequest   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return melmccann\rosettaserverstubs\Model\BlockTransactionResponse
     *
     */
    public function blockTransaction(BlockTransactionRequest $blockTransactionRequest, &$responseCode, array &$responseHeaders);
}