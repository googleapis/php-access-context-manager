<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to replace all existing Service Perimeters in an Access Policy
 * with the Service Perimeters provided. This is done atomically.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ReplaceServicePerimetersRequest</code>
 */
class ReplaceServicePerimetersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name for the access policy which owns these
     * [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter].
     * Format: `accessPolicies/{policy_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The desired [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] that should
     * replace all existing [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] in the
     * [Access Policy]
     * [google.identity.accesscontextmanager.v1.AccessPolicy].
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeter service_perimeters = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_perimeters;
    /**
     * Optional. The etag for the version of the [Access Policy]
     * [google.identity.accesscontextmanager.v1.AccessPolicy] that this
     * replace operation is to be performed on. If, at the time of replace, the
     * etag for the Access Policy stored in Access Context Manager is different
     * from the specified etag, then the replace operation will not be performed
     * and the call will fail. This field is not required. If etag is not
     * provided, the operation will be performed as if a valid etag is provided.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name for the access policy which owns these
     *           [Service Perimeters]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter].
     *           Format: `accessPolicies/{policy_id}`
     *     @type array<\Google\Identity\AccessContextManager\V1\ServicePerimeter>|\Google\Protobuf\Internal\RepeatedField $service_perimeters
     *           Required. The desired [Service Perimeters]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter] that should
     *           replace all existing [Service Perimeters]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter] in the
     *           [Access Policy]
     *           [google.identity.accesscontextmanager.v1.AccessPolicy].
     *     @type string $etag
     *           Optional. The etag for the version of the [Access Policy]
     *           [google.identity.accesscontextmanager.v1.AccessPolicy] that this
     *           replace operation is to be performed on. If, at the time of replace, the
     *           etag for the Access Policy stored in Access Context Manager is different
     *           from the specified etag, then the replace operation will not be performed
     *           and the call will fail. This field is not required. If etag is not
     *           provided, the operation will be performed as if a valid etag is provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name for the access policy which owns these
     * [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter].
     * Format: `accessPolicies/{policy_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name for the access policy which owns these
     * [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter].
     * Format: `accessPolicies/{policy_id}`
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
     * Required. The desired [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] that should
     * replace all existing [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] in the
     * [Access Policy]
     * [google.identity.accesscontextmanager.v1.AccessPolicy].
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeter service_perimeters = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServicePerimeters()
    {
        return $this->service_perimeters;
    }

    /**
     * Required. The desired [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] that should
     * replace all existing [Service Perimeters]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] in the
     * [Access Policy]
     * [google.identity.accesscontextmanager.v1.AccessPolicy].
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeter service_perimeters = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Identity\AccessContextManager\V1\ServicePerimeter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServicePerimeters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Identity\AccessContextManager\V1\ServicePerimeter::class);
        $this->service_perimeters = $arr;

        return $this;
    }

    /**
     * Optional. The etag for the version of the [Access Policy]
     * [google.identity.accesscontextmanager.v1.AccessPolicy] that this
     * replace operation is to be performed on. If, at the time of replace, the
     * etag for the Access Policy stored in Access Context Manager is different
     * from the specified etag, then the replace operation will not be performed
     * and the call will fail. This field is not required. If etag is not
     * provided, the operation will be performed as if a valid etag is provided.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. The etag for the version of the [Access Policy]
     * [google.identity.accesscontextmanager.v1.AccessPolicy] that this
     * replace operation is to be performed on. If, at the time of replace, the
     * etag for the Access Policy stored in Access Context Manager is different
     * from the specified etag, then the replace operation will not be performed
     * and the call will fail. This field is not required. If etag is not
     * provided, the operation will be performed as if a valid etag is provided.
     *
     * Generated from protobuf field <code>string etag = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

