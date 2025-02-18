<?php

namespace OpenAPI\Client\Sezzle;

class SessionStatusExtended extends SessionStatus
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SessionStatusExtended';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'links' => '\OpenAPI\Client\Sezzle\Link[]',
        'order' => 'object',
        'tokenize' => 'object',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'uuid' => null,
        'links' => null,
        'order' => null,
        'tokenize' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uuid' => 'uuid',
        'links' => 'links',
        'order' => 'order',
        'tokenize' => 'tokenize',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'links' => 'setLinks',
        'order' => 'setOrder',
        'tokenize' => 'setTokenize',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'links' => 'getLinks',
        'order' => 'getOrder',
        'tokenize' => 'getTokenize',
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['tokenize'] = $data['tokenize'] ?? null;
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

    public function getOrder(): ?array
    {
        return $this->container['order'];
    }

    public function setOrder(?array $order): self
    {
        $this->container['order'] = $order;

        return $this;
    }

    public function getTokenize(): ?array
    {
        return $this->container['tokenize'];
    }

    public function setTokenize(?array $tokenize): self
    {
        $this->container['tokenize'] = $tokenize;

        return $this;
    }
}
