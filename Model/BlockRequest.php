<?php
/**
 * BlockRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Server\Model
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

namespace OpenAPI\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the BlockRequest model.
 *
 * A BlockRequest is utilized to make a block request on the /block endpoint.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class BlockRequest 
{
        /**
     * @var OpenAPI\Server\Model\NetworkIdentifier
     * @SerializedName("network_identifier")
     * @Assert\NotNull()
     * @Assert\Type("OpenAPI\Server\Model\NetworkIdentifier")
     * @Type("OpenAPI\Server\Model\NetworkIdentifier")
     */
    protected $networkIdentifier;

    /**
     * @var OpenAPI\Server\Model\PartialBlockIdentifier
     * @SerializedName("block_identifier")
     * @Assert\NotNull()
     * @Assert\Type("OpenAPI\Server\Model\PartialBlockIdentifier")
     * @Type("OpenAPI\Server\Model\PartialBlockIdentifier")
     */
    protected $blockIdentifier;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->networkIdentifier = isset($data['networkIdentifier']) ? $data['networkIdentifier'] : null;
        $this->blockIdentifier = isset($data['blockIdentifier']) ? $data['blockIdentifier'] : null;
    }

    /**
     * Gets networkIdentifier.
     *
     * @return OpenAPI\Server\Model\NetworkIdentifier
     */
    public function getNetworkIdentifier(): NetworkIdentifier
    {
        return $this->networkIdentifier;
    }

    /**
     * Sets networkIdentifier.
     *
     * @param OpenAPI\Server\Model\NetworkIdentifier $networkIdentifier
     *
     * @return $this
     */
    public function setNetworkIdentifier(NetworkIdentifier $networkIdentifier): NetworkIdentifier
    {
        $this->networkIdentifier = $networkIdentifier;

        return $this;
    }

    /**
     * Gets blockIdentifier.
     *
     * @return OpenAPI\Server\Model\PartialBlockIdentifier
     */
    public function getBlockIdentifier(): PartialBlockIdentifier
    {
        return $this->blockIdentifier;
    }

    /**
     * Sets blockIdentifier.
     *
     * @param OpenAPI\Server\Model\PartialBlockIdentifier $blockIdentifier
     *
     * @return $this
     */
    public function setBlockIdentifier(PartialBlockIdentifier $blockIdentifier): PartialBlockIdentifier
    {
        $this->blockIdentifier = $blockIdentifier;

        return $this;
    }
}


