<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * LoyaltyProgram Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 * Note: This endpoint is in beta.
 */
class LoyaltyProgram implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'status' => 'string',
        'reward_tiers' => '\SquareConnect\Model\LoyaltyProgramRewardTier[]',
        'expiration_policy' => '\SquareConnect\Model\LoyaltyProgramExpirationPolicy',
        'terminology' => '\SquareConnect\Model\LoyaltyProgramTerminology',
        'location_ids' => 'string[]',
        'created_at' => 'string',
        'updated_at' => 'string',
        'accrual_rules' => '\SquareConnect\Model\LoyaltyProgramAccrualRule[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'status' => 'status',
        'reward_tiers' => 'reward_tiers',
        'expiration_policy' => 'expiration_policy',
        'terminology' => 'terminology',
        'location_ids' => 'location_ids',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'accrual_rules' => 'accrual_rules'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'status' => 'setStatus',
        'reward_tiers' => 'setRewardTiers',
        'expiration_policy' => 'setExpirationPolicy',
        'terminology' => 'setTerminology',
        'location_ids' => 'setLocationIds',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'accrual_rules' => 'setAccrualRules'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'status' => 'getStatus',
        'reward_tiers' => 'getRewardTiers',
        'expiration_policy' => 'getExpirationPolicy',
        'terminology' => 'getTerminology',
        'location_ids' => 'getLocationIds',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'accrual_rules' => 'getAccrualRules'
    );
  
    /**
      * $id The Square-assigned ID of the loyalty program. Updates to  the loyalty program do not modify the identifier.
      * @var string
      */
    protected $id;
    /**
      * $status Whether the program is currently active. See [LoyaltyProgramStatus](#type-loyaltyprogramstatus) for possible values
      * @var string
      */
    protected $status;
    /**
      * $reward_tiers The list of rewards for buyers, sorted by ascending points.
      * @var \SquareConnect\Model\LoyaltyProgramRewardTier[]
      */
    protected $reward_tiers;
    /**
      * $expiration_policy If present, details for how points expire.
      * @var \SquareConnect\Model\LoyaltyProgramExpirationPolicy
      */
    protected $expiration_policy;
    /**
      * $terminology A cosmetic name for the “points” currency.
      * @var \SquareConnect\Model\LoyaltyProgramTerminology
      */
    protected $terminology;
    /**
      * $location_ids The `locations` at which the program is active.
      * @var string[]
      */
    protected $location_ids;
    /**
      * $created_at The timestamp when the program was created, in RFC 3339 format.
      * @var string
      */
    protected $created_at;
    /**
      * $updated_at The timestamp when the reward was last updated, in RFC 3339 format.
      * @var string
      */
    protected $updated_at;
    /**
      * $accrual_rules Defines how buyers can earn loyalty points.
      * @var \SquareConnect\Model\LoyaltyProgramAccrualRule[]
      */
    protected $accrual_rules;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["id"])) {
              $this->id = $data["id"];
            } else {
              $this->id = null;
            }
            if (isset($data["status"])) {
              $this->status = $data["status"];
            } else {
              $this->status = null;
            }
            if (isset($data["reward_tiers"])) {
              $this->reward_tiers = $data["reward_tiers"];
            } else {
              $this->reward_tiers = null;
            }
            if (isset($data["expiration_policy"])) {
              $this->expiration_policy = $data["expiration_policy"];
            } else {
              $this->expiration_policy = null;
            }
            if (isset($data["terminology"])) {
              $this->terminology = $data["terminology"];
            } else {
              $this->terminology = null;
            }
            if (isset($data["location_ids"])) {
              $this->location_ids = $data["location_ids"];
            } else {
              $this->location_ids = null;
            }
            if (isset($data["created_at"])) {
              $this->created_at = $data["created_at"];
            } else {
              $this->created_at = null;
            }
            if (isset($data["updated_at"])) {
              $this->updated_at = $data["updated_at"];
            } else {
              $this->updated_at = null;
            }
            if (isset($data["accrual_rules"])) {
              $this->accrual_rules = $data["accrual_rules"];
            } else {
              $this->accrual_rules = null;
            }
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The Square-assigned ID of the loyalty program. Updates to  the loyalty program do not modify the identifier.
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Whether the program is currently active. See [LoyaltyProgramStatus](#type-loyaltyprogramstatus) for possible values
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Gets reward_tiers
     * @return \SquareConnect\Model\LoyaltyProgramRewardTier[]
     */
    public function getRewardTiers()
    {
        return $this->reward_tiers;
    }
  
    /**
     * Sets reward_tiers
     * @param \SquareConnect\Model\LoyaltyProgramRewardTier[] $reward_tiers The list of rewards for buyers, sorted by ascending points.
     * @return $this
     */
    public function setRewardTiers($reward_tiers)
    {
        $this->reward_tiers = $reward_tiers;
        return $this;
    }
    /**
     * Gets expiration_policy
     * @return \SquareConnect\Model\LoyaltyProgramExpirationPolicy
     */
    public function getExpirationPolicy()
    {
        return $this->expiration_policy;
    }
  
    /**
     * Sets expiration_policy
     * @param \SquareConnect\Model\LoyaltyProgramExpirationPolicy $expiration_policy If present, details for how points expire.
     * @return $this
     */
    public function setExpirationPolicy($expiration_policy)
    {
        $this->expiration_policy = $expiration_policy;
        return $this;
    }
    /**
     * Gets terminology
     * @return \SquareConnect\Model\LoyaltyProgramTerminology
     */
    public function getTerminology()
    {
        return $this->terminology;
    }
  
    /**
     * Sets terminology
     * @param \SquareConnect\Model\LoyaltyProgramTerminology $terminology A cosmetic name for the “points” currency.
     * @return $this
     */
    public function setTerminology($terminology)
    {
        $this->terminology = $terminology;
        return $this;
    }
    /**
     * Gets location_ids
     * @return string[]
     */
    public function getLocationIds()
    {
        return $this->location_ids;
    }
  
    /**
     * Sets location_ids
     * @param string[] $location_ids The `locations` at which the program is active.
     * @return $this
     */
    public function setLocationIds($location_ids)
    {
        $this->location_ids = $location_ids;
        return $this;
    }
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at The timestamp when the program was created, in RFC 3339 format.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param string $updated_at The timestamp when the reward was last updated, in RFC 3339 format.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Gets accrual_rules
     * @return \SquareConnect\Model\LoyaltyProgramAccrualRule[]
     */
    public function getAccrualRules()
    {
        return $this->accrual_rules;
    }
  
    /**
     * Sets accrual_rules
     * @param \SquareConnect\Model\LoyaltyProgramAccrualRule[] $accrual_rules Defines how buyers can earn loyalty points.
     * @return $this
     */
    public function setAccrualRules($accrual_rules)
    {
        $this->accrual_rules = $accrual_rules;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
