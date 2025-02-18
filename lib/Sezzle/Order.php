<?php
/**
 * Order
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Order implements ModelInterface, ArrayAccess, \JsonSerializable
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
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference_id' => 'string',
        'description' => 'string',
        'requires_shipping_info' => 'bool',
        'items' => '\OpenAPI\Client\Sezzle\LineItem[]',
        'discounts' => '\OpenAPI\Client\Sezzle\Discount[]',
        'metadata' => 'array<string,string>',
        'shipping_amount' => '\OpenAPI\Client\Sezzle\Price',
        'tax_amount' => '\OpenAPI\Client\Sezzle\Price',
        'checkout_expiration' => '\DateTime',
        'intent' => 'string',
        'order_amount' => '\OpenAPI\Client\Sezzle\Price',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference_id' => null,
        'description' => null,
        'requires_shipping_info' => null,
        'items' => null,
        'discounts' => null,
        'metadata' => null,
        'shipping_amount' => null,
        'tax_amount' => null,
        'checkout_expiration' => 'date-time',
        'intent' => null,
        'order_amount' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'reference_id' => 'reference_id',
        'description' => 'description',
        'requires_shipping_info' => 'requires_shipping_info',
        'items' => 'items',
        'discounts' => 'discounts',
        'metadata' => 'metadata',
        'shipping_amount' => 'shipping_amount',
        'tax_amount' => 'tax_amount',
        'checkout_expiration' => 'checkout_expiration',
        'intent' => 'intent',
        'order_amount' => 'order_amount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_id' => 'setReferenceId',
        'description' => 'setDescription',
        'requires_shipping_info' => 'setRequiresShippingInfo',
        'items' => 'setItems',
        'discounts' => 'setDiscounts',
        'metadata' => 'setMetadata',
        'shipping_amount' => 'setShippingAmount',
        'tax_amount' => 'setTaxAmount',
        'checkout_expiration' => 'setCheckoutExpiration',
        'intent' => 'setIntent',
        'order_amount' => 'setOrderAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_id' => 'getReferenceId',
        'description' => 'getDescription',
        'requires_shipping_info' => 'getRequiresShippingInfo',
        'items' => 'getItems',
        'discounts' => 'getDiscounts',
        'metadata' => 'getMetadata',
        'shipping_amount' => 'getShippingAmount',
        'tax_amount' => 'getTaxAmount',
        'checkout_expiration' => 'getCheckoutExpiration',
        'intent' => 'getIntent',
        'order_amount' => 'getOrderAmount',
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['requires_shipping_info'] = $data['requires_shipping_info'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['shipping_amount'] = $data['shipping_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['checkout_expiration'] = $data['checkout_expiration'] ?? null;
        $this->container['intent'] = $data['intent'] ?? null;
        $this->container['order_amount'] = $data['order_amount'] ?? null;
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
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @return Price|null
     */
    public function getOrderAmount(): ?Price
    {
        return $this->container['order_amount'];
    }

    public function setOrderAmount(?Price $orderAmount) : self
    {
        $this->container['order_amount'] = $orderAmount;

        return $this;
    }

    /**
     * Gets intent
     *
     * @return string|null
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets Intent_id
     *
     * @param string|null $intent Intent
     *
     * @return self
     */
    public function setIntent($intent)
    {
        $this->container['intent'] = $intent;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string|null $reference_id reference_id
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets requires_shipping_info
     *
     * @return bool|null
     */
    public function getRequiresShippingInfo()
    {
        return $this->container['requires_shipping_info'];
    }

    /**
     * Sets requires_shipping_info
     *
     * @param bool|null $requires_shipping_info requires_shipping_info
     *
     * @return self
     */
    public function setRequiresShippingInfo($requires_shipping_info)
    {
        $this->container['requires_shipping_info'] = $requires_shipping_info;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Sezzle\LineItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Sezzle\LineItem[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \OpenAPI\Client\Sezzle\Discount[]|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \OpenAPI\Client\Sezzle\Discount[]|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets shipping_amount
     *
     * @return \OpenAPI\Client\Sezzle\Price|null
     */
    public function getShippingAmount()
    {
        return $this->container['shipping_amount'];
    }

    /**
     * Sets shipping_amount
     *
     * @param \OpenAPI\Client\Sezzle\Price|null $shipping_amount shipping_amount
     *
     * @return self
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->container['shipping_amount'] = $shipping_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return \OpenAPI\Client\Sezzle\Price|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \OpenAPI\Client\Sezzle\Price|null $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets checkout_expiration
     *
     * @return \DateTime|null
     */
    public function getCheckoutExpiration()
    {
        return $this->container['checkout_expiration'];
    }

    /**
     * Sets checkout_expiration
     *
     * @param \DateTime|null $checkout_expiration checkout_expiration
     *
     * @return self
     */
    public function setCheckoutExpiration($checkout_expiration)
    {
        $this->container['checkout_expiration'] = $checkout_expiration;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
     * @param integer $offset Offset
     *
     * @return void
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
