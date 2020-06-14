<?php
/**
 * Error
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
 * Class representing the Error model.
 *
 * Instead of utilizing HTTP status codes to describe node errors (which often do not have a good analog), rich errors are returned using this object.
 *
 * @package melmccann\rosettaserverstubs\RosettaServerStubsModel
 * @author  OpenAPI Generator team
 */
class Error 
{
        /**
     * Code is a network-specific error code. If desired, this code can be equivalent to an HTTP status code.
     *
     * @var int
     * @SerializedName("code")
     * @Assert\NotNull()
     * @Assert\Type("int")
     * @Type("int")
     * @Assert\GreaterThanOrEqual(0)
     */
    protected $code;

    /**
     * Message is a network-specific error message.
     *
     * @var string
     * @SerializedName("message")
     * @Assert\NotNull()
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $message;

    /**
     * An error is retriable if the same request may succeed if submitted again.
     *
     * @var bool
     * @SerializedName("retriable")
     * @Assert\NotNull()
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected $retriable;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->code = isset($data['code']) ? $data['code'] : null;
        $this->message = isset($data['message']) ? $data['message'] : null;
        $this->retriable = isset($data['retriable']) ? $data['retriable'] : null;
    }

    /**
     * Gets code.
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets code.
     *
     * @param int $code  Code is a network-specific error code. If desired, this code can be equivalent to an HTTP status code.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets message.
     *
     * @param string $message  Message is a network-specific error message.
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Gets retriable.
     *
     * @return bool
     */
    public function isRetriable()
    {
        return $this->retriable;
    }

    /**
     * Sets retriable.
     *
     * @param bool $retriable  An error is retriable if the same request may succeed if submitted again.
     *
     * @return $this
     */
    public function setRetriable($retriable)
    {
        $this->retriable = $retriable;

        return $this;
    }
}


