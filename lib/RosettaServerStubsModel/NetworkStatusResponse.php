<?php
/**
 * NetworkStatusResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  melmccannosettaserverstubs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rosetta
 *
 * A Standard for Blockchain Interaction
 *
 * The version of the OpenAPI document: 1.3.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace melmccannosettaserverstubs\RosettaServerStubsModel;

use \ArrayAccess;
use \melmccannosettaserverstubs\ObjectSerializer;

/**
 * NetworkStatusResponse Class Doc Comment
 *
 * @category Class
 * @description NetworkStatusResponse contains basic information about the node&#39;s view of a blockchain network.
 * @package  melmccannosettaserverstubs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NetworkStatusResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NetworkStatusResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_block_identifier' => '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockIdentifier',
        'current_block_timestamp' => 'int',
        'genesis_block_identifier' => '\melmccannosettaserverstubs\RosettaServerStubsModel\BlockIdentifier',
        'peers' => '\melmccannosettaserverstubs\RosettaServerStubsModel\Peer[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'current_block_identifier' => null,
        'current_block_timestamp' => 'int64',
        'genesis_block_identifier' => null,
        'peers' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'current_block_identifier' => 'current_block_identifier',
        'current_block_timestamp' => 'current_block_timestamp',
        'genesis_block_identifier' => 'genesis_block_identifier',
        'peers' => 'peers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_block_identifier' => 'setCurrentBlockIdentifier',
        'current_block_timestamp' => 'setCurrentBlockTimestamp',
        'genesis_block_identifier' => 'setGenesisBlockIdentifier',
        'peers' => 'setPeers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_block_identifier' => 'getCurrentBlockIdentifier',
        'current_block_timestamp' => 'getCurrentBlockTimestamp',
        'genesis_block_identifier' => 'getGenesisBlockIdentifier',
        'peers' => 'getPeers'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['current_block_identifier'] = isset($data['current_block_identifier']) ? $data['current_block_identifier'] : null;
        $this->container['current_block_timestamp'] = isset($data['current_block_timestamp']) ? $data['current_block_timestamp'] : null;
        $this->container['genesis_block_identifier'] = isset($data['genesis_block_identifier']) ? $data['genesis_block_identifier'] : null;
        $this->container['peers'] = isset($data['peers']) ? $data['peers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['current_block_identifier'] === null) {
            $invalidProperties[] = "'current_block_identifier' can't be null";
        }
        if ($this->container['current_block_timestamp'] === null) {
            $invalidProperties[] = "'current_block_timestamp' can't be null";
        }
        if (($this->container['current_block_timestamp'] < 0)) {
            $invalidProperties[] = "invalid value for 'current_block_timestamp', must be bigger than or equal to 0.";
        }

        if ($this->container['genesis_block_identifier'] === null) {
            $invalidProperties[] = "'genesis_block_identifier' can't be null";
        }
        if ($this->container['peers'] === null) {
            $invalidProperties[] = "'peers' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets current_block_identifier
     *
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\BlockIdentifier
     */
    public function getCurrentBlockIdentifier()
    {
        return $this->container['current_block_identifier'];
    }

    /**
     * Sets current_block_identifier
     *
     * @param \melmccannosettaserverstubs\RosettaServerStubsModel\BlockIdentifier $current_block_identifier current_block_identifier
     *
     * @return $this
     */
    public function setCurrentBlockIdentifier($current_block_identifier)
    {
        $this->container['current_block_identifier'] = $current_block_identifier;

        return $this;
    }

    /**
     * Gets current_block_timestamp
     *
     * @return int
     */
    public function getCurrentBlockTimestamp()
    {
        return $this->container['current_block_timestamp'];
    }

    /**
     * Sets current_block_timestamp
     *
     * @param int $current_block_timestamp The timestamp of the block in milliseconds since the Unix Epoch. The timestamp is stored in milliseconds because some blockchains produce blocks more often than once a second.
     *
     * @return $this
     */
    public function setCurrentBlockTimestamp($current_block_timestamp)
    {

        if (($current_block_timestamp < 0)) {
            throw new \InvalidArgumentException('invalid value for $current_block_timestamp when calling NetworkStatusResponse., must be bigger than or equal to 0.');
        }

        $this->container['current_block_timestamp'] = $current_block_timestamp;

        return $this;
    }

    /**
     * Gets genesis_block_identifier
     *
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\BlockIdentifier
     */
    public function getGenesisBlockIdentifier()
    {
        return $this->container['genesis_block_identifier'];
    }

    /**
     * Sets genesis_block_identifier
     *
     * @param \melmccannosettaserverstubs\RosettaServerStubsModel\BlockIdentifier $genesis_block_identifier genesis_block_identifier
     *
     * @return $this
     */
    public function setGenesisBlockIdentifier($genesis_block_identifier)
    {
        $this->container['genesis_block_identifier'] = $genesis_block_identifier;

        return $this;
    }

    /**
     * Gets peers
     *
     * @return \melmccannosettaserverstubs\RosettaServerStubsModel\Peer[]
     */
    public function getPeers()
    {
        return $this->container['peers'];
    }

    /**
     * Sets peers
     *
     * @param \melmccannosettaserverstubs\RosettaServerStubsModel\Peer[] $peers peers
     *
     * @return $this
     */
    public function setPeers($peers)
    {
        $this->container['peers'] = $peers;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


