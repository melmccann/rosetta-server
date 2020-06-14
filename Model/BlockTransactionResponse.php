<?php
/**
 * BlockTransactionResponse
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
 * Class representing the BlockTransactionResponse model.
 *
 * A BlockTransactionResponse contains information about a block transaction.
 *
 * @package OpenAPI\Server\Model
 * @author  OpenAPI Generator team
 */
class BlockTransactionResponse 
{
        /**
     * @var OpenAPI\Server\Model\Transaction
     * @SerializedName("transaction")
     * @Assert\NotNull()
     * @Assert\Type("OpenAPI\Server\Model\Transaction")
     * @Type("OpenAPI\Server\Model\Transaction")
     */
    protected $transaction;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->transaction = isset($data['transaction']) ? $data['transaction'] : null;
    }

    /**
     * Gets transaction.
     *
     * @return OpenAPI\Server\Model\Transaction
     */
    public function getTransaction(): Transaction
    {
        return $this->transaction;
    }

    /**
     * Sets transaction.
     *
     * @param OpenAPI\Server\Model\Transaction $transaction
     *
     * @return $this
     */
    public function setTransaction(Transaction $transaction): Transaction
    {
        $this->transaction = $transaction;

        return $this;
    }
}


