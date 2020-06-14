<?php
/**
 * BlockTransactionRequest
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
 * Class representing the BlockTransactionRequest model.
 *
 * A BlockTransactionRequest is used to fetch a Transaction included in a block that is not returned in a BlockResponse.
 *
 * @package melmccann\rosettaserverstubs\RosettaServerStubsModel
 * @author  OpenAPI Generator team
 */
class BlockTransactionRequest 
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
     * @var melmccann\rosettaserverstubs\RosettaServerStubsModel\BlockIdentifier
     * @SerializedName("block_identifier")
     * @Assert\NotNull()
     * @Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\BlockIdentifier")
     * @Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\BlockIdentifier")
     */
    protected $blockIdentifier;

    /**
     * @var melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier
     * @SerializedName("transaction_identifier")
     * @Assert\NotNull()
     * @Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier")
     * @Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier")
     */
    protected $transactionIdentifier;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->networkIdentifier = isset($data['networkIdentifier']) ? $data['networkIdentifier'] : null;
        $this->blockIdentifier = isset($data['blockIdentifier']) ? $data['blockIdentifier'] : null;
        $this->transactionIdentifier = isset($data['transactionIdentifier']) ? $data['transactionIdentifier'] : null;
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
     * Gets blockIdentifier.
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\BlockIdentifier
     */
    public function getBlockIdentifier(): BlockIdentifier
    {
        return $this->blockIdentifier;
    }

    /**
     * Sets blockIdentifier.
     *
     * @param melmccann\rosettaserverstubs\RosettaServerStubsModel\BlockIdentifier $blockIdentifier
     *
     * @return $this
     */
    public function setBlockIdentifier(BlockIdentifier $blockIdentifier): BlockIdentifier
    {
        $this->blockIdentifier = $blockIdentifier;

        return $this;
    }

    /**
     * Gets transactionIdentifier.
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier
     */
    public function getTransactionIdentifier(): TransactionIdentifier
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets transactionIdentifier.
     *
     * @param melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier $transactionIdentifier
     *
     * @return $this
     */
    public function setTransactionIdentifier(TransactionIdentifier $transactionIdentifier): TransactionIdentifier
    {
        $this->transactionIdentifier = $transactionIdentifier;

        return $this;
    }
}


