<?php
/**
 * ReturnItem
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
 * ReturnItem Class Doc Comment
 *
 * @category Class
 * @description A view of a return item
 * @package  BigCommerce\OrdersV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReturnItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'reference_id' => '\BigCommerce\OrdersV3\Model\CreateReturnRequestReferenceId',
'quantity' => 'int',
'total' => 'string',
'preferred_outcome' => '\BigCommerce\OrdersV3\Model\CreateReturnPreferredOutcome',
'reason' => '\BigCommerce\OrdersV3\Model\CreateReturnReason',
'received_state' => '\BigCommerce\OrdersV3\Model\CreateReturnReceivedState',
'review_state' => '\BigCommerce\OrdersV3\Model\CreateReturnReviewState'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'reference_id' => null,
'quantity' => null,
'total' => 'decimal',
'preferred_outcome' => null,
'reason' => null,
'received_state' => null,
'review_state' => null    ];

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
        'id' => 'id',
'reference_id' => 'reference_id',
'quantity' => 'quantity',
'total' => 'total',
'preferred_outcome' => 'preferred_outcome',
'reason' => 'reason',
'received_state' => 'received_state',
'review_state' => 'review_state'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'reference_id' => 'setReferenceId',
'quantity' => 'setQuantity',
'total' => 'setTotal',
'preferred_outcome' => 'setPreferredOutcome',
'reason' => 'setReason',
'received_state' => 'setReceivedState',
'review_state' => 'setReviewState'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'reference_id' => 'getReferenceId',
'quantity' => 'getQuantity',
'total' => 'getTotal',
'preferred_outcome' => 'getPreferredOutcome',
'reason' => 'getReason',
'received_state' => 'getReceivedState',
'review_state' => 'getReviewState'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reference_id'] = isset($data['reference_id']) ? $data['reference_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['preferred_outcome'] = isset($data['preferred_outcome']) ? $data['preferred_outcome'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['received_state'] = isset($data['received_state']) ? $data['received_state'] : null;
        $this->container['review_state'] = isset($data['review_state']) ? $data['review_state'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The unique identifier of this return item
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return \BigCommerce\OrdersV3\Model\CreateReturnRequestReferenceId
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param \BigCommerce\OrdersV3\Model\CreateReturnRequestReferenceId $reference_id reference_id
     *
     * @return $this
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The quantity of items for which a return was requested
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string $total The total price of the line item
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets preferred_outcome
     *
     * @return \BigCommerce\OrdersV3\Model\CreateReturnPreferredOutcome
     */
    public function getPreferredOutcome()
    {
        return $this->container['preferred_outcome'];
    }

    /**
     * Sets preferred_outcome
     *
     * @param \BigCommerce\OrdersV3\Model\CreateReturnPreferredOutcome $preferred_outcome preferred_outcome
     *
     * @return $this
     */
    public function setPreferredOutcome($preferred_outcome)
    {
        $this->container['preferred_outcome'] = $preferred_outcome;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \BigCommerce\OrdersV3\Model\CreateReturnReason
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \BigCommerce\OrdersV3\Model\CreateReturnReason $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets received_state
     *
     * @return \BigCommerce\OrdersV3\Model\CreateReturnReceivedState
     */
    public function getReceivedState()
    {
        return $this->container['received_state'];
    }

    /**
     * Sets received_state
     *
     * @param \BigCommerce\OrdersV3\Model\CreateReturnReceivedState $received_state received_state
     *
     * @return $this
     */
    public function setReceivedState($received_state)
    {
        $this->container['received_state'] = $received_state;

        return $this;
    }

    /**
     * Gets review_state
     *
     * @return \BigCommerce\OrdersV3\Model\CreateReturnReviewState
     */
    public function getReviewState()
    {
        return $this->container['review_state'];
    }

    /**
     * Sets review_state
     *
     * @param \BigCommerce\OrdersV3\Model\CreateReturnReviewState $review_state review_state
     *
     * @return $this
     */
    public function setReviewState($review_state)
    {
        $this->container['review_state'] = $review_state;

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