<?php

namespace Gyroscops\Harbor\Api;

class Client extends \Gyroscops\Harbor\Api\Runtime\Client\Client
{
    /**
    * This endpoint let user generate a new CLI secret for himself.  This API only works when auth mode is set to 'OIDC'.
    Once this API returns with successful status, the old secret will be invalid, as there will be only one CLI secret
    for a user.
    
    *
    * @param int $userId User ID
    * @param \Gyroscops\Harbor\Api\Model\UsersUserIdCliSecretPutBody $inputSecret JSON object that includes the new secret
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretNotFoundException
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretPreconditionFailedException
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretBadRequestException
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function putUsersByUserIdCliSecret(int $userId, \Gyroscops\Harbor\Api\Model\UsersUserIdCliSecretPutBody $inputSecret, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutUsersByUserIdCliSecret($userId, $inputSecret), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcScheduleInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\AdminJobSchedule|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemGcSchedule(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSystemGcSchedule(), $fetch);
    }
    /**
     * This endpoint is for update gc schedule.
     *
     * @param \Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule Updates of gc's schedule.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSystemGcSchedule(\Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostSystemGcSchedule($schedule), $fetch);
    }
    /**
     * This endpoint is for update gc schedule.
     *
     * @param \Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule Updates of gc's schedule.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemGcScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemGcScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemGcScheduleInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemGcScheduleBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSystemGcSchedule(\Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutSystemGcSchedule($schedule), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScansAllMetricForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScansAllMetricUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScansAllMetricInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Stats|\Psr\Http\Message\ResponseInterface
     */
    public function getScansAllMetric(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScansAllMetric(), $fetch);
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersSearchInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserSearch[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetUsersSearch($queryParameters), $fetch);
    }
    /**
     * This endpoint is for user to get one execution of the replication.
     *
     * @param int $id The execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionByIdUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationExecution|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationExecutionById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationExecutionById($id), $fetch);
    }
    /**
     * This endpoint is for user to stop one execution of the replication.
     *
     * @param int $id The execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putReplicationExecutionById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutReplicationExecutionById($id), $fetch);
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelsInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelsBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Label[]|\Psr\Http\Message\ResponseInterface
     */
    public function getLabels(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetLabels($queryParameters), $fetch);
    }
    /**
     * This endpoint let user creates a label.
     *
     * @param \Gyroscops\Harbor\Api\Model\Label $label The json object of label.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postLabel(\Gyroscops\Harbor\Api\Model\Label $label, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostLabel($label), $fetch);
    }
    /**
     * This endpoint let user list namespaces of registry according to query.
     *
     * @param int $id The registry ID.
     * @param array $queryParameters {
     *     @var string $name The name of namespace.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistriesByIdNamespaceNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistriesByIdNamespaceForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistriesByIdNamespaceUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistriesByIdNamespaceInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\_Namespace[]|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistriesByIdNamespace(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRegistriesByIdNamespace($id, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\GCResult[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemGc(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSystemGc(), $fetch);
    }
    /**
     * This endpoint returns webhook jobs of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param array $queryParameters {
     *     @var int $policy_id The policy ID.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookJob[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookJobs(int $projectId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookJobs($projectId, $queryParameters), $fetch);
    }
    /**
     * This endpoint ping the available ldap service for test related configuration parameters.
     *
     * @param \Gyroscops\Harbor\Api\Model\LdapConf $ldapconf ldap configuration. support input ldap service configuration. If it's a empty request, will load current configuration from the system.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLdapPingInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postLdapPing(\Gyroscops\Harbor\Api\Model\LdapConf $ldapconf, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostLdapPing($ldapconf), $fetch);
    }
    /**
     * Get all project member information
     *
     * @param int $projectId Relevant project ID.
     * @param array $queryParameters {
     *     @var string $entityname The entity name to search.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMembersInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectMemberEntity[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdMembers(int $projectId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdMembers($projectId, $queryParameters), $fetch);
    }
    /**
     * Create project member relationship, the member can be one of the user_member and group_member,  The user_member need to specify user_id or username. If the user already exist in harbor DB, specify the user_id,  If does not exist in harbor DB, it will SearchAndOnBoard the user. The group_member need to specify id or ldap_group_dn. If the group already exist in harbor DB. specify the user group's id,  If does not exist, it will SearchAndOnBoard the group. 
     *
     * @param int $projectId Relevant project ID.
     * @param \Gyroscops\Harbor\Api\Model\ProjectMember $projectMember 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMemberConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdMember(int $projectId, \Gyroscops\Harbor\Api\Model\ProjectMember $projectMember, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostProjectsByProjectIdMember($projectId, $projectMember), $fetch);
    }
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $id Immutable tag rule ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdImmutabletagruleById(int $projectId, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteProjectsByProjectIdImmutabletagruleById($projectId, $id), $fetch);
    }
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $id Immutable tag rule ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionRule $retentionRule 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdImmutabletagruleById(int $projectId, int $id, \Gyroscops\Harbor\Api\Model\RetentionRule $retentionRule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutProjectsByProjectIdImmutabletagruleById($projectId, $id, $retentionRule), $fetch);
    }
    /**
     * Test connection and authentication with email server.
     *
     * @param \Gyroscops\Harbor\Api\Model\EmailServerSetting $settings Email server settings, if some of the settings are not assigned, they will be read from system configuration.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostEmailPingInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEmailPing(\Gyroscops\Harbor\Api\Model\EmailServerSetting $settings, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostEmailPing($settings), $fetch);
    }
    /**
     * Get all robot accounts of specified project
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotAccount[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdRobots(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdRobots($projectId), $fetch);
    }
    /**
     * Create a robot account for project
     *
     * @param int $projectId Relevant project ID.
     * @param \Gyroscops\Harbor\Api\Model\RobotAccountCreate $robot Request body of creating a robot account.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotConflictException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotAccountPostRep|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdRobot(int $projectId, \Gyroscops\Harbor\Api\Model\RobotAccountCreate $robot, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostProjectsByProjectIdRobot($projectId, $robot), $fetch);
    }
    /**
     * This endpoint let user get gc job logs filtered by specific ID.
     *
     * @param int $id Relevant job ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemGcByIdLog(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSystemGcByIdLog($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionsMetadata(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRetentionsMetadata(), $fetch);
    }
    /**
     * The Search endpoint returns information about the projects ,repositories  and helm charts offered at public status or related to the current logged in user. The response includes the project, repository list and charts in a proper display order.
     *
     * @param array $queryParameters {
     *     @var string $q Search parameter for project and repository name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSearchInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Search[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSearch($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemScanAllScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemScanAllScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemScanAllScheduleInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\AdminJobSchedule|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemScanAllSchedule(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSystemScanAllSchedule(), $fetch);
    }
    /**
     * This endpoint is for creating a schedule or a manual trigger for the scan all job, which scans all of images in Harbor.
     *
     * @param \Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule Create a schedule or a manual trigger for the scan all job.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleServiceUnavailableException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSystemScanAllSchedule(\Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostSystemScanAllSchedule($schedule), $fetch);
    }
    /**
     * This endpoint is for updating the schedule of scan all job, which scans all of images in Harbor.
     *
     * @param \Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule Updates the schedule of scan all job, which scans all of images in Harbor.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemScanAllScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemScanAllScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemScanAllScheduleInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemScanAllScheduleBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSystemScanAllSchedule(\Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutSystemScanAllSchedule($schedule), $fetch);
    }
    /**
     * This endpoint is aimed to delete metadata of a project.
     *
     * @param int $projectId The ID of project.
     * @param string $metaName The name of metadat.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMetadataByMetaNameBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdMetadataByMetaName(int $projectId, string $metaName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteProjectsByProjectIdMetadataByMetaName($projectId, $metaName), $fetch);
    }
    /**
     * This endpoint returns specified metadata of a project.
     *
     * @param int $projectId Project ID for filtering results.
     * @param string $metaName The name of metadat.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMetadataByMetaNameUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMetadataByMetaNameInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdMetadataByMetaName(int $projectId, string $metaName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdMetadataByMetaName($projectId, $metaName), $fetch);
    }
    /**
     * This endpoint is aimed to update the metadata of a project.
     *
     * @param int $projectId The ID of project.
     * @param string $metaName The name of metadat.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMetadataByMetaNameInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdMetadataByMetaName(int $projectId, string $metaName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutProjectsByProjectIdMetadataByMetaName($projectId, $metaName), $fetch);
    }
    /**
     * Get the scanner registration of the specified project. If no scanner registration is configured for the specified project, the system default scanner registration will be returned.
     *
     * @param int $projectId The project identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdScanner(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdScanner($projectId), $fetch);
    }
    /**
     * Set one of the system configured scanner registration as the indepndent scanner of the specified project.
     *
     * @param int $projectId The project identifier.
     * @param \Gyroscops\Harbor\Api\Model\ProjectScanner $payload 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdScannerNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdScannerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdScannerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdScannerBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdScannerInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdScanner(int $projectId, \Gyroscops\Harbor\Api\Model\ProjectScanner $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutProjectsByProjectIdScanner($projectId, $payload), $fetch);
    }
    /**
     * Get Retention job tasks, each repository as a task.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTasksInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionExecutionTask[]|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionsByIdExecutionsByEidTasks(int $id, int $eid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRetentionsByIdExecutionsByEidTasks($id, $eid), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetStatisticUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetStatisticInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\StatisticMap|\Psr\Http\Message\ResponseInterface
     */
    public function getStatistic(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetStatistic(), $fetch);
    }
    /**
     * Deletes the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration|\Psr\Http\Message\ResponseInterface
     */
    public function deleteScannerByRegistrationId(string $registrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteScannerByRegistrationId($registrationId), $fetch);
    }
    /**
     * Retruns the details of the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifer.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerByRegistrationIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerByRegistrationIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerByRegistrationIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration|\Psr\Http\Message\ResponseInterface
     */
    public function getScannerByRegistrationId(string $registrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScannerByRegistrationId($registrationId), $fetch);
    }
    /**
     * Set the specified scanner registration as the system default one.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param \Gyroscops\Harbor\Api\Model\IsDefault $payload 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PatchScannerByRegistrationIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PatchScannerByRegistrationIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PatchScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchScannerByRegistrationId(string $registrationId, \Gyroscops\Harbor\Api\Model\IsDefault $payload, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PatchScannerByRegistrationId($registrationId, $payload), $fetch);
    }
    /**
     * Updates the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param \Gyroscops\Harbor\Api\Model\ScannerRegistrationReq $registration A scanner registraiton to be updated.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutScannerByRegistrationIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutScannerByRegistrationIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutScannerByRegistrationIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutScannerByRegistrationIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putScannerByRegistrationId(string $registrationId, \Gyroscops\Harbor\Api\Model\ScannerRegistrationReq $registration, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutScannerByRegistrationId($registrationId, $registration), $fetch);
    }
    /**
     * Get Retention Policy.
     *
     * @param int $id Retention ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRetentionById($id), $fetch);
    }
    /**
    * Update Retention Policy, you can reference metadatas API for the policy model.
    You can check project metadatas to find whether a retention policy is already binded.
    This method should only be called when retention policy has already binded to project.
    
    *
    * @param int $id Retention ID.
    * @param \Gyroscops\Harbor\Api\Model\RetentionPolicy $policy 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\PutRetentionByIdForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\PutRetentionByIdUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\PutRetentionByIdInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function putRetentionById(int $id, \Gyroscops\Harbor\Api\Model\RetentionPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutRetentionById($id, $policy), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannersInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannersBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration[]|\Psr\Http\Message\ResponseInterface
     */
    public function getScanners(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScanners(), $fetch);
    }
    /**
     * Creats a new scanner registration with the given data.
     *
     * @param \Gyroscops\Harbor\Api\Model\ScannerRegistrationReq $registration A scanner registration to be created.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannerInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannerBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postScanner(\Gyroscops\Harbor\Api\Model\ScannerRegistrationReq $registration, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostScanner($registration), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSysteminfoVolumeForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSysteminfoVolumeUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSysteminfoVolumeInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\SystemInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getSysteminfoVolume(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSysteminfoVolume(), $fetch);
    }
    /**
     * This endpoint checks status of a registry, the registry can be given by ID or URL (together with credential)
     *
     * @param \Gyroscops\Harbor\Api\Model\Registry $registry Registry to ping.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistriesPingInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postRegistriesPing(\Gyroscops\Harbor\Api\Model\Registry $registry, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostRegistriesPing($registry), $fetch);
    }
    /**
     * This endpoint is for user to get the task list of one execution.
     *
     * @param int $id The execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationTask[]|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationExecutionsByIdTasks(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationExecutionsByIdTasks($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUsergroups(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetUsergroups(), $fetch);
    }
    /**
     * Create user group information
     *
     * @param \Gyroscops\Harbor\Api\Model\UserGroup $usergroup 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUsergroupConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postUsergroup(\Gyroscops\Harbor\Api\Model\UserGroup $usergroup, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostUsergroup($usergroup), $fetch);
    }
    /**
     * Get the info of one specific registry.
     *
     * @param int $id The registry ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistriesByIdInfoNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistriesByIdInfoUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistriesByIdInfoInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RegistryInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistriesByIdInfo(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRegistriesByIdInfo($id), $fetch);
    }
    /**
     * Get Retention job task log, tags ratain or deletion detail will be shown in a table.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param int $tid Retention execution ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsByEidTaskByTidInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionsByIdExecutionsByEidTaskByTid(int $id, int $eid, int $tid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRetentionsByIdExecutionsByEidTaskByTid($id, $eid, $tid), $fetch);
    }
    /**
     * This endpoint tests webhook connection of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy Only property "targets" needed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdWebhookPoliciesTest(int $projectId, \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostProjectsByProjectIdWebhookPoliciesTest($projectId, $policy), $fetch);
    }
    /**
     * Delete user group
     *
     * @param int $groupId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUsergroupByGroupIdBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUsergroupByGroupId(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteUsergroupByGroupId($groupId), $fetch);
    }
    /**
     * Get user group information
     *
     * @param int $groupId Group ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsergroupByGroupIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getUsergroupByGroupId(int $groupId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetUsergroupByGroupId($groupId), $fetch);
    }
    /**
     * Update user group information
     *
     * @param int $groupId Group ID
     * @param \Gyroscops\Harbor\Api\Model\UserGroup $usergroup 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsergroupByGroupIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putUsergroupByGroupId(int $groupId, \Gyroscops\Harbor\Api\Model\UserGroup $usergroup, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutUsergroupByGroupId($groupId, $usergroup), $fetch);
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
    * @throws \Gyroscops\Harbor\Api\Exception\GetQuotasForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\GetQuotasUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\GetQuotasInternalServerErrorException
    *
    * @return null|\Gyroscops\Harbor\Api\Model\Quota[]|\Psr\Http\Message\ResponseInterface
    */
    public function getQuotas(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetQuotas($queryParameters), $fetch);
    }
    /**
     * This endpoint is aimed to delete project by project ID.
     *
     * @param int $projectId Project ID of project which will be deleted.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectByProjectIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectByProjectId(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteProjectByProjectId($projectId), $fetch);
    }
    /**
     * This endpoint returns specific project information by project ID.
     *
     * @param int $projectId Project ID for filtering results.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectByProjectIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectByProjectIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectByProjectId(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectByProjectId($projectId), $fetch);
    }
    /**
     * This endpoint is aimed to update the properties of a project.
     *
     * @param int $projectId Selected project ID.
     * @param \Gyroscops\Harbor\Api\Model\ProjectReq $project Updates of project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectByProjectIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectByProjectId(int $projectId, \Gyroscops\Harbor\Api\Model\ProjectReq $project, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutProjectByProjectId($projectId, $project), $fetch);
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
    * @throws \Gyroscops\Harbor\Api\Exception\GetUsersCurrentPermissionsUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\GetUsersCurrentPermissionsInternalServerErrorException
    *
    * @return null|\Gyroscops\Harbor\Api\Model\Permission[]|\Psr\Http\Message\ResponseInterface
    */
    public function getUsersCurrentPermissions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetUsersCurrentPermissions($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersCurrentUnauthorizedException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function getUsersCurrent(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetUsersCurrent(), $fetch);
    }
    /**
     * This endpoint is aimed to delete webhookpolicy of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param int $policyId The id of webhook policy.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdWebhookPolicyByPolicyId(int $projectId, int $policyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteProjectsByProjectIdWebhookPolicyByPolicyId($projectId, $policyId), $fetch);
    }
    /**
     * This endpoint returns specified webhook policy of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param int $policyId The id of webhook policy.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookPolicyByPolicyId(int $projectId, int $policyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookPolicyByPolicyId($projectId, $policyId), $fetch);
    }
    /**
     * This endpoint is aimed to update the webhook policy of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param int $policyId The id of webhook policy.
     * @param \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy All properties needed except "id", "project_id", "creation_time", "update_time".
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdWebhookPolicyByPolicyId(int $projectId, int $policyId, \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutProjectsByProjectIdWebhookPolicyByPolicyId($projectId, $policyId, $policy), $fetch);
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Project[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjects(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjects($queryParameters), $fetch);
    }
    /**
     * This endpoint is used to check if the project name user provided already exist.
     *
     * @param array $queryParameters {
     *     @var string $project_name Project name for checking exists.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\HeadProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\HeadProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function headProject(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\HeadProject($queryParameters), $fetch);
    }
    /**
     * This endpoint is for user to create a new project.
     *
     * @param \Gyroscops\Harbor\Api\Model\ProjectReq $project New created project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProject(\Gyroscops\Harbor\Api\Model\ProjectReq $project, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostProject($project), $fetch);
    }
    /**
     * This endpoint returns metadata of the project specified by project ID.
     *
     * @param int $projectId The ID of project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMetadataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMetadataInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdMetadata(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdMetadata($projectId), $fetch);
    }
    /**
     * This endpoint is aimed to add metadata of a project.
     *
     * @param int $projectId Selected project ID.
     * @param \Gyroscops\Harbor\Api\Model\ProjectMetadata $metadata The metadata of project.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdMetadataInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdMetadata(int $projectId, \Gyroscops\Harbor\Api\Model\ProjectMetadata $metadata, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostProjectsByProjectIdMetadata($projectId, $metadata), $fetch);
    }
    /**
     * Get supportted event types and notify types.
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\SupportedWebhookEventTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookEvent(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookEvent($projectId), $fetch);
    }
    /**
     * This endpoint searches the available ldap groups based on related configuration parameters. support to search by groupname or groupdn.
     *
     * @param array $queryParameters {
     *     @var string $groupname Ldap group name
     *     @var string $groupdn The LDAP group DN
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetLdapGroupsSearchNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLdapGroupsSearchInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLdapGroupsSearchBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function getLdapGroupsSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetLdapGroupsSearch($queryParameters), $fetch);
    }
    /**
     * Delete the specified robot account
     *
     * @param int $projectId Relevant project ID.
     * @param int $robotId The ID of robot account.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdRobotByRobotIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdRobotByRobotIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdRobotByRobotIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdRobotByRobotIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdRobotByRobotId(int $projectId, int $robotId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteProjectsByProjectIdRobotByRobotId($projectId, $robotId), $fetch);
    }
    /**
     * Return the infor of the specified robot account.
     *
     * @param int $projectId Relevant project ID.
     * @param int $robotId The ID of robot account.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotAccount|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdRobotByRobotId(int $projectId, int $robotId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdRobotByRobotId($projectId, $robotId), $fetch);
    }
    /**
     * Used to disable/enable a specified robot account.
     *
     * @param int $projectId Relevant project ID.
     * @param int $robotId The ID of robot account.
     * @param \Gyroscops\Harbor\Api\Model\RobotAccountUpdate $robot Request body of enable/disable a robot account.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdRobotByRobotIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdRobotByRobotId(int $projectId, int $robotId, \Gyroscops\Harbor\Api\Model\RobotAccountUpdate $robot, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutProjectsByProjectIdRobotByRobotId($projectId, $robotId, $robot), $fetch);
    }
    /**
    * This endpoint let a registered user change to be an administrator
    of Harbor.
    
    *
    * @param int $userId Registered user ID
    * @param \Gyroscops\Harbor\Api\Model\SysAdminFlag $sysadminFlag Toggle a user to admin or not.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminNotFoundException
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminBadRequestException
    * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdSysadminInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function putUsersByUserIdSysadmin(int $userId, \Gyroscops\Harbor\Api\Model\SysAdminFlag $sysadminFlag, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutUsersByUserIdSysadmin($userId, $sysadminFlag), $fetch);
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPoliciesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPoliciesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPoliciesInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPoliciesBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationPolicy[]|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationPolicies(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationPolicies($queryParameters), $fetch);
    }
    /**
     * This endpoint let user create a replication policy
     *
     * @param \Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy The policy model.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationPolicyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postReplicationPolicy(\Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostReplicationPolicy($policy), $fetch);
    }
    /**
     * Get a Retention job, job status may be delayed before job service schedule it up.
     *
     * @param int $id Retention ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionsByIdExecutionsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionExecution[]|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionsByIdExecutions(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRetentionsByIdExecutions($id), $fetch);
    }
    /**
     * Trigger a Retention job, if dry_run is True, nothing would be deleted actually.
     *
     * @param int $id Retention ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsPostBody $action 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionsByIdExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionsByIdExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionsByIdExecutionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postRetentionsByIdExecution(int $id, \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsPostBody $action, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostRetentionsByIdExecution($id, $action), $fetch);
    }
    /**
     * This endpoint is for user to update password. Users with the admin role can change any user's password. Guest users can change only their own password.
     *
     * @param int $userId Registered user ID.
     * @param \Gyroscops\Harbor\Api\Model\Password $password Password to be updated, the attribute 'old_password' is optional when the API is called by the system administrator.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putUsersByUserIdPassword(int $userId, \Gyroscops\Harbor\Api\Model\Password $password, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutUsersByUserIdPassword($userId, $password), $fetch);
    }
    /**
     * Retrieve the system configured scanner registrations as candidates of setting project level scanner.
     *
     * @param int $projectId The project identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdScannerCandidatesBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdScannerCandidates(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdScannerCandidates($projectId), $fetch);
    }
    /**
     * Return the attahced labels of the specified chart version.
     *
     * @param string $repo The project name
     * @param string $name The chart name
     * @param string $version The chart version
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getChartrepoByRepoChartsByNameByVersionLabel(string $repo, string $name, string $version, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetChartrepoByRepoChartsByNameByVersionLabel($repo, $name, $version), $fetch);
    }
    /**
     * Mark label to the specified chart version.
     *
     * @param string $repo The project name
     * @param string $name The chart name
     * @param string $version The chart version
     * @param \Gyroscops\Harbor\Api\Model\Label $label The label being marked to the chart version
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postChartrepoByRepoChartsByNameByVersionLabel(string $repo, string $name, string $version, \Gyroscops\Harbor\Api\Model\Label $label, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostChartrepoByRepoChartsByNameByVersionLabel($repo, $name, $version, $label), $fetch);
    }
    /**
     * Get summary of the project.
     *
     * @param int $projectId Relevant project ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdSummaryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdSummaryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdSummaryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdSummaryBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdSummaryInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectSummary|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdSummary(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdSummary($projectId), $fetch);
    }
    /**
     * This endpoint returns webhook policies of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPoliciesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPoliciesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPoliciesInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPoliciesBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookPolicy[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookPolicies(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookPolicies($projectId), $fetch);
    }
    /**
     * This endpoint create a webhook policy if the project does not have one.
     *
     * @param int $projectId Relevant project ID
     * @param \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy Properties "targets" and "event_types" needed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdWebhookPolicy(int $projectId, \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostProjectsByProjectIdWebhookPolicy($projectId, $policy), $fetch);
    }
    /**
     * Remove label from the specified chart version.
     *
     * @param string $repo The project name
     * @param string $name The chart name
     * @param string $version The chart version
     * @param int $id The label ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteChartrepoByRepoChartsByNameByVersionLabelById(string $repo, string $name, string $version, int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteChartrepoByRepoChartsByNameByVersionLabelById($repo, $name, $version, $id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScansScheduleMetricForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScansScheduleMetricUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScansScheduleMetricInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Stats|\Psr\Http\Message\ResponseInterface
     */
    public function getScansScheduleMetric(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScansScheduleMetric(), $fetch);
    }
    /**
     * This endpoint let user get gc status filtered by specific ID.
     *
     * @param int $id Relevant job ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemGcByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\GCResult|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemGcById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSystemGcById($id), $fetch);
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationExecution[]|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationExecutions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationExecutions($queryParameters), $fetch);
    }
    /**
     * This endpoint is for user to start one execution of the replication.
     *
     * @param \Gyroscops\Harbor\Api\Model\ReplicationExecution $execution The execution that needs to be started, only the property "policy_id" is needed.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationExecutionUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationExecutionBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostReplicationExecutionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postReplicationExecution(\Gyroscops\Harbor\Api\Model\ReplicationExecution $execution, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostReplicationExecution($execution), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemCVEWhitelistUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemCVEWhitelistInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\CVEWhitelist|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemCVEWhitelist(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSystemCVEWhitelist(), $fetch);
    }
    /**
     * This API overwrites the system level whitelist of CVE with the list in request body.  Only system Admin has permission to call this API.
     *
     * @param \Gyroscops\Harbor\Api\Model\CVEWhitelist $whitelist The whitelist with new content
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemCVEWhitelistForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemCVEWhitelistUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemCVEWhitelistInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSystemCVEWhitelist(\Gyroscops\Harbor\Api\Model\CVEWhitelist $whitelist, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutSystemCVEWhitelist($whitelist), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Harbor\Api\Model\OverallHealthStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getHealth(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetHealth(), $fetch);
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUsersBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\User[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUsers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetUsers($queryParameters), $fetch);
    }
    /**
     * This endpoint is to create a user if the user does not already exist.
     *
     * @param \Gyroscops\Harbor\Api\Model\User $user New created user.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostUserUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUserForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUserInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostUserBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postUser(\Gyroscops\Harbor\Api\Model\User $user, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostUser($user), $fetch);
    }
    /**
     * Stop a Retention job, only support "stop" action now.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $action The action, only support "stop" now.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PatchRetentionsByIdExecutionByEidInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function patchRetentionsByIdExecutionByEid(int $id, int $eid, \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $action, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PatchRetentionsByIdExecutionByEid($id, $eid, $action), $fetch);
    }
    /**
     * This endpoint is for to delete specific registry.
     *
     * @param int $id The registry's ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryByIdBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRegistryById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteRegistryById($id), $fetch);
    }
    /**
     * This endpoint is for get specific registry.
     *
     * @param int $id The registry ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Registry|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistryById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRegistryById($id), $fetch);
    }
    /**
     * This endpoint is for update a given registry.
     *
     * @param int $id The registry's ID.
     * @param \Gyroscops\Harbor\Api\Model\PutRegistry $repoTarget Updates registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutRegistryByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutRegistryByIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PutRegistryByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutRegistryByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutRegistryByIdConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putRegistryById(int $id, \Gyroscops\Harbor\Api\Model\PutRegistry $repoTarget, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutRegistryById($id, $repoTarget), $fetch);
    }
    /**
     * This endpoint searches the available ldap users based on related configuration parameters. Support searched by input ladp configuration, load configuration from the system and specific filter.
     *
     * @param array $queryParameters {
     *     @var string $username Registered user ID
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetLdapUsersSearchForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLdapUsersSearchUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLdapUsersSearchInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\LdapUsers[]|\Psr\Http\Message\ResponseInterface
     */
    public function getLdapUsersSearch(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetLdapUsersSearch($queryParameters), $fetch);
    }
    /**
    * Create Retention Policy, you can reference metadatas API for the policy model.
    You can check project metadatas to find whether a retention policy is already binded.
    This method should only be called when no retention policy binded to project yet.
    
    *
    * @param \Gyroscops\Harbor\Api\Model\RetentionPolicy $policy Create Retention Policy successfully.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionInternalServerErrorException
    * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionBadRequestException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postRetention(\Gyroscops\Harbor\Api\Model\RetentionPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostRetention($policy), $fetch);
    }
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $mid Member ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdMemberByMidBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectsByProjectIdMemberByMid(int $projectId, int $mid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteProjectsByProjectIdMemberByMid($projectId, $mid), $fetch);
    }
    /**
     * Get the project member information
     *
     * @param int $projectId Relevant project ID.
     * @param int $mid The member ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectMemberEntity|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdMemberByMid(int $projectId, int $mid, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdMemberByMid($projectId, $mid), $fetch);
    }
    /**
     * Update project member relationship
     *
     * @param int $projectId Relevant project ID.
     * @param int $mid Member ID.
     * @param \Gyroscops\Harbor\Api\Model\RoleRequest $role 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdMemberByMidInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putProjectsByProjectIdMemberByMid(int $projectId, int $mid, \Gyroscops\Harbor\Api\Model\RoleRequest $role, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutProjectsByProjectIdMemberByMid($projectId, $mid, $role), $fetch);
    }
    /**
    * This endpoint adds the selected available ldap users to harbor based on related configuration parameters from the system. System will try to guess the user email address and realname, add to harbor user information.
    If have errors when import user, will return the list of importing failed uid and the failed reason.
    
    *
    * @param \Gyroscops\Harbor\Api\Model\LdapImportUsers $uidList The uid listed for importing. This list will check users validity of ldap service based on configuration from the system.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportNotFoundException
    * @throws \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\PostLdapUsersImportUnsupportedMediaTypeException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function postLdapUsersImport(\Gyroscops\Harbor\Api\Model\LdapImportUsers $uidList, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostLdapUsersImport($uidList), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationAdaptersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationAdaptersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationAdaptersInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationAdapters(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationAdapters(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSysteminfoGetcertNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSysteminfoGetcertInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getSysteminfoGetcert(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSysteminfoGetcert(), $fetch);
    }
    /**
     * Get the specified quota
     *
     * @param int $id Quota ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Quota|\Psr\Http\Message\ResponseInterface
     */
    public function getQuotaById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetQuotaById($id), $fetch);
    }
    /**
     * Update hard limits of the specified quota
     *
     * @param int $id Quota ID
     * @param \Gyroscops\Harbor\Api\Model\QuotaUpdateReq $hard The new hard limits for the quota
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutQuotaByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putQuotaById(int $id, \Gyroscops\Harbor\Api\Model\QuotaUpdateReq $hard, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutQuotaById($id, $hard), $fetch);
    }
    /**
     * This endpoint returns the immutable tag rules of a project
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionRule[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdImmutabletagrules(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdImmutabletagrules($projectId), $fetch);
    }
    /**
     * This endpoint add an immutable tag rule to the project
     *
     * @param int $projectId Relevant project ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionRule $retentionRule 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postProjectsByProjectIdImmutabletagrule(int $projectId, \Gyroscops\Harbor\Api\Model\RetentionRule $retentionRule, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostProjectsByProjectIdImmutabletagrule($projectId, $retentionRule), $fetch);
    }
    /**
     * Delete the replication policy specified by ID.
     *
     * @param int $id Replication policy ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReplicationPolicyById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteReplicationPolicyById($id), $fetch);
    }
    /**
     * This endpoint let user get replication policy by specific ID.
     *
     * @param int $id policy ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationPolicyById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationPolicyById($id), $fetch);
    }
    /**
     * This endpoint let user update policy.
     *
     * @param int $id policy ID
     * @param \Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy The replication policy model.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationPolicyByIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putReplicationPolicyById(int $id, \Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutReplicationPolicyById($id, $policy), $fetch);
    }
    /**
     * This endpoint let user list filtered registries by name, if name is nil, list returns all registries.
     *
     * @param array $queryParameters {
     *     @var string $name Registry's name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistriesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistriesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Registry[]|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistries(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRegistries($queryParameters), $fetch);
    }
    /**
     * This endpoint is for user to create a new registry.
     *
     * @param \Gyroscops\Harbor\Api\Model\Registry $registry New created registry.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRegistryConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postRegistry(\Gyroscops\Harbor\Api\Model\Registry $registry, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostRegistry($registry), $fetch);
    }
    /**
     * Delete the label specified by ID.
     *
     * @param int $id Label ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLabelById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteLabelById($id), $fetch);
    }
    /**
     * This endpoint let user get the label by specific ID.
     *
     * @param int $id Label ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Label|\Psr\Http\Message\ResponseInterface
     */
    public function getLabelById(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetLabelById($id), $fetch);
    }
    /**
     * This endpoint let user update label properties.
     *
     * @param int $id Label ID
     * @param \Gyroscops\Harbor\Api\Model\Label $label The updated label json object.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutLabelByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutLabelByIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PutLabelByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutLabelByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutLabelByIdConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putLabelById(int $id, \Gyroscops\Harbor\Api\Model\Label $label, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutLabelById($id, $label), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetConfigurationForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetConfigurationUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetConfigurationInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ConfigurationsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getConfiguration(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetConfiguration(), $fetch);
    }
    /**
     * This endpoint is for modifying system configurations that only provides for admin user.
     *
     * @param \Gyroscops\Harbor\Api\Model\Configurations $configurations The configuration map can contain a subset of the attributes of the schema, which are to be updated.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutConfigurationForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutConfigurationUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutConfigurationInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putConfiguration(\Gyroscops\Harbor\Api\Model\Configurations $configurations, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutConfiguration($configurations), $fetch);
    }
    /**
     * Test the OIDC endpoint, the setting of the endpoint is provided in the request.  This API can only be called by system admin.
     *
     * @param \Gyroscops\Harbor\Api\Model\SystemOidcPingPostBody $endpoint Request body for OIDC endpoint to be tested.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemOidcPingForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemOidcPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemOidcPingBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postSystemOidcPing(\Gyroscops\Harbor\Api\Model\SystemOidcPingPostBody $endpoint, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostSystemOidcPing($endpoint), $fetch);
    }
    /**
     * Pings scanner adapter to test endpoint URL and authorization settings.
     *
     * @param \Gyroscops\Harbor\Api\Model\ScannerRegistrationSettings $settings A scanner registration settings to be tested.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannersPingForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannersPingUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannersPingInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostScannersPingBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postScannersPing(\Gyroscops\Harbor\Api\Model\ScannerRegistrationSettings $settings, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PostScannersPing($settings), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSysteminfoInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\GeneralInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getSysteminfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSysteminfo(), $fetch);
    }
    /**
    * This endpoint let administrator of Harbor mark a registered user as
    be removed.It actually won't be deleted from DB.
    
    *
    * @param int $userId User ID for marking as to be removed.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdNotFoundException
    * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdBadRequestException
    * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserByUserIdInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function deleteUserByUserId(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteUserByUserId($userId), $fetch);
    }
    /**
     * Get user's profile with user id.
     *
     * @param int $userId Registered user ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserByUserIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function getUserByUserId(int $userId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetUserByUserId($userId), $fetch);
    }
    /**
     * This endpoint let a registered user change his profile.
     *
     * @param int $userId Registered user ID
     * @param \Gyroscops\Harbor\Api\Model\UserProfile $profile Only email, realname and comment can be modified.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutUserByUserIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUserByUserIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUserByUserIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUserByUserIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUserByUserIdInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putUserByUserId(int $userId, \Gyroscops\Harbor\Api\Model\UserProfile $profile, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutUserByUserId($userId, $profile), $fetch);
    }
    /**
     * This endpoint is for user to get the log of one task.
     *
     * @param int $id The execution ID.
     * @param int $taskId The task ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionsByIdTasksByTaskIdLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationExecutionsByIdTasksByTaskIdLog(int $id, int $taskId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationExecutionsByIdTasksByTaskIdLog($id, $taskId), $fetch);
    }
    /**
     * Get the metadata of the specified scanner registration, including the capabilities and customzied properties.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannersByRegistrationIdMetadataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannersByRegistrationIdMetadataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannersByRegistrationIdMetadataInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerAdapterMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getScannersByRegistrationIdMetadata(string $registrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScannersByRegistrationIdMetadata($registrationId), $fetch);
    }
    /**
     * This endpoint returns last trigger information of project webhook policy.
     *
     * @param int $projectId Relevant project ID.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookLastTrigger[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectsByProjectIdWebhookLasttrigger(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectsByProjectIdWebhookLasttrigger($projectId), $fetch);
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
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Gyroscops\Harbor\Api\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}