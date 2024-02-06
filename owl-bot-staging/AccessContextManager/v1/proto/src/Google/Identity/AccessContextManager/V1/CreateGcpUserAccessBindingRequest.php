<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request of [CreateGcpUserAccessBinding]
 * [google.identity.accesscontextmanager.v1.AccessContextManager.CreateGcpUserAccessBinding].
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.CreateGcpUserAccessBindingRequest</code>
 */
class CreateGcpUserAccessBindingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Example: "organizations/256"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. [GcpUserAccessBinding]
     * [google.identity.accesscontextmanager.v1.GcpUserAccessBinding]
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.GcpUserAccessBinding gcp_user_access_binding = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $gcp_user_access_binding = null;

    /**
     * @param string                                                        $parent               Required. Example: "organizations/256"
     *                                                                                            Please see {@see AccessContextManagerClient::organizationName()} for help formatting this field.
     * @param \Google\Identity\AccessContextManager\V1\GcpUserAccessBinding $gcpUserAccessBinding Required. [GcpUserAccessBinding]
     *                                                                                            [google.identity.accesscontextmanager.v1.GcpUserAccessBinding]
     *
     * @return \Google\Identity\AccessContextManager\V1\CreateGcpUserAccessBindingRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Identity\AccessContextManager\V1\GcpUserAccessBinding $gcpUserAccessBinding): self
    {
        return (new self())
            ->setParent($parent)
            ->setGcpUserAccessBinding($gcpUserAccessBinding);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Example: "organizations/256"
     *     @type \Google\Identity\AccessContextManager\V1\GcpUserAccessBinding $gcp_user_access_binding
     *           Required. [GcpUserAccessBinding]
     *           [google.identity.accesscontextmanager.v1.GcpUserAccessBinding]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Example: "organizations/256"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Example: "organizations/256"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. [GcpUserAccessBinding]
     * [google.identity.accesscontextmanager.v1.GcpUserAccessBinding]
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.GcpUserAccessBinding gcp_user_access_binding = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Identity\AccessContextManager\V1\GcpUserAccessBinding|null
     */
    public function getGcpUserAccessBinding()
    {
        return $this->gcp_user_access_binding;
    }

    public function hasGcpUserAccessBinding()
    {
        return isset($this->gcp_user_access_binding);
    }

    public function clearGcpUserAccessBinding()
    {
        unset($this->gcp_user_access_binding);
    }

    /**
     * Required. [GcpUserAccessBinding]
     * [google.identity.accesscontextmanager.v1.GcpUserAccessBinding]
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.GcpUserAccessBinding gcp_user_access_binding = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Identity\AccessContextManager\V1\GcpUserAccessBinding $var
     * @return $this
     */
    public function setGcpUserAccessBinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Identity\AccessContextManager\V1\GcpUserAccessBinding::class);
        $this->gcp_user_access_binding = $var;

        return $this;
    }

}

