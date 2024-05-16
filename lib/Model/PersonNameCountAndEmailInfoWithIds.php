<?php
/**
 * PersonNameCountAndEmailInfoWithIds
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pipedrive API v1
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pipedrive\Model;

use ArrayAccess;
use JsonException;
use JsonSerializable;
use Pipedrive\Traits\RawData;
use Pipedrive\ObjectSerializer;

/**
 * PersonNameCountAndEmailInfoWithIds Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PersonNameCountAndEmailInfoWithIds implements ModelInterface, ArrayAccess, JsonSerializable
{
    use RawData;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PersonNameCountAndEmailInfoWithIds';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'owner_id' => 'int',
        'org_id' => 'int',
        'merge_what_id' => 'int',
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email_messages_count' => 'int',
        'activities_count' => 'int',
        'done_activities_count' => 'int',
        'undone_activities_count' => 'int',
        'files_count' => 'int',
        'notes_count' => 'int',
        'followers_count' => 'int',
        'last_incoming_mail_time' => 'string',
        'last_outgoing_mail_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'owner_id' => null,
        'org_id' => null,
        'merge_what_id' => null,
        'name' => null,
        'first_name' => null,
        'last_name' => null,
        'email_messages_count' => null,
        'activities_count' => null,
        'done_activities_count' => null,
        'undone_activities_count' => null,
        'files_count' => null,
        'notes_count' => null,
        'followers_count' => null,
        'last_incoming_mail_time' => null,
        'last_outgoing_mail_time' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string|null>
     * @psalm-return array<string, string|null>
     * @return array
     */
    public static function openAPIFormats(): array
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
        'owner_id' => 'owner_id',
        'org_id' => 'org_id',
        'merge_what_id' => 'merge_what_id',
        'name' => 'name',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'email_messages_count' => 'email_messages_count',
        'activities_count' => 'activities_count',
        'done_activities_count' => 'done_activities_count',
        'undone_activities_count' => 'undone_activities_count',
        'files_count' => 'files_count',
        'notes_count' => 'notes_count',
        'followers_count' => 'followers_count',
        'last_incoming_mail_time' => 'last_incoming_mail_time',
        'last_outgoing_mail_time' => 'last_outgoing_mail_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner_id' => 'setOwnerId',
        'org_id' => 'setOrgId',
        'merge_what_id' => 'setMergeWhatId',
        'name' => 'setName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email_messages_count' => 'setEmailMessagesCount',
        'activities_count' => 'setActivitiesCount',
        'done_activities_count' => 'setDoneActivitiesCount',
        'undone_activities_count' => 'setUndoneActivitiesCount',
        'files_count' => 'setFilesCount',
        'notes_count' => 'setNotesCount',
        'followers_count' => 'setFollowersCount',
        'last_incoming_mail_time' => 'setLastIncomingMailTime',
        'last_outgoing_mail_time' => 'setLastOutgoingMailTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner_id' => 'getOwnerId',
        'org_id' => 'getOrgId',
        'merge_what_id' => 'getMergeWhatId',
        'name' => 'getName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email_messages_count' => 'getEmailMessagesCount',
        'activities_count' => 'getActivitiesCount',
        'done_activities_count' => 'getDoneActivitiesCount',
        'undone_activities_count' => 'getUndoneActivitiesCount',
        'files_count' => 'getFilesCount',
        'notes_count' => 'getNotesCount',
        'followers_count' => 'getFollowersCount',
        'last_incoming_mail_time' => 'getLastIncomingMailTime',
        'last_outgoing_mail_time' => 'getLastOutgoingMailTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     * @phpstan-var array<int|string, mixed>
     * @psalm-var array<int|string, mixed>
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @phpstan-param array<string, mixed>|null $data
     * @psalm-param array<string, mixed>|null $data
     * @param array|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['org_id'] = $data['org_id'] ?? null;
        $this->container['merge_what_id'] = $data['merge_what_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['email_messages_count'] = $data['email_messages_count'] ?? null;
        $this->container['activities_count'] = $data['activities_count'] ?? null;
        $this->container['done_activities_count'] = $data['done_activities_count'] ?? null;
        $this->container['undone_activities_count'] = $data['undone_activities_count'] ?? null;
        $this->container['files_count'] = $data['files_count'] ?? null;
        $this->container['notes_count'] = $data['notes_count'] ?? null;
        $this->container['followers_count'] = $data['followers_count'] ?? null;
        $this->container['last_incoming_mail_time'] = $data['last_incoming_mail_time'] ?? null;
        $this->container['last_outgoing_mail_time'] = $data['last_outgoing_mail_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     * @phpstan-return array<int, string>
     * @psalm-return array<int, string>
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets owner_id
     *
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int|null $owner_id The ID of the owner related to the person
     *
     * @return self
     */
    public function setOwnerId($owner_id): self
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return int|null
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param int|null $org_id The ID of the organization related to the person
     *
     * @return self
     */
    public function setOrgId($org_id): self
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets merge_what_id
     *
     * @return int|null
     */
    public function getMergeWhatId()
    {
        return $this->container['merge_what_id'];
    }

    /**
     * Sets merge_what_id
     *
     * @param int|null $merge_what_id The ID of the person with what the main person was merged
     *
     * @return self
     */
    public function setMergeWhatId($merge_what_id): self
    {
        $this->container['merge_what_id'] = $merge_what_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the person
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->container['name'] = $name;

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
     * @param string|null $first_name The first name of the person
     *
     * @return self
     */
    public function setFirstName($first_name): self
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
     * @param string|null $last_name The last name of the person
     *
     * @return self
     */
    public function setLastName($last_name): self
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email_messages_count
     *
     * @return int|null
     */
    public function getEmailMessagesCount()
    {
        return $this->container['email_messages_count'];
    }

    /**
     * Sets email_messages_count
     *
     * @param int|null $email_messages_count The count of email messages related to the person
     *
     * @return self
     */
    public function setEmailMessagesCount($email_messages_count): self
    {
        $this->container['email_messages_count'] = $email_messages_count;

        return $this;
    }

    /**
     * Gets activities_count
     *
     * @return int|null
     */
    public function getActivitiesCount()
    {
        return $this->container['activities_count'];
    }

    /**
     * Sets activities_count
     *
     * @param int|null $activities_count The count of activities related to the person
     *
     * @return self
     */
    public function setActivitiesCount($activities_count): self
    {
        $this->container['activities_count'] = $activities_count;

        return $this;
    }

    /**
     * Gets done_activities_count
     *
     * @return int|null
     */
    public function getDoneActivitiesCount()
    {
        return $this->container['done_activities_count'];
    }

    /**
     * Sets done_activities_count
     *
     * @param int|null $done_activities_count The count of done activities related to the person
     *
     * @return self
     */
    public function setDoneActivitiesCount($done_activities_count): self
    {
        $this->container['done_activities_count'] = $done_activities_count;

        return $this;
    }

    /**
     * Gets undone_activities_count
     *
     * @return int|null
     */
    public function getUndoneActivitiesCount()
    {
        return $this->container['undone_activities_count'];
    }

    /**
     * Sets undone_activities_count
     *
     * @param int|null $undone_activities_count The count of undone activities related to the person
     *
     * @return self
     */
    public function setUndoneActivitiesCount($undone_activities_count): self
    {
        $this->container['undone_activities_count'] = $undone_activities_count;

        return $this;
    }

    /**
     * Gets files_count
     *
     * @return int|null
     */
    public function getFilesCount()
    {
        return $this->container['files_count'];
    }

    /**
     * Sets files_count
     *
     * @param int|null $files_count The count of files related to the person
     *
     * @return self
     */
    public function setFilesCount($files_count): self
    {
        $this->container['files_count'] = $files_count;

        return $this;
    }

    /**
     * Gets notes_count
     *
     * @return int|null
     */
    public function getNotesCount()
    {
        return $this->container['notes_count'];
    }

    /**
     * Sets notes_count
     *
     * @param int|null $notes_count The count of notes related to the person
     *
     * @return self
     */
    public function setNotesCount($notes_count): self
    {
        $this->container['notes_count'] = $notes_count;

        return $this;
    }

    /**
     * Gets followers_count
     *
     * @return int|null
     */
    public function getFollowersCount()
    {
        return $this->container['followers_count'];
    }

    /**
     * Sets followers_count
     *
     * @param int|null $followers_count The count of followers related to the person
     *
     * @return self
     */
    public function setFollowersCount($followers_count): self
    {
        $this->container['followers_count'] = $followers_count;

        return $this;
    }

    /**
     * Gets last_incoming_mail_time
     *
     * @return string|null
     */
    public function getLastIncomingMailTime()
    {
        return $this->container['last_incoming_mail_time'];
    }

    /**
     * Sets last_incoming_mail_time
     *
     * @param string|null $last_incoming_mail_time The date and time of the last incoming email associated with the person
     *
     * @return self
     */
    public function setLastIncomingMailTime($last_incoming_mail_time): self
    {
        $this->container['last_incoming_mail_time'] = $last_incoming_mail_time;

        return $this;
    }

    /**
     * Gets last_outgoing_mail_time
     *
     * @return string|null
     */
    public function getLastOutgoingMailTime()
    {
        return $this->container['last_outgoing_mail_time'];
    }

    /**
     * Sets last_outgoing_mail_time
     *
     * @param string|null $last_outgoing_mail_time The date and time of the last outgoing email associated with the person
     *
     * @return self
     */
    public function setLastOutgoingMailTime($last_outgoing_mail_time): self
    {
        $this->container['last_outgoing_mail_time'] = $last_outgoing_mail_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}


