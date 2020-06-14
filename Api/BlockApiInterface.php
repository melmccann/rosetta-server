<?php
/**
 * BlockApiInterface
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
use OpenAPI\Server\Model\BlockRequest;
use OpenAPI\Server\Model\BlockResponse;
use OpenAPI\Server\Model\BlockTransactionRequest;
use OpenAPI\Server\Model\BlockTransactionResponse;
use OpenAPI\Server\Model\Error;

/**
 * BlockApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  OpenAPI\Server\Api
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
     * @param  OpenAPI\Server\Model\BlockRequest $blockRequest   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\BlockResponse
     *
     */
    public function block(BlockRequest $blockRequest, &$responseCode, array &$responseHeaders);

    /**
     * Operation blockTransaction
     *
     * Get a Block Transaction
     *
     * @param  OpenAPI\Server\Model\BlockTransactionRequest $blockTransactionRequest   (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return OpenAPI\Server\Model\BlockTransactionResponse
     *
     */
    public function blockTransaction(BlockTransactionRequest $blockTransactionRequest, &$responseCode, array &$responseHeaders);
}
