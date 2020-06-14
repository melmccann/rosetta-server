<?php
/**
 * NetworkIdentifier
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
 * Class representing the NetworkIdentifier model.
 *
 * The network_identifier specifies which network a particular object is associated with.
 *
 * @package melmccann\rosettaserverstubs\RosettaServerStubsModel
 * @author  OpenAPI Generator team
 */
class NetworkIdentifier 
{
        /**
     * @var string
     * @SerializedName("blockchain")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $blockchain;

    /**
     * If a blockchain has a specific chain-id or network identifier, it should go in this field. It is up to the client to determine which network-specific identifier is mainnet or testnet.
     *
     * @var string
     * @SerializedName("network")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $network;

    /**
     * @var melmccann\rosettaserverstubs\RosettaServerStubsModel\SubNetworkIdentifier|null
     * @SerializedName("sub_network_identifier")
     * @Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\SubNetworkIdentifier")
     * @Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\SubNetworkIdentifier")
     */
    protected $subNetworkIdentifier;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->blockchain = isset($data['blockchain']) ? $data['blockchain'] : null;
        $this->network = isset($data['network']) ? $data['network'] : null;
        $this->subNetworkIdentifier = isset($data['subNetworkIdentifier']) ? $data['subNetworkIdentifier'] : null;
    }

    /**
     * Gets blockchain.
     *
     * @return string
     */
    public function getBlockchain()
    {
        return $this->blockchain;
    }

    /**
     * Sets blockchain.
     *
     * @param string $blockchain
     *
     * @return $this
     */
    public function setBlockchain($blockchain)
    {
        $this->blockchain = $blockchain;

        return $this;
    }

    /**
     * Gets network.
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets network.
     *
     * @param string $network  If a blockchain has a specific chain-id or network identifier, it should go in this field. It is up to the client to determine which network-specific identifier is mainnet or testnet.
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * Gets subNetworkIdentifier.
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\SubNetworkIdentifier|null
     */
    public function getSubNetworkIdentifier(): ?SubNetworkIdentifier
    {
        return $this->subNetworkIdentifier;
    }

    /**
     * Sets subNetworkIdentifier.
     *
     * @param melmccann\rosettaserverstubs\RosettaServerStubsModel\SubNetworkIdentifier|null $subNetworkIdentifier
     *
     * @return $this
     */
    public function setSubNetworkIdentifier(SubNetworkIdentifier $subNetworkIdentifier = null): ?SubNetworkIdentifier
    {
        $this->subNetworkIdentifier = $subNetworkIdentifier;

        return $this;
    }
}


