<?php
/**
 * ProductDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  HouseOfTickets\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Supplier API
 *
 * Supplier API description... <br /><br /> Open [OpenAPI.json](doc.json).
 *
 * OpenAPI spec version: 1.1.15
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HouseOfTickets\PartnerPlatform\Model;

use \ArrayAccess;
use \HouseOfTickets\PartnerPlatform\ObjectSerializer;

/**
 * ProductDto Class Doc Comment
 *
 * @category Class
 * @package  HouseOfTickets\PartnerPlatform
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'supplier_product_id' => 'string',
'ean' => 'string',
'brand' => 'string',
'market_category_id' => 'string',
'retail_price_in_cents' => 'int',
'main_image_url' => 'string',
'brand_logo_image_url' => 'string',
'translations' => '\HouseOfTickets\PartnerPlatform\Model\ProductContentTranslationsDto',
'extra_image_urls' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'supplier_product_id' => null,
'ean' => null,
'brand' => null,
'market_category_id' => null,
'retail_price_in_cents' => null,
'main_image_url' => null,
'brand_logo_image_url' => null,
'translations' => null,
'extra_image_urls' => null    ];

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
        'supplier_product_id' => 'supplierProductId',
'ean' => 'ean',
'brand' => 'brand',
'market_category_id' => 'marketCategoryId',
'retail_price_in_cents' => 'retailPriceInCents',
'main_image_url' => 'mainImageUrl',
'brand_logo_image_url' => 'brandLogoImageUrl',
'translations' => 'translations',
'extra_image_urls' => 'extraImageUrls'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supplier_product_id' => 'setSupplierProductId',
'ean' => 'setEan',
'brand' => 'setBrand',
'market_category_id' => 'setMarketCategoryId',
'retail_price_in_cents' => 'setRetailPriceInCents',
'main_image_url' => 'setMainImageUrl',
'brand_logo_image_url' => 'setBrandLogoImageUrl',
'translations' => 'setTranslations',
'extra_image_urls' => 'setExtraImageUrls'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supplier_product_id' => 'getSupplierProductId',
'ean' => 'getEan',
'brand' => 'getBrand',
'market_category_id' => 'getMarketCategoryId',
'retail_price_in_cents' => 'getRetailPriceInCents',
'main_image_url' => 'getMainImageUrl',
'brand_logo_image_url' => 'getBrandLogoImageUrl',
'translations' => 'getTranslations',
'extra_image_urls' => 'getExtraImageUrls'    ];

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
        $this->container['supplier_product_id'] = isset($data['supplier_product_id']) ? $data['supplier_product_id'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['market_category_id'] = isset($data['market_category_id']) ? $data['market_category_id'] : null;
        $this->container['retail_price_in_cents'] = isset($data['retail_price_in_cents']) ? $data['retail_price_in_cents'] : null;
        $this->container['main_image_url'] = isset($data['main_image_url']) ? $data['main_image_url'] : null;
        $this->container['brand_logo_image_url'] = isset($data['brand_logo_image_url']) ? $data['brand_logo_image_url'] : null;
        $this->container['translations'] = isset($data['translations']) ? $data['translations'] : null;
        $this->container['extra_image_urls'] = isset($data['extra_image_urls']) ? $data['extra_image_urls'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['supplier_product_id'] === null) {
            $invalidProperties[] = "'supplier_product_id' can't be null";
        }
        if ($this->container['ean'] === null) {
            $invalidProperties[] = "'ean' can't be null";
        }
        if ($this->container['market_category_id'] === null) {
            $invalidProperties[] = "'market_category_id' can't be null";
        }
        if ($this->container['translations'] === null) {
            $invalidProperties[] = "'translations' can't be null";
        }
        if ($this->container['extra_image_urls'] === null) {
            $invalidProperties[] = "'extra_image_urls' can't be null";
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
     * Gets supplier_product_id
     *
     * @return string
     */
    public function getSupplierProductId()
    {
        return $this->container['supplier_product_id'];
    }

    /**
     * Sets supplier_product_id
     *
     * @param string $supplier_product_id supplier_product_id
     *
     * @return $this
     */
    public function setSupplierProductId($supplier_product_id)
    {
        $this->container['supplier_product_id'] = $supplier_product_id;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean ean
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets market_category_id
     *
     * @return string
     */
    public function getMarketCategoryId()
    {
        return $this->container['market_category_id'];
    }

    /**
     * Sets market_category_id
     *
     * @param string $market_category_id market_category_id
     *
     * @return $this
     */
    public function setMarketCategoryId($market_category_id)
    {
        $this->container['market_category_id'] = $market_category_id;

        return $this;
    }

    /**
     * Gets retail_price_in_cents
     *
     * @return int
     */
    public function getRetailPriceInCents()
    {
        return $this->container['retail_price_in_cents'];
    }

    /**
     * Sets retail_price_in_cents
     *
     * @param int $retail_price_in_cents retail_price_in_cents
     *
     * @return $this
     */
    public function setRetailPriceInCents($retail_price_in_cents)
    {
        $this->container['retail_price_in_cents'] = $retail_price_in_cents;

        return $this;
    }

    /**
     * Gets main_image_url
     *
     * @return string
     */
    public function getMainImageUrl()
    {
        return $this->container['main_image_url'];
    }

    /**
     * Sets main_image_url
     *
     * @param string $main_image_url main_image_url
     *
     * @return $this
     */
    public function setMainImageUrl($main_image_url)
    {
        $this->container['main_image_url'] = $main_image_url;

        return $this;
    }

    /**
     * Gets brand_logo_image_url
     *
     * @return string
     */
    public function getBrandLogoImageUrl()
    {
        return $this->container['brand_logo_image_url'];
    }

    /**
     * Sets brand_logo_image_url
     *
     * @param string $brand_logo_image_url brand_logo_image_url
     *
     * @return $this
     */
    public function setBrandLogoImageUrl($brand_logo_image_url)
    {
        $this->container['brand_logo_image_url'] = $brand_logo_image_url;

        return $this;
    }

    /**
     * Gets translations
     *
     * @return \HouseOfTickets\PartnerPlatform\Model\ProductContentTranslationsDto
     */
    public function getTranslations()
    {
        return $this->container['translations'];
    }

    /**
     * Sets translations
     *
     * @param \HouseOfTickets\PartnerPlatform\Model\ProductContentTranslationsDto $translations translations
     *
     * @return $this
     */
    public function setTranslations($translations)
    {
        $this->container['translations'] = $translations;

        return $this;
    }

    /**
     * Gets extra_image_urls
     *
     * @return string[]
     */
    public function getExtraImageUrls()
    {
        return $this->container['extra_image_urls'];
    }

    /**
     * Sets extra_image_urls
     *
     * @param string[] $extra_image_urls extra_image_urls
     *
     * @return $this
     */
    public function setExtraImageUrls($extra_image_urls)
    {
        $this->container['extra_image_urls'] = $extra_image_urls;

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
