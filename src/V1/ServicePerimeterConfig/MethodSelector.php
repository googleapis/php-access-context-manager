<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/service_perimeter.proto

namespace Google\Identity\AccessContextManager\V1\ServicePerimeterConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An allowed method or permission of a service specified in [ApiOperation]
 * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation].
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ServicePerimeterConfig.MethodSelector</code>
 */
class MethodSelector extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $method
     *           Value for `method` should be a valid method name for the corresponding
     *           `service_name` in [ApiOperation]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation].
     *           If `*` used as value for `method`, then ALL methods and permissions are
     *           allowed.
     *     @type string $permission
     *           Value for `permission` should be a valid Cloud IAM permission for the
     *           corresponding `service_name` in [ApiOperation]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\ServicePerimeter::initOnce();
        parent::__construct($data);
    }

    /**
     * Value for `method` should be a valid method name for the corresponding
     * `service_name` in [ApiOperation]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation].
     * If `*` used as value for `method`, then ALL methods and permissions are
     * allowed.
     *
     * Generated from protobuf field <code>string method = 1;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->readOneof(1);
    }

    public function hasMethod()
    {
        return $this->hasOneof(1);
    }

    /**
     * Value for `method` should be a valid method name for the corresponding
     * `service_name` in [ApiOperation]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation].
     * If `*` used as value for `method`, then ALL methods and permissions are
     * allowed.
     *
     * Generated from protobuf field <code>string method = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Value for `permission` should be a valid Cloud IAM permission for the
     * corresponding `service_name` in [ApiOperation]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation].
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     * @return string
     */
    public function getPermission()
    {
        return $this->readOneof(2);
    }

    public function hasPermission()
    {
        return $this->hasOneof(2);
    }

    /**
     * Value for `permission` should be a valid Cloud IAM permission for the
     * corresponding `service_name` in [ApiOperation]
     * [google.identity.accesscontextmanager.v1.ServicePerimeterConfig.ApiOperation].
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}


