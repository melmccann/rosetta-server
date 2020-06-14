<?php
/**
 * Peer
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
 * Class representing the Peer model.
 *
 * A Peer is a representation of a node&#39;s peer.
 *
 * @package melmccann\rosettaserverstubs\RosettaServerStubsModel
 * @author  OpenAPI Generator team
 */
class Peer 
{
        /**
     * @var string
     * @SerializedName("peer_id")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $peerId;

    /**
     * @var array|null
     * @SerializedName("metadata")
     * @Assert\Type("array")
     * @Type("array")
     */
    protected $metadata;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->peerId = isset($data['peerId']) ? $data['peerId'] : null;
        $this->metadata = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
     * Gets peerId.
     *
     * @return string
     */
    public function getPeerId()
    {
        return $this->peerId;
    }

    /**
     * Sets peerId.
     *
     * @param string $peerId
     *
     * @return $this
     */
    public function setPeerId($peerId)
    {
        $this->peerId = $peerId;

        return $this;
    }

    /**
     * Gets metadata.
     *
     * @return array|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Sets metadata.
     *
     * @param array|null $metadata
     *
     * @return $this
     */
    public function setMetadata(array $metadata = null): ?array
    {
        $this->metadata = $metadata;

        return $this;
    }
}


