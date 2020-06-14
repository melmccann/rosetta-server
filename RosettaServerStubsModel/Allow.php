<?php
/**
 * Allow
 *
 * PHP version 5
 *
 * @category Class
 * @package  melmccann\rosettaserverstubs\RosettaServerStubsModel
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

namespace melmccann\rosettaserverstubs\RosettaServerStubsModel;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Allow model.
 *
 * Allow specifies supported Operation status, Operation types, and all possible error statuses. This Allow object is used by clients to validate the correctness of a Rosetta Server implementation. It is expected that these clients will error if they receive some response that contains any of the above information that is not specified here.
 *
 * @package melmccann\rosettaserverstubs\RosettaServerStubsModel
 * @author  OpenAPI Generator team
 */
class Allow 
{
        /**
     * All Operation.Status this implementation supports. Any status that is returned during parsing that is not listed here will cause client validation to error.
     *
     * @var melmccann\rosettaserverstubs\RosettaServerStubsModel\OperationStatus[]
     * @SerializedName("operation_statuses")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\OperationStatus")
     * })
     * @Type("array<melmccann\rosettaserverstubs\RosettaServerStubsModel\OperationStatus>")
     */
    protected $operationStatuses;

    /**
     * All Operation.Type this implementation supports. Any type that is returned during parsing that is not listed here will cause client validation to error.
     *
     * @var string[]
     * @SerializedName("operation_types")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $operationTypes;

    /**
     * All Errors that this implementation could return. Any error that is returned during parsing that is not listed here will cause client validation to error.
     *
     * @var melmccann\rosettaserverstubs\RosettaServerStubsModel\Error[]
     * @SerializedName("errors")
     * @Assert\NotNull()
     * @Assert\All({
     *   @Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\Error")
     * })
     * @Type("array<melmccann\rosettaserverstubs\RosettaServerStubsModel\Error>")
     */
    protected $errors;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->operationStatuses = isset($data['operationStatuses']) ? $data['operationStatuses'] : null;
        $this->operationTypes = isset($data['operationTypes']) ? $data['operationTypes'] : null;
        $this->errors = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Gets operationStatuses.
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\OperationStatus[]
     */
    public function getOperationStatuses(): array
    {
        return $this->operationStatuses;
    }

    /**
     * Sets operationStatuses.
     *
     * @param melmccann\rosettaserverstubs\RosettaServerStubsModel\OperationStatus[] $operationStatuses  All Operation.Status this implementation supports. Any status that is returned during parsing that is not listed here will cause client validation to error.
     *
     * @return $this
     */
    public function setOperationStatuses(array $operationStatuses): array
    {
        $this->operationStatuses = $operationStatuses;

        return $this;
    }

    /**
     * Gets operationTypes.
     *
     * @return string[]
     */
    public function getOperationTypes(): array
    {
        return $this->operationTypes;
    }

    /**
     * Sets operationTypes.
     *
     * @param string[] $operationTypes  All Operation.Type this implementation supports. Any type that is returned during parsing that is not listed here will cause client validation to error.
     *
     * @return $this
     */
    public function setOperationTypes(array $operationTypes): array
    {
        $this->operationTypes = $operationTypes;

        return $this;
    }

    /**
     * Gets errors.
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\Error[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Sets errors.
     *
     * @param melmccann\rosettaserverstubs\RosettaServerStubsModel\Error[] $errors  All Errors that this implementation could return. Any error that is returned during parsing that is not listed here will cause client validation to error.
     *
     * @return $this
     */
    public function setErrors(array $errors): array
    {
        $this->errors = $errors;

        return $this;
    }
}


