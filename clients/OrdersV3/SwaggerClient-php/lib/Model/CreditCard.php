<?php
/**
 * CreditCard
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
 * CreditCard Class Doc Comment
 *
 * @category Class
 * @description A credit-card model.
 * @package  BigCommerce\OrdersV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Credit Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_type' => 'string',
'card_iin' => 'string',
'card_last4' => 'string',
'card_expiry_month' => 'int',
'card_expiry_year' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_type' => null,
'card_iin' => null,
'card_last4' => null,
'card_expiry_month' => null,
'card_expiry_year' => null    ];

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
        'card_type' => 'card_type',
'card_iin' => 'card_iin',
'card_last4' => 'card_last4',
'card_expiry_month' => 'card_expiry_month',
'card_expiry_year' => 'card_expiry_year'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_type' => 'setCardType',
'card_iin' => 'setCardIin',
'card_last4' => 'setCardLast4',
'card_expiry_month' => 'setCardExpiryMonth',
'card_expiry_year' => 'setCardExpiryYear'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_type' => 'getCardType',
'card_iin' => 'getCardIin',
'card_last4' => 'getCardLast4',
'card_expiry_month' => 'getCardExpiryMonth',
'card_expiry_year' => 'getCardExpiryYear'    ];

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

    const CARD_TYPE_ALELO = 'alelo';
const CARD_TYPE_ALIA = 'alia';
const CARD_TYPE_AMERICAN_EXPRESS = 'american_express';
const CARD_TYPE_CABAL = 'cabal';
const CARD_TYPE_CARNET = 'carnet';
const CARD_TYPE_DANKORT = 'dankort';
const CARD_TYPE_DINERS_CLUB = 'diners_club';
const CARD_TYPE_DISCOVER = 'discover';
const CARD_TYPE_ELO = 'elo';
const CARD_TYPE_FORBRUGSFORENINGEN = 'forbrugsforeningen';
const CARD_TYPE_JCB = 'jcb';
const CARD_TYPE_MAESTRO = 'maestro';
const CARD_TYPE_MASTER = 'master';
const CARD_TYPE_NARANJA = 'naranja';
const CARD_TYPE_SODEXO = 'sodexo';
const CARD_TYPE_UNIONPAY = 'unionpay';
const CARD_TYPE_VISA = 'visa';
const CARD_TYPE_VR = 'vr';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_ALELO,
self::CARD_TYPE_ALIA,
self::CARD_TYPE_AMERICAN_EXPRESS,
self::CARD_TYPE_CABAL,
self::CARD_TYPE_CARNET,
self::CARD_TYPE_DANKORT,
self::CARD_TYPE_DINERS_CLUB,
self::CARD_TYPE_DISCOVER,
self::CARD_TYPE_ELO,
self::CARD_TYPE_FORBRUGSFORENINGEN,
self::CARD_TYPE_JCB,
self::CARD_TYPE_MAESTRO,
self::CARD_TYPE_MASTER,
self::CARD_TYPE_NARANJA,
self::CARD_TYPE_SODEXO,
self::CARD_TYPE_UNIONPAY,
self::CARD_TYPE_VISA,
self::CARD_TYPE_VR,        ];
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
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['card_iin'] = isset($data['card_iin']) ? $data['card_iin'] : null;
        $this->container['card_last4'] = isset($data['card_last4']) ? $data['card_last4'] : null;
        $this->container['card_expiry_month'] = isset($data['card_expiry_month']) ? $data['card_expiry_month'] : null;
        $this->container['card_expiry_year'] = isset($data['card_expiry_year']) ? $data['card_expiry_year'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($this->container['card_type']) && !in_array($this->container['card_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'card_type', must be one of '%s'",
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
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type **Allowed values**: alelo, alia, american_express, cabal, carnet, dankort, diners_club, discover, elo, forbrugsforeningen, jcb, maestro, master, naranja, sodexo, unionpay, visa, vr
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($card_type) && !in_array($card_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'card_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets card_iin
     *
     * @return string
     */
    public function getCardIin()
    {
        return $this->container['card_iin'];
    }

    /**
     * Sets card_iin
     *
     * @param string $card_iin The IIN of a credit-card number.
     *
     * @return $this
     */
    public function setCardIin($card_iin)
    {
        $this->container['card_iin'] = $card_iin;

        return $this;
    }

    /**
     * Gets card_last4
     *
     * @return string
     */
    public function getCardLast4()
    {
        return $this->container['card_last4'];
    }

    /**
     * Sets card_last4
     *
     * @param string $card_last4 The last 4 digits of a credit-card number.
     *
     * @return $this
     */
    public function setCardLast4($card_last4)
    {
        $this->container['card_last4'] = $card_last4;

        return $this;
    }

    /**
     * Gets card_expiry_month
     *
     * @return int
     */
    public function getCardExpiryMonth()
    {
        return $this->container['card_expiry_month'];
    }

    /**
     * Sets card_expiry_month
     *
     * @param int $card_expiry_month The expiry month of a credit-card.
     *
     * @return $this
     */
    public function setCardExpiryMonth($card_expiry_month)
    {
        $this->container['card_expiry_month'] = $card_expiry_month;

        return $this;
    }

    /**
     * Gets card_expiry_year
     *
     * @return int
     */
    public function getCardExpiryYear()
    {
        return $this->container['card_expiry_year'];
    }

    /**
     * Sets card_expiry_year
     *
     * @param int $card_expiry_year The expiry year of a credit-card.
     *
     * @return $this
     */
    public function setCardExpiryYear($card_expiry_year)
    {
        $this->container['card_expiry_year'] = $card_expiry_year;

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
