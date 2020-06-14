<?php
/**
 * BlockResponse
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
 * Class representing the BlockResponse model.
 *
 * A BlockResponse includes a fully-populated block or a partially-populated block with a list of other transactions to fetch (other_transactions).
 *
 * @package melmccann\rosettaserverstubs\RosettaServerStubsModel
 * @author  OpenAPI Generator team
 */
class BlockResponse 
{
        /**
     * @var melmccann\rosettaserverstubs\RosettaServerStubsModel\Block
     * @SerializedName("block")
     * @Assert\NotNull()
     * @Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\Block")
     * @Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\Block")
     */
    protected $block;

    /**
     * Some blockchains may require additional transactions to be fetched that weren&#39;t returned in the block response (ex: block only returns transaction hashes). For blockchains with a lot of transactions in each block, this can be very useful as consumers can concurrently fetch all transactions returned.
     *
     * @var melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier[]|null
     * @SerializedName("other_transactions")
     * @Assert\All({
     *   @Assert\Type("melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier")
     * })
     * @Type("array<melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier>")
     */
    protected $otherTransactions;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->block = isset($data['block']) ? $data['block'] : null;
        $this->otherTransactions = isset($data['otherTransactions']) ? $data['otherTransactions'] : null;
    }

    /**
     * Gets block.
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\Block
     */
    public function getBlock(): Block
    {
        return $this->block;
    }

    /**
     * Sets block.
     *
     * @param melmccann\rosettaserverstubs\RosettaServerStubsModel\Block $block
     *
     * @return $this
     */
    public function setBlock(Block $block): Block
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Gets otherTransactions.
     *
     * @return melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier[]|null
     */
    public function getOtherTransactions(): ?array
    {
        return $this->otherTransactions;
    }

    /**
     * Sets otherTransactions.
     *
     * @param melmccann\rosettaserverstubs\RosettaServerStubsModel\TransactionIdentifier[]|null $otherTransactions  Some blockchains may require additional transactions to be fetched that weren't returned in the block response (ex: block only returns transaction hashes). For blockchains with a lot of transactions in each block, this can be very useful as consumers can concurrently fetch all transactions returned.
     *
     * @return $this
     */
    public function setOtherTransactions(array $otherTransactions = null): ?array
    {
        $this->otherTransactions = $otherTransactions;

        return $this;
    }
}


