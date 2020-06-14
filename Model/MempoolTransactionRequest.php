<?php
/**
 * MempoolTransactionRequest
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
 * Class representing the MempoolTransactionRequest model.
 *
 * A MempoolTransactionRequest is utilized to retrieve a transaction from the mempool.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class MempoolTransactionRequest 
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
     * @var OpenAPI\Server\Model\TransactionIdentifier
     * @SerializedName("transaction_identifier")
     * @Assert\NotNull()
     * @Assert\Type("OpenAPI\Server\Model\TransactionIdentifier")
     * @Type("OpenAPI\Server\Model\TransactionIdentifier")
     */
    protected $transactionIdentifier;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->networkIdentifier = isset($data['networkIdentifier']) ? $data['networkIdentifier'] : null;
        $this->transactionIdentifier = isset($data['transactionIdentifier']) ? $data['transactionIdentifier'] : null;
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
     * Gets transactionIdentifier.
     *
     * @return OpenAPI\Server\Model\TransactionIdentifier
     */
    public function getTransactionIdentifier(): TransactionIdentifier
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets transactionIdentifier.
     *
     * @param OpenAPI\Server\Model\TransactionIdentifier $transactionIdentifier
     *
     * @return $this
     */
    public function setTransactionIdentifier(TransactionIdentifier $transactionIdentifier): TransactionIdentifier
    {
        $this->transactionIdentifier = $transactionIdentifier;

        return $this;
    }
}

