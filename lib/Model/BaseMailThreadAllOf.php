<?php
/**
 * BaseMailThreadAllOf
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
 * BaseMailThreadAllOf Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BaseMailThreadAllOf implements ModelInterface, ArrayAccess, JsonSerializable
{
    use RawData;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BaseMailThread_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'parties' => '\Pipedrive\Model\BaseMailThreadAllOfParties',
        'drafts_parties' => 'object[]',
        'folders' => 'string[]',
        'version' => 'float',
        'snippet_draft' => 'string',
        'snippet_sent' => 'string',
        'message_count' => 'int',
        'has_draft_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'has_sent_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'archived_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'shared_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'external_deleted_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'first_message_to_me_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'last_message_timestamp' => '\DateTime',
        'first_message_timestamp' => '\DateTime',
        'last_message_sent_timestamp' => '\DateTime',
        'last_message_received_timestamp' => '\DateTime',
        'add_time' => '\DateTime',
        'update_time' => '\DateTime',
        'deal_id' => 'int',
        'deal_status' => 'string',
        'lead_id' => 'string',
        'all_messages_sent_flag' => '\Pipedrive\Model\NumberBooleanDefault0'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'parties' => null,
        'drafts_parties' => null,
        'folders' => null,
        'version' => null,
        'snippet_draft' => null,
        'snippet_sent' => null,
        'message_count' => null,
        'has_draft_flag' => null,
        'has_sent_flag' => null,
        'archived_flag' => null,
        'shared_flag' => null,
        'external_deleted_flag' => null,
        'first_message_to_me_flag' => null,
        'last_message_timestamp' => 'date-time',
        'first_message_timestamp' => 'date-time',
        'last_message_sent_timestamp' => 'date-time',
        'last_message_received_timestamp' => 'date-time',
        'add_time' => 'date-time',
        'update_time' => 'date-time',
        'deal_id' => null,
        'deal_status' => null,
        'lead_id' => 'uuid',
        'all_messages_sent_flag' => null
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
        'parties' => 'parties',
        'drafts_parties' => 'drafts_parties',
        'folders' => 'folders',
        'version' => 'version',
        'snippet_draft' => 'snippet_draft',
        'snippet_sent' => 'snippet_sent',
        'message_count' => 'message_count',
        'has_draft_flag' => 'has_draft_flag',
        'has_sent_flag' => 'has_sent_flag',
        'archived_flag' => 'archived_flag',
        'shared_flag' => 'shared_flag',
        'external_deleted_flag' => 'external_deleted_flag',
        'first_message_to_me_flag' => 'first_message_to_me_flag',
        'last_message_timestamp' => 'last_message_timestamp',
        'first_message_timestamp' => 'first_message_timestamp',
        'last_message_sent_timestamp' => 'last_message_sent_timestamp',
        'last_message_received_timestamp' => 'last_message_received_timestamp',
        'add_time' => 'add_time',
        'update_time' => 'update_time',
        'deal_id' => 'deal_id',
        'deal_status' => 'deal_status',
        'lead_id' => 'lead_id',
        'all_messages_sent_flag' => 'all_messages_sent_flag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parties' => 'setParties',
        'drafts_parties' => 'setDraftsParties',
        'folders' => 'setFolders',
        'version' => 'setVersion',
        'snippet_draft' => 'setSnippetDraft',
        'snippet_sent' => 'setSnippetSent',
        'message_count' => 'setMessageCount',
        'has_draft_flag' => 'setHasDraftFlag',
        'has_sent_flag' => 'setHasSentFlag',
        'archived_flag' => 'setArchivedFlag',
        'shared_flag' => 'setSharedFlag',
        'external_deleted_flag' => 'setExternalDeletedFlag',
        'first_message_to_me_flag' => 'setFirstMessageToMeFlag',
        'last_message_timestamp' => 'setLastMessageTimestamp',
        'first_message_timestamp' => 'setFirstMessageTimestamp',
        'last_message_sent_timestamp' => 'setLastMessageSentTimestamp',
        'last_message_received_timestamp' => 'setLastMessageReceivedTimestamp',
        'add_time' => 'setAddTime',
        'update_time' => 'setUpdateTime',
        'deal_id' => 'setDealId',
        'deal_status' => 'setDealStatus',
        'lead_id' => 'setLeadId',
        'all_messages_sent_flag' => 'setAllMessagesSentFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parties' => 'getParties',
        'drafts_parties' => 'getDraftsParties',
        'folders' => 'getFolders',
        'version' => 'getVersion',
        'snippet_draft' => 'getSnippetDraft',
        'snippet_sent' => 'getSnippetSent',
        'message_count' => 'getMessageCount',
        'has_draft_flag' => 'getHasDraftFlag',
        'has_sent_flag' => 'getHasSentFlag',
        'archived_flag' => 'getArchivedFlag',
        'shared_flag' => 'getSharedFlag',
        'external_deleted_flag' => 'getExternalDeletedFlag',
        'first_message_to_me_flag' => 'getFirstMessageToMeFlag',
        'last_message_timestamp' => 'getLastMessageTimestamp',
        'first_message_timestamp' => 'getFirstMessageTimestamp',
        'last_message_sent_timestamp' => 'getLastMessageSentTimestamp',
        'last_message_received_timestamp' => 'getLastMessageReceivedTimestamp',
        'add_time' => 'getAddTime',
        'update_time' => 'getUpdateTime',
        'deal_id' => 'getDealId',
        'deal_status' => 'getDealStatus',
        'lead_id' => 'getLeadId',
        'all_messages_sent_flag' => 'getAllMessagesSentFlag'
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
        $this->container['parties'] = $data['parties'] ?? null;
        $this->container['drafts_parties'] = $data['drafts_parties'] ?? null;
        $this->container['folders'] = $data['folders'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['snippet_draft'] = $data['snippet_draft'] ?? null;
        $this->container['snippet_sent'] = $data['snippet_sent'] ?? null;
        $this->container['message_count'] = $data['message_count'] ?? null;
        $this->container['has_draft_flag'] = $data['has_draft_flag'] ?? null;
        $this->container['has_sent_flag'] = $data['has_sent_flag'] ?? null;
        $this->container['archived_flag'] = $data['archived_flag'] ?? null;
        $this->container['shared_flag'] = $data['shared_flag'] ?? null;
        $this->container['external_deleted_flag'] = $data['external_deleted_flag'] ?? null;
        $this->container['first_message_to_me_flag'] = $data['first_message_to_me_flag'] ?? null;
        $this->container['last_message_timestamp'] = $data['last_message_timestamp'] ?? null;
        $this->container['first_message_timestamp'] = $data['first_message_timestamp'] ?? null;
        $this->container['last_message_sent_timestamp'] = $data['last_message_sent_timestamp'] ?? null;
        $this->container['last_message_received_timestamp'] = $data['last_message_received_timestamp'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['deal_status'] = $data['deal_status'] ?? null;
        $this->container['lead_id'] = $data['lead_id'] ?? null;
        $this->container['all_messages_sent_flag'] = $data['all_messages_sent_flag'] ?? null;
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
     * Gets parties
     *
     * @return \Pipedrive\Model\BaseMailThreadAllOfParties|null
     */
    public function getParties()
    {
        return $this->container['parties'];
    }

    /**
     * Sets parties
     *
     * @param \Pipedrive\Model\BaseMailThreadAllOfParties|null $parties parties
     *
     * @return self
     */
    public function setParties($parties): self
    {
        $this->container['parties'] = $parties;

        return $this;
    }

    /**
     * Gets drafts_parties
     *
     * @return object[]|null
     */
    public function getDraftsParties()
    {
        return $this->container['drafts_parties'];
    }

    /**
     * Sets drafts_parties
     *
     * @param object[]|null $drafts_parties Parties of the drafted mail thread
     *
     * @return self
     */
    public function setDraftsParties($drafts_parties): self
    {
        $this->container['drafts_parties'] = $drafts_parties;

        return $this;
    }

    /**
     * Gets folders
     *
     * @return string[]|null
     */
    public function getFolders()
    {
        return $this->container['folders'];
    }

    /**
     * Sets folders
     *
     * @param string[]|null $folders Folders in which messages from thread are being stored
     *
     * @return self
     */
    public function setFolders($folders): self
    {
        $this->container['folders'] = $folders;

        return $this;
    }

    /**
     * Gets version
     *
     * @return float|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param float|null $version Version
     *
     * @return self
     */
    public function setVersion($version): self
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets snippet_draft
     *
     * @return string|null
     */
    public function getSnippetDraft()
    {
        return $this->container['snippet_draft'];
    }

    /**
     * Sets snippet_draft
     *
     * @param string|null $snippet_draft A snippet from a draft
     *
     * @return self
     */
    public function setSnippetDraft($snippet_draft): self
    {
        $this->container['snippet_draft'] = $snippet_draft;

        return $this;
    }

    /**
     * Gets snippet_sent
     *
     * @return string|null
     */
    public function getSnippetSent()
    {
        return $this->container['snippet_sent'];
    }

    /**
     * Sets snippet_sent
     *
     * @param string|null $snippet_sent A snippet from a message sent
     *
     * @return self
     */
    public function setSnippetSent($snippet_sent): self
    {
        $this->container['snippet_sent'] = $snippet_sent;

        return $this;
    }

    /**
     * Gets message_count
     *
     * @return int|null
     */
    public function getMessageCount()
    {
        return $this->container['message_count'];
    }

    /**
     * Sets message_count
     *
     * @param int|null $message_count An amount of messages
     *
     * @return self
     */
    public function setMessageCount($message_count): self
    {
        $this->container['message_count'] = $message_count;

        return $this;
    }

    /**
     * Gets has_draft_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getHasDraftFlag()
    {
        return $this->container['has_draft_flag'];
    }

    /**
     * Sets has_draft_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $has_draft_flag Whether the mail thread has any drafts
     *
     * @return self
     */
    public function setHasDraftFlag($has_draft_flag): self
    {
        $this->container['has_draft_flag'] = $has_draft_flag;

        return $this;
    }

    /**
     * Gets has_sent_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getHasSentFlag()
    {
        return $this->container['has_sent_flag'];
    }

    /**
     * Sets has_sent_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $has_sent_flag Whether the mail thread has messages sent
     *
     * @return self
     */
    public function setHasSentFlag($has_sent_flag): self
    {
        $this->container['has_sent_flag'] = $has_sent_flag;

        return $this;
    }

    /**
     * Gets archived_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getArchivedFlag()
    {
        return $this->container['archived_flag'];
    }

    /**
     * Sets archived_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $archived_flag Whether the mail thread is archived
     *
     * @return self
     */
    public function setArchivedFlag($archived_flag): self
    {
        $this->container['archived_flag'] = $archived_flag;

        return $this;
    }

    /**
     * Gets shared_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getSharedFlag()
    {
        return $this->container['shared_flag'];
    }

    /**
     * Sets shared_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $shared_flag Whether the mail thread is shared
     *
     * @return self
     */
    public function setSharedFlag($shared_flag): self
    {
        $this->container['shared_flag'] = $shared_flag;

        return $this;
    }

    /**
     * Gets external_deleted_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getExternalDeletedFlag()
    {
        return $this->container['external_deleted_flag'];
    }

    /**
     * Sets external_deleted_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $external_deleted_flag Whether the mail thread has been deleted externally
     *
     * @return self
     */
    public function setExternalDeletedFlag($external_deleted_flag): self
    {
        $this->container['external_deleted_flag'] = $external_deleted_flag;

        return $this;
    }

    /**
     * Gets first_message_to_me_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getFirstMessageToMeFlag()
    {
        return $this->container['first_message_to_me_flag'];
    }

    /**
     * Sets first_message_to_me_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $first_message_to_me_flag Whether the mail thread was initialized by others
     *
     * @return self
     */
    public function setFirstMessageToMeFlag($first_message_to_me_flag): self
    {
        $this->container['first_message_to_me_flag'] = $first_message_to_me_flag;

        return $this;
    }

    /**
     * Gets last_message_timestamp
     *
     * @return \DateTime|null
     */
    public function getLastMessageTimestamp()
    {
        return $this->container['last_message_timestamp'];
    }

    /**
     * Sets last_message_timestamp
     *
     * @param \DateTime|null $last_message_timestamp Last message timestamp
     *
     * @return self
     */
    public function setLastMessageTimestamp($last_message_timestamp): self
    {
        $this->container['last_message_timestamp'] = $last_message_timestamp;

        return $this;
    }

    /**
     * Gets first_message_timestamp
     *
     * @return \DateTime|null
     */
    public function getFirstMessageTimestamp()
    {
        return $this->container['first_message_timestamp'];
    }

    /**
     * Sets first_message_timestamp
     *
     * @param \DateTime|null $first_message_timestamp The time when the mail thread has had the first message received or created
     *
     * @return self
     */
    public function setFirstMessageTimestamp($first_message_timestamp): self
    {
        $this->container['first_message_timestamp'] = $first_message_timestamp;

        return $this;
    }

    /**
     * Gets last_message_sent_timestamp
     *
     * @return \DateTime|null
     */
    public function getLastMessageSentTimestamp()
    {
        return $this->container['last_message_sent_timestamp'];
    }

    /**
     * Sets last_message_sent_timestamp
     *
     * @param \DateTime|null $last_message_sent_timestamp The last time when the mail thread has had a message sent
     *
     * @return self
     */
    public function setLastMessageSentTimestamp($last_message_sent_timestamp): self
    {
        $this->container['last_message_sent_timestamp'] = $last_message_sent_timestamp;

        return $this;
    }

    /**
     * Gets last_message_received_timestamp
     *
     * @return \DateTime|null
     */
    public function getLastMessageReceivedTimestamp()
    {
        return $this->container['last_message_received_timestamp'];
    }

    /**
     * Sets last_message_received_timestamp
     *
     * @param \DateTime|null $last_message_received_timestamp The last time when the mail thread has had a message received
     *
     * @return self
     */
    public function setLastMessageReceivedTimestamp($last_message_received_timestamp): self
    {
        $this->container['last_message_received_timestamp'] = $last_message_received_timestamp;

        return $this;
    }

    /**
     * Gets add_time
     *
     * @return \DateTime|null
     */
    public function getAddTime()
    {
        return $this->container['add_time'];
    }

    /**
     * Sets add_time
     *
     * @param \DateTime|null $add_time The time when the mail thread was inserted to database
     *
     * @return self
     */
    public function setAddTime($add_time): self
    {
        $this->container['add_time'] = $add_time;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return \DateTime|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param \DateTime|null $update_time The time when the mail thread was updated in database received
     *
     * @return self
     */
    public function setUpdateTime($update_time): self
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets deal_id
     *
     * @return int|null
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param int|null $deal_id The ID of the deal
     *
     * @return self
     */
    public function setDealId($deal_id): self
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets deal_status
     *
     * @return string|null
     */
    public function getDealStatus()
    {
        return $this->container['deal_status'];
    }

    /**
     * Sets deal_status
     *
     * @param string|null $deal_status Status of the deal
     *
     * @return self
     */
    public function setDealStatus($deal_status): self
    {
        $this->container['deal_status'] = $deal_status;

        return $this;
    }

    /**
     * Gets lead_id
     *
     * @return string|null
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     *
     * @param string|null $lead_id The ID of the lead
     *
     * @return self
     */
    public function setLeadId($lead_id): self
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets all_messages_sent_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getAllMessagesSentFlag()
    {
        return $this->container['all_messages_sent_flag'];
    }

    /**
     * Sets all_messages_sent_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $all_messages_sent_flag Whether all the mail thread messages have been sent
     *
     * @return self
     */
    public function setAllMessagesSentFlag($all_messages_sent_flag): self
    {
        $this->container['all_messages_sent_flag'] = $all_messages_sent_flag;

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


