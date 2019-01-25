<?php
/**
 * ProductResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  OGOship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OGOship API
 *
 * Description
 *
 * OpenAPI spec version: 1.0.0
 * Contact: tech@ogoship.zendesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace OGOship\Models;
use \OGOship\ObjectSerializer;

/**
 * ProductResponse Class Doc Comment
 *
 * @category Class
 * @package  OGOship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductResponse extends Product 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'stock' => 'int',
        'stockAvailable' => 'int',
        'reserved' => 'int',
        'stockUpdate' => 'int',
        'stockUpdateTime' => '\DateTime',
        'editTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'stock' => 'int32',
        'stockAvailable' => 'int32',
        'reserved' => 'int32',
        'stockUpdate' => 'int32',
        'stockUpdateTime' => 'date-time',
        'editTime' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'stock' => 'stock',
        'stockAvailable' => 'stockAvailable',
        'reserved' => 'reserved',
        'stockUpdate' => 'stockUpdate',
        'stockUpdateTime' => 'stockUpdateTime',
        'editTime' => 'editTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stock' => 'setStock',
        'stockAvailable' => 'setStockAvailable',
        'reserved' => 'setReserved',
        'stockUpdate' => 'setStockUpdate',
        'stockUpdateTime' => 'setStockUpdateTime',
        'editTime' => 'setEditTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stock' => 'getStock',
        'stockAvailable' => 'getStockAvailable',
        'reserved' => 'getReserved',
        'stockUpdate' => 'getStockUpdate',
        'stockUpdateTime' => 'getStockUpdateTime',
        'editTime' => 'getEditTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['stock'] = isset($data['stock']) ? $data['stock'] : null;
        $this->container['stockAvailable'] = isset($data['stockAvailable']) ? $data['stockAvailable'] : null;
        $this->container['reserved'] = isset($data['reserved']) ? $data['reserved'] : null;
        $this->container['stockUpdate'] = isset($data['stockUpdate']) ? $data['stockUpdate'] : null;
        $this->container['stockUpdateTime'] = isset($data['stockUpdateTime']) ? $data['stockUpdateTime'] : null;
        $this->container['editTime'] = isset($data['editTime']) ? $data['editTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['stock'] === null) {
            $invalidProperties[] = "'stock' can't be null";
        }
        if ($this->container['stockAvailable'] === null) {
            $invalidProperties[] = "'stockAvailable' can't be null";
        }
        if ($this->container['reserved'] === null) {
            $invalidProperties[] = "'reserved' can't be null";
        }
        if ($this->container['stockUpdate'] === null) {
            $invalidProperties[] = "'stockUpdate' can't be null";
        }
        if ($this->container['editTime'] === null) {
            $invalidProperties[] = "'editTime' can't be null";
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
     * Gets stock
     *
     * @return int
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param int $stock Count of products in stock.
     *
     * @return $this
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets stockAvailable
     *
     * @return int
     */
    public function getStockAvailable()
    {
        return $this->container['stockAvailable'];
    }

    /**
     * Sets stockAvailable
     *
     * @param int $stockAvailable Count of products available for orders.
     *
     * @return $this
     */
    public function setStockAvailable($stockAvailable)
    {
        $this->container['stockAvailable'] = $stockAvailable;

        return $this;
    }

    /**
     * Gets reserved
     *
     * @return int
     */
    public function getReserved()
    {
        return $this->container['reserved'];
    }

    /**
     * Sets reserved
     *
     * @param int $reserved Count of products reserved for not shipped orders.
     *
     * @return $this
     */
    public function setReserved($reserved)
    {
        $this->container['reserved'] = $reserved;

        return $this;
    }

    /**
     * Gets stockUpdate
     *
     * @return int
     */
    public function getStockUpdate()
    {
        return $this->container['stockUpdate'];
    }

    /**
     * Sets stockUpdate
     *
     * @param int $stockUpdate Quantity of new products coming to stock.
     *
     * @return $this
     */
    public function setStockUpdate($stockUpdate)
    {
        $this->container['stockUpdate'] = $stockUpdate;

        return $this;
    }

    /**
     * Gets stockUpdateTime
     *
     * @return \DateTime
     */
    public function getStockUpdateTime()
    {
        return $this->container['stockUpdateTime'];
    }

    /**
     * Sets stockUpdateTime
     *
     * @param \DateTime $stockUpdateTime Date and time (ISO 8601 format) estimate of new stock update coming.
     *
     * @return $this
     */
    public function setStockUpdateTime($stockUpdateTime)
    {
        $this->container['stockUpdateTime'] = $stockUpdateTime;

        return $this;
    }

    /**
     * Gets editTime
     *
     * @return \DateTime
     */
    public function getEditTime()
    {
        return $this->container['editTime'];
    }

    /**
     * Sets editTime
     *
     * @param \DateTime $editTime Date and time (ISO 8601 format) of last change made to this product.
     *
     * @return $this
     */
    public function setEditTime($editTime)
    {
        $this->container['editTime'] = $editTime;

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


