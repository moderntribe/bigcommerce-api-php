<?php
/**
 * CreateReturnReviewState
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\OrdersV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Orders V3
 *
 * Surfaces endpoints related to payment processing. The `/orders/{id}/transactions` endpoint returns transaction details for the specified order. To programmatically create, update, and delete orders themselves, see [Orders v2](https://developer.bigcommerce.com/api-reference/store-management/orders). To process payments, see [Payment Processing](https://developer.bigcommerce.com/api-reference/payments/payments-process-payments).  - [Authentication](#authentication) - [Available Endpoints](#available-endpoints) - [Order Transactions](#order-transactions) - [Order refunds](#order-refunds) - [Resources](#resources)  ## Authentication  Authenticate requests by including an [OAuth](https://developer.bigcommerce.com/api-docs/getting-started/authentication) `access_token` and `client_id` in the request headers.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/{{ENDPOINT}} Content-Type: application/json X-Auth-Client: {{CLIENT_ID}} X-Auth-Token: {{ACCESS_TOKEN}} ```  ### OAuth Scopes  | UI Name| Permission |Parameter|                                      |----------------------------------------------|------------|----------| | Order Transactions|modify|`store_v2_transactions`| | Order Transactions|read-only  |`store_v2_transactions_read_only`| | Orders| modify|`store_v2_orders`| | Orders| read-only|`store_v2_orders_read_only`|  ## Order Transactions The `/orders/{id}/transactions` endpoint returns details about the payment instruments used to pay for an order. Depending on the payment method used, different details will be available. Not all credit card payment gateways return full card or fraud details. Transactions endpoints are primarily used to get detailed gateway response information for credit card transactions; however they will also return any available information about digital wallet and offline payments.   **Note**: transactions are not created for the following payment methods: * Test Payment Gateway * PayPal Express * Amazon Pay  ## Order Refunds The Order API refund endpoints allow developers to process refunds against orders with settled payments. Refund endpoints are useful when building order management or payment integrations. They make embedding refund functionality directly into the application possible without requiring merchants to return to their BigCommerce Control Panel.  ## Resources * [Orders Overview](https://developer.bigcommerce.com/api-docs/orders/orders-overview) * [Orders V2](https://developer.bigcommerce.com/api-reference/store-management/orders)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\OrdersV3\Model;

use \ArrayAccess;
use \BigCommerce\OrdersV3\ObjectSerializer;

/**
 * CreateReturnReviewState Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\OrdersV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateReturnReviewState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateReturn_review_state';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approved_quantity' => 'int',
'pending_quantity' => 'int',
'rejected_quantity' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'approved_quantity' => null,
'pending_quantity' => null,
'rejected_quantity' => null    ];

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
        'approved_quantity' => 'approved_quantity',
'pending_quantity' => 'pending_quantity',
'rejected_quantity' => 'rejected_quantity'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approved_quantity' => 'setApprovedQuantity',
'pending_quantity' => 'setPendingQuantity',
'rejected_quantity' => 'setRejectedQuantity'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approved_quantity' => 'getApprovedQuantity',
'pending_quantity' => 'getPendingQuantity',
'rejected_quantity' => 'getRejectedQuantity'    ];

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
        $this->container['approved_quantity'] = isset($data['approved_quantity']) ? $data['approved_quantity'] : null;
        $this->container['pending_quantity'] = isset($data['pending_quantity']) ? $data['pending_quantity'] : null;
        $this->container['rejected_quantity'] = isset($data['rejected_quantity']) ? $data['rejected_quantity'] : null;
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
     * Gets approved_quantity
     *
     * @return int
     */
    public function getApprovedQuantity()
    {
        return $this->container['approved_quantity'];
    }

    /**
     * Sets approved_quantity
     *
     * @param int $approved_quantity The quantity of items approved for return by the merchant
     *
     * @return $this
     */
    public function setApprovedQuantity($approved_quantity)
    {
        $this->container['approved_quantity'] = $approved_quantity;

        return $this;
    }

    /**
     * Gets pending_quantity
     *
     * @return int
     */
    public function getPendingQuantity()
    {
        return $this->container['pending_quantity'];
    }

    /**
     * Sets pending_quantity
     *
     * @param int $pending_quantity The quantity of items pending receipt by the merchant
     *
     * @return $this
     */
    public function setPendingQuantity($pending_quantity)
    {
        $this->container['pending_quantity'] = $pending_quantity;

        return $this;
    }

    /**
     * Gets rejected_quantity
     *
     * @return int
     */
    public function getRejectedQuantity()
    {
        return $this->container['rejected_quantity'];
    }

    /**
     * Sets rejected_quantity
     *
     * @param int $rejected_quantity The quantity of items rejected by the merchant
     *
     * @return $this
     */
    public function setRejectedQuantity($rejected_quantity)
    {
        $this->container['rejected_quantity'] = $rejected_quantity;

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
