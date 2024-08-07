<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response to `ListAccessPoliciesRequest`.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ListAccessPoliciesResponse</code>
 */
class ListAccessPoliciesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of the AccessPolicy instances.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.AccessPolicy access_policies = 1;</code>
     */
    private $access_policies;
    /**
     * The pagination token to retrieve the next page of results. If the value is
     * empty, no further results remain.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Identity\AccessContextManager\V1\AccessPolicy>|\Google\Protobuf\Internal\RepeatedField $access_policies
     *           List of the AccessPolicy instances.
     *     @type string $next_page_token
     *           The pagination token to retrieve the next page of results. If the value is
     *           empty, no further results remain.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * List of the AccessPolicy instances.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.AccessPolicy access_policies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccessPolicies()
    {
        return $this->access_policies;
    }

    /**
     * List of the AccessPolicy instances.
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.AccessPolicy access_policies = 1;</code>
     * @param array<\Google\Identity\AccessContextManager\V1\AccessPolicy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccessPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Identity\AccessContextManager\V1\AccessPolicy::class);
        $this->access_policies = $arr;

        return $this;
    }

    /**
     * The pagination token to retrieve the next page of results. If the value is
     * empty, no further results remain.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The pagination token to retrieve the next page of results. If the value is
     * empty, no further results remain.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

