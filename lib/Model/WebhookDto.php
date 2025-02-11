<?php
/**
 * WebhookDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  HouseOfTickets\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * Supplier API description... <br /><br /> Open [OpenAPI.json](doc.json).
 *
 * OpenAPI spec version: 1.1.15
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HouseOfTickets\PartnerPlatform\Model;

use \ArrayAccess;
use \HouseOfTickets\PartnerPlatform\ObjectSerializer;

/**
 * WebhookDto Class Doc Comment
 *
 * @category Class
 * @package  HouseOfTickets\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'supplier_webhook_id' => 'string',
'last_success' => '\DateTime',
'last_failure' => '\DateTime',
'url' => 'string',
'type' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'supplier_webhook_id' => null,
'last_success' => 'date-time',
'last_failure' => 'date-time',
'url' => null,
'type' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'supplier_webhook_id' => 'supplierWebhookId',
'last_success' => 'lastSuccess',
'last_failure' => 'lastFailure',
'url' => 'url',
'type' => 'type'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supplier_webhook_id' => 'setSupplierWebhookId',
'last_success' => 'setLastSuccess',
'last_failure' => 'setLastFailure',
'url' => 'setUrl',
'type' => 'setType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supplier_webhook_id' => 'getSupplierWebhookId',
'last_success' => 'getLastSuccess',
'last_failure' => 'getLastFailure',
'url' => 'getUrl',
'type' => 'getType'    ];

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
        return self::$swaggerModelName;
    }

    const TYPE_ORDER = 'new-order';
const TYPE_ANNOUNCED_RETURN = 'new-announced-return';
const TYPE_APPROVAL_RESULT = 'new-approval-result';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ORDER,
self::TYPE_ANNOUNCED_RETURN,
self::TYPE_APPROVAL_RESULT,        ];
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
        $this->container['supplier_webhook_id'] = isset($data['supplier_webhook_id']) ? $data['supplier_webhook_id'] : null;
        $this->container['last_success'] = isset($data['last_success']) ? $data['last_success'] : null;
        $this->container['last_failure'] = isset($data['last_failure']) ? $data['last_failure'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['supplier_webhook_id'] === null) {
            $invalidProperties[] = "'supplier_webhook_id' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets supplier_webhook_id
     *
     * @return string
     */
    public function getSupplierWebhookId()
    {
        return $this->container['supplier_webhook_id'];
    }

    /**
     * Sets supplier_webhook_id
     *
     * @param string $supplier_webhook_id supplier_webhook_id
     *
     * @return $this
     */
    public function setSupplierWebhookId($supplier_webhook_id)
    {
        $this->container['supplier_webhook_id'] = $supplier_webhook_id;

        return $this;
    }

    /**
     * Gets last_success
     *
     * @return \DateTime
     */
    public function getLastSuccess()
    {
        return $this->container['last_success'];
    }

    /**
     * Sets last_success
     *
     * @param \DateTime $last_success last_success
     *
     * @return $this
     */
    public function setLastSuccess($last_success)
    {
        $this->container['last_success'] = $last_success;

        return $this;
    }

    /**
     * Gets last_failure
     *
     * @return \DateTime
     */
    public function getLastFailure()
    {
        return $this->container['last_failure'];
    }

    /**
     * Sets last_failure
     *
     * @param \DateTime $last_failure last_failure
     *
     * @return $this
     */
    public function setLastFailure($last_failure)
    {
        $this->container['last_failure'] = $last_failure;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
