<?php

/**
 * Address
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Sezzle API
 *
 * The Sezzle API is intended for merchants interested in accepting Sezzle Pay as a payment option.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Sezzle;

use ArrayAccess;
use OpenAPI\Client\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable, \Stringable
{
    public const DISCRIMINATOR = null;

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => 'string',
        'country_code' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'postal_code' => 'string',
        'state' => 'string',
        'street' => 'string',
        'street2' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'city' => null,
        'country_code' => null,
        'name' => null,
        'phone' => null,
        'postal_code' => null,
        'state' => null,
        'street' => null,
        'street2' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'city' => 'city',
        'country_code' => 'country_code',
        'name' => 'name',
        'phone' => 'phone',
        'postal_code' => 'postal_code',
        'state' => 'state',
        'street' => 'street',
        'street2' => 'street2',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'name' => 'setName',
        'phone' => 'setPhone',
        'postal_code' => 'setPostalCode',
        'state' => 'setState',
        'street' => 'setStreet',
        'street2' => 'setStreet2',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'name' => 'getName',
        'phone' => 'getPhone',
        'postal_code' => 'getPostalCode',
        'state' => 'getState',
        'street' => 'getStreet',
        'street2' => 'getStreet2',
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['street2'] = $data['street2'] ?? null;
    }

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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }

        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }

        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return $this->listInvalidProperties() === [];
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     */
    public function setCity($city): static
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     */
    public function setCountryCode($country_code): static
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     */
    public function setName($name): static
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     */
    public function setPhone($phone): static
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     */
    public function setPostalCode($postal_code): static
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     */
    public function setState($state): static
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     */
    public function setStreet($street): static
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string|null
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string|null $street2 street2
     */
    public function setStreet2($street2): static
    {
        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, $value): void
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
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
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
    public function jsonSerialize(): mixed
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     */
    public function __toString(): string
    {
        return (string) json_encode(
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
