<?php
/**
 * Body
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Scripts
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Scripts
 *
 * Inject client-side code onto a BigCommere storefront. To learn more about Scripts, see [here](/api-docs/scripts/scripts-overview).   - [OAuth Scopes](#oauth-scopes) - [Authentication](#authentication) - [Available Endpoints](#available-endpoints)  ## OAuth Scopes | UI Name                                      | Permission | Parameter                                     | |----------------------------------------------|------------|-----------------------------------------------| | Checkout Content<sup>1</sup>                             | modify     | `store_content_checkout`                      | | Checkout Content<sup>1</sup>                             | read-only  | `store_content_checkout_read_only`            | | Content                                       | modify     | `store_v2_content`                            | | Content                                       | read-only  | `store_v2_content_read_only`                  |  1. `Checkout Content` scopes are required to create or read scripts on the checkout page.  For more information on OAuth Scopes, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Authentication  Requests can be authenticated by sending a `client_id` and `access_token` via `X-Auth-Client` and `X-Auth-Token` HTTP headers:  ```http GET /stores/{$$.env.store_hash}/v3/catalog/summary host: api.bigcommerce.com Accept: application/json X-Auth-Client: {client_id} X-Auth-Token: {access_token} ```  |Header|Parameter|Description| |-|-|-| |`X-Auth-Client`|`client_id`|Obtained by creating an API account or installing an app in a BigCommerce control panel.| |`X-Auth-Token`|`access_token `|Obtained by creating an API account or installing an app in a BigCommerce control panel.|  For more information on Authenticating BigCommerce APIs, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Available Endpoints | Resource / Endpoint                     | Description                                                             | |-----------------------------------------|-------------------------------------------------------------------------| | Scripts                                 | Add client-side code to a store                                         |
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

namespace BigCommerce\Scripts\Model;

use \ArrayAccess;
use \BigCommerce\Scripts\ObjectSerializer;

/**
 * Body Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Scripts
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
'html' => 'string',
'src' => 'string',
'auto_uninstall' => 'bool',
'load_method' => 'string',
'location' => 'string',
'visibility' => 'string',
'kind' => 'string',
'api_client_id' => 'string',
'consent_category' => 'string',
'enabled' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
'html' => null,
'src' => null,
'auto_uninstall' => null,
'load_method' => null,
'location' => null,
'visibility' => null,
'kind' => null,
'api_client_id' => null,
'consent_category' => null,
'enabled' => null    ];

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
        'description' => 'description',
'html' => 'html',
'src' => 'src',
'auto_uninstall' => 'auto_uninstall',
'load_method' => 'load_method',
'location' => 'location',
'visibility' => 'visibility',
'kind' => 'kind',
'api_client_id' => 'api_client_id',
'consent_category' => 'consent_category',
'enabled' => 'enabled'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
'html' => 'setHtml',
'src' => 'setSrc',
'auto_uninstall' => 'setAutoUninstall',
'load_method' => 'setLoadMethod',
'location' => 'setLocation',
'visibility' => 'setVisibility',
'kind' => 'setKind',
'api_client_id' => 'setApiClientId',
'consent_category' => 'setConsentCategory',
'enabled' => 'setEnabled'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
'html' => 'getHtml',
'src' => 'getSrc',
'auto_uninstall' => 'getAutoUninstall',
'load_method' => 'getLoadMethod',
'location' => 'getLocation',
'visibility' => 'getVisibility',
'kind' => 'getKind',
'api_client_id' => 'getApiClientId',
'consent_category' => 'getConsentCategory',
'enabled' => 'getEnabled'    ];

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

    const LOAD_METHOD__DEFAULT = 'default';
const LOAD_METHOD_ASYNC = 'async';
const LOAD_METHOD_DEFER = 'defer';
const LOCATION_HEAD = 'head';
const LOCATION_FOOTER = 'footer';
const VISIBILITY_STOREFRONT = 'storefront';
const VISIBILITY_ALL_PAGES = 'all_pages';
const VISIBILITY_CHECKOUT = 'checkout';
const VISIBILITY_ORDER_CONFIRMATION = 'order_confirmation';
const KIND_SRC = 'src';
const KIND_SCRIPT_TAG = 'script_tag';
const CONSENT_CATEGORY_ESSENTIAL = 'essential';
const CONSENT_CATEGORY_FUNCTIONAL = 'functional';
const CONSENT_CATEGORY_ANALYTICS = 'analytics';
const CONSENT_CATEGORY_TARGETING = 'targeting';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLoadMethodAllowableValues()
    {
        return [
            self::LOAD_METHOD__DEFAULT,
self::LOAD_METHOD_ASYNC,
self::LOAD_METHOD_DEFER,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocationAllowableValues()
    {
        return [
            self::LOCATION_HEAD,
self::LOCATION_FOOTER,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY_STOREFRONT,
self::VISIBILITY_ALL_PAGES,
self::VISIBILITY_CHECKOUT,
self::VISIBILITY_ORDER_CONFIRMATION,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_SRC,
self::KIND_SCRIPT_TAG,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConsentCategoryAllowableValues()
    {
        return [
            self::CONSENT_CATEGORY_ESSENTIAL,
self::CONSENT_CATEGORY_FUNCTIONAL,
self::CONSENT_CATEGORY_ANALYTICS,
self::CONSENT_CATEGORY_TARGETING,        ];
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['src'] = isset($data['src']) ? $data['src'] : null;
        $this->container['auto_uninstall'] = isset($data['auto_uninstall']) ? $data['auto_uninstall'] : null;
        $this->container['load_method'] = isset($data['load_method']) ? $data['load_method'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['api_client_id'] = isset($data['api_client_id']) ? $data['api_client_id'] : null;
        $this->container['consent_category'] = isset($data['consent_category']) ? $data['consent_category'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLoadMethodAllowableValues();
        if (!is_null($this->container['load_method']) && !in_array($this->container['load_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'load_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLocationAllowableValues();
        if (!is_null($this->container['location']) && !in_array($this->container['location'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'location', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVisibilityAllowableValues();
        if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kind', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getConsentCategoryAllowableValues();
        if (!is_null($this->container['consent_category']) && !in_array($this->container['consent_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'consent_category', must be one of '%s'",
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The user-friendly description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string $html An html string containing exactly one `script` tag. Only present if `kind` is `script_tag`
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->container['src'];
    }

    /**
     * Sets src
     *
     * @param string $src The `src` attribute of the script to load. Only present if `kind` is `src`.
     *
     * @return $this
     */
    public function setSrc($src)
    {
        $this->container['src'] = $src;

        return $this;
    }

    /**
     * Gets auto_uninstall
     *
     * @return bool
     */
    public function getAutoUninstall()
    {
        return $this->container['auto_uninstall'];
    }

    /**
     * Sets auto_uninstall
     *
     * @param bool $auto_uninstall It will enable automatic cleanup of the script when the single click app is uninstalled or OAuth token is revoked.
     *
     * @return $this
     */
    public function setAutoUninstall($auto_uninstall)
    {
        $this->container['auto_uninstall'] = $auto_uninstall;

        return $this;
    }

    /**
     * Gets load_method
     *
     * @return string
     */
    public function getLoadMethod()
    {
        return $this->container['load_method'];
    }

    /**
     * Sets load_method
     *
     * @param string $load_method The load method to use for the script. Values are `default`, `async`, or `defer`. It determines how the script should be loaded into the page.
     *
     * @return $this
     */
    public function setLoadMethod($load_method)
    {
        $allowedValues = $this->getLoadMethodAllowableValues();
        if (!is_null($load_method) && !in_array($load_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'load_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['load_method'] = $load_method;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Where on the page to place the script. Values are `head` or `footer`.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $allowedValues = $this->getLocationAllowableValues();
        if (!is_null($location) && !in_array($location, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'location', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return string
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param string $visibility Which set of pages the script should load on.   Please note that you need to have `Checkout content` scope to use `all_pages` and `checkout`.  - The current visibility options are `storefront`, `checkout`, `all_pages` and `order_confirmation`.       `storefront`: All pages that are not `checkout` or `order_confirmation`.     For a list of all locations visit [Scripts Visibility](https://developer.bigcommerce.com/api-docs/storefront/scripts-overview#scripts_scripts-visibility).
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $allowedValues = $this->getVisibilityAllowableValues();
        if (!is_null($visibility) && !in_array($visibility, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'visibility', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind What type of script this is.  `src` - a `script` tag will be generated with its `src` attribute set to the value of `src`; For scripts that use the src url. By providing a path to the script, we can optimize and serve the script tag automatically for you.  `script_tag` - The value of `html` will be injected directly onto the page. For scripts which include a raw HTML script_tag to be inserted into the page. The load_method must be default.
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($kind) && !in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kind', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets api_client_id
     *
     * @return string
     */
    public function getApiClientId()
    {
        return $this->container['api_client_id'];
    }

    /**
     * Sets api_client_id
     *
     * @param string $api_client_id The client id of the API user that created this script, or blank if created by other means.
     *
     * @return $this
     */
    public function setApiClientId($api_client_id)
    {
        $this->container['api_client_id'] = $api_client_id;

        return $this;
    }

    /**
     * Gets consent_category
     *
     * @return string
     */
    public function getConsentCategory()
    {
        return $this->container['consent_category'];
    }

    /**
     * Sets consent_category
     *
     * @param string $consent_category What category of script this is for the purposes of GDPR/CCPA compliance.
     *
     * @return $this
     */
    public function setConsentCategory($consent_category)
    {
        $allowedValues = $this->getConsentCategoryAllowableValues();
        if (!is_null($consent_category) && !in_array($consent_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'consent_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['consent_category'] = $consent_category;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Indicates whether a script is enabled.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
