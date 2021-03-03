<?php
/**
 * ListingCreateListing
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
 * ListingCreateListing Class Doc Comment
 *
 * @category Class
 * @package  Bitween\DevTo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ListingCreateListing implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListingCreate_listing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'bodyMarkdown' => 'string',
        'category' => '\Bitween\DevTo\Model\ListingCategory',
        'tags' => 'string[]',
        'tagList' => 'string',
        'expiresAt' => '\DateTime',
        'contactViaConnect' => 'bool',
        'location' => 'string',
        'organizationId' => 'int',
        'action' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'bodyMarkdown' => null,
        'category' => null,
        'tags' => null,
        'tagList' => null,
        'expiresAt' => 'date-time',
        'contactViaConnect' => null,
        'location' => null,
        'organizationId' => 'int64',
        'action' => null
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
        'title' => 'title',
        'bodyMarkdown' => 'body_markdown',
        'category' => 'category',
        'tags' => 'tags',
        'tagList' => 'tag_list',
        'expiresAt' => 'expires_at',
        'contactViaConnect' => 'contact_via_connect',
        'location' => 'location',
        'organizationId' => 'organization_id',
        'action' => 'action'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'bodyMarkdown' => 'setBodyMarkdown',
        'category' => 'setCategory',
        'tags' => 'setTags',
        'tagList' => 'setTagList',
        'expiresAt' => 'setExpiresAt',
        'contactViaConnect' => 'setContactViaConnect',
        'location' => 'setLocation',
        'organizationId' => 'setOrganizationId',
        'action' => 'setAction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'bodyMarkdown' => 'getBodyMarkdown',
        'category' => 'getCategory',
        'tags' => 'getTags',
        'tagList' => 'getTagList',
        'expiresAt' => 'getExpiresAt',
        'contactViaConnect' => 'getContactViaConnect',
        'location' => 'getLocation',
        'organizationId' => 'getOrganizationId',
        'action' => 'getAction'
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

    const ACTION_DRAFT = 'draft';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_DRAFT,
        ];
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['bodyMarkdown'] = $data['bodyMarkdown'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['tagList'] = $data['tagList'] ?? null;
        $this->container['expiresAt'] = $data['expiresAt'] ?? null;
        $this->container['contactViaConnect'] = $data['contactViaConnect'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['organizationId'] = $data['organizationId'] ?? null;
        $this->container['action'] = $data['action'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['bodyMarkdown'] === null) {
            $invalidProperties[] = "'bodyMarkdown' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets bodyMarkdown
     *
     * @return string
     */
    public function getBodyMarkdown()
    {
        return $this->container['bodyMarkdown'];
    }

    /**
     * Sets bodyMarkdown
     *
     * @param string $bodyMarkdown The body of the listing in Markdown format.
     *
     * @return self
     */
    public function setBodyMarkdown($bodyMarkdown)
    {
        $this->container['bodyMarkdown'] = $bodyMarkdown;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Bitween\DevTo\Model\ListingCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Bitween\DevTo\Model\ListingCategory $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Tags related to the listing.  A maximum of 8 tags are allowed and it takes precedence over `tag_list`.
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets tagList
     *
     * @return string|null
     */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
     * Sets tagList
     *
     * @param string|null $tagList Comma separated list of tags.  A maximum of 8 tags are allowed.
     *
     * @return self
     */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;

        return $this;
    }

    /**
     * Gets expiresAt
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     *
     * @param \DateTime|null $expiresAt Date and time of expiration.
     *
     * @return self
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }

    /**
     * Gets contactViaConnect
     *
     * @return bool|null
     */
    public function getContactViaConnect()
    {
        return $this->container['contactViaConnect'];
    }

    /**
     * Sets contactViaConnect
     *
     * @param bool|null $contactViaConnect True if users are allowed to contact the listing's owner via DEV connect, false otherwise.  Defaults to false.
     *
     * @return self
     */
    public function setContactViaConnect($contactViaConnect)
    {
        $this->container['contactViaConnect'] = $contactViaConnect;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location Geographical area or city for the listing.
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return int|null
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param int|null $organizationId The id of the organization the user is creating the listing for.  Only users belonging to an organization can assign the listing to it.
     *
     * @return self
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action Set it to \"draft\" to create an unpublished listing
     *
     * @return self
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action', must be one of '%s'",
                    $action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

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

