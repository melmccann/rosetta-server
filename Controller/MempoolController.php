<?php

/**
 * MempoolController
 * PHP version 5
 *
 * @category Class
 * @package  melmccann\rosettaserverstubs\Controller
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

namespace melmccann\rosettaserverstubs\Controller;

use \Exception;
use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;
use melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\MempoolApiInterface;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\Error;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolRequest;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolResponse;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionRequest;
use melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionResponse;

/**
 * MempoolController Class Doc Comment
 *
 * @category Class
 * @package  melmccann\rosettaserverstubs\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class MempoolController extends Controller
{

    /**
     * Operation mempool
     *
     * Get All Mempool Transactions
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function mempoolAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        $inputFormat = $request->headers->has('Content-Type')?$request->headers->get('Content-Type'):$consumes[0];
        if (!in_array($inputFormat, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication

        // Read out all input parameter values into variables
        $mempoolRequest = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $mempoolRequest = $this->deserialize($mempoolRequest, 'melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolRequest', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolRequest");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($mempoolRequest, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->mempool($mempoolRequest, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'Expected response to a valid request';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Expected response to a valid request';
                    break;
                case 0:
                    $message = 'unexpected error';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation mempoolTransaction
     *
     * Get a Mempool Transaction
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function mempoolTransactionAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        $inputFormat = $request->headers->has('Content-Type')?$request->headers->get('Content-Type'):$consumes[0];
        if (!in_array($inputFormat, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication

        // Read out all input parameter values into variables
        $mempoolTransactionRequest = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $mempoolTransactionRequest = $this->deserialize($mempoolTransactionRequest, 'melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionRequest', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\NotNull();
        $asserts[] = new Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionRequest");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($mempoolTransactionRequest, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();

            
            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];
            $result = $handler->mempoolTransaction($mempoolTransactionRequest, $responseCode, $responseHeaders);

            // Find default response message
            $message = 'Expected response to a valid request';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'Expected response to a valid request';
                    break;
                case 0:
                    $message = 'unexpected error';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (Exception $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return MempoolApiInterface
     */
    public function getApiHandler()
    {
        return $this->apiServer->getApiHandler('mempool');
    }
}
