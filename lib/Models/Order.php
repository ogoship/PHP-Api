<?php
/**
 * Order
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

use \ArrayAccess;
use \OGOship\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  OGOship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference' => 'string',
        'shippingCode' => 'string',
        'pickUpPointCode' => 'string',
        'status' => 'object',
        'orderLines' => '\OGOship\Models\OrderLine[]',
        'customer' => '\OGOship\Models\Customer',
        'comments' => 'string',
        'documents' => '\OGOship\Models\Document[]',
        'priceTotal' => 'float',
        'priceCurrency' => 'string',
        'cashOnDelivery' => 'object',
        'test' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference' => null,
        'shippingCode' => null,
        'pickUpPointCode' => null,
        'status' => null,
        'orderLines' => null,
        'customer' => null,
        'comments' => null,
        'documents' => null,
        'priceTotal' => 'decimal',
        'priceCurrency' => null,
        'cashOnDelivery' => null,
        'test' => null
    ];

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
        'reference' => 'reference',
        'shippingCode' => 'shippingCode',
        'pickUpPointCode' => 'pickUpPointCode',
        'status' => 'status',
        'orderLines' => 'orderLines',
        'customer' => 'customer',
        'comments' => 'comments',
        'documents' => 'documents',
        'priceTotal' => 'priceTotal',
        'priceCurrency' => 'priceCurrency',
        'cashOnDelivery' => 'cashOnDelivery',
        'test' => 'test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'shippingCode' => 'setShippingCode',
        'pickUpPointCode' => 'setPickUpPointCode',
        'status' => 'setStatus',
        'orderLines' => 'setOrderLines',
        'customer' => 'setCustomer',
        'comments' => 'setComments',
        'documents' => 'setDocuments',
        'priceTotal' => 'setPriceTotal',
        'priceCurrency' => 'setPriceCurrency',
        'cashOnDelivery' => 'setCashOnDelivery',
        'test' => 'setTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'shippingCode' => 'getShippingCode',
        'pickUpPointCode' => 'getPickUpPointCode',
        'status' => 'getStatus',
        'orderLines' => 'getOrderLines',
        'customer' => 'getCustomer',
        'comments' => 'getComments',
        'documents' => 'getDocuments',
        'priceTotal' => 'getPriceTotal',
        'priceCurrency' => 'getPriceCurrency',
        'cashOnDelivery' => 'getCashOnDelivery',
        'test' => 'getTest'
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
        return self::$swaggerModelName;
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['shippingCode'] = isset($data['shippingCode']) ? $data['shippingCode'] : null;
        $this->container['pickUpPointCode'] = isset($data['pickUpPointCode']) ? $data['pickUpPointCode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['orderLines'] = isset($data['orderLines']) ? $data['orderLines'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['priceTotal'] = isset($data['priceTotal']) ? $data['priceTotal'] : null;
        $this->container['priceCurrency'] = isset($data['priceCurrency']) ? $data['priceCurrency'] : null;
        $this->container['cashOnDelivery'] = isset($data['cashOnDelivery']) ? $data['cashOnDelivery'] : null;
        $this->container['test'] = isset($data['test']) ? $data['test'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ((mb_strlen($this->container['reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
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
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Reference number of order
     *
     * @return $this
     */
    public function setReference($reference)
    {

        if ((mb_strlen($reference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Order., must be bigger than or equal to 1.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets shippingCode
     *
     * @return string
     */
    public function getShippingCode()
    {
        return $this->container['shippingCode'];
    }

    /**
     * Sets shippingCode
     *
     * @param string $shippingCode Code of shipping method which you have enabled at Edit Merchant page. This is required if more than 1 shipping method is selected.
     *
     * @return $this
     */
    public function setShippingCode($shippingCode)
    {
        $this->container['shippingCode'] = $shippingCode;

        return $this;
    }

    /**
     * Gets pickUpPointCode
     *
     * @return string
     */
    public function getPickUpPointCode()
    {
        return $this->container['pickUpPointCode'];
    }

    /**
     * Sets pickUpPointCode
     *
     * @param string $pickUpPointCode Code of pickup point.
     *
     * @return $this
     */
    public function setPickUpPointCode($pickUpPointCode)
    {
        $this->container['pickUpPointCode'] = $pickUpPointCode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return object
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param object $status Status of order
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets orderLines
     *
     * @return \OGOship\Models\OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['orderLines'];
    }

    /**
     * Sets orderLines
     *
     * @param \OGOship\Models\OrderLine[] $orderLines Required for new order. If given when updating order then all order lines will be replaced with the ones sent with update.
     *
     * @return $this
     */
    public function setOrderLines($orderLines)
    {
        $this->container['orderLines'] = $orderLines;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OGOship\Models\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OGOship\Models\Customer $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments Write any additional comments about order.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \OGOship\Models\Document[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \OGOship\Models\Document[] $documents If given when updating order then all documents will be replaced with the ones sent with update.
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets priceTotal
     *
     * @return float
     */
    public function getPriceTotal()
    {
        return $this->container['priceTotal'];
    }

    /**
     * Sets priceTotal
     *
     * @param float $priceTotal priceTotal
     *
     * @return $this
     */
    public function setPriceTotal($priceTotal)
    {
        $this->container['priceTotal'] = $priceTotal;

        return $this;
    }

    /**
     * Gets priceCurrency
     *
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->container['priceCurrency'];
    }

    /**
     * Sets priceCurrency
     *
     * @param string $priceCurrency Currency of price. (ISO 4217 Code).
     *
     * @return $this
     */
    public function setPriceCurrency($priceCurrency)
    {
        $this->container['priceCurrency'] = $priceCurrency;

        return $this;
    }

    /**
     * Gets cashOnDelivery
     *
     * @return object
     */
    public function getCashOnDelivery()
    {
        return $this->container['cashOnDelivery'];
    }

    /**
     * Sets cashOnDelivery
     *
     * @param object $cashOnDelivery Required for cash on delivery orders.
     *
     * @return $this
     */
    public function setCashOnDelivery($cashOnDelivery)
    {
        $this->container['cashOnDelivery'] = $cashOnDelivery;

        return $this;
    }

    /**
     * Gets test
     *
     * @return bool
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool $test Set to true for testing purposes.
     *
     * @return $this
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

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


