<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDescribetion
 *
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getMonitorNodeId()
 * @method string getDescribetion()
 * @method string getMonitorInstanceId()
 * @method string getOwnerId()
 */
class ModifyDescribetion extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dds';

    /**
     * @var string
     */
    public $version = '2015-12-01';

    /**
     * @var string
     */
    public $action = 'ModifyDescribetion';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dds';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMonitorNodeId() instead.
     *
     * @param string $monitorNodeId
     *
     * @return $this
     */
    public function setMonitorNodeId($monitorNodeId)
    {
        return $this->withMonitorNodeId($monitorNodeId);
    }

    /**
     * @param string $monitorNodeId
     *
     * @return $this
     */
    public function withMonitorNodeId($monitorNodeId)
    {
        $this->data['MonitorNodeId'] = $monitorNodeId;
        $this->options['query']['MonitorNodeId'] = $monitorNodeId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDescribetion() instead.
     *
     * @param string $describetion
     *
     * @return $this
     */
    public function setDescribetion($describetion)
    {
        return $this->withDescribetion($describetion);
    }

    /**
     * @param string $describetion
     *
     * @return $this
     */
    public function withDescribetion($describetion)
    {
        $this->data['Describetion'] = $describetion;
        $this->options['query']['Describetion'] = $describetion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMonitorInstanceId() instead.
     *
     * @param string $monitorInstanceId
     *
     * @return $this
     */
    public function setMonitorInstanceId($monitorInstanceId)
    {
        return $this->withMonitorInstanceId($monitorInstanceId);
    }

    /**
     * @param string $monitorInstanceId
     *
     * @return $this
     */
    public function withMonitorInstanceId($monitorInstanceId)
    {
        $this->data['MonitorInstanceId'] = $monitorInstanceId;
        $this->options['query']['MonitorInstanceId'] = $monitorInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}