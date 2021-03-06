<?php
/**
 * WidgetSchemaSettingBase1
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Widgets
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Widgets
 *
 * Create and manage [widgets](/api-docs/storefront/widgets/widgets-overview), widget templates, regions, and placements.
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

namespace BigCommerce\Widgets\Model;

use \ArrayAccess;
use \BigCommerce\Widgets\ObjectSerializer;

/**
 * WidgetSchemaSettingBase1 Class Doc Comment
 *
 * @category Class
 * @description For examples of each type of setting, see [Page Builder &gt; Schema Settings](https://developer.bigcommerce.com/stencil-docs/page-builder/schema-settings/alignment) in Theme Docs.
 * @package  BigCommerce\Widgets
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WidgetSchemaSettingBase1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'widgetSchemaSetting_Base_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
'label' => 'string',
'id' => 'string',
'default' => 'string',
'type_meta' => 'string',
'conditional' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'label' => null,
'id' => null,
'default' => null,
'type_meta' => null,
'conditional' => null    ];

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
        'type' => 'type',
'label' => 'label',
'id' => 'id',
'default' => 'default',
'type_meta' => 'typeMeta',
'conditional' => 'conditional'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'label' => 'setLabel',
'id' => 'setId',
'default' => 'setDefault',
'type_meta' => 'setTypeMeta',
'conditional' => 'setConditional'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'label' => 'getLabel',
'id' => 'getId',
'default' => 'getDefault',
'type_meta' => 'getTypeMeta',
'conditional' => 'getConditional'    ];

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

    const TYPE_ALIGNMENT = 'alignment';
const TYPE_BOOLEAN = 'boolean';
const TYPE_BOX_MODEL = 'boxModel';
const TYPE_CODE = 'code';
const TYPE_COLOR = 'color';
const TYPE_IMAGE_MANAGER = 'imageManager';
const TYPE_INPUT = 'input';
const TYPE_NUMBER = 'number';
const TYPE_PRODUCT_ID = 'productId';
const TYPE_PRODUCT_IMAGE = 'productImage';
const TYPE_RANGE = 'range';
const TYPE_REGEX_INPUT = 'regexInput';
const TYPE_SELECT = 'select';
const TYPE_TEXT = 'text';
const TYPE_TOGGLE = 'toggle';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ALIGNMENT,
self::TYPE_BOOLEAN,
self::TYPE_BOX_MODEL,
self::TYPE_CODE,
self::TYPE_COLOR,
self::TYPE_IMAGE_MANAGER,
self::TYPE_INPUT,
self::TYPE_NUMBER,
self::TYPE_PRODUCT_ID,
self::TYPE_PRODUCT_IMAGE,
self::TYPE_RANGE,
self::TYPE_REGEX_INPUT,
self::TYPE_SELECT,
self::TYPE_TEXT,
self::TYPE_TOGGLE,        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['type_meta'] = isset($data['type_meta']) ? $data['type_meta'] : null;
        $this->container['conditional'] = isset($data['conditional']) ? $data['conditional'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of setting component to display. You can view the list of elements below to discover which are available to use.  For examples of each type of setting, see [Page Builder > Schema Settings](https://developer.bigcommerce.com/stencil-docs/page-builder/schema-settings/alignment) in Theme Docs.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label The user friendly message to inform the user how this setting will be used.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
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
     * @param string $id The variable name where the setting value will be available in the widget template.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param string $default The default value to use when rendering the widget for the first time. Make sure to set sensible defaults to make your widget easier to use.
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets type_meta
     *
     * @return string
     */
    public function getTypeMeta()
    {
        return $this->container['type_meta'];
    }

    /**
     * Sets type_meta
     *
     * @param string $type_meta Additional information needed based on the selected setting type.
     *
     * @return $this
     */
    public function setTypeMeta($type_meta)
    {
        $this->container['type_meta'] = $type_meta;

        return $this;
    }

    /**
     * Gets conditional
     *
     * @return string
     */
    public function getConditional()
    {
        return $this->container['conditional'];
    }

    /**
     * Sets conditional
     *
     * @param string $conditional Can be added on each setting to control whether it should be displayed to the user while editing in store design. This does not clear the value in the setting, just controls the display of the setting. Take a look at the regexInput for an example on using conditional.
     *
     * @return $this
     */
    public function setConditional($conditional)
    {
        $this->container['conditional'] = $conditional;

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
