<?php

namespace Harbor\Api;

class Client extends \Harbor\Api\Runtime\Client\Client
{
    /**
    * This endpoint let user generate a new CLI secret for himself.  This API only works when auth mode is set to 'OIDC'.
    Once this API returns with successful status, the old secret will be invalid, as there will be only one CLI secret
    for a user.
    
    *
    * @param int $userId User ID
    * @param \Harbor\Api\Model\UsersUserIdCliSecretPutBody $inputSecret JSON object that includes the new secret
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Harbor\Api\Exception\PutUsersByUserIdCliSecretBadRequestException
    * @throws \Harbor\Api\Exception\PutUsersByUserIdCliSecretUnauthorizedException
    * @throws \Harbor\Api\Exception\PutUsersByUserIdCliSecretForbiddenException
    * @throws \Harbor\Api\Exception\PutUsersByUserIdCliSecretNotFoundException
    * @throws \Harbor\Api\Exception\PutUsersByUserIdCliSecretPreconditionFailedException
    * @throws \Harbor\Api\Exception\PutUsersByUserIdCliSecretInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function putUsersByUserIdCliSecret(int $userId, \Harbor\Api\Model\UsersUserIdCliSecretPutBody $inputSecret, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutUsersByUserIdCliSecret($userId, $inputSecret), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSystemGcScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSystemGcScheduleForbiddenException
     * @throws \Harbor\Api\Exception\GetSystemGcScheduleInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\AdminJobSchedule|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemGcSchedule(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSystemGcSchedule(), $fetch);
    }
    /**
     * This endpoint is for update gc schedule.
     *
     * @param \Harbor\Api\Model\AdminJobSchedule $schedule Updates of gc's schedule.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostSystemGcScheduleBadRequestException
     * @throws \Harbor\Api\Exception\PostSystemGcScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\PostSystemGcScheduleForbiddenException
     * @throws \Harbor\Api\Exception\PostSystemGcScheduleConflictException
     * @throws \Harbor\Api\Exception\PostSystemGcScheduleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSystemGcSchedule(\Harbor\Api\Model\AdminJobSchedule $schedule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostSystemGcSchedule($schedule), $fetch);
    }
    /**
     * This endpoint is for update gc schedule.
     *
     * @param \Harbor\Api\Model\AdminJobSchedule $schedule Updates of gc's schedule.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutSystemGcScheduleBadRequestException
     * @throws \Harbor\Api\Exception\PutSystemGcScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\PutSystemGcScheduleForbiddenException
     * @throws \Harbor\Api\Exception\PutSystemGcScheduleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSystemGcSchedule(\Harbor\Api\Model\AdminJobSchedule $schedule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutSystemGcSchedule($schedule), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetScansAllMetricUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScansAllMetricForbiddenException
     * @throws \Harbor\Api\Exception\GetScansAllMetricInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Stats|\Psr\Http\Message\ResponseInterface
     */
    public function getScansAllMetric(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetScansAllMetric(), $fetch);
    }
    /**
     * This endpoint is to search the users by username.
     *
     * @param array $queryParameters {
     *     @var string $username Username for filtering results.
     *     @var int $page The page number, default is 1.
     *     @var int $page_size The size of per page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetUsersSearchInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\UserSearch[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetUsersSearch($queryParameters), $fetch);
    }
    /**
     * This endpoint is for user to get one execution of the replication.
     *
     * @param int $id The execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdBadRequestException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdNotFoundException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ReplicationExecution|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationExecutionById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetReplicationExecutionById($id), $fetch);
    }
    /**
     * This endpoint is for user to stop one execution of the replication.
     *
     * @param int $id The execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutReplicationExecutionByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutReplicationExecutionByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutReplicationExecutionByIdForbiddenException
     * @throws \Harbor\Api\Exception\PutReplicationExecutionByIdNotFoundException
     * @throws \Harbor\Api\Exception\PutReplicationExecutionByIdUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PutReplicationExecutionByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putReplicationExecutionById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutReplicationExecutionById($id), $fetch);
    }
    /**
     * This endpoint let user list labels by name, scope and project_id
     *
     * @param array $queryParameters {
     *     @var string $name The label name.
     *     @var string $scope The label scope. Valid values are g and p. g for global labels and p for project labels.
     *     @var int $project_id Relevant project ID, required when scope is p.
     *     @var int $page The page nubmer.
     *     @var int $page_size The size of per page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetLabelsBadRequestException
     * @throws \Harbor\Api\Exception\GetLabelsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetLabelsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Label[]|\Psr\Http\Message\ResponseInterface
     */
    public function getLabels(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetLabels($queryParameters), $fetch);
    }
    /**
     * This endpoint let user creates a label.
     *
     * @param \Harbor\Api\Model\Label $label The json object of label.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostLabelBadRequestException
     * @throws \Harbor\Api\Exception\PostLabelUnauthorizedException
     * @throws \Harbor\Api\Exception\PostLabelConflictException
     * @throws \Harbor\Api\Exception\PostLabelUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postLabel(\Harbor\Api\Model\Label $label, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostLabel($label), $fetch);
    }
    /**
     * This endpoint let user list namespaces of registry according to query.
     *
     * @param int $id The registry ID.
     * @param array $queryParameters {
     *     @var string $name The name of namespace.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetRegistriesByIdNamespaceUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdNamespaceForbiddenException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdNamespaceNotFoundException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdNamespaceInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\_Namespace[]|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistriesByIdNamespace(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetRegistriesByIdNamespace($id, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSystemGcUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSystemGcForbiddenException
     * @throws \Harbor\Api\Exception\GetSystemGcInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\GCResult[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemGc(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSystemGc(), $fetch);
    }
    /**
     * This endpoint returns webhook jobs of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param array $queryParameters {
     *     @var int $policy_id The policy ID.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\WebhookJob[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookJobs(int $projectId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookJobs($projectId, $queryParameters), $fetch);
    }
    /**
     * This endpoint ping the available ldap service for test related configuration parameters.
     *
     * @param \Harbor\Api\Model\LdapConf $ldapconf ldap configuration. support input ldap service configuration. If it's a empty request, will load current configuration from the system.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostLdapPingBadRequestException
     * @throws \Harbor\Api\Exception\PostLdapPingUnauthorizedException
     * @throws \Harbor\Api\Exception\PostLdapPingForbiddenException
     * @throws \Harbor\Api\Exception\PostLdapPingUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostLdapPingInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postLdapPing(\Harbor\Api\Model\LdapConf $ldapconf, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostLdapPing($ldapconf), $fetch);
    }
    /**
     * Get all project member information
     *
     * @param int $projectId Relevant project ID.
     * @param array $queryParameters {
     *     @var string $entityname The entity name to search.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMembersBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMembersUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMembersForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMembersNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMembersInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ProjectMemberEntity[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdMembers(int $projectId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdMembers($projectId, $queryParameters), $fetch);
    }
    /**
     * Create project member relationship, the member can be one of the user_member and group_member,  The user_member need to specify user_id or username. If the user already exist in harbor DB, specify the user_id,  If does not exist in harbor DB, it will SearchAndOnBoard the user. The group_member need to specify id or ldap_group_dn. If the group already exist in harbor DB. specify the user group's id,  If does not exist, it will SearchAndOnBoard the group. 
     *
     * @param int $projectId Relevant project ID.
     * @param \Harbor\Api\Model\ProjectMember $projectMember 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMemberBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMemberUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMemberForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMemberConflictException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMemberInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdMember(int $projectId, \Harbor\Api\Model\ProjectMember $projectMember, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostProjectsByProjectIdMember($projectId, $projectMember), $fetch);
    }
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $id Immutable tag rule ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdImmutabletagruleById(int $projectId, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteProjectsByProjectIdImmutabletagruleById($projectId, $id), $fetch);
    }
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $id Immutable tag rule ID.
     * @param \Harbor\Api\Model\RetentionRule $retentionRule 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdForbiddenException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdImmutabletagruleById(int $projectId, int $id, \Harbor\Api\Model\RetentionRule $retentionRule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutProjectsByProjectIdImmutabletagruleById($projectId, $id, $retentionRule), $fetch);
    }
    /**
     * Test connection and authentication with email server.
     *
     * @param \Harbor\Api\Model\EmailServerSetting $settings Email server settings, if some of the settings are not assigned, they will be read from system configuration.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostEmailPingBadRequestException
     * @throws \Harbor\Api\Exception\PostEmailPingUnauthorizedException
     * @throws \Harbor\Api\Exception\PostEmailPingForbiddenException
     * @throws \Harbor\Api\Exception\PostEmailPingUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostEmailPingInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEmailPing(\Harbor\Api\Model\EmailServerSetting $settings, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostEmailPing($settings), $fetch);
    }
    /**
     * Get all robot accounts of specified project
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotsBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotsForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotsNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RobotAccount[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdRobots(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdRobots($projectId), $fetch);
    }
    /**
     * Create a robot account for project
     *
     * @param int $projectId Relevant project ID.
     * @param \Harbor\Api\Model\RobotAccountCreate $robot Request body of creating a robot account.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotConflictException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RobotAccountPostRep|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdRobot(int $projectId, \Harbor\Api\Model\RobotAccountCreate $robot, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostProjectsByProjectIdRobot($projectId, $robot), $fetch);
    }
    /**
     * This endpoint let user get gc job logs filtered by specific ID.
     *
     * @param int $id Relevant job ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSystemGcByIdLogBadRequestException
     * @throws \Harbor\Api\Exception\GetSystemGcByIdLogUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSystemGcByIdLogForbiddenException
     * @throws \Harbor\Api\Exception\GetSystemGcByIdLogNotFoundException
     * @throws \Harbor\Api\Exception\GetSystemGcByIdLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemGcByIdLog(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSystemGcByIdLog($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Harbor\Api\Model\RetentionMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionsMetadata(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetRetentionsMetadata(), $fetch);
    }
    /**
     * The Search endpoint returns information about the projects ,repositories  and helm charts offered at public status or related to the current logged in user. The response includes the project, repository list and charts in a proper display order.
     *
     * @param array $queryParameters {
     *     @var string $q Search parameter for project and repository name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSearchInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Search[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSearch($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSystemScanAllScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSystemScanAllScheduleForbiddenException
     * @throws \Harbor\Api\Exception\GetSystemScanAllScheduleInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\AdminJobSchedule|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemScanAllSchedule(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSystemScanAllSchedule(), $fetch);
    }
    /**
     * This endpoint is for creating a schedule or a manual trigger for the scan all job, which scans all of images in Harbor.
     *
     * @param \Harbor\Api\Model\AdminJobSchedule $schedule Create a schedule or a manual trigger for the scan all job.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleBadRequestException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleForbiddenException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleConflictException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleInternalServerErrorException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleServiceUnavailableException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSystemScanAllSchedule(\Harbor\Api\Model\AdminJobSchedule $schedule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostSystemScanAllSchedule($schedule), $fetch);
    }
    /**
     * This endpoint is for updating the schedule of scan all job, which scans all of images in Harbor.
     *
     * @param \Harbor\Api\Model\AdminJobSchedule $schedule Updates the schedule of scan all job, which scans all of images in Harbor.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutSystemScanAllScheduleBadRequestException
     * @throws \Harbor\Api\Exception\PutSystemScanAllScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\PutSystemScanAllScheduleForbiddenException
     * @throws \Harbor\Api\Exception\PutSystemScanAllScheduleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSystemScanAllSchedule(\Harbor\Api\Model\AdminJobSchedule $schedule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutSystemScanAllSchedule($schedule), $fetch);
    }
    /**
     * This endpoint is aimed to delete metadata of a project.
     *
     * @param int $projectId The ID of project.
     * @param string $metaName The name of metadat.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameBadRequestException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameNotFoundException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdMetadataByMetaName(int $projectId, string $metaName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteProjectsByProjectIdMetadataByMetaName($projectId, $metaName), $fetch);
    }
    /**
     * This endpoint returns specified metadata of a project.
     *
     * @param int $projectId Project ID for filtering results.
     * @param string $metaName The name of metadat.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMetadataByMetaNameUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMetadataByMetaNameInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ProjectMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdMetadataByMetaName(int $projectId, string $metaName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdMetadataByMetaName($projectId, $metaName), $fetch);
    }
    /**
     * This endpoint is aimed to update the metadata of a project.
     *
     * @param int $projectId The ID of project.
     * @param string $metaName The name of metadat.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameBadRequestException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameUnauthorizedException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameForbiddenException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameNotFoundException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdMetadataByMetaName(int $projectId, string $metaName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutProjectsByProjectIdMetadataByMetaName($projectId, $metaName), $fetch);
    }
    /**
     * Get the scanner registration of the specified project. If no scanner registration is configured for the specified project, the system default scanner registration will be returned.
     *
     * @param int $projectId The project identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerRegistration|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdScanner(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdScanner($projectId), $fetch);
    }
    /**
     * Set one of the system configured scanner registration as the indepndent scanner of the specified project.
     *
     * @param int $projectId The project identifier.
     * @param \Harbor\Api\Model\ProjectScanner $payload 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerBadRequestException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerUnauthorizedException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerForbiddenException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerNotFoundException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdScanner(int $projectId, \Harbor\Api\Model\ProjectScanner $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutProjectsByProjectIdScanner($projectId, $payload), $fetch);
    }
    /**
     * Get Retention job tasks, each repository as a task.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksForbiddenException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RetentionExecutionTask[]|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionsByIdExecutionsByEidTasks(int $id, int $eid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetRetentionsByIdExecutionsByEidTasks($id, $eid), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetStatisticUnauthorizedException
     * @throws \Harbor\Api\Exception\GetStatisticInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\StatisticMap|\Psr\Http\Message\ResponseInterface
     */
    public function getStatistic(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetStatistic(), $fetch);
    }
    /**
     * Deletes the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteScannerByRegistrationIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteScannerByRegistrationIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteScannerByRegistrationIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerRegistration|\Psr\Http\Message\ResponseInterface
     */
    public function deleteScannerByRegistrationId(string $registrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteScannerByRegistrationId($registrationId), $fetch);
    }
    /**
     * Retruns the details of the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetScannerByRegistrationIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScannerByRegistrationIdForbiddenException
     * @throws \Harbor\Api\Exception\GetScannerByRegistrationIdNotFoundException
     * @throws \Harbor\Api\Exception\GetScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerRegistration|\Psr\Http\Message\ResponseInterface
     */
    public function getScannerByRegistrationId(string $registrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetScannerByRegistrationId($registrationId), $fetch);
    }
    /**
     * Set the specified scanner registration as the system default one.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param \Harbor\Api\Model\IsDefault $payload 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PatchScannerByRegistrationIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PatchScannerByRegistrationIdForbiddenException
     * @throws \Harbor\Api\Exception\PatchScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchScannerByRegistrationId(string $registrationId, \Harbor\Api\Model\IsDefault $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PatchScannerByRegistrationId($registrationId, $payload), $fetch);
    }
    /**
     * Updates the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param \Harbor\Api\Model\ScannerRegistrationReq $registration A scanner registraiton to be updated.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutScannerByRegistrationIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutScannerByRegistrationIdForbiddenException
     * @throws \Harbor\Api\Exception\PutScannerByRegistrationIdNotFoundException
     * @throws \Harbor\Api\Exception\PutScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putScannerByRegistrationId(string $registrationId, \Harbor\Api\Model\ScannerRegistrationReq $registration, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutScannerByRegistrationId($registrationId, $registration), $fetch);
    }
    /**
     * Get Retention Policy.
     *
     * @param int $id Retention ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetRetentionByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRetentionByIdForbiddenException
     * @throws \Harbor\Api\Exception\GetRetentionByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RetentionPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetRetentionById($id), $fetch);
    }
    /**
    * Update Retention Policy, you can reference metadatas API for the policy model.
    You can check project metadatas to find whether a retention policy is already binded.
    This method should only be called when retention policy has already binded to project.
    
    *
    * @param int $id Retention ID.
    * @param \Harbor\Api\Model\RetentionPolicy $policy 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Harbor\Api\Exception\PutRetentionByIdUnauthorizedException
    * @throws \Harbor\Api\Exception\PutRetentionByIdForbiddenException
    * @throws \Harbor\Api\Exception\PutRetentionByIdInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function putRetentionById(int $id, \Harbor\Api\Model\RetentionPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutRetentionById($id, $policy), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetScannersBadRequestException
     * @throws \Harbor\Api\Exception\GetScannersUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScannersForbiddenException
     * @throws \Harbor\Api\Exception\GetScannersInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerRegistration[]|\Psr\Http\Message\ResponseInterface
     */
    public function getScanners(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetScanners(), $fetch);
    }
    /**
     * Creats a new scanner registration with the given data.
     *
     * @param \Harbor\Api\Model\ScannerRegistrationReq $registration A scanner registration to be created.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostScannerBadRequestException
     * @throws \Harbor\Api\Exception\PostScannerUnauthorizedException
     * @throws \Harbor\Api\Exception\PostScannerForbiddenException
     * @throws \Harbor\Api\Exception\PostScannerInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postScanner(\Harbor\Api\Model\ScannerRegistrationReq $registration, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostScanner($registration), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSysteminfoVolumeUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSysteminfoVolumeForbiddenException
     * @throws \Harbor\Api\Exception\GetSysteminfoVolumeInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\SystemInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getSysteminfoVolume(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSysteminfoVolume(), $fetch);
    }
    /**
     * This endpoint checks status of a registry, the registry can be given by ID or URL (together with credential)
     *
     * @param \Harbor\Api\Model\Registry $registry Registry to ping.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostRegistriesPingBadRequestException
     * @throws \Harbor\Api\Exception\PostRegistriesPingUnauthorizedException
     * @throws \Harbor\Api\Exception\PostRegistriesPingNotFoundException
     * @throws \Harbor\Api\Exception\PostRegistriesPingUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostRegistriesPingInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postRegistriesPing(\Harbor\Api\Model\Registry $registry, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostRegistriesPing($registry), $fetch);
    }
    /**
     * This endpoint is for user to get the task list of one execution.
     *
     * @param int $id The execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksBadRequestException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksNotFoundException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ReplicationTask[]|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationExecutionsByIdTasks(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetReplicationExecutionsByIdTasks($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetUsergroupsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetUsergroupsForbiddenException
     * @throws \Harbor\Api\Exception\GetUsergroupsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\UserGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUsergroups(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetUsergroups(), $fetch);
    }
    /**
     * Create user group information
     *
     * @param \Harbor\Api\Model\UserGroup $usergroup 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostUsergroupBadRequestException
     * @throws \Harbor\Api\Exception\PostUsergroupUnauthorizedException
     * @throws \Harbor\Api\Exception\PostUsergroupForbiddenException
     * @throws \Harbor\Api\Exception\PostUsergroupConflictException
     * @throws \Harbor\Api\Exception\PostUsergroupInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postUsergroup(\Harbor\Api\Model\UserGroup $usergroup, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostUsergroup($usergroup), $fetch);
    }
    /**
     * Get the info of one specific registry.
     *
     * @param int $id The registry ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetRegistriesByIdInfoUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdInfoNotFoundException
     * @throws \Harbor\Api\Exception\GetRegistriesByIdInfoInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RegistryInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistriesByIdInfo(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetRegistriesByIdInfo($id), $fetch);
    }
    /**
     * Get Retention job task log, tags ratain or deletion detail will be shown in a table.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param int $tid Retention execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidForbiddenException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionsByIdExecutionsByEidTaskByTid(int $id, int $eid, int $tid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetRetentionsByIdExecutionsByEidTaskByTid($id, $eid, $tid), $fetch);
    }
    /**
     * This endpoint tests webhook connection of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param \Harbor\Api\Model\WebhookPolicy $policy Only property "targets" needed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdWebhookPoliciesTest(int $projectId, \Harbor\Api\Model\WebhookPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostProjectsByProjectIdWebhookPoliciesTest($projectId, $policy), $fetch);
    }
    /**
     * Delete user group
     *
     * @param int $groupId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteUsergroupByGroupIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteUsergroupByGroupIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteUsergroupByGroupIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteUsergroupByGroupIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUsergroupByGroupId(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteUsergroupByGroupId($groupId), $fetch);
    }
    /**
     * Get user group information
     *
     * @param int $groupId Group ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetUsergroupByGroupIdBadRequestException
     * @throws \Harbor\Api\Exception\GetUsergroupByGroupIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetUsergroupByGroupIdForbiddenException
     * @throws \Harbor\Api\Exception\GetUsergroupByGroupIdNotFoundException
     * @throws \Harbor\Api\Exception\GetUsergroupByGroupIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\UserGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getUsergroupByGroupId(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetUsergroupByGroupId($groupId), $fetch);
    }
    /**
     * Update user group information
     *
     * @param int $groupId Group ID
     * @param \Harbor\Api\Model\UserGroup $usergroup 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdBadRequestException
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdForbiddenException
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdNotFoundException
     * @throws \Harbor\Api\Exception\PutUsergroupByGroupIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putUsergroupByGroupId(int $groupId, \Harbor\Api\Model\UserGroup $usergroup, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutUsergroupByGroupId($groupId, $usergroup), $fetch);
    }
    /**
    * List quotas
    *
    * @param array $queryParameters {
    *     @var string $reference The reference type of quota.
    *     @var string $reference_id The reference id of quota.
    *     @var string $sort Sort method, valid values include:
    'hard.resource_name', '-hard.resource_name', 'used.resource_name', '-used.resource_name'.
    Here '-' stands for descending order, resource_name should be the real resource name of the quota.
    
    *     @var int $page The page number, default is 1.
    *     @var int $page_size The size of per page, default is 10, maximum is 100.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Harbor\Api\Exception\GetQuotasUnauthorizedException
    * @throws \Harbor\Api\Exception\GetQuotasForbiddenException
    * @throws \Harbor\Api\Exception\GetQuotasInternalServerErrorException
    *
    * @return null|\Harbor\Api\Model\Quota[]|\Psr\Http\Message\ResponseInterface
    */
    public function getQuotas(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetQuotas($queryParameters), $fetch);
    }
    /**
     * This endpoint is aimed to delete project by project ID.
     *
     * @param int $projectId Project ID of project which will be deleted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdPreconditionFailedException
     * @throws \Harbor\Api\Exception\DeleteProjectByProjectIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectByProjectId(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteProjectByProjectId($projectId), $fetch);
    }
    /**
     * This endpoint returns specific project information by project ID.
     *
     * @param int $projectId Project ID for filtering results.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectByProjectIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectByProjectIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectByProjectId(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectByProjectId($projectId), $fetch);
    }
    /**
     * This endpoint is aimed to update the properties of a project.
     *
     * @param int $projectId Selected project ID.
     * @param \Harbor\Api\Model\ProjectReq $project Updates of project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdBadRequestException
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdForbiddenException
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdNotFoundException
     * @throws \Harbor\Api\Exception\PutProjectByProjectIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectByProjectId(int $projectId, \Harbor\Api\Model\ProjectReq $project, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutProjectByProjectId($projectId, $project), $fetch);
    }
    /**
    * This endpoint is to get the current user permissions.
    
    *
    * @param array $queryParameters {
    *     @var string $scope Get permissions of the scope
    *     @var bool $relative If true, the resources in the response are relative to the scope,
    eg for resource '/project/1/repository' if relative is 'true' then the resource in response will be 'repository'.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Harbor\Api\Exception\GetUsersCurrentPermissionsUnauthorizedException
    * @throws \Harbor\Api\Exception\GetUsersCurrentPermissionsInternalServerErrorException
    *
    * @return null|\Harbor\Api\Model\Permission[]|\Psr\Http\Message\ResponseInterface
    */
    public function getUsersCurrentPermissions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetUsersCurrentPermissions($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetUsersCurrentUnauthorizedException
     *
     * @return null|\Harbor\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersCurrent(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetUsersCurrent(), $fetch);
    }
    /**
     * This endpoint is aimed to delete webhookpolicy of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param int $policyId The id of webhook policy.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdWebhookPolicyByPolicyId(int $projectId, int $policyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteProjectsByProjectIdWebhookPolicyByPolicyId($projectId, $policyId), $fetch);
    }
    /**
     * This endpoint returns specified webhook policy of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param int $policyId The id of webhook policy.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\WebhookPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookPolicyByPolicyId(int $projectId, int $policyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookPolicyByPolicyId($projectId, $policyId), $fetch);
    }
    /**
     * This endpoint is aimed to update the webhook policy of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param int $policyId The id of webhook policy.
     * @param \Harbor\Api\Model\WebhookPolicy $policy All properties needed except "id", "project_id", "creation_time", "update_time".
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdWebhookPolicyByPolicyId(int $projectId, int $policyId, \Harbor\Api\Model\WebhookPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutProjectsByProjectIdWebhookPolicyByPolicyId($projectId, $policyId, $policy), $fetch);
    }
    /**
     * This endpoint returns all projects created by Harbor, and can be filtered by project name.
     *
     * @param array $queryParameters {
     *     @var string $name The name of project.
     *     @var bool $public The project is public or private.
     *     @var string $owner The name of project owner.
     *     @var int $page The page number, default is 1.
     *     @var int $page_size The size of per page, default is 10, maximum is 100.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Project[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjects(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjects($queryParameters), $fetch);
    }
    /**
     * This endpoint is used to check if the project name user provided already exist.
     *
     * @param array $queryParameters {
     *     @var string $project_name Project name for checking exists.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\HeadProjectNotFoundException
     * @throws \Harbor\Api\Exception\HeadProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function headProject(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\HeadProject($queryParameters), $fetch);
    }
    /**
     * This endpoint is for user to create a new project.
     *
     * @param \Harbor\Api\Model\ProjectReq $project New created project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostProjectBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectConflictException
     * @throws \Harbor\Api\Exception\PostProjectUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProject(\Harbor\Api\Model\ProjectReq $project, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostProject($project), $fetch);
    }
    /**
     * This endpoint returns metadata of the project specified by project ID.
     *
     * @param int $projectId The ID of project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMetadataUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMetadataInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ProjectMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdMetadata(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdMetadata($projectId), $fetch);
    }
    /**
     * This endpoint is aimed to add metadata of a project.
     *
     * @param int $projectId Selected project ID.
     * @param \Harbor\Api\Model\ProjectMetadata $metadata The metadata of project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataNotFoundException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdMetadataInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdMetadata(int $projectId, \Harbor\Api\Model\ProjectMetadata $metadata, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostProjectsByProjectIdMetadata($projectId, $metadata), $fetch);
    }
    /**
     * Get supportted event types and notify types.
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\SupportedWebhookEventTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookEvent(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookEvent($projectId), $fetch);
    }
    /**
     * This endpoint searches the available ldap groups based on related configuration parameters. support to search by groupname or groupdn.
     *
     * @param array $queryParameters {
     *     @var string $groupname Ldap group name
     *     @var string $groupdn The LDAP group DN
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetLdapGroupsSearchBadRequestException
     * @throws \Harbor\Api\Exception\GetLdapGroupsSearchNotFoundException
     * @throws \Harbor\Api\Exception\GetLdapGroupsSearchInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\UserGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function getLdapGroupsSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetLdapGroupsSearch($queryParameters), $fetch);
    }
    /**
     * Delete the specified robot account
     *
     * @param int $projectId Relevant project ID.
     * @param int $robotId The ID of robot account.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdRobotByRobotIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdRobotByRobotIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdRobotByRobotIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdRobotByRobotIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdRobotByRobotId(int $projectId, int $robotId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteProjectsByProjectIdRobotByRobotId($projectId, $robotId), $fetch);
    }
    /**
     * Return the infor of the specified robot account.
     *
     * @param int $projectId Relevant project ID.
     * @param int $robotId The ID of robot account.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RobotAccount|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdRobotByRobotId(int $projectId, int $robotId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdRobotByRobotId($projectId, $robotId), $fetch);
    }
    /**
     * Used to disable/enable a specified robot account.
     *
     * @param int $projectId Relevant project ID.
     * @param int $robotId The ID of robot account.
     * @param \Harbor\Api\Model\RobotAccountUpdate $robot Request body of enable/disable a robot account.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdRobotByRobotIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdRobotByRobotId(int $projectId, int $robotId, \Harbor\Api\Model\RobotAccountUpdate $robot, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutProjectsByProjectIdRobotByRobotId($projectId, $robotId, $robot), $fetch);
    }
    /**
    * This endpoint let a registered user change to be an administrator
    of Harbor.
    
    *
    * @param int $userId Registered user ID
    * @param \Harbor\Api\Model\SysAdminFlag $sysadminFlag Toggle a user to admin or not.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Harbor\Api\Exception\PutUsersByUserIdSysadminBadRequestException
    * @throws \Harbor\Api\Exception\PutUsersByUserIdSysadminUnauthorizedException
    * @throws \Harbor\Api\Exception\PutUsersByUserIdSysadminForbiddenException
    * @throws \Harbor\Api\Exception\PutUsersByUserIdSysadminNotFoundException
    * @throws \Harbor\Api\Exception\PutUsersByUserIdSysadminInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function putUsersByUserIdSysadmin(int $userId, \Harbor\Api\Model\SysAdminFlag $sysadminFlag, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutUsersByUserIdSysadmin($userId, $sysadminFlag), $fetch);
    }
    /**
     * This endpoint let user list replication policies
     *
     * @param array $queryParameters {
     *     @var string $name The replication policy name.
     *     @var int $page The page nubmer.
     *     @var int $page_size The size of per page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetReplicationPoliciesBadRequestException
     * @throws \Harbor\Api\Exception\GetReplicationPoliciesUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationPoliciesForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationPoliciesInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ReplicationPolicy[]|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationPolicies(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetReplicationPolicies($queryParameters), $fetch);
    }
    /**
     * This endpoint let user create a replication policy
     *
     * @param \Harbor\Api\Model\ReplicationPolicy $policy The policy model.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostReplicationPolicyBadRequestException
     * @throws \Harbor\Api\Exception\PostReplicationPolicyUnauthorizedException
     * @throws \Harbor\Api\Exception\PostReplicationPolicyForbiddenException
     * @throws \Harbor\Api\Exception\PostReplicationPolicyConflictException
     * @throws \Harbor\Api\Exception\PostReplicationPolicyUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostReplicationPolicyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postReplicationPolicy(\Harbor\Api\Model\ReplicationPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostReplicationPolicy($policy), $fetch);
    }
    /**
     * Get a Retention job, job status may be delayed before job service schedule it up.
     *
     * @param int $id Retention ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsForbiddenException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RetentionExecution[]|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionsByIdExecutions(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetRetentionsByIdExecutions($id), $fetch);
    }
    /**
     * Trigger a Retention job, if dry_run is True, nothing would be deleted actually.
     *
     * @param int $id Retention ID.
     * @param \Harbor\Api\Model\RetentionsIdExecutionsPostBody $action 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostRetentionsByIdExecutionUnauthorizedException
     * @throws \Harbor\Api\Exception\PostRetentionsByIdExecutionForbiddenException
     * @throws \Harbor\Api\Exception\PostRetentionsByIdExecutionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postRetentionsByIdExecution(int $id, \Harbor\Api\Model\RetentionsIdExecutionsPostBody $action, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostRetentionsByIdExecution($id, $action), $fetch);
    }
    /**
     * This endpoint is for user to update password. Users with the admin role can change any user's password. Guest users can change only their own password.
     *
     * @param int $userId Registered user ID.
     * @param \Harbor\Api\Model\Password $password Password to be updated, the attribute 'old_password' is optional when the API is called by the system administrator.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutUsersByUserIdPasswordBadRequestException
     * @throws \Harbor\Api\Exception\PutUsersByUserIdPasswordUnauthorizedException
     * @throws \Harbor\Api\Exception\PutUsersByUserIdPasswordForbiddenException
     * @throws \Harbor\Api\Exception\PutUsersByUserIdPasswordInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putUsersByUserIdPassword(int $userId, \Harbor\Api\Model\Password $password, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutUsersByUserIdPassword($userId, $password), $fetch);
    }
    /**
     * Retrieve the system configured scanner registrations as candidates of setting project level scanner.
     *
     * @param int $projectId The project identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerRegistration[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdScannerCandidates(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdScannerCandidates($projectId), $fetch);
    }
    /**
     * Return the attahced labels of the specified chart version.
     *
     * @param string $repo The project name
     * @param string $name The chart name
     * @param string $version The chart version
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException
     * @throws \Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelForbiddenException
     * @throws \Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelNotFoundException
     * @throws \Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getChartrepoByRepoChartsByNameByVersionLabel(string $repo, string $name, string $version, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetChartrepoByRepoChartsByNameByVersionLabel($repo, $name, $version), $fetch);
    }
    /**
     * Mark label to the specified chart version.
     *
     * @param string $repo The project name
     * @param string $name The chart name
     * @param string $version The chart version
     * @param \Harbor\Api\Model\Label $label The label being marked to the chart version
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelBadRequestException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelForbiddenException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelNotFoundException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelConflictException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postChartrepoByRepoChartsByNameByVersionLabel(string $repo, string $name, string $version, \Harbor\Api\Model\Label $label, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostChartrepoByRepoChartsByNameByVersionLabel($repo, $name, $version, $label), $fetch);
    }
    /**
     * Get summary of the project.
     *
     * @param int $projectId Relevant project ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdSummaryInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ProjectSummary|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdSummary(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdSummary($projectId), $fetch);
    }
    /**
     * This endpoint returns webhook policies of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookPoliciesBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookPoliciesUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookPoliciesForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookPoliciesInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\WebhookPolicy[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookPolicies(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookPolicies($projectId), $fetch);
    }
    /**
     * This endpoint create a webhook policy if the project does not have one.
     *
     * @param int $projectId Relevant project ID
     * @param \Harbor\Api\Model\WebhookPolicy $policy Properties "targets" and "event_types" needed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdWebhookPolicy(int $projectId, \Harbor\Api\Model\WebhookPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostProjectsByProjectIdWebhookPolicy($projectId, $policy), $fetch);
    }
    /**
     * Remove label from the specified chart version.
     *
     * @param string $repo The project name
     * @param string $name The chart name
     * @param string $version The chart version
     * @param int $id The label ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteChartrepoByRepoChartsByNameByVersionLabelById(string $repo, string $name, string $version, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteChartrepoByRepoChartsByNameByVersionLabelById($repo, $name, $version, $id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetScansScheduleMetricUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScansScheduleMetricForbiddenException
     * @throws \Harbor\Api\Exception\GetScansScheduleMetricInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Stats|\Psr\Http\Message\ResponseInterface
     */
    public function getScansScheduleMetric(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetScansScheduleMetric(), $fetch);
    }
    /**
     * This endpoint let user get gc status filtered by specific ID.
     *
     * @param int $id Relevant job ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSystemGcByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSystemGcByIdForbiddenException
     * @throws \Harbor\Api\Exception\GetSystemGcByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\GCResult|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemGcById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSystemGcById($id), $fetch);
    }
    /**
     * This endpoint let user list replication executions.
     *
     * @param array $queryParameters {
     *     @var int $policy_id The policy ID.
     *     @var string $status The execution status.
     *     @var string $trigger The trigger mode.
     *     @var int $page The page.
     *     @var int $page_size The page size.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ReplicationExecution[]|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationExecutions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetReplicationExecutions($queryParameters), $fetch);
    }
    /**
     * This endpoint is for user to start one execution of the replication.
     *
     * @param \Harbor\Api\Model\ReplicationExecution $execution The execution that needs to be started, only the property "policy_id" is needed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostReplicationExecutionBadRequestException
     * @throws \Harbor\Api\Exception\PostReplicationExecutionUnauthorizedException
     * @throws \Harbor\Api\Exception\PostReplicationExecutionForbiddenException
     * @throws \Harbor\Api\Exception\PostReplicationExecutionUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostReplicationExecutionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postReplicationExecution(\Harbor\Api\Model\ReplicationExecution $execution, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostReplicationExecution($execution), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSystemCVEWhitelistUnauthorizedException
     * @throws \Harbor\Api\Exception\GetSystemCVEWhitelistInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\CVEWhitelist|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemCVEWhitelist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSystemCVEWhitelist(), $fetch);
    }
    /**
     * This API overwrites the system level whitelist of CVE with the list in request body.  Only system Admin has permission to call this API.
     *
     * @param \Harbor\Api\Model\CVEWhitelist $whitelist The whitelist with new content
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutSystemCVEWhitelistUnauthorizedException
     * @throws \Harbor\Api\Exception\PutSystemCVEWhitelistForbiddenException
     * @throws \Harbor\Api\Exception\PutSystemCVEWhitelistInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSystemCVEWhitelist(\Harbor\Api\Model\CVEWhitelist $whitelist, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutSystemCVEWhitelist($whitelist), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Harbor\Api\Model\OverallHealthStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getHealth(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetHealth(), $fetch);
    }
    /**
     * This endpoint is for user to search registered users, support for filtering results with username.Notice, by now this operation is only for administrator.
     *
     * @param array $queryParameters {
     *     @var string $username Username for filtering results.
     *     @var string $email Email for filtering results.
     *     @var int $page The page number, default is 1.
     *     @var int $page_size The size of per page.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetUsersBadRequestException
     * @throws \Harbor\Api\Exception\GetUsersUnauthorizedException
     * @throws \Harbor\Api\Exception\GetUsersForbiddenException
     * @throws \Harbor\Api\Exception\GetUsersInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\User[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUsers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetUsers($queryParameters), $fetch);
    }
    /**
     * This endpoint is to create a user if the user does not already exist.
     *
     * @param \Harbor\Api\Model\User $user New created user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostUserBadRequestException
     * @throws \Harbor\Api\Exception\PostUserForbiddenException
     * @throws \Harbor\Api\Exception\PostUserUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostUserInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postUser(\Harbor\Api\Model\User $user, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostUser($user), $fetch);
    }
    /**
     * Stop a Retention job, only support "stop" action now.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param \Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $action The action, only support "stop" now.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidUnauthorizedException
     * @throws \Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidForbiddenException
     * @throws \Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchRetentionsByIdExecutionByEid(int $id, int $eid, \Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $action, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PatchRetentionsByIdExecutionByEid($id, $eid, $action), $fetch);
    }
    /**
     * This endpoint is for to delete specific registry.
     *
     * @param int $id The registry's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteRegistryByIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteRegistryByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteRegistryByIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteRegistryByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRegistryById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteRegistryById($id), $fetch);
    }
    /**
     * This endpoint is for get specific registry.
     *
     * @param int $id The registry ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetRegistryByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRegistryByIdNotFoundException
     * @throws \Harbor\Api\Exception\GetRegistryByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Registry|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistryById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetRegistryById($id), $fetch);
    }
    /**
     * This endpoint is for update a given registry.
     *
     * @param int $id The registry's ID.
     * @param \Harbor\Api\Model\PutRegistry $repoTarget Updates registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutRegistryByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutRegistryByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutRegistryByIdNotFoundException
     * @throws \Harbor\Api\Exception\PutRegistryByIdConflictException
     * @throws \Harbor\Api\Exception\PutRegistryByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putRegistryById(int $id, \Harbor\Api\Model\PutRegistry $repoTarget, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutRegistryById($id, $repoTarget), $fetch);
    }
    /**
     * This endpoint searches the available ldap users based on related configuration parameters. Support searched by input ladp configuration, load configuration from the system and specific filter.
     *
     * @param array $queryParameters {
     *     @var string $username Registered user ID
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetLdapUsersSearchUnauthorizedException
     * @throws \Harbor\Api\Exception\GetLdapUsersSearchForbiddenException
     * @throws \Harbor\Api\Exception\GetLdapUsersSearchInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\LdapUsers[]|\Psr\Http\Message\ResponseInterface
     */
    public function getLdapUsersSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetLdapUsersSearch($queryParameters), $fetch);
    }
    /**
    * Create Retention Policy, you can reference metadatas API for the policy model.
    You can check project metadatas to find whether a retention policy is already binded.
    This method should only be called when no retention policy binded to project yet.
    
    *
    * @param \Harbor\Api\Model\RetentionPolicy $policy Create Retention Policy successfully.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Harbor\Api\Exception\PostRetentionBadRequestException
    * @throws \Harbor\Api\Exception\PostRetentionUnauthorizedException
    * @throws \Harbor\Api\Exception\PostRetentionForbiddenException
    * @throws \Harbor\Api\Exception\PostRetentionInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postRetention(\Harbor\Api\Model\RetentionPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostRetention($policy), $fetch);
    }
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $mid Member ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdMemberByMid(int $projectId, int $mid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteProjectsByProjectIdMemberByMid($projectId, $mid), $fetch);
    }
    /**
     * Get the project member information
     *
     * @param int $projectId Relevant project ID.
     * @param int $mid The member ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ProjectMemberEntity|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdMemberByMid(int $projectId, int $mid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdMemberByMid($projectId, $mid), $fetch);
    }
    /**
     * Update project member relationship
     *
     * @param int $projectId Relevant project ID.
     * @param int $mid Member ID.
     * @param \Harbor\Api\Model\RoleRequest $role 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidNotFoundException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdMemberByMid(int $projectId, int $mid, \Harbor\Api\Model\RoleRequest $role, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutProjectsByProjectIdMemberByMid($projectId, $mid, $role), $fetch);
    }
    /**
    * This endpoint adds the selected available ldap users to harbor based on related configuration parameters from the system. System will try to guess the user email address and realname, add to harbor user information.
    If have errors when import user, will return the list of importing failed uid and the failed reason.
    
    *
    * @param \Harbor\Api\Model\LdapImportUsers $uidList The uid listed for importing. This list will check users validity of ldap service based on configuration from the system.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Harbor\Api\Exception\PostLdapUsersImportUnauthorizedException
    * @throws \Harbor\Api\Exception\PostLdapUsersImportForbiddenException
    * @throws \Harbor\Api\Exception\PostLdapUsersImportNotFoundException
    * @throws \Harbor\Api\Exception\PostLdapUsersImportUnsupportedMediaTypeException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postLdapUsersImport(\Harbor\Api\Model\LdapImportUsers $uidList, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostLdapUsersImport($uidList), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetReplicationAdaptersUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationAdaptersForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationAdaptersInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationAdapters(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetReplicationAdapters(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSysteminfoGetcertNotFoundException
     * @throws \Harbor\Api\Exception\GetSysteminfoGetcertInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSysteminfoGetcert(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSysteminfoGetcert(), $fetch);
    }
    /**
     * Get the specified quota
     *
     * @param int $id Quota ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetQuotaByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetQuotaByIdForbiddenException
     * @throws \Harbor\Api\Exception\GetQuotaByIdNotFoundException
     * @throws \Harbor\Api\Exception\GetQuotaByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Quota|\Psr\Http\Message\ResponseInterface
     */
    public function getQuotaById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetQuotaById($id), $fetch);
    }
    /**
     * Update hard limits of the specified quota
     *
     * @param int $id Quota ID
     * @param \Harbor\Api\Model\QuotaUpdateReq $hard The new hard limits for the quota
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutQuotaByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutQuotaByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutQuotaByIdForbiddenException
     * @throws \Harbor\Api\Exception\PutQuotaByIdNotFoundException
     * @throws \Harbor\Api\Exception\PutQuotaByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putQuotaById(int $id, \Harbor\Api\Model\QuotaUpdateReq $hard, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutQuotaById($id, $hard), $fetch);
    }
    /**
     * This endpoint returns the immutable tag rules of a project
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RetentionRule[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdImmutabletagrules(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdImmutabletagrules($projectId), $fetch);
    }
    /**
     * This endpoint add an immutable tag rule to the project
     *
     * @param int $projectId Relevant project ID.
     * @param \Harbor\Api\Model\RetentionRule $retentionRule 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdImmutabletagrule(int $projectId, \Harbor\Api\Model\RetentionRule $retentionRule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostProjectsByProjectIdImmutabletagrule($projectId, $retentionRule), $fetch);
    }
    /**
     * Delete the replication policy specified by ID.
     *
     * @param int $id Replication policy ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteReplicationPolicyByIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteReplicationPolicyByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteReplicationPolicyByIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteReplicationPolicyByIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteReplicationPolicyByIdPreconditionFailedException
     * @throws \Harbor\Api\Exception\DeleteReplicationPolicyByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReplicationPolicyById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteReplicationPolicyById($id), $fetch);
    }
    /**
     * This endpoint let user get replication policy by specific ID.
     *
     * @param int $id policy ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetReplicationPolicyByIdBadRequestException
     * @throws \Harbor\Api\Exception\GetReplicationPolicyByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationPolicyByIdForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationPolicyByIdNotFoundException
     * @throws \Harbor\Api\Exception\GetReplicationPolicyByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ReplicationPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationPolicyById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetReplicationPolicyById($id), $fetch);
    }
    /**
     * This endpoint let user update policy.
     *
     * @param int $id policy ID
     * @param \Harbor\Api\Model\ReplicationPolicy $policy The replication policy model.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdForbiddenException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdNotFoundException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdConflictException
     * @throws \Harbor\Api\Exception\PutReplicationPolicyByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putReplicationPolicyById(int $id, \Harbor\Api\Model\ReplicationPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutReplicationPolicyById($id, $policy), $fetch);
    }
    /**
     * This endpoint let user list filtered registries by name, if name is nil, list returns all registries.
     *
     * @param array $queryParameters {
     *     @var string $name Registry's name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetRegistriesUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRegistriesInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Registry[]|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistries(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetRegistries($queryParameters), $fetch);
    }
    /**
     * This endpoint is for user to create a new registry.
     *
     * @param \Harbor\Api\Model\Registry $registry New created registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostRegistryBadRequestException
     * @throws \Harbor\Api\Exception\PostRegistryUnauthorizedException
     * @throws \Harbor\Api\Exception\PostRegistryConflictException
     * @throws \Harbor\Api\Exception\PostRegistryUnsupportedMediaTypeException
     * @throws \Harbor\Api\Exception\PostRegistryInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postRegistry(\Harbor\Api\Model\Registry $registry, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostRegistry($registry), $fetch);
    }
    /**
     * Delete the label specified by ID.
     *
     * @param int $id Label ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\DeleteLabelByIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteLabelByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteLabelByIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteLabelByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLabelById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteLabelById($id), $fetch);
    }
    /**
     * This endpoint let user get the label by specific ID.
     *
     * @param int $id Label ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetLabelByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetLabelByIdNotFoundException
     * @throws \Harbor\Api\Exception\GetLabelByIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\Label|\Psr\Http\Message\ResponseInterface
     */
    public function getLabelById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetLabelById($id), $fetch);
    }
    /**
     * This endpoint let user update label properties.
     *
     * @param int $id Label ID
     * @param \Harbor\Api\Model\Label $label The updated label json object.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutLabelByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutLabelByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutLabelByIdNotFoundException
     * @throws \Harbor\Api\Exception\PutLabelByIdConflictException
     * @throws \Harbor\Api\Exception\PutLabelByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putLabelById(int $id, \Harbor\Api\Model\Label $label, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutLabelById($id, $label), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetConfigurationUnauthorizedException
     * @throws \Harbor\Api\Exception\GetConfigurationForbiddenException
     * @throws \Harbor\Api\Exception\GetConfigurationInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ConfigurationsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getConfiguration(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetConfiguration(), $fetch);
    }
    /**
     * This endpoint is for modifying system configurations that only provides for admin user.
     *
     * @param \Harbor\Api\Model\Configurations $configurations The configuration map can contain a subset of the attributes of the schema, which are to be updated.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutConfigurationUnauthorizedException
     * @throws \Harbor\Api\Exception\PutConfigurationForbiddenException
     * @throws \Harbor\Api\Exception\PutConfigurationInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putConfiguration(\Harbor\Api\Model\Configurations $configurations, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutConfiguration($configurations), $fetch);
    }
    /**
     * Test the OIDC endpoint, the setting of the endpoint is provided in the request.  This API can only be called by system admin.
     *
     * @param \Harbor\Api\Model\SystemOidcPingPostBody $endpoint Request body for OIDC endpoint to be tested.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostSystemOidcPingBadRequestException
     * @throws \Harbor\Api\Exception\PostSystemOidcPingUnauthorizedException
     * @throws \Harbor\Api\Exception\PostSystemOidcPingForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSystemOidcPing(\Harbor\Api\Model\SystemOidcPingPostBody $endpoint, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostSystemOidcPing($endpoint), $fetch);
    }
    /**
     * Pings scanner adapter to test endpoint URL and authorization settings.
     *
     * @param \Harbor\Api\Model\ScannerRegistrationSettings $settings A scanner registration settings to be tested.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PostScannersPingBadRequestException
     * @throws \Harbor\Api\Exception\PostScannersPingUnauthorizedException
     * @throws \Harbor\Api\Exception\PostScannersPingForbiddenException
     * @throws \Harbor\Api\Exception\PostScannersPingInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postScannersPing(\Harbor\Api\Model\ScannerRegistrationSettings $settings, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PostScannersPing($settings), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetSysteminfoInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\GeneralInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getSysteminfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetSysteminfo(), $fetch);
    }
    /**
    * This endpoint let administrator of Harbor mark a registered user as
    be removed.It actually won't be deleted from DB.
    
    *
    * @param int $userId User ID for marking as to be removed.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Harbor\Api\Exception\DeleteUserByUserIdBadRequestException
    * @throws \Harbor\Api\Exception\DeleteUserByUserIdUnauthorizedException
    * @throws \Harbor\Api\Exception\DeleteUserByUserIdForbiddenException
    * @throws \Harbor\Api\Exception\DeleteUserByUserIdNotFoundException
    * @throws \Harbor\Api\Exception\DeleteUserByUserIdInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function deleteUserByUserId(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\DeleteUserByUserId($userId), $fetch);
    }
    /**
     * Get user's profile with user id.
     *
     * @param int $userId Registered user ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetUserByUserIdBadRequestException
     * @throws \Harbor\Api\Exception\GetUserByUserIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetUserByUserIdForbiddenException
     * @throws \Harbor\Api\Exception\GetUserByUserIdNotFoundException
     * @throws \Harbor\Api\Exception\GetUserByUserIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function getUserByUserId(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetUserByUserId($userId), $fetch);
    }
    /**
     * This endpoint let a registered user change his profile.
     *
     * @param int $userId Registered user ID
     * @param \Harbor\Api\Model\UserProfile $profile Only email, realname and comment can be modified.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\PutUserByUserIdBadRequestException
     * @throws \Harbor\Api\Exception\PutUserByUserIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutUserByUserIdForbiddenException
     * @throws \Harbor\Api\Exception\PutUserByUserIdNotFoundException
     * @throws \Harbor\Api\Exception\PutUserByUserIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putUserByUserId(int $userId, \Harbor\Api\Model\UserProfile $profile, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\PutUserByUserId($userId, $profile), $fetch);
    }
    /**
     * This endpoint is for user to get the log of one task.
     *
     * @param int $id The execution ID.
     * @param int $taskId The task ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogBadRequestException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogUnauthorizedException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogForbiddenException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogNotFoundException
     * @throws \Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationExecutionsByIdTasksByTaskIdLog(int $id, int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetReplicationExecutionsByIdTasksByTaskIdLog($id, $taskId), $fetch);
    }
    /**
     * Get the metadata of the specified scanner registration, including the capabilities and customzied properties.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetScannersByRegistrationIdMetadataUnauthorizedException
     * @throws \Harbor\Api\Exception\GetScannersByRegistrationIdMetadataForbiddenException
     * @throws \Harbor\Api\Exception\GetScannersByRegistrationIdMetadataInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\ScannerAdapterMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getScannersByRegistrationIdMetadata(string $registrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetScannersByRegistrationIdMetadata($registrationId), $fetch);
    }
    /**
     * This endpoint returns last trigger information of project webhook policy.
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\WebhookLastTrigger[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookLasttrigger(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookLasttrigger($projectId), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://localhost/api/v2.0');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Harbor\Api\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}