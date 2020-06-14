<?php
/**
 * ConstructionMetadataRequest
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
 * Class representing the ConstructionMetadataRequest model.
 *
 * A ConstructionMetadataRequest is utilized to get information required to construct a transaction. The Options object used to specify which metadata to return is left purposely unstructured to allow flexibility for implementers.
 *
 * @package melmccann\rosettaserverstubs\RosettaServerStubsModel
 * @author  OpenAPI Generator team
 */
class ConstructionMetadataRequest 
{
        /**
     * @var melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkIdentifier
     * @SerializedName("network_identifier")
     * @Assert\NotNull()
     * @Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkIdentifier")
     * @Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkIdentifier")
     */
    protected $networkIdentifier;

    /**
     * Some blockchains require different metadata for different types of transaction construction (ex: delegation versus a transfer). Instead of requiring a blockchain node to return all possible types of metadata for construction (which may require multiple node fetches), the client can populate an options object to limit the metadata returned to only the subset required.
     *
     * @var array
     * @SerializedName("options")
     * @Assert\NotNull()
     * @Assert\Type("array")
     * @Type("array")
     */
    protected $options;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->networkIdentifier = isset($data['networkIdentifier']) ? $data['networkIdentifier'] : null;
        $this->options = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Gets networkIdentifier.
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkIdentifier
     */
    public function getNetworkIdentifier(): NetworkIdentifier
    {
        return $this->networkIdentifier;
    }

    /**
     * Sets networkIdentifier.
     *
     * @param melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkIdentifier $networkIdentifier
     *
     * @return $this
     */
    public function setNetworkIdentifier(NetworkIdentifier $networkIdentifier): NetworkIdentifier
    {
        $this->networkIdentifier = $networkIdentifier;

        return $this;
    }

    /**
     * Gets options.
     *
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Sets options.
     *
     * @param array $options  Some blockchains require different metadata for different types of transaction construction (ex: delegation versus a transfer). Instead of requiring a blockchain node to return all possible types of metadata for construction (which may require multiple node fetches), the client can populate an options object to limit the metadata returned to only the subset required.
     *
     * @return $this
     */
    public function setOptions(array $options): array
    {
        $this->options = $options;

        return $this;
    }
}


