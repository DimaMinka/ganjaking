<?php
/**
 * User
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.0.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;

/**
 * User Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'string',
        'email_address' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'updated_date_utc' => '\DateTime',
        'is_subscriber' => 'bool',
        'organisation_role' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user_id' => 'uuid',
        'email_address' => null,
        'first_name' => null,
        'last_name' => null,
        'updated_date_utc' => 'date-time',
        'is_subscriber' => null,
        'organisation_role' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'user_id' => 'UserID',
        'email_address' => 'EmailAddress',
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'updated_date_utc' => 'UpdatedDateUTC',
        'is_subscriber' => 'IsSubscriber',
        'organisation_role' => 'OrganisationRole'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'email_address' => 'setEmailAddress',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'is_subscriber' => 'setIsSubscriber',
        'organisation_role' => 'setOrganisationRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'email_address' => 'getEmailAddress',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'is_subscriber' => 'getIsSubscriber',
        'organisation_role' => 'getOrganisationRole'
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
        return self::$openAPIModelName;
    }

    const ORGANISATION_ROLE_READONLY = 'READONLY';
    const ORGANISATION_ROLE_INVOICEONLY = 'INVOICEONLY';
    const ORGANISATION_ROLE_STANDARD = 'STANDARD';
    const ORGANISATION_ROLE_FINANCIALADVISER = 'FINANCIALADVISER';
    const ORGANISATION_ROLE_MANAGEDCLIENT = 'MANAGEDCLIENT';
    const ORGANISATION_ROLE_CASHBOOKCLIENT = 'CASHBOOKCLIENT';
    const ORGANISATION_ROLE_UNKNOWN = 'UNKNOWN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrganisationRoleAllowableValues()
    {
        return [
            self::ORGANISATION_ROLE_READONLY,
            self::ORGANISATION_ROLE_INVOICEONLY,
            self::ORGANISATION_ROLE_STANDARD,
            self::ORGANISATION_ROLE_FINANCIALADVISER,
            self::ORGANISATION_ROLE_MANAGEDCLIENT,
            self::ORGANISATION_ROLE_CASHBOOKCLIENT,
            self::ORGANISATION_ROLE_UNKNOWN,
        ];
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['is_subscriber'] = isset($data['is_subscriber']) ? $data['is_subscriber'] : null;
        $this->container['organisation_role'] = isset($data['organisation_role']) ? $data['organisation_role'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOrganisationRoleAllowableValues();
        if (!is_null($this->container['organisation_role']) && !in_array($this->container['organisation_role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'organisation_role', must be one of '%s'",
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
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id Xero identifier
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address Email address of user
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name of user
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
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name of user
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets updated_date_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }

    /**
     * Sets updated_date_utc
     *
     * @param \DateTime|null $updated_date_utc Timestamp of last change to user
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {
        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }

    /**
     * Gets is_subscriber
     *
     * @return bool|null
     */
    public function getIsSubscriber()
    {
        return $this->container['is_subscriber'];
    }

    /**
     * Sets is_subscriber
     *
     * @param bool|null $is_subscriber Boolean to indicate if user is the subscriber
     *
     * @return $this
     */
    public function setIsSubscriber($is_subscriber)
    {
        $this->container['is_subscriber'] = $is_subscriber;

        return $this;
    }

    /**
     * Gets organisation_role
     *
     * @return string|null
     */
    public function getOrganisationRole()
    {
        return $this->container['organisation_role'];
    }

    /**
     * Sets organisation_role
     *
     * @param string|null $organisation_role User role that defines permissions in Xero and via API (READONLY, INVOICEONLY, STANDARD, FINANCIALADVISER, etc)
     *
     * @return $this
     */
    public function setOrganisationRole($organisation_role)
    {
        $allowedValues = $this->getOrganisationRoleAllowableValues();
        if (!is_null($organisation_role) && !in_array($organisation_role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'organisation_role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['organisation_role'] = $organisation_role;

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
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

