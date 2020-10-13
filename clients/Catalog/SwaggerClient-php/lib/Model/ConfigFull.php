<?php
/**
 * ConfigFull
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog
 *
 * Manage products, brands and categories. To learn more about catalog resources see [Catalog Overview](https://developer.bigcommerce.com/api-docs/catalog/products-overview).  - [Authentication](#authentication) - [Differentiating Variants & Modifiers](#variants-and-modifiers) - [Available Endpoints](#available-endpoints) - [Resources](#resources)  ## Authentication Requests can be authenticated by sending a `client_id` and `access_token` via `X-Auth-Client` and `X-Auth-Token` HTTP headers:  ```http GET /stores/{$$.env.store_hash}/v3/catalog/summary host: api.bigcommerce.com Accept: application/json X-Auth-Client: {client_id} X-Auth-Token: {access_token} ```  |Header|Parameter|Description| |-|-|-| |`X-Auth-Client`|`client_id`|Obtained by creating an API account or installing an app in a BigCommerce control panel.| |`X-Auth-Token`|`access_token `|Obtained by creating an API account or installing an app in a BigCommerce control panel.|  ### OAuth Scopes | UI Name  | Permission | Parameter                     | |----------|------------|-------------------------------| | Products | modify     | `store_v2_products`           | | Products | read-only  | `store_v2_products_read_only` |  For more information on OAuth Scopes, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  For more information on Authenticating BigCommerce APIs, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Differentiating Variants and Modifiers [Variants](https://support.bigcommerce.com/s/article/Product-Options-v3#variations) represent a physical product made up of [Product Option](https://support.bigcommerce.com/s/article/Product-Options-v3) choices, i.e. a large blue t-shirt. Each variant can have a unique SKU.  Modifiers represent a choice a customer makes about a product that doesn't represent a physical item, i.e. text to be printed on a t-shirt. Assigning a SKU to a modifier will turn it into a variant.  See [Variant Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#variant-options) and [Modifier Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#modifier-options) for more information.  ## Available Endpoints | Resource / Endpoint                     | Description                                                             | |-----------------------------------------|-------------------------------------------------------------------------| | Brand Images                            | Create and manage brand images                                          | | Brand Metafields                        | Create and manage brand metafields                                      | | Brands                                  | Create and manage brands                                                | | Catalog                                 | Create and manage store categories, products, and brands                | | Categories                              | Create and manage categorties                                           | | Category Images                         | Create and manage category images                                       | | Category Metafields                     | Create and manage category metafields                                   | | Product Bulk Pricing Rules              | Create and manage product bulk pricing rules                            | | Product Complex Rules                   | Create and manage product complex rules                                 | | Product Custom Fields                   | Create and manage product custom fields                                 | | Product Images                          | Create and manage product images                                        | | Product Metafields                      | Create and manage product meta fields                                   | | Product Modifier Images                 | Create and manage product modifer images                                | | Product Modifier Values                 | Create and manage product modifier values                               | | Product Modifiers                       | Create and manage product midifiers                                     | | Product Reviews                         | Create and manage product reviews                                       | | Product Variant Option Values           | Create and manage product variant option values                         | | Product Variant Options                 | Create and manage product variant options                               | | Product Variants                        | Create and manage product variants                                      | | Product Videos                          | Create and manage product videos                                        | | Products                                | Create and manage products                                              | | ProductVariant Metafields               | Create and manage product meta flields                                  | | Variants                                | Get and update all variants                                             |  ## Resources  ### Webhooks * [Products](/api-docs/getting-started/webhooks/webhook-events#webhook-events_products) * [Categories](/api-docs/getting-started/webhooks/webhook-events#webhook-events_category) * [SKU](/api-docs/getting-started/webhooks/webhook-events#webhook-events_sku)  ### Related Endpoints * [Catalog API](/api-reference/catalog/catalog-api)
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

namespace BigCommerce\Catalog\Model;

use \ArrayAccess;
use \BigCommerce\Catalog\ObjectSerializer;

/**
 * ConfigFull Class Doc Comment
 *
 * @category Class
 * @description The values for option config can vary based on the Modifier created.
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfigFull implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'config_Full';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_value' => 'string',
'checked_by_default' => 'bool',
'checkbox_label' => 'string',
'date_limited' => 'bool',
'date_limit_mode' => 'string',
'date_earliest_value' => '\DateTime',
'date_latest_value' => '\DateTime',
'file_types_mode' => 'string',
'file_types_supported' => 'string[]',
'file_types_other' => 'string[]',
'file_max_size' => 'int',
'text_characters_limited' => 'bool',
'text_min_length' => 'int',
'text_max_length' => 'int',
'text_lines_limited' => 'bool',
'text_max_lines' => 'int',
'number_limited' => 'bool',
'number_limit_mode' => 'string',
'number_lowest_value' => 'float',
'number_highest_value' => 'float',
'number_integers_only' => 'bool',
'product_list_adjusts_inventory' => 'bool',
'product_list_adjusts_pricing' => 'bool',
'product_list_shipping_calc' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default_value' => null,
'checked_by_default' => null,
'checkbox_label' => null,
'date_limited' => null,
'date_limit_mode' => null,
'date_earliest_value' => 'date',
'date_latest_value' => 'date',
'file_types_mode' => null,
'file_types_supported' => null,
'file_types_other' => null,
'file_max_size' => null,
'text_characters_limited' => null,
'text_min_length' => null,
'text_max_length' => null,
'text_lines_limited' => null,
'text_max_lines' => null,
'number_limited' => null,
'number_limit_mode' => null,
'number_lowest_value' => null,
'number_highest_value' => null,
'number_integers_only' => null,
'product_list_adjusts_inventory' => null,
'product_list_adjusts_pricing' => null,
'product_list_shipping_calc' => null    ];

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
        'default_value' => 'default_value',
'checked_by_default' => 'checked_by_default',
'checkbox_label' => 'checkbox_label',
'date_limited' => 'date_limited',
'date_limit_mode' => 'date_limit_mode',
'date_earliest_value' => 'date_earliest_value',
'date_latest_value' => 'date_latest_value',
'file_types_mode' => 'file_types_mode',
'file_types_supported' => 'file_types_supported',
'file_types_other' => 'file_types_other',
'file_max_size' => 'file_max_size',
'text_characters_limited' => 'text_characters_limited',
'text_min_length' => 'text_min_length',
'text_max_length' => 'text_max_length',
'text_lines_limited' => 'text_lines_limited',
'text_max_lines' => 'text_max_lines',
'number_limited' => 'number_limited',
'number_limit_mode' => 'number_limit_mode',
'number_lowest_value' => 'number_lowest_value',
'number_highest_value' => 'number_highest_value',
'number_integers_only' => 'number_integers_only',
'product_list_adjusts_inventory' => 'product_list_adjusts_inventory',
'product_list_adjusts_pricing' => 'product_list_adjusts_pricing',
'product_list_shipping_calc' => 'product_list_shipping_calc'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_value' => 'setDefaultValue',
'checked_by_default' => 'setCheckedByDefault',
'checkbox_label' => 'setCheckboxLabel',
'date_limited' => 'setDateLimited',
'date_limit_mode' => 'setDateLimitMode',
'date_earliest_value' => 'setDateEarliestValue',
'date_latest_value' => 'setDateLatestValue',
'file_types_mode' => 'setFileTypesMode',
'file_types_supported' => 'setFileTypesSupported',
'file_types_other' => 'setFileTypesOther',
'file_max_size' => 'setFileMaxSize',
'text_characters_limited' => 'setTextCharactersLimited',
'text_min_length' => 'setTextMinLength',
'text_max_length' => 'setTextMaxLength',
'text_lines_limited' => 'setTextLinesLimited',
'text_max_lines' => 'setTextMaxLines',
'number_limited' => 'setNumberLimited',
'number_limit_mode' => 'setNumberLimitMode',
'number_lowest_value' => 'setNumberLowestValue',
'number_highest_value' => 'setNumberHighestValue',
'number_integers_only' => 'setNumberIntegersOnly',
'product_list_adjusts_inventory' => 'setProductListAdjustsInventory',
'product_list_adjusts_pricing' => 'setProductListAdjustsPricing',
'product_list_shipping_calc' => 'setProductListShippingCalc'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_value' => 'getDefaultValue',
'checked_by_default' => 'getCheckedByDefault',
'checkbox_label' => 'getCheckboxLabel',
'date_limited' => 'getDateLimited',
'date_limit_mode' => 'getDateLimitMode',
'date_earliest_value' => 'getDateEarliestValue',
'date_latest_value' => 'getDateLatestValue',
'file_types_mode' => 'getFileTypesMode',
'file_types_supported' => 'getFileTypesSupported',
'file_types_other' => 'getFileTypesOther',
'file_max_size' => 'getFileMaxSize',
'text_characters_limited' => 'getTextCharactersLimited',
'text_min_length' => 'getTextMinLength',
'text_max_length' => 'getTextMaxLength',
'text_lines_limited' => 'getTextLinesLimited',
'text_max_lines' => 'getTextMaxLines',
'number_limited' => 'getNumberLimited',
'number_limit_mode' => 'getNumberLimitMode',
'number_lowest_value' => 'getNumberLowestValue',
'number_highest_value' => 'getNumberHighestValue',
'number_integers_only' => 'getNumberIntegersOnly',
'product_list_adjusts_inventory' => 'getProductListAdjustsInventory',
'product_list_adjusts_pricing' => 'getProductListAdjustsPricing',
'product_list_shipping_calc' => 'getProductListShippingCalc'    ];

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

    const DATE_LIMIT_MODE_EARLIEST = 'earliest';
const DATE_LIMIT_MODE_RANGE = 'range';
const DATE_LIMIT_MODE_LATEST = 'latest';
const FILE_TYPES_MODE_SPECIFIC = 'specific';
const FILE_TYPES_MODE_ALL = 'all';
const NUMBER_LIMIT_MODE_LOWEST = 'lowest';
const NUMBER_LIMIT_MODE_HIGHEST = 'highest';
const NUMBER_LIMIT_MODE_RANGE = 'range';
const PRODUCT_LIST_SHIPPING_CALC_NONE = 'none';
const PRODUCT_LIST_SHIPPING_CALC_WEIGHT = 'weight';
const PRODUCT_LIST_SHIPPING_CALC_PACKAGE = 'package';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDateLimitModeAllowableValues()
    {
        return [
            self::DATE_LIMIT_MODE_EARLIEST,
self::DATE_LIMIT_MODE_RANGE,
self::DATE_LIMIT_MODE_LATEST,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFileTypesModeAllowableValues()
    {
        return [
            self::FILE_TYPES_MODE_SPECIFIC,
self::FILE_TYPES_MODE_ALL,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNumberLimitModeAllowableValues()
    {
        return [
            self::NUMBER_LIMIT_MODE_LOWEST,
self::NUMBER_LIMIT_MODE_HIGHEST,
self::NUMBER_LIMIT_MODE_RANGE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductListShippingCalcAllowableValues()
    {
        return [
            self::PRODUCT_LIST_SHIPPING_CALC_NONE,
self::PRODUCT_LIST_SHIPPING_CALC_WEIGHT,
self::PRODUCT_LIST_SHIPPING_CALC_PACKAGE,        ];
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
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['checked_by_default'] = isset($data['checked_by_default']) ? $data['checked_by_default'] : null;
        $this->container['checkbox_label'] = isset($data['checkbox_label']) ? $data['checkbox_label'] : null;
        $this->container['date_limited'] = isset($data['date_limited']) ? $data['date_limited'] : null;
        $this->container['date_limit_mode'] = isset($data['date_limit_mode']) ? $data['date_limit_mode'] : null;
        $this->container['date_earliest_value'] = isset($data['date_earliest_value']) ? $data['date_earliest_value'] : null;
        $this->container['date_latest_value'] = isset($data['date_latest_value']) ? $data['date_latest_value'] : null;
        $this->container['file_types_mode'] = isset($data['file_types_mode']) ? $data['file_types_mode'] : null;
        $this->container['file_types_supported'] = isset($data['file_types_supported']) ? $data['file_types_supported'] : null;
        $this->container['file_types_other'] = isset($data['file_types_other']) ? $data['file_types_other'] : null;
        $this->container['file_max_size'] = isset($data['file_max_size']) ? $data['file_max_size'] : null;
        $this->container['text_characters_limited'] = isset($data['text_characters_limited']) ? $data['text_characters_limited'] : null;
        $this->container['text_min_length'] = isset($data['text_min_length']) ? $data['text_min_length'] : null;
        $this->container['text_max_length'] = isset($data['text_max_length']) ? $data['text_max_length'] : null;
        $this->container['text_lines_limited'] = isset($data['text_lines_limited']) ? $data['text_lines_limited'] : null;
        $this->container['text_max_lines'] = isset($data['text_max_lines']) ? $data['text_max_lines'] : null;
        $this->container['number_limited'] = isset($data['number_limited']) ? $data['number_limited'] : null;
        $this->container['number_limit_mode'] = isset($data['number_limit_mode']) ? $data['number_limit_mode'] : null;
        $this->container['number_lowest_value'] = isset($data['number_lowest_value']) ? $data['number_lowest_value'] : null;
        $this->container['number_highest_value'] = isset($data['number_highest_value']) ? $data['number_highest_value'] : null;
        $this->container['number_integers_only'] = isset($data['number_integers_only']) ? $data['number_integers_only'] : null;
        $this->container['product_list_adjusts_inventory'] = isset($data['product_list_adjusts_inventory']) ? $data['product_list_adjusts_inventory'] : null;
        $this->container['product_list_adjusts_pricing'] = isset($data['product_list_adjusts_pricing']) ? $data['product_list_adjusts_pricing'] : null;
        $this->container['product_list_shipping_calc'] = isset($data['product_list_shipping_calc']) ? $data['product_list_shipping_calc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDateLimitModeAllowableValues();
        if (!is_null($this->container['date_limit_mode']) && !in_array($this->container['date_limit_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'date_limit_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFileTypesModeAllowableValues();
        if (!is_null($this->container['file_types_mode']) && !in_array($this->container['file_types_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'file_types_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNumberLimitModeAllowableValues();
        if (!is_null($this->container['number_limit_mode']) && !in_array($this->container['number_limit_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'number_limit_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProductListShippingCalcAllowableValues();
        if (!is_null($this->container['product_list_shipping_calc']) && !in_array($this->container['product_list_shipping_calc'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'product_list_shipping_calc', must be one of '%s'",
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
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string $default_value (date, text, multi_line_text, numbers_only_text) The default value. Shown on a date option as an ISO-8601–formatted string, or on a text option as a string.
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets checked_by_default
     *
     * @return bool
     */
    public function getCheckedByDefault()
    {
        return $this->container['checked_by_default'];
    }

    /**
     * Sets checked_by_default
     *
     * @param bool $checked_by_default (checkbox) Flag for setting the checkbox to be checked by default.
     *
     * @return $this
     */
    public function setCheckedByDefault($checked_by_default)
    {
        $this->container['checked_by_default'] = $checked_by_default;

        return $this;
    }

    /**
     * Gets checkbox_label
     *
     * @return string
     */
    public function getCheckboxLabel()
    {
        return $this->container['checkbox_label'];
    }

    /**
     * Sets checkbox_label
     *
     * @param string $checkbox_label (checkbox) Label displayed for the checkbox option.
     *
     * @return $this
     */
    public function setCheckboxLabel($checkbox_label)
    {
        $this->container['checkbox_label'] = $checkbox_label;

        return $this;
    }

    /**
     * Gets date_limited
     *
     * @return bool
     */
    public function getDateLimited()
    {
        return $this->container['date_limited'];
    }

    /**
     * Sets date_limited
     *
     * @param bool $date_limited (date) Flag to limit the dates allowed to be entered on a date option.
     *
     * @return $this
     */
    public function setDateLimited($date_limited)
    {
        $this->container['date_limited'] = $date_limited;

        return $this;
    }

    /**
     * Gets date_limit_mode
     *
     * @return string
     */
    public function getDateLimitMode()
    {
        return $this->container['date_limit_mode'];
    }

    /**
     * Sets date_limit_mode
     *
     * @param string $date_limit_mode (date) The type of limit that is allowed to be entered on a date option.
     *
     * @return $this
     */
    public function setDateLimitMode($date_limit_mode)
    {
        $allowedValues = $this->getDateLimitModeAllowableValues();
        if (!is_null($date_limit_mode) && !in_array($date_limit_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'date_limit_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['date_limit_mode'] = $date_limit_mode;

        return $this;
    }

    /**
     * Gets date_earliest_value
     *
     * @return \DateTime
     */
    public function getDateEarliestValue()
    {
        return $this->container['date_earliest_value'];
    }

    /**
     * Sets date_earliest_value
     *
     * @param \DateTime $date_earliest_value (date) The earliest date allowed to be entered on the date option, as an ISO-8601 formatted string.
     *
     * @return $this
     */
    public function setDateEarliestValue($date_earliest_value)
    {
        $this->container['date_earliest_value'] = $date_earliest_value;

        return $this;
    }

    /**
     * Gets date_latest_value
     *
     * @return \DateTime
     */
    public function getDateLatestValue()
    {
        return $this->container['date_latest_value'];
    }

    /**
     * Sets date_latest_value
     *
     * @param \DateTime $date_latest_value (date) The latest date allowed to be entered on the date option, as an ISO-8601 formatted string.
     *
     * @return $this
     */
    public function setDateLatestValue($date_latest_value)
    {
        $this->container['date_latest_value'] = $date_latest_value;

        return $this;
    }

    /**
     * Gets file_types_mode
     *
     * @return string
     */
    public function getFileTypesMode()
    {
        return $this->container['file_types_mode'];
    }

    /**
     * Sets file_types_mode
     *
     * @param string $file_types_mode (file) The kind of restriction on the file types that can be uploaded with a file upload option. Values: `specific` - restricts uploads to particular file types; `all` - allows all file types.
     *
     * @return $this
     */
    public function setFileTypesMode($file_types_mode)
    {
        $allowedValues = $this->getFileTypesModeAllowableValues();
        if (!is_null($file_types_mode) && !in_array($file_types_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'file_types_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['file_types_mode'] = $file_types_mode;

        return $this;
    }

    /**
     * Gets file_types_supported
     *
     * @return string[]
     */
    public function getFileTypesSupported()
    {
        return $this->container['file_types_supported'];
    }

    /**
     * Sets file_types_supported
     *
     * @param string[] $file_types_supported (file) The type of files allowed to be uploaded if the `file_type_option` is set to `specific`. Values:   `images` - Allows upload of image MIME types (`bmp`, `gif`, `jpg`, `jpeg`, `jpe`, `jif`, `jfif`, `jfi`, `png`, `wbmp`, `xbm`, `tiff`). `documents` - Allows upload of document MIME types (`txt`, `pdf`, `rtf`, `doc`, `docx`, `xls`, `xlsx`, `accdb`, `mdb`, `one`, `pps`, `ppsx`, `ppt`, `pptx`, `pub`, `odt`, `ods`, `odp`, `odg`, `odf`).   `other` - Allows file types defined in the `file_types_other` array.
     *
     * @return $this
     */
    public function setFileTypesSupported($file_types_supported)
    {
        $this->container['file_types_supported'] = $file_types_supported;

        return $this;
    }

    /**
     * Gets file_types_other
     *
     * @return string[]
     */
    public function getFileTypesOther()
    {
        return $this->container['file_types_other'];
    }

    /**
     * Sets file_types_other
     *
     * @param string[] $file_types_other (file) A list of other file types allowed with the file upload option.
     *
     * @return $this
     */
    public function setFileTypesOther($file_types_other)
    {
        $this->container['file_types_other'] = $file_types_other;

        return $this;
    }

    /**
     * Gets file_max_size
     *
     * @return int
     */
    public function getFileMaxSize()
    {
        return $this->container['file_max_size'];
    }

    /**
     * Sets file_max_size
     *
     * @param int $file_max_size (file) The maximum size for a file that can be used with the file upload option. This will still be limited by the server.
     *
     * @return $this
     */
    public function setFileMaxSize($file_max_size)
    {
        $this->container['file_max_size'] = $file_max_size;

        return $this;
    }

    /**
     * Gets text_characters_limited
     *
     * @return bool
     */
    public function getTextCharactersLimited()
    {
        return $this->container['text_characters_limited'];
    }

    /**
     * Sets text_characters_limited
     *
     * @param bool $text_characters_limited (text, multi_line_text) Flag to validate the length of a text or multi-line text input.
     *
     * @return $this
     */
    public function setTextCharactersLimited($text_characters_limited)
    {
        $this->container['text_characters_limited'] = $text_characters_limited;

        return $this;
    }

    /**
     * Gets text_min_length
     *
     * @return int
     */
    public function getTextMinLength()
    {
        return $this->container['text_min_length'];
    }

    /**
     * Sets text_min_length
     *
     * @param int $text_min_length (text, multi_line_text) The minimum length allowed for a text or multi-line text option.
     *
     * @return $this
     */
    public function setTextMinLength($text_min_length)
    {
        $this->container['text_min_length'] = $text_min_length;

        return $this;
    }

    /**
     * Gets text_max_length
     *
     * @return int
     */
    public function getTextMaxLength()
    {
        return $this->container['text_max_length'];
    }

    /**
     * Sets text_max_length
     *
     * @param int $text_max_length (text, multi_line_text) The maximum length allowed for a text or multi line text option.
     *
     * @return $this
     */
    public function setTextMaxLength($text_max_length)
    {
        $this->container['text_max_length'] = $text_max_length;

        return $this;
    }

    /**
     * Gets text_lines_limited
     *
     * @return bool
     */
    public function getTextLinesLimited()
    {
        return $this->container['text_lines_limited'];
    }

    /**
     * Sets text_lines_limited
     *
     * @param bool $text_lines_limited (multi_line_text) Flag to validate the maximum number of lines allowed on a multi-line text input.
     *
     * @return $this
     */
    public function setTextLinesLimited($text_lines_limited)
    {
        $this->container['text_lines_limited'] = $text_lines_limited;

        return $this;
    }

    /**
     * Gets text_max_lines
     *
     * @return int
     */
    public function getTextMaxLines()
    {
        return $this->container['text_max_lines'];
    }

    /**
     * Sets text_max_lines
     *
     * @param int $text_max_lines (multi_line_text) The maximum number of lines allowed on a multi-line text input.
     *
     * @return $this
     */
    public function setTextMaxLines($text_max_lines)
    {
        $this->container['text_max_lines'] = $text_max_lines;

        return $this;
    }

    /**
     * Gets number_limited
     *
     * @return bool
     */
    public function getNumberLimited()
    {
        return $this->container['number_limited'];
    }

    /**
     * Sets number_limited
     *
     * @param bool $number_limited (numbers_only_text) Flag to limit the value of a number option.
     *
     * @return $this
     */
    public function setNumberLimited($number_limited)
    {
        $this->container['number_limited'] = $number_limited;

        return $this;
    }

    /**
     * Gets number_limit_mode
     *
     * @return string
     */
    public function getNumberLimitMode()
    {
        return $this->container['number_limit_mode'];
    }

    /**
     * Sets number_limit_mode
     *
     * @param string $number_limit_mode (numbers_only_text) The type of limit on values entered for a number option.
     *
     * @return $this
     */
    public function setNumberLimitMode($number_limit_mode)
    {
        $allowedValues = $this->getNumberLimitModeAllowableValues();
        if (!is_null($number_limit_mode) && !in_array($number_limit_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'number_limit_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['number_limit_mode'] = $number_limit_mode;

        return $this;
    }

    /**
     * Gets number_lowest_value
     *
     * @return float
     */
    public function getNumberLowestValue()
    {
        return $this->container['number_lowest_value'];
    }

    /**
     * Sets number_lowest_value
     *
     * @param float $number_lowest_value (numbers_only_text) The lowest allowed value for a number option if `number_limited` is true.
     *
     * @return $this
     */
    public function setNumberLowestValue($number_lowest_value)
    {
        $this->container['number_lowest_value'] = $number_lowest_value;

        return $this;
    }

    /**
     * Gets number_highest_value
     *
     * @return float
     */
    public function getNumberHighestValue()
    {
        return $this->container['number_highest_value'];
    }

    /**
     * Sets number_highest_value
     *
     * @param float $number_highest_value (numbers_only_text) The highest allowed value for a number option if `number_limited` is true.
     *
     * @return $this
     */
    public function setNumberHighestValue($number_highest_value)
    {
        $this->container['number_highest_value'] = $number_highest_value;

        return $this;
    }

    /**
     * Gets number_integers_only
     *
     * @return bool
     */
    public function getNumberIntegersOnly()
    {
        return $this->container['number_integers_only'];
    }

    /**
     * Sets number_integers_only
     *
     * @param bool $number_integers_only (numbers_only_text) Flag to limit the input on a number option to whole numbers only.
     *
     * @return $this
     */
    public function setNumberIntegersOnly($number_integers_only)
    {
        $this->container['number_integers_only'] = $number_integers_only;

        return $this;
    }

    /**
     * Gets product_list_adjusts_inventory
     *
     * @return bool
     */
    public function getProductListAdjustsInventory()
    {
        return $this->container['product_list_adjusts_inventory'];
    }

    /**
     * Sets product_list_adjusts_inventory
     *
     * @param bool $product_list_adjusts_inventory (product_list, product_list_with_images) Flag for automatically adjusting inventory on a product included in the list.
     *
     * @return $this
     */
    public function setProductListAdjustsInventory($product_list_adjusts_inventory)
    {
        $this->container['product_list_adjusts_inventory'] = $product_list_adjusts_inventory;

        return $this;
    }

    /**
     * Gets product_list_adjusts_pricing
     *
     * @return bool
     */
    public function getProductListAdjustsPricing()
    {
        return $this->container['product_list_adjusts_pricing'];
    }

    /**
     * Sets product_list_adjusts_pricing
     *
     * @param bool $product_list_adjusts_pricing (product_list, product_list_with_images) Flag to add the optional product's price to the main product's price.
     *
     * @return $this
     */
    public function setProductListAdjustsPricing($product_list_adjusts_pricing)
    {
        $this->container['product_list_adjusts_pricing'] = $product_list_adjusts_pricing;

        return $this;
    }

    /**
     * Gets product_list_shipping_calc
     *
     * @return string
     */
    public function getProductListShippingCalc()
    {
        return $this->container['product_list_shipping_calc'];
    }

    /**
     * Sets product_list_shipping_calc
     *
     * @param string $product_list_shipping_calc (product_list, product_list_with_images) How to factor the optional product's weight and package dimensions into the shipping quote. Values: `none` - don't adjust; `weight` - use shipping weight only; `package` - use weight and dimensions.
     *
     * @return $this
     */
    public function setProductListShippingCalc($product_list_shipping_calc)
    {
        $allowedValues = $this->getProductListShippingCalcAllowableValues();
        if (!is_null($product_list_shipping_calc) && !in_array($product_list_shipping_calc, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'product_list_shipping_calc', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_list_shipping_calc'] = $product_list_shipping_calc;

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
