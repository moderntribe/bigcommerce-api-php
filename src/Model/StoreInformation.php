<?php
/**
 * StoreInformation
 *
 * @package  BigCommerce\Api
 */

/**
 * Store Information APIs
 *
 * OpenAPI spec version: 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\Model;

use \ArrayAccess;

class StoreInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StoreInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'domain' => 'string',
        'secure_url' => 'string',
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'address' => 'string',
        'country' => 'string',
        'country_code' => 'string',
        'phone' => 'string',
        'admin_email' => 'string',
        'order_email' => 'string',
        'favicon_url' => 'string',
        'timezone' => '\BigCommerce\Api\Model\Timezone',
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
        'plan_is_trial' => 'bool',
        'industry' => 'string',
        'logo' => '\BigCommerce\Api\Model\Logo',
        'is_price_entered_with_tax' => 'bool',
        'features' => '\BigCommerce\Api\Model\StoreFeatures'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'domain' => 'domain',
        'secure_url' => 'secure_URL',
        'name' => 'name',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'address' => 'address',
        'country' => 'country',
        'country_code' => 'country_code',
        'phone' => 'phone',
        'admin_email' => 'admin_email',
        'order_email' => 'order_email',
        'favicon_url' => 'favicon_url',
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
        'plan_is_trial' => 'plan_is_trial',
        'industry' => 'industry',
        'logo' => 'logo',
        'is_price_entered_with_tax' => 'is_price_entered_with_tax',
        'features' => 'features'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'domain' => 'setDomain',
        'secure_url' => 'setSecureUrl',
        'name' => 'setName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'address' => 'setAddress',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'phone' => 'setPhone',
        'admin_email' => 'setAdminEmail',
        'order_email' => 'setOrderEmail',
        'favicon_url' => 'setFaviconUrl',
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
        'plan_is_trial' => 'setPlanIsTrial',
        'industry' => 'setIndustry',
        'logo' => 'setLogo',
        'is_price_entered_with_tax' => 'setIsPriceEnteredWithTax',
        'features' => 'setFeatures'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'domain' => 'getDomain',
        'secure_url' => 'getSecureUrl',
        'name' => 'getName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'address' => 'getAddress',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'phone' => 'getPhone',
        'admin_email' => 'getAdminEmail',
        'order_email' => 'getOrderEmail',
        'favicon_url' => 'getFaviconUrl',
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
        'plan_is_trial' => 'getPlanIsTrial',
        'industry' => 'getIndustry',
        'logo' => 'getLogo',
        'is_price_entered_with_tax' => 'getIsPriceEnteredWithTax',
        'features' => 'getFeatures'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['domain'] = array_key_exists('domain', $data) ? $data['domain'] : null;
        $this->container['secure_url'] = array_key_exists('secure_url', $data) ? $data['secure_url'] : null;
        $this->container['name'] = array_key_exists('name', $data) ? $data['name'] : null;
        $this->container['first_name'] = array_key_exists('first_name', $data) ? $data['first_name'] : null;
        $this->container['last_name'] = array_key_exists('last_name', $data) ? $data['last_name'] : null;
        $this->container['address'] = array_key_exists('address', $data) ? $data['address'] : null;
        $this->container['country'] = array_key_exists('country', $data) ? $data['country'] : null;
        $this->container['country_code'] = array_key_exists('country_code', $data) ? $data['country_code'] : null;
        $this->container['phone'] = array_key_exists('phone', $data) ? $data['phone'] : null;
        $this->container['admin_email'] = array_key_exists('admin_email', $data) ? $data['admin_email'] : null;
        $this->container['order_email'] = array_key_exists('order_email', $data) ? $data['order_email'] : null;
        $this->container['favicon_url'] = array_key_exists('favicon_url', $data) ? $data['favicon_url'] : null;
        $this->container['timezone'] = array_key_exists('timezone', $data) ? $data['timezone'] : null;
        $this->container['language'] = array_key_exists('language', $data) ? $data['language'] : null;
        $this->container['currency'] = array_key_exists('currency', $data) ? $data['currency'] : null;
        $this->container['currency_symbol'] = array_key_exists('currency_symbol', $data) ? $data['currency_symbol'] : null;
        $this->container['decimal_separator'] = array_key_exists('decimal_separator', $data) ? $data['decimal_separator'] : null;
        $this->container['thousands_separator'] = array_key_exists('thousands_separator', $data) ? $data['thousands_separator'] : null;
        $this->container['decimal_places'] = array_key_exists('decimal_places', $data) ? $data['decimal_places'] : null;
        $this->container['currency_symbol_location'] = array_key_exists('currency_symbol_location', $data) ? $data['currency_symbol_location'] : null;
        $this->container['weight_units'] = array_key_exists('weight_units', $data) ? $data['weight_units'] : null;
        $this->container['dimension_units'] = array_key_exists('dimension_units', $data) ? $data['dimension_units'] : null;
        $this->container['dimension_decimal_places'] = array_key_exists('dimension_decimal_places', $data) ? $data['dimension_decimal_places'] : null;
        $this->container['dimension_decimal_token'] = array_key_exists('dimension_decimal_token', $data) ? $data['dimension_decimal_token'] : null;
        $this->container['dimension_thousands_token'] = array_key_exists('dimension_thousands_token', $data) ? $data['dimension_thousands_token'] : null;
        $this->container['plan_name'] = array_key_exists('plan_name', $data) ? $data['plan_name'] : null;
        $this->container['plan_level'] = array_key_exists('plan_level', $data) ? $data['plan_level'] : null;
        $this->container['plan_is_trial'] = array_key_exists('plan_is_trial', $data) ? $data['plan_is_trial'] : null;
        $this->container['industry'] = array_key_exists('industry', $data) ? $data['industry'] : null;
        $this->container['logo'] = array_key_exists('logo', $data) ? $data['logo'] : null;
        $this->container['is_price_entered_with_tax'] = array_key_exists('is_price_entered_with_tax', $data) ? $data['is_price_entered_with_tax'] : null;
        $this->container['features'] = array_key_exists('features', $data) ? $data['features'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique store identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     * @param string $domain Primary domain name.
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets secure_url
     * @return string
     */
    public function getSecureUrl()
    {
        return $this->container['secure_url'];
    }

    /**
     * Sets secure_url
     * @param string $secure_url Store’s current HTTPS URL.
     * @return $this
     */
    public function setSecureUrl($secure_url)
    {
        $this->container['secure_url'] = $secure_url;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Store's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name Primary contact’s first name (as defined during the store sign-up process).
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name Primary contact’s last name (as defined during the store sign-up process).
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address Display address.
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Country where the store is located (as defined during the store sign-up process).
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code Two character country code corresponding to country
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone Display phone number.
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets admin_email
     * @return string
     */
    public function getAdminEmail()
    {
        return $this->container['admin_email'];
    }

    /**
     * Sets admin_email
     * @param string $admin_email Email address of the store administrator/owner.
     * @return $this
     */
    public function setAdminEmail($admin_email)
    {
        $this->container['admin_email'] = $admin_email;

        return $this;
    }

    /**
     * Gets order_email
     * @return string
     */
    public function getOrderEmail()
    {
        return $this->container['order_email'];
    }

    /**
     * Sets order_email
     * @param string $order_email Email address for orders and fulfillment.
     * @return $this
     */
    public function setOrderEmail($order_email)
    {
        $this->container['order_email'] = $order_email;

        return $this;
    }

    /**
     * Gets favicon_url
     * @return string
     */
    public function getFaviconUrl()
    {
        return $this->container['favicon_url'];
    }

    /**
     * Sets favicon_url
     * @param string $favicon_url URL to the store's favicon
     * @return $this
     */
    public function setFaviconUrl($favicon_url)
    {
        $this->container['favicon_url'] = $favicon_url;

        return $this;
    }

    /**
     * Gets timezone
     * @return \BigCommerce\Api\Model\Timezone
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param \BigCommerce\Api\Model\Timezone $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language Default language code, as a two-character ISO 639-1 code.
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Default currency code
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_symbol
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->container['currency_symbol'];
    }

    /**
     * Sets currency_symbol
     * @param string $currency_symbol Default symbol for values in the currency.
     * @return $this
     */
    public function setCurrencySymbol($currency_symbol)
    {
        $this->container['currency_symbol'] = $currency_symbol;

        return $this;
    }

    /**
     * Gets decimal_separator
     * @return string
     */
    public function getDecimalSeparator()
    {
        return $this->container['decimal_separator'];
    }

    /**
     * Sets decimal_separator
     * @param string $decimal_separator Default decimal separator for values in the currency.
     * @return $this
     */
    public function setDecimalSeparator($decimal_separator)
    {
        $this->container['decimal_separator'] = $decimal_separator;

        return $this;
    }

    /**
     * Gets thousands_separator
     * @return string
     */
    public function getThousandsSeparator()
    {
        return $this->container['thousands_separator'];
    }

    /**
     * Sets thousands_separator
     * @param string $thousands_separator Default thousands separator for values in the currency.
     * @return $this
     */
    public function setThousandsSeparator($thousands_separator)
    {
        $this->container['thousands_separator'] = $thousands_separator;

        return $this;
    }

    /**
     * Gets decimal_places
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->container['decimal_places'];
    }

    /**
     * Sets decimal_places
     * @param int $decimal_places Default decimal places for values in the currency.
     * @return $this
     */
    public function setDecimalPlaces($decimal_places)
    {
        $this->container['decimal_places'] = $decimal_places;

        return $this;
    }

    /**
     * Gets currency_symbol_location
     * @return string
     */
    public function getCurrencySymbolLocation()
    {
        return $this->container['currency_symbol_location'];
    }

    /**
     * Sets currency_symbol_location
     * @param string $currency_symbol_location Default position of the currency symbol (left or right).
     * @return $this
     */
    public function setCurrencySymbolLocation($currency_symbol_location)
    {
        $this->container['currency_symbol_location'] = $currency_symbol_location;

        return $this;
    }

    /**
     * Gets weight_units
     * @return string
     */
    public function getWeightUnits()
    {
        return $this->container['weight_units'];
    }

    /**
     * Sets weight_units
     * @param string $weight_units Default weight units (metric or imperial).
     * @return $this
     */
    public function setWeightUnits($weight_units)
    {
        $this->container['weight_units'] = $weight_units;

        return $this;
    }

    /**
     * Gets dimension_units
     * @return string
     */
    public function getDimensionUnits()
    {
        return $this->container['dimension_units'];
    }

    /**
     * Sets dimension_units
     * @param string $dimension_units Default dimension units (metric or imperial).
     * @return $this
     */
    public function setDimensionUnits($dimension_units)
    {
        $this->container['dimension_units'] = $dimension_units;

        return $this;
    }

    /**
     * Gets dimension_decimal_places
     * @return int
     */
    public function getDimensionDecimalPlaces()
    {
        return $this->container['dimension_decimal_places'];
    }

    /**
     * Sets dimension_decimal_places
     * @param int $dimension_decimal_places The number of decimal places.
     * @return $this
     */
    public function setDimensionDecimalPlaces($dimension_decimal_places)
    {
        $this->container['dimension_decimal_places'] = $dimension_decimal_places;

        return $this;
    }

    /**
     * Gets dimension_decimal_token
     * @return string
     */
    public function getDimensionDecimalToken()
    {
        return $this->container['dimension_decimal_token'];
    }

    /**
     * Sets dimension_decimal_token
     * @param string $dimension_decimal_token The symbol that separates the whole numbers from the decimal points.
     * @return $this
     */
    public function setDimensionDecimalToken($dimension_decimal_token)
    {
        $this->container['dimension_decimal_token'] = $dimension_decimal_token;

        return $this;
    }

    /**
     * Gets dimension_thousands_token
     * @return string
     */
    public function getDimensionThousandsToken()
    {
        return $this->container['dimension_thousands_token'];
    }

    /**
     * Sets dimension_thousands_token
     * @param string $dimension_thousands_token The symbol used to denote thousands.
     * @return $this
     */
    public function setDimensionThousandsToken($dimension_thousands_token)
    {
        $this->container['dimension_thousands_token'] = $dimension_thousands_token;

        return $this;
    }

    /**
     * Gets plan_name
     * @return string
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     * @param string $plan_name Name of the BigCommerce plan to which this store is subscribed.
     * @return $this
     */
    public function setPlanName($plan_name)
    {
        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets plan_level
     * @return string
     */
    public function getPlanLevel()
    {
        return $this->container['plan_level'];
    }

    /**
     * Sets plan_level
     * @param string $plan_level Level of the BigCommerce plan to which this store is subscribed.
     * @return $this
     */
    public function setPlanLevel($plan_level)
    {
        $this->container['plan_level'] = $plan_level;

        return $this;
    }

    /**
     * Gets plan_is_trial
     * @return bool
     */
    public function getPlanIsTrial()
    {
        return $this->container['plan_is_trial'];
    }

    /**
     * Sets plan_is_trial
     * @param bool $plan_is_trial Whether the BigCommerce plan is a trial
     * @return $this
     */
    public function setPlanIsTrial($plan_is_trial)
    {
        $this->container['plan_is_trial'] = $plan_is_trial;

        return $this;
    }

    /**
     * Gets industry
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     * @param string $industry Industry, or vertical category, in which the business operates. (As selected from drop-down list during the store sign-up process.)
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets logo
     * @return \BigCommerce\Api\Model\Logo
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     * @param \BigCommerce\Api\Model\Logo $logo
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets is_price_entered_with_tax
     * @return bool
     */
    public function getIsPriceEnteredWithTax()
    {
        return $this->container['is_price_entered_with_tax'];
    }

    /**
     * Sets is_price_entered_with_tax
     * @param bool $is_price_entered_with_tax A Boolean value that indicates whether or not prices are entered with tax.
     * @return $this
     */
    public function setIsPriceEnteredWithTax($is_price_entered_with_tax)
    {
        $this->container['is_price_entered_with_tax'] = $is_price_entered_with_tax;

        return $this;
    }

    /**
     * Gets features
     * @return \BigCommerce\Api\Model\StoreFeatures
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     * @param \BigCommerce\Api\Model\StoreFeatures $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}


