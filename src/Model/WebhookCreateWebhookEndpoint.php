<?php
/**
 * WebhookCreateWebhookEndpoint
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Bitween\DevTo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DEV API (beta)
 *
 * Access Forem articles, users and other resources via API.  For a real-world example of Forem in action, check out [DEV](https://www.dev.to).  All endpoints that don't require authentication are CORS enabled.  Dates and date times, unless otherwise specified, must be in the [RFC 3339](https://tools.ietf.org/html/rfc3339) format.  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the OpenAPI document: 0.9.5
 * Contact: yo@dev.to
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bitween\DevTo\Model;

use \ArrayAccess;
use \Bitween\DevTo\ObjectSerializer;

/**
 * WebhookCreateWebhookEndpoint Class Doc Comment
 *
 * @category Class
 * @package  Bitween\DevTo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class WebhookCreateWebhookEndpoint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookCreate_webhook_endpoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source' => 'string',
        'targetUrl' => 'string',
        'events' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'source' => null,
        'targetUrl' => 'url',
        'events' => null
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
        'source' => 'source',
        'targetUrl' => 'target_url',
        'events' => 'events'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source' => 'setSource',
        'targetUrl' => 'setTargetUrl',
        'events' => 'setEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source' => 'getSource',
        'targetUrl' => 'getTargetUrl',
        'events' => 'getEvents'
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
        $this->container['source'] = $data['source'] ?? null;
        $this->container['targetUrl'] = $data['targetUrl'] ?? null;
        $this->container['events'] = $data['events'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['targetUrl'] === null) {
            $invalidProperties[] = "'targetUrl' can't be null";
        }
        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
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
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source The name of the requester, eg. \"DEV\"
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets targetUrl
     *
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->container['targetUrl'];
    }

    /**
     * Sets targetUrl
     *
     * @param string $targetUrl targetUrl
     *
     * @return self
     */
    public function setTargetUrl($targetUrl)
    {
        $this->container['targetUrl'] = $targetUrl;

        return $this;
    }

    /**
     * Gets events
     *
     * @return string[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param string[] $events An array of events identifiers
     *
     * @return self
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


