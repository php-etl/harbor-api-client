<?php

namespace Gyroscops\Harbor\Api\Model;

class Access
{
    /**
     * The resource of the access. Possible resources are *, artifact, artifact-addition, artifact-label, audit-log, catalog, configuration, distribution, garbage-collection, helm-chart, helm-chart-version, helm-chart-version-label, immutable-tag, label, ldap-user, log, member, metadata, notification-policy, preheat-instance, preheat-policy, project, quota, registry, replication, replication-adapter, replication-policy, repository, robot, scan, scan-all, scanner, system-volumes, tag, tag-retention, user, user-group or "" (for self-reference).
     *
     * @var string|null
     */
    protected $resource;
    /**
     * The action of the access. Possible actions are *, pull, push, create, read, update, delete, list, operate, scanner-pull and stop.
     *
     * @var string|null
     */
    protected $action;
    /**
     * The effect of the access
     *
     * @var string|null
     */
    protected $effect;
    /**
     * The resource of the access. Possible resources are *, artifact, artifact-addition, artifact-label, audit-log, catalog, configuration, distribution, garbage-collection, helm-chart, helm-chart-version, helm-chart-version-label, immutable-tag, label, ldap-user, log, member, metadata, notification-policy, preheat-instance, preheat-policy, project, quota, registry, replication, replication-adapter, replication-policy, repository, robot, scan, scan-all, scanner, system-volumes, tag, tag-retention, user, user-group or "" (for self-reference).
     *
     * @return string|null
     */
    public function getResource() : ?string
    {
        return $this->resource;
    }
    /**
     * The resource of the access. Possible resources are *, artifact, artifact-addition, artifact-label, audit-log, catalog, configuration, distribution, garbage-collection, helm-chart, helm-chart-version, helm-chart-version-label, immutable-tag, label, ldap-user, log, member, metadata, notification-policy, preheat-instance, preheat-policy, project, quota, registry, replication, replication-adapter, replication-policy, repository, robot, scan, scan-all, scanner, system-volumes, tag, tag-retention, user, user-group or "" (for self-reference).
     *
     * @param string|null $resource
     *
     * @return self
     */
    public function setResource(?string $resource) : self
    {
        $this->resource = $resource;
        return $this;
    }
    /**
     * The action of the access. Possible actions are *, pull, push, create, read, update, delete, list, operate, scanner-pull and stop.
     *
     * @return string|null
     */
    public function getAction() : ?string
    {
        return $this->action;
    }
    /**
     * The action of the access. Possible actions are *, pull, push, create, read, update, delete, list, operate, scanner-pull and stop.
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action) : self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * The effect of the access
     *
     * @return string|null
     */
    public function getEffect() : ?string
    {
        return $this->effect;
    }
    /**
     * The effect of the access
     *
     * @param string|null $effect
     *
     * @return self
     */
    public function setEffect(?string $effect) : self
    {
        $this->effect = $effect;
        return $this;
    }
}