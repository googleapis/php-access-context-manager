<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to create a `ServicePerimeter`.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.CreateServicePerimeterRequest</code>
 */
class CreateServicePerimeterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name for the access policy which owns this [Service
     * Perimeter] [google.identity.accesscontextmanager.v1.ServicePerimeter].
     * Format: `accessPolicies/{policy_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] to create.
     * Syntactic correctness of the [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] is a
     * precondition for creation.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.ServicePerimeter service_perimeter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_perimeter = null;

    /**
     * @param string                                                    $parent           Required. Resource name for the access policy which owns this [Service
     *                                                                                    Perimeter] [google.identity.accesscontextmanager.v1.ServicePerimeter].
     *
     *                                                                                    Format: `accessPolicies/{policy_id}`
     *                                                                                    Please see {@see AccessContextManagerClient::accessPolicyName()} for help formatting this field.
     * @param \Google\Identity\AccessContextManager\V1\ServicePerimeter $servicePerimeter Required. The [Service Perimeter]
     *                                                                                    [google.identity.accesscontextmanager.v1.ServicePerimeter] to create.
     *                                                                                    Syntactic correctness of the [Service Perimeter]
     *                                                                                    [google.identity.accesscontextmanager.v1.ServicePerimeter] is a
     *                                                                                    precondition for creation.
     *
     * @return \Google\Identity\AccessContextManager\V1\CreateServicePerimeterRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Identity\AccessContextManager\V1\ServicePerimeter $servicePerimeter): self
    {
        return (new self())
            ->setParent($parent)
            ->setServicePerimeter($servicePerimeter);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name for the access policy which owns this [Service
     *           Perimeter] [google.identity.accesscontextmanager.v1.ServicePerimeter].
     *           Format: `accessPolicies/{policy_id}`
     *     @type \Google\Identity\AccessContextManager\V1\ServicePerimeter $service_perimeter
     *           Required. The [Service Perimeter]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter] to create.
     *           Syntactic correctness of the [Service Perimeter]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter] is a
     *           precondition for creation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name for the access policy which owns this [Service
     * Perimeter] [google.identity.accesscontextmanager.v1.ServicePerimeter].
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
     * Required. Resource name for the access policy which owns this [Service
     * Perimeter] [google.identity.accesscontextmanager.v1.ServicePerimeter].
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
     * Required. The [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] to create.
     * Syntactic correctness of the [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] is a
     * precondition for creation.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.ServicePerimeter service_perimeter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Identity\AccessContextManager\V1\ServicePerimeter|null
     */
    public function getServicePerimeter()
    {
        return $this->service_perimeter;
    }

    public function hasServicePerimeter()
    {
        return isset($this->service_perimeter);
    }

    public function clearServicePerimeter()
    {
        unset($this->service_perimeter);
    }

    /**
     * Required. The [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] to create.
     * Syntactic correctness of the [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] is a
     * precondition for creation.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.ServicePerimeter service_perimeter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Identity\AccessContextManager\V1\ServicePerimeter $var
     * @return $this
     */
    public function setServicePerimeter($var)
    {
        GPBUtil::checkMessage($var, \Google\Identity\AccessContextManager\V1\ServicePerimeter::class);
        $this->service_perimeter = $var;

        return $this;
    }

}

