<?php
/**
 * StoreInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\StoreInfo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Store Information
 *
 * Get Store Information endpoint, manage store profile settings.
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

namespace BigCommerce\StoreInfo\Model;

use \ArrayAccess;
use \BigCommerce\StoreInfo\ObjectSerializer;

/**
 * StoreInformation Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\StoreInfo
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StoreInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Store Information';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'domain' => 'string',
'secure_url' => 'string',
'control_panel_base_url' => 'string',
'name' => 'string',
'first_name' => 'string',
'last_name' => 'string',
'address' => 'string',
'country' => 'string',
'phone' => 'string',
'admin_email' => 'string',
'order_email' => 'string',
'timezone' => '\BigCommerce\StoreInfo\Model\TimeZone',
'language' => 'string',
'currency' => 'string',
'currency_symbol' => 'string',
'decimal_separator' => 'string',
'thousands_separator' => 'string',
'decimal_places' => 'int',
'currency_symbol_location' => 'string',
'weight_units' => 'string',
'dimension_units' => 'string',
'dimension_decimal_places' => 'int',
'dimension_decimal_token' => 'string',
'dimension_thousands_token' => 'string',
'plan_name' => 'string',
'plan_level' => 'string',
'industry' => 'string',
'logo' => '\BigCommerce\StoreInfo\Model\StoreInformationLogo',
'is_price_entered_with_tax' => 'bool',
'active_comparison_modules' => 'object[]',
'features' => '\BigCommerce\StoreInfo\Model\StoreInformationFeatures'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'domain' => null,
'secure_url' => null,
'control_panel_base_url' => null,
'name' => null,
'first_name' => null,
'last_name' => null,
'address' => null,
'country' => null,
'phone' => null,
'admin_email' => null,
'order_email' => null,
'timezone' => null,
'language' => null,
'currency' => null,
'currency_symbol' => null,
'decimal_separator' => null,
'thousands_separator' => null,
'decimal_places' => null,
'currency_symbol_location' => null,
'weight_units' => null,
'dimension_units' => null,
'dimension_decimal_places' => null,
'dimension_decimal_token' => null,
'dimension_thousands_token' => null,
'plan_name' => null,
'plan_level' => null,
'industry' => null,
'logo' => null,
'is_price_entered_with_tax' => null,
'active_comparison_modules' => null,
'features' => null    ];

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
'domain' => 'domain',
'secure_url' => 'secure_URL',
'control_panel_base_url' => 'control_panel_base_url',
'name' => 'name',
'first_name' => 'first_name',
'last_name' => 'last_name',
'address' => 'address',
'country' => 'country',
'phone' => 'phone',
'admin_email' => 'admin_email',
'order_email' => 'order_email',
'timezone' => 'timezone',
'language' => 'language',
'currency' => 'currency',
'currency_symbol' => 'currency_symbol',
'decimal_separator' => 'decimal_separator',
'thousands_separator' => 'thousands_separator',
'decimal_places' => 'decimal_places',
'currency_symbol_location' => 'currency_symbol_location',
'weight_units' => 'weight_units',
'dimension_units' => 'dimension_units',
'dimension_decimal_places' => 'dimension_decimal_places',
'dimension_decimal_token' => 'dimension_decimal_token',
'dimension_thousands_token' => 'dimension_thousands_token:',
'plan_name' => 'plan_name',
'plan_level' => 'plan_level',
'industry' => 'industry',
'logo' => 'logo',
'is_price_entered_with_tax' => 'is_price_entered_with_tax',
'active_comparison_modules' => 'active_comparison_modules',
'features' => 'features'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'domain' => 'setDomain',
'secure_url' => 'setSecureUrl',
'control_panel_base_url' => 'setControlPanelBaseUrl',
'name' => 'setName',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'address' => 'setAddress',
'country' => 'setCountry',
'phone' => 'setPhone',
'admin_email' => 'setAdminEmail',
'order_email' => 'setOrderEmail',
'timezone' => 'setTimezone',
'language' => 'setLanguage',
'currency' => 'setCurrency',
'currency_symbol' => 'setCurrencySymbol',
'decimal_separator' => 'setDecimalSeparator',
'thousands_separator' => 'setThousandsSeparator',
'decimal_places' => 'setDecimalPlaces',
'currency_symbol_location' => 'setCurrencySymbolLocation',
'weight_units' => 'setWeightUnits',
'dimension_units' => 'setDimensionUnits',
'dimension_decimal_places' => 'setDimensionDecimalPlaces',
'dimension_decimal_token' => 'setDimensionDecimalToken',
'dimension_thousands_token' => 'setDimensionThousandsToken',
'plan_name' => 'setPlanName',
'plan_level' => 'setPlanLevel',
'industry' => 'setIndustry',
'logo' => 'setLogo',
'is_price_entered_with_tax' => 'setIsPriceEnteredWithTax',
'active_comparison_modules' => 'setActiveComparisonModules',
'features' => 'setFeatures'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'domain' => 'getDomain',
'secure_url' => 'getSecureUrl',
'control_panel_base_url' => 'getControlPanelBaseUrl',
'name' => 'getName',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'address' => 'getAddress',
'country' => 'getCountry',
'phone' => 'getPhone',
'admin_email' => 'getAdminEmail',
'order_email' => 'getOrderEmail',
'timezone' => 'getTimezone',
'language' => 'getLanguage',
'currency' => 'getCurrency',
'currency_symbol' => 'getCurrencySymbol',
'decimal_separator' => 'getDecimalSeparator',
'thousands_separator' => 'getThousandsSeparator',
'decimal_places' => 'getDecimalPlaces',
'currency_symbol_location' => 'getCurrencySymbolLocation',
'weight_units' => 'getWeightUnits',
'dimension_units' => 'getDimensionUnits',
'dimension_decimal_places' => 'getDimensionDecimalPlaces',
'dimension_decimal_token' => 'getDimensionDecimalToken',
'dimension_thousands_token' => 'getDimensionThousandsToken',
'plan_name' => 'getPlanName',
'plan_level' => 'getPlanLevel',
'industry' => 'getIndustry',
'logo' => 'getLogo',
'is_price_entered_with_tax' => 'getIsPriceEnteredWithTax',
'active_comparison_modules' => 'getActiveComparisonModules',
'features' => 'getFeatures'    ];

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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['secure_url'] = isset($data['secure_url']) ? $data['secure_url'] : null;
        $this->container['control_panel_base_url'] = isset($data['control_panel_base_url']) ? $data['control_panel_base_url'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['admin_email'] = isset($data['admin_email']) ? $data['admin_email'] : null;
        $this->container['order_email'] = isset($data['order_email']) ? $data['order_email'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['currency_symbol'] = isset($data['currency_symbol']) ? $data['currency_symbol'] : null;
        $this->container['decimal_separator'] = isset($data['decimal_separator']) ? $data['decimal_separator'] : null;
        $this->container['thousands_separator'] = isset($data['thousands_separator']) ? $data['thousands_separator'] : null;
        $this->container['decimal_places'] = isset($data['decimal_places']) ? $data['decimal_places'] : null;
        $this->container['currency_symbol_location'] = isset($data['currency_symbol_location']) ? $data['currency_symbol_location'] : null;
        $this->container['weight_units'] = isset($data['weight_units']) ? $data['weight_units'] : null;
        $this->container['dimension_units'] = isset($data['dimension_units']) ? $data['dimension_units'] : null;
        $this->container['dimension_decimal_places'] = isset($data['dimension_decimal_places']) ? $data['dimension_decimal_places'] : null;
        $this->container['dimension_decimal_token'] = isset($data['dimension_decimal_token']) ? $data['dimension_decimal_token'] : null;
        $this->container['dimension_thousands_token'] = isset($data['dimension_thousands_token']) ? $data['dimension_thousands_token'] : null;
        $this->container['plan_name'] = isset($data['plan_name']) ? $data['plan_name'] : null;
        $this->container['plan_level'] = isset($data['plan_level']) ? $data['plan_level'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['is_price_entered_with_tax'] = isset($data['is_price_entered_with_tax']) ? $data['is_price_entered_with_tax'] : null;
        $this->container['active_comparison_modules'] = isset($data['active_comparison_modules']) ? $data['active_comparison_modules'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique store identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain Primary domain name.
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets secure_url
     *
     * @return string
     */
    public function getSecureUrl()
    {
        return $this->container['secure_url'];
    }

    /**
     * Sets secure_url
     *
     * @param string $secure_url Store’s current HTTPS URL.
     *
     * @return $this
     */
    public function setSecureUrl($secure_url)
    {
        $this->container['secure_url'] = $secure_url;

        return $this;
    }

    /**
     * Gets control_panel_base_url
     *
     * @return string
     */
    public function getControlPanelBaseUrl()
    {
        return $this->container['control_panel_base_url'];
    }

    /**
     * Sets control_panel_base_url
     *
     * @param string $control_panel_base_url The secure hostname of the control panel.
     *
     * @return $this
     */
    public function setControlPanelBaseUrl($control_panel_base_url)
    {
        $this->container['control_panel_base_url'] = $control_panel_base_url;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Store's name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name Primary contact’s first name (as defined during the store sign-up process).
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Primary contact’s last name (as defined during the store sign-up process).
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Display address.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country where the store is located (as defined during the store sign-up process).
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Display phone number.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets admin_email
     *
     * @return string
     */
    public function getAdminEmail()
    {
        return $this->container['admin_email'];
    }

    /**
     * Sets admin_email
     *
     * @param string $admin_email Email address of the store administrator/owner.
     *
     * @return $this
     */
    public function setAdminEmail($admin_email)
    {
        $this->container['admin_email'] = $admin_email;

        return $this;
    }

    /**
     * Gets order_email
     *
     * @return string
     */
    public function getOrderEmail()
    {
        return $this->container['order_email'];
    }

    /**
     * Sets order_email
     *
     * @param string $order_email Email address for orders and fulfillment.
     *
     * @return $this
     */
    public function setOrderEmail($order_email)
    {
        $this->container['order_email'] = $order_email;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return \BigCommerce\StoreInfo\Model\TimeZone
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param \BigCommerce\StoreInfo\Model\TimeZone $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Default language code.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Default currency code
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_symbol
     *
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->container['currency_symbol'];
    }

    /**
     * Sets currency_symbol
     *
     * @param string $currency_symbol Default symbol for values in the currency.
     *
     * @return $this
     */
    public function setCurrencySymbol($currency_symbol)
    {
        $this->container['currency_symbol'] = $currency_symbol;

        return $this;
    }

    /**
     * Gets decimal_separator
     *
     * @return string
     */
    public function getDecimalSeparator()
    {
        return $this->container['decimal_separator'];
    }

    /**
     * Sets decimal_separator
     *
     * @param string $decimal_separator Default decimal separator for values in the currency.
     *
     * @return $this
     */
    public function setDecimalSeparator($decimal_separator)
    {
        $this->container['decimal_separator'] = $decimal_separator;

        return $this;
    }

    /**
     * Gets thousands_separator
     *
     * @return string
     */
    public function getThousandsSeparator()
    {
        return $this->container['thousands_separator'];
    }

    /**
     * Sets thousands_separator
     *
     * @param string $thousands_separator Default thousands separator for values in the currency.
     *
     * @return $this
     */
    public function setThousandsSeparator($thousands_separator)
    {
        $this->container['thousands_separator'] = $thousands_separator;

        return $this;
    }

    /**
     * Gets decimal_places
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->container['decimal_places'];
    }

    /**
     * Sets decimal_places
     *
     * @param int $decimal_places Default decimal places for values in the currency.
     *
     * @return $this
     */
    public function setDecimalPlaces($decimal_places)
    {
        $this->container['decimal_places'] = $decimal_places;

        return $this;
    }

    /**
     * Gets currency_symbol_location
     *
     * @return string
     */
    public function getCurrencySymbolLocation()
    {
        return $this->container['currency_symbol_location'];
    }

    /**
     * Sets currency_symbol_location
     *
     * @param string $currency_symbol_location Default position of the currency symbol (left or right).
     *
     * @return $this
     */
    public function setCurrencySymbolLocation($currency_symbol_location)
    {
        $this->container['currency_symbol_location'] = $currency_symbol_location;

        return $this;
    }

    /**
     * Gets weight_units
     *
     * @return string
     */
    public function getWeightUnits()
    {
        return $this->container['weight_units'];
    }

    /**
     * Sets weight_units
     *
     * @param string $weight_units Default weight units (metric or imperial).
     *
     * @return $this
     */
    public function setWeightUnits($weight_units)
    {
        $this->container['weight_units'] = $weight_units;

        return $this;
    }

    /**
     * Gets dimension_units
     *
     * @return string
     */
    public function getDimensionUnits()
    {
        return $this->container['dimension_units'];
    }

    /**
     * Sets dimension_units
     *
     * @param string $dimension_units Default dimension units (metric or imperial).
     *
     * @return $this
     */
    public function setDimensionUnits($dimension_units)
    {
        $this->container['dimension_units'] = $dimension_units;

        return $this;
    }

    /**
     * Gets dimension_decimal_places
     *
     * @return int
     */
    public function getDimensionDecimalPlaces()
    {
        return $this->container['dimension_decimal_places'];
    }

    /**
     * Sets dimension_decimal_places
     *
     * @param int $dimension_decimal_places The number of decimal places.
     *
     * @return $this
     */
    public function setDimensionDecimalPlaces($dimension_decimal_places)
    {
        $this->container['dimension_decimal_places'] = $dimension_decimal_places;

        return $this;
    }

    /**
     * Gets dimension_decimal_token
     *
     * @return string
     */
    public function getDimensionDecimalToken()
    {
        return $this->container['dimension_decimal_token'];
    }

    /**
     * Sets dimension_decimal_token
     *
     * @param string $dimension_decimal_token The symbol that separates the whole numbers from the decimal points.
     *
     * @return $this
     */
    public function setDimensionDecimalToken($dimension_decimal_token)
    {
        $this->container['dimension_decimal_token'] = $dimension_decimal_token;

        return $this;
    }

    /**
     * Gets dimension_thousands_token
     *
     * @return string
     */
    public function getDimensionThousandsToken()
    {
        return $this->container['dimension_thousands_token'];
    }

    /**
     * Sets dimension_thousands_token
     *
     * @param string $dimension_thousands_token The symbol used to denote thousands.
     *
     * @return $this
     */
    public function setDimensionThousandsToken($dimension_thousands_token)
    {
        $this->container['dimension_thousands_token'] = $dimension_thousands_token;

        return $this;
    }

    /**
     * Gets plan_name
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     *
     * @param string $plan_name Name of the BigCommerce plan to which this store is subscribed.
     *
     * @return $this
     */
    public function setPlanName($plan_name)
    {
        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets plan_level
     *
     * @return string
     */
    public function getPlanLevel()
    {
        return $this->container['plan_level'];
    }

    /**
     * Sets plan_level
     *
     * @param string $plan_level Level of the BigCommerce plan to which this store is subscribed.
     *
     * @return $this
     */
    public function setPlanLevel($plan_level)
    {
        $this->container['plan_level'] = $plan_level;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string $industry Industry, or vertical category, in which the business operates. (As selected from drop-down list during the store sign-up process.)
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \BigCommerce\StoreInfo\Model\StoreInformationLogo
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \BigCommerce\StoreInfo\Model\StoreInformationLogo $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets is_price_entered_with_tax
     *
     * @return bool
     */
    public function getIsPriceEnteredWithTax()
    {
        return $this->container['is_price_entered_with_tax'];
    }

    /**
     * Sets is_price_entered_with_tax
     *
     * @param bool $is_price_entered_with_tax A Boolean value that indicates whether or not prices are entered with tax.
     *
     * @return $this
     */
    public function setIsPriceEnteredWithTax($is_price_entered_with_tax)
    {
        $this->container['is_price_entered_with_tax'] = $is_price_entered_with_tax;

        return $this;
    }

    /**
     * Gets active_comparison_modules
     *
     * @return object[]
     */
    public function getActiveComparisonModules()
    {
        return $this->container['active_comparison_modules'];
    }

    /**
     * Sets active_comparison_modules
     *
     * @param object[] $active_comparison_modules active_comparison_modules
     *
     * @return $this
     */
    public function setActiveComparisonModules($active_comparison_modules)
    {
        $this->container['active_comparison_modules'] = $active_comparison_modules;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \BigCommerce\StoreInfo\Model\StoreInformationFeatures
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \BigCommerce\StoreInfo\Model\StoreInformationFeatures $features features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

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