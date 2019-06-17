<?php
/**
 * CreateDisbursementRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  FayaPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FayaPay API
 *
 * FayaPay API
 *
 * OpenAPI spec version: 1
 * Contact: support@fayapay.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FayaPay\Model;

use \ArrayAccess;
use \FayaPay\ObjectSerializer;

/**
 * CreateDisbursementRequest Class Doc Comment
 *
 * @category Class
 * @package  FayaPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateDisbursementRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateDisbursementRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'recipient_name' => 'string',
        'recipient_email' => 'string',
        'recipient_account_provider' => 'string',
        'recipient_account_number' => 'string',
        'recipient_account_country' => 'string',
        'statement_descriptor' => 'string',
        'description' => 'string',
        'metadata' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference' => null,
        'amount' => 'int32',
        'currency' => null,
        'recipient_name' => null,
        'recipient_email' => 'email',
        'recipient_account_provider' => null,
        'recipient_account_number' => null,
        'recipient_account_country' => null,
        'statement_descriptor' => null,
        'description' => null,
        'metadata' => null
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
        'amount' => 'amount',
        'currency' => 'currency',
        'recipient_name' => 'recipientName',
        'recipient_email' => 'recipientEmail',
        'recipient_account_provider' => 'recipientAccountProvider',
        'recipient_account_number' => 'recipientAccountNumber',
        'recipient_account_country' => 'recipientAccountCountry',
        'statement_descriptor' => 'statementDescriptor',
        'description' => 'description',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'recipient_name' => 'setRecipientName',
        'recipient_email' => 'setRecipientEmail',
        'recipient_account_provider' => 'setRecipientAccountProvider',
        'recipient_account_number' => 'setRecipientAccountNumber',
        'recipient_account_country' => 'setRecipientAccountCountry',
        'statement_descriptor' => 'setStatementDescriptor',
        'description' => 'setDescription',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'recipient_name' => 'getRecipientName',
        'recipient_email' => 'getRecipientEmail',
        'recipient_account_provider' => 'getRecipientAccountProvider',
        'recipient_account_number' => 'getRecipientAccountNumber',
        'recipient_account_country' => 'getRecipientAccountCountry',
        'statement_descriptor' => 'getStatementDescriptor',
        'description' => 'getDescription',
        'metadata' => 'getMetadata'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['recipient_name'] = isset($data['recipient_name']) ? $data['recipient_name'] : null;
        $this->container['recipient_email'] = isset($data['recipient_email']) ? $data['recipient_email'] : null;
        $this->container['recipient_account_provider'] = isset($data['recipient_account_provider']) ? $data['recipient_account_provider'] : null;
        $this->container['recipient_account_number'] = isset($data['recipient_account_number']) ? $data['recipient_account_number'] : null;
        $this->container['recipient_account_country'] = isset($data['recipient_account_country']) ? $data['recipient_account_country'] : null;
        $this->container['statement_descriptor'] = isset($data['statement_descriptor']) ? $data['statement_descriptor'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ((strlen($this->container['reference']) > 200)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 200.";
        }

        if ((strlen($this->container['reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if ((strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['recipient_name']) && (strlen($this->container['recipient_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'recipient_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['recipient_name']) && (strlen($this->container['recipient_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'recipient_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['recipient_account_provider'] === null) {
            $invalidProperties[] = "'recipient_account_provider' can't be null";
        }
        if ((strlen($this->container['recipient_account_provider']) < 1)) {
            $invalidProperties[] = "invalid value for 'recipient_account_provider', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['recipient_account_number'] === null) {
            $invalidProperties[] = "'recipient_account_number' can't be null";
        }
        if ((strlen($this->container['recipient_account_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'recipient_account_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['recipient_account_country'] === null) {
            $invalidProperties[] = "'recipient_account_country' can't be null";
        }
        if ((strlen($this->container['recipient_account_country']) < 1)) {
            $invalidProperties[] = "invalid value for 'recipient_account_country', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['statement_descriptor']) && (strlen($this->container['statement_descriptor']) > 22)) {
            $invalidProperties[] = "invalid value for 'statement_descriptor', the character length must be smaller than or equal to 22.";
        }

        if (!is_null($this->container['description']) && (strlen($this->container['description']) > 500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
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

        if ($this->container['reference'] === null) {
            return false;
        }
        if (strlen($this->container['reference']) > 200) {
            return false;
        }
        if (strlen($this->container['reference']) < 1) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        if (strlen($this->container['currency']) > 3) {
            return false;
        }
        if (strlen($this->container['currency']) < 3) {
            return false;
        }
        if (strlen($this->container['recipient_name']) > 100) {
            return false;
        }
        if (strlen($this->container['recipient_name']) < 0) {
            return false;
        }
        if ($this->container['recipient_account_provider'] === null) {
            return false;
        }
        if (strlen($this->container['recipient_account_provider']) < 1) {
            return false;
        }
        if ($this->container['recipient_account_number'] === null) {
            return false;
        }
        if (strlen($this->container['recipient_account_number']) < 1) {
            return false;
        }
        if ($this->container['recipient_account_country'] === null) {
            return false;
        }
        if (strlen($this->container['recipient_account_country']) < 1) {
            return false;
        }
        if (strlen($this->container['statement_descriptor']) > 22) {
            return false;
        }
        if (strlen($this->container['description']) > 500) {
            return false;
        }
        return true;
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
     * @param string $reference Your unique reference. If a disbursement already exists with this reference, the request will fail with 409 status code and ErrorCode will be set to `duplicate_reference`. For better resiliency, set the `X-IDEMPOTENCY-KEY` header to this as well.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if ((strlen($reference) > 200)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling CreateDisbursementRequest., must be smaller than or equal to 200.');
        }
        if ((strlen($reference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling CreateDisbursementRequest., must be bigger than or equal to 1.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount A positive integer in the smallest currency unit (e.g. 100 pesewas to disbursement 1.00GHS) representing how much to disbursement. The minimum amount is `100 (1.00GHS)`.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string $currency Three-letter ISO currency code, in uppercase. Must be a supported currency. Supported currencies: `GHS`.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        if ((strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling CreateDisbursementRequest., must be smaller than or equal to 3.');
        }
        if ((strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling CreateDisbursementRequest., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets recipient_name
     *
     * @return string
     */
    public function getRecipientName()
    {
        return $this->container['recipient_name'];
    }

    /**
     * Sets recipient_name
     *
     * @param string $recipient_name The recipient's name.
     *
     * @return $this
     */
    public function setRecipientName($recipient_name)
    {
        if (!is_null($recipient_name) && (strlen($recipient_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $recipient_name when calling CreateDisbursementRequest., must be smaller than or equal to 100.');
        }
        if (!is_null($recipient_name) && (strlen($recipient_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $recipient_name when calling CreateDisbursementRequest., must be bigger than or equal to 0.');
        }

        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets recipient_email
     *
     * @return string
     */
    public function getRecipientEmail()
    {
        return $this->container['recipient_email'];
    }

    /**
     * Sets recipient_email
     *
     * @param string $recipient_email The recipient's email address. Used for sending notifications.
     *
     * @return $this
     */
    public function setRecipientEmail($recipient_email)
    {
        $this->container['recipient_email'] = $recipient_email;

        return $this;
    }

    /**
     * Gets recipient_account_provider
     *
     * @return string
     */
    public function getRecipientAccountProvider()
    {
        return $this->container['recipient_account_provider'];
    }

    /**
     * Sets recipient_account_provider
     *
     * @param string $recipient_account_provider The recipient's account provider.
     *
     * @return $this
     */
    public function setRecipientAccountProvider($recipient_account_provider)
    {

        if ((strlen($recipient_account_provider) < 1)) {
            throw new \InvalidArgumentException('invalid length for $recipient_account_provider when calling CreateDisbursementRequest., must be bigger than or equal to 1.');
        }

        $this->container['recipient_account_provider'] = $recipient_account_provider;

        return $this;
    }

    /**
     * Gets recipient_account_number
     *
     * @return string
     */
    public function getRecipientAccountNumber()
    {
        return $this->container['recipient_account_number'];
    }

    /**
     * Sets recipient_account_number
     *
     * @param string $recipient_account_number The recipient's account number.
     *
     * @return $this
     */
    public function setRecipientAccountNumber($recipient_account_number)
    {

        if ((strlen($recipient_account_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $recipient_account_number when calling CreateDisbursementRequest., must be bigger than or equal to 1.');
        }

        $this->container['recipient_account_number'] = $recipient_account_number;

        return $this;
    }

    /**
     * Gets recipient_account_country
     *
     * @return string
     */
    public function getRecipientAccountCountry()
    {
        return $this->container['recipient_account_country'];
    }

    /**
     * Sets recipient_account_country
     *
     * @param string $recipient_account_country The country in which the recipient's account is domiciled.
     *
     * @return $this
     */
    public function setRecipientAccountCountry($recipient_account_country)
    {

        if ((strlen($recipient_account_country) < 1)) {
            throw new \InvalidArgumentException('invalid length for $recipient_account_country when calling CreateDisbursementRequest., must be bigger than or equal to 1.');
        }

        $this->container['recipient_account_country'] = $recipient_account_country;

        return $this;
    }

    /**
     * Gets statement_descriptor
     *
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->container['statement_descriptor'];
    }

    /**
     * Sets statement_descriptor
     *
     * @param string $statement_descriptor Extra information about the disbursement. This will appear on the customer’s statement. Maximum length: 22 characters.
     *
     * @return $this
     */
    public function setStatementDescriptor($statement_descriptor)
    {
        if (!is_null($statement_descriptor) && (strlen($statement_descriptor) > 22)) {
            throw new \InvalidArgumentException('invalid length for $statement_descriptor when calling CreateDisbursementRequest., must be smaller than or equal to 22.');
        }

        $this->container['statement_descriptor'] = $statement_descriptor;

        return $this;
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
     * @param string $description An arbitrary string attached to the disbursement. Displayed in the dashboard and to customers e.g. in receipts and invoices.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (strlen($description) > 500)) {
            throw new \InvalidArgumentException('invalid length for $description when calling CreateDisbursementRequest., must be smaller than or equal to 500.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata Hash of key-value pairs that you can attach to an object. This is useful for storing additional information about the object in a structured format. Ideal for storing correlating information such as your internal `Order Number` or for tracking actions, such as detailing refunds and reasons. e.g. `{\"order_id\": \"order12345\", \"refunded\": \"Full amount\", \"refund_reason\": \"out of stock\"}`
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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

