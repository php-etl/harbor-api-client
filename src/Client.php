<?php

namespace Gyroscops\Harbor\Api;

class Client extends \Gyroscops\Harbor\Api\Runtime\Client\Client
{
    /**
     * Check the status of Harbor components. This path does not require authentication.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetHealthInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\OverallHealthStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getHealth(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetHealth($headerParameters), $fetch);
    }
    /**
     * The Search endpoint returns information about the projects and repositories offered at public status or related to the current logged in user. The response includes the project and repository list in a proper display order.
     *
     * @param array $queryParameters {
     *     @var string $q Search parameter for project and repository name.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\SearchInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Search|\Psr\Http\Message\ResponseInterface
     */
    public function search(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\Search($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get the statistic information about the projects and repositories
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetStatisticUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetStatisticInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Statistic|\Psr\Http\Message\ResponseInterface
     */
    public function getStatistic(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetStatistic($headerParameters), $fetch);
    }
    /**
     * This endpoint ping the available ldap service for test related configuration parameters.
     *
     * @param \Gyroscops\Harbor\Api\Model\LdapConf $ldapconf ldap configuration. support input ldap service configuration. If it is a empty request, will load current configuration from the system.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PingLdapBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PingLdapUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PingLdapForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PingLdapInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\LdapPingResult|\Psr\Http\Message\ResponseInterface
     */
    public function pingLdap(\Gyroscops\Harbor\Api\Model\LdapConf $ldapconf, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PingLdap($ldapconf, $headerParameters), $fetch);
    }
    /**
     * This endpoint searches the available ldap users based on related configuration parameters. Support searched by input ladp configuration, load configuration from the system and specific filter.
     *
     * @param array $queryParameters {
     *     @var string $username Registered user ID
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\SearchLdapUserBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\SearchLdapUserUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\SearchLdapUserForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\SearchLdapUserInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\LdapUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function searchLdapUser(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\SearchLdapUser($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint adds the selected available ldap users to harbor based on related configuration parameters from the system. System will try to guess the user email address and realname, add to harbor user information. If have errors when import user, will return the list of importing failed uid and the failed reason.
     *
     * @param \Gyroscops\Harbor\Api\Model\LdapImportUsers $uidList The uid listed for importing. This list will check users validity of ldap service based on configuration from the system.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ImportLdapUserBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ImportLdapUserUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ImportLdapUserForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ImportLdapUserNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ImportLdapUserInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function importLdapUser(\Gyroscops\Harbor\Api\Model\LdapImportUsers $uidList, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ImportLdapUser($uidList, $headerParameters), $fetch);
    }
    /**
     * This endpoint searches the available ldap groups based on related configuration parameters. support to search by groupname or groupdn.
     *
     * @param array $queryParameters {
     *     @var string $groupname Ldap group name
     *     @var string $groupdn The LDAP group DN
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\SearchLdapGroupBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\SearchLdapGroupUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\SearchLdapGroupForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\SearchLdapGroupInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function searchLdapGroup(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\SearchLdapGroup($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint is for retrieving system configurations that only provides for internal api call.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetInternalconfigUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetInternalconfigForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetInternalconfigInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getInternalconfig(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetInternalconfig($headerParameters), $fetch);
    }
    /**
     * This endpoint is for retrieving system configurations that only provides for admin user.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetConfigurationsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetConfigurationsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetConfigurationsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ConfigurationsResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getConfigurations(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetConfigurations($headerParameters), $fetch);
    }
    /**
     * This endpoint is for modifying system configurations that only provides for admin user.
     *
     * @param \Gyroscops\Harbor\Api\Model\Configurations $configurations The configuration map can contain a subset of the attributes of the schema, which are to be updated.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateConfigurationsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateConfigurationsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateConfigurationsInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateConfigurations(\Gyroscops\Harbor\Api\Model\Configurations $configurations, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateConfigurations($configurations, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns projects created by Harbor.
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var string $name The name of project.
     *     @var bool $public The project is public or private.
     *     @var string $owner The name of project owner.
     *     @var bool $with_detail Bool value indicating whether return detailed information of the project
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Project[]|\Psr\Http\Message\ResponseInterface
     */
    public function listProjects(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListProjects($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint is used to check if the project name provided already exist.
     *
     * @param array $queryParameters {
     *     @var string $project_name Project name for checking exists.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\HeadProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\HeadProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function headProject(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\HeadProject($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint is for user to create a new project.
     *
     * @param \Gyroscops\Harbor\Api\Model\ProjectReq $project New created project.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Resource-Name-In-Location The flag to indicate whether to return the name of the resource in Location. When X-Resource-Name-In-Location is true, the Location will return the name of the resource.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateProjectConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProject(\Gyroscops\Harbor\Api\Model\ProjectReq $project, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateProject($project, $headerParameters), $fetch);
    }
    /**
     * This endpoint is aimed to delete project by project ID.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProject(string $projectNameOrId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteProject($projectNameOrId, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns specific project information by project ID.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function getProject(string $projectNameOrId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProject($projectNameOrId, $headerParameters), $fetch);
    }
    /**
     * This endpoint is aimed to update the properties of a project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param \Gyroscops\Harbor\Api\Model\ProjectReq $project Updates of project.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateProject(string $projectNameOrId, \Gyroscops\Harbor\Api\Model\ProjectReq $project, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateProject($projectNameOrId, $project, $headerParameters), $fetch);
    }
    /**
     * Get the deletable status of the project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectDeletableUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectDeletableForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectDeletableNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectDeletableInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectDeletable|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectDeletable(string $projectNameOrId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectDeletable($projectNameOrId, $headerParameters), $fetch);
    }
    /**
     * Get summary of the project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectSummaryBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectSummaryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectSummaryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectSummaryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectSummaryInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectSummary|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectSummary(string $projectNameOrId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectSummary($projectNameOrId, $headerParameters), $fetch);
    }
    /**
     * Get all project member information
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $entityname The entity name to search.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMembersInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectMemberEntity[]|\Psr\Http\Message\ResponseInterface
     */
    public function listProjectMembers(string $projectNameOrId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListProjectMembers($projectNameOrId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Create project member relationship, the member can be one of the user_member and group_member,  The user_member need to specify user_id or username. If the user already exist in harbor DB, specify the user_id,  If does not exist in harbor DB, it will SearchAndOnBoard the user. The group_member need to specify id or ldap_group_dn. If the group already exist in harbor DB. specify the user group's id,  If does not exist, it will SearchAndOnBoard the group. 
     *
     * @param string $projectNameOrId The name or id of the project
     * @param \Gyroscops\Harbor\Api\Model\ProjectMember $projectMember 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateProjectMemberBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateProjectMemberUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateProjectMemberForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateProjectMemberConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateProjectMemberInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createProjectMember(string $projectNameOrId, \Gyroscops\Harbor\Api\Model\ProjectMember $projectMember, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateProjectMember($projectNameOrId, $projectMember, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $mid Member ID.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMemberBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMemberUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMemberForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMemberInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectMember(string $projectNameOrId, int $mid, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteProjectMember($projectNameOrId, $mid, $headerParameters), $fetch);
    }
    /**
     * Get the project member information
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $mid The member ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMemberBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMemberUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMemberForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMemberNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMemberInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProjectMemberEntity|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectMember(string $projectNameOrId, int $mid, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectMember($projectNameOrId, $mid, $headerParameters), $fetch);
    }
    /**
     * Update project member relationship
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $mid Member ID.
     * @param \Gyroscops\Harbor\Api\Model\RoleRequest $role 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMemberInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateProjectMember(string $projectNameOrId, int $mid, \Gyroscops\Harbor\Api\Model\RoleRequest $role, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateProjectMember($projectNameOrId, $mid, $role, $headerParameters), $fetch);
    }
    /**
     * Get the metadata of the specific project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMetadatasBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMetadatasUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMetadatasForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMetadatasNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProjectMetadatasInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listProjectMetadatas(string $projectNameOrId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListProjectMetadatas($projectNameOrId, $headerParameters), $fetch);
    }
    /**
     * Add metadata for the specific project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param \stdClass $metadata 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\AddProjectMetadatasBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\AddProjectMetadatasUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\AddProjectMetadatasForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\AddProjectMetadatasNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\AddProjectMetadatasConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\AddProjectMetadatasInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addProjectMetadatas(string $projectNameOrId, \stdClass $metadata, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\AddProjectMetadatas($projectNameOrId, $metadata, $headerParameters), $fetch);
    }
    /**
     * Delete the specific metadata for the specific project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param string $metaName The name of metadata.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectMetadataInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectMetadata(string $projectNameOrId, string $metaName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteProjectMetadata($projectNameOrId, $metaName, $headerParameters), $fetch);
    }
    /**
     * Get the specific metadata of the specific project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param string $metaName The name of metadata.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMetadataBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMetadataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMetadataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMetadataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectMetadataInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectMetadata(string $projectNameOrId, string $metaName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetProjectMetadata($projectNameOrId, $metaName, $headerParameters), $fetch);
    }
    /**
     * Update the specific metadata for the specific project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param string $metaName The name of metadata.
     * @param \stdClass $metadata 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMetadataBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMetadataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMetadataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMetadataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMetadataConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateProjectMetadataInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateProjectMetadata(string $projectNameOrId, string $metaName, \stdClass $metadata, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateProjectMetadata($projectNameOrId, $metaName, $metadata, $headerParameters), $fetch);
    }
    /**
     * List all authorized repositories
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListAllRepositoriesBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListAllRepositoriesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Repository[]|\Psr\Http\Message\ResponseInterface
     */
    public function listAllRepositories(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListAllRepositories($queryParameters, $headerParameters), $fetch);
    }
    /**
     * List repositories of the specified project
     *
     * @param string $projectName The name of the project
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListRepositoriesBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRepositoriesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRepositoriesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRepositoriesNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRepositoriesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Repository[]|\Psr\Http\Message\ResponseInterface
     */
    public function listRepositories(string $projectName, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListRepositories($projectName, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Delete the repository specified by name
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRepositoryBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRepositoryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRepositoryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRepositoryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRepositoryInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRepository(string $projectName, string $repositoryName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteRepository($projectName, $repositoryName, $headerParameters), $fetch);
    }
    /**
     * Get the repository specified by name
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRepositoryBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRepositoryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRepositoryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRepositoryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRepositoryInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Repository|\Psr\Http\Message\ResponseInterface
     */
    public function getRepository(string $projectName, string $repositoryName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRepository($projectName, $repositoryName, $headerParameters), $fetch);
    }
    /**
     * Update the repository specified by name
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param \Gyroscops\Harbor\Api\Model\Repository $repository The JSON object of repository.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRepositoryBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRepositoryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRepositoryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRepositoryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRepositoryInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateRepository(string $projectName, string $repositoryName, \Gyroscops\Harbor\Api\Model\Repository $repository, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateRepository($projectName, $repositoryName, $repository, $headerParameters), $fetch);
    }
    /**
    * List artifacts under the specific project and repository. Except the basic properties, the other supported queries in "q" includes "tags=*" to list only tagged artifacts, "tags=nil" to list only untagged artifacts, "tags=~v" to list artifacts whose tag fuzzy matches "v", "tags=v" to list artifact whose tag exactly matches "v", "labels=(id1, id2)" to list artifacts that both labels with id1 and id2 are added to
    *
    * @param string $projectName The name of the project
    * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
    * @param array $queryParameters {
    *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
    *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
    *     @var int $page The page number
    *     @var int $page_size The size of per page
    *     @var bool $with_tag Specify whether the tags are included inside the returning artifacts
    *     @var bool $with_label Specify whether the labels are included inside the returning artifacts
    *     @var bool $with_scan_overview Specify whether the scan overview is included inside the returning artifacts
    *     @var bool $with_signature Specify whether the signature is included inside the tags of the returning artifacts. Only works when setting "with_tag=true"
    *     @var bool $with_immutable_status Specify whether the immutable status is included inside the tags of the returning artifacts. Only works when setting "with_immutable_status=true"
    *     @var bool $with_accessory Specify whether the accessories are included of the returning artifacts. Only works when setting "with_accessory=true"
    * }
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    *     @var string $X-Accept-Vulnerabilities A comma-separated lists of MIME types for the scan report or scan summary. The first mime type will be used when the report found for it.
    Currently the mime type supports 'application/vnd.scanner.adapter.vuln.report.harbor+json; version=1.0' and 'application/vnd.security.vulnerability.report; version=1.1'
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsBadRequestException
    * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsNotFoundException
    * @throws \Gyroscops\Harbor\Api\Exception\ListArtifactsInternalServerErrorException
    *
    * @return null|\Gyroscops\Harbor\Api\Model\Artifact[]|\Psr\Http\Message\ResponseInterface
    */
    public function listArtifacts(string $projectName, string $repositoryName, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListArtifacts($projectName, $repositoryName, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Copy the artifact specified in the "from" parameter to the repository.
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param array $queryParameters {
     *     @var string $from The artifact from which the new artifact is copied from, the format should be "project/repository:tag" or "project/repository@digest".
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactMethodNotAllowedException
     * @throws \Gyroscops\Harbor\Api\Exception\CopyArtifactInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function copyArtifact(string $projectName, string $repositoryName, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CopyArtifact($projectName, $repositoryName, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Delete the artifact specified by the reference under the project and repository. The reference can be digest or tag
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteArtifactUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteArtifactForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteArtifactNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteArtifactInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteArtifact(string $projectName, string $repositoryName, string $reference, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteArtifact($projectName, $repositoryName, $reference, $headerParameters), $fetch);
    }
    /**
    * Get the artifact specified by the reference under the project and repository. The reference can be digest or tag.
    *
    * @param string $projectName The name of the project
    * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
    * @param string $reference The reference of the artifact, can be digest or tag
    * @param array $queryParameters {
    *     @var int $page The page number
    *     @var int $page_size The size of per page
    *     @var bool $with_tag Specify whether the tags are inclued inside the returning artifacts
    *     @var bool $with_label Specify whether the labels are inclued inside the returning artifacts
    *     @var bool $with_scan_overview Specify whether the scan overview is inclued inside the returning artifacts
    *     @var bool $with_accessory Specify whether the accessories are included of the returning artifacts.
    *     @var bool $with_signature Specify whether the signature is inclued inside the returning artifacts
    *     @var bool $with_immutable_status Specify whether the immutable status is inclued inside the tags of the returning artifacts.
    * }
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    *     @var string $X-Accept-Vulnerabilities A comma-separated lists of MIME types for the scan report or scan summary. The first mime type will be used when the report found for it.
    Currently the mime type supports 'application/vnd.scanner.adapter.vuln.report.harbor+json; version=1.0' and 'application/vnd.security.vulnerability.report; version=1.1'
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactBadRequestException
    * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactNotFoundException
    * @throws \Gyroscops\Harbor\Api\Exception\GetArtifactInternalServerErrorException
    *
    * @return null|\Gyroscops\Harbor\Api\Model\Artifact|\Psr\Http\Message\ResponseInterface
    */
    public function getArtifact(string $projectName, string $repositoryName, string $reference, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetArtifact($projectName, $repositoryName, $reference, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Scan the specified artifact
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ScanArtifactBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ScanArtifactUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ScanArtifactForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ScanArtifactNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ScanArtifactInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function scanArtifact(string $projectName, string $repositoryName, string $reference, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ScanArtifact($projectName, $repositoryName, $reference, $headerParameters), $fetch);
    }
    /**
     * Cancelling a scan job for a particular artifact
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\StopScanArtifactBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\StopScanArtifactUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\StopScanArtifactForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\StopScanArtifactNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\StopScanArtifactInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function stopScanArtifact(string $projectName, string $repositoryName, string $reference, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\StopScanArtifact($projectName, $repositoryName, $reference, $headerParameters), $fetch);
    }
    /**
     * Get the log of the scan report
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param string $reportId The report id to get the log
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetReportLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReportLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReportLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReportLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getReportLog(string $projectName, string $repositoryName, string $reference, string $reportId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReportLog($projectName, $repositoryName, $reference, $reportId, $headerParameters), $fetch);
    }
    /**
     * List tags of the specific artifact
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var bool $with_signature Specify whether the signature is included inside the returning tags
     *     @var bool $with_immutable_status Specify whether the immutable status is included inside the returning tags
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListTagsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTagsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTagsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTagsNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTagsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Tag[]|\Psr\Http\Message\ResponseInterface
     */
    public function listTags(string $projectName, string $repositoryName, string $reference, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListTags($projectName, $repositoryName, $reference, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Create a tag for the specified artifact
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param \Gyroscops\Harbor\Api\Model\Tag $tag The JSON object of tag.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateTagBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateTagUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateTagForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateTagNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateTagMethodNotAllowedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateTagConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateTagInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createTag(string $projectName, string $repositoryName, string $reference, \Gyroscops\Harbor\Api\Model\Tag $tag, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateTag($projectName, $repositoryName, $reference, $tag, $headerParameters), $fetch);
    }
    /**
     * Delete the tag of the specified artifact
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param string $tagName The name of the tag
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteTagUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteTagForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteTagNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteTagInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTag(string $projectName, string $repositoryName, string $reference, string $tagName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteTag($projectName, $repositoryName, $reference, $tagName, $headerParameters), $fetch);
    }
    /**
     * List accessories of the specific artifact
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListAccessoriesBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListAccessoriesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListAccessoriesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListAccessoriesNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListAccessoriesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Accessory[]|\Psr\Http\Message\ResponseInterface
     */
    public function listAccessories(string $projectName, string $repositoryName, string $reference, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListAccessories($projectName, $repositoryName, $reference, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * Get the vulnerabilities addition of the artifact specified by the reference under the project and repository.
    *
    * @param string $projectName The name of the project
    * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
    * @param string $reference The reference of the artifact, can be digest or tag
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    *     @var string $X-Accept-Vulnerabilities A comma-separated lists of MIME types for the scan report or scan summary. The first mime type will be used when the report found for it.
    Currently the mime type supports 'application/vnd.scanner.adapter.vuln.report.harbor+json; version=1.0' and 'application/vnd.security.vulnerability.report; version=1.1'
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionBadRequestException
    * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionNotFoundException
    * @throws \Gyroscops\Harbor\Api\Exception\GetVulnerabilitiesAdditionInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function getVulnerabilitiesAddition(string $projectName, string $repositoryName, string $reference, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetVulnerabilitiesAddition($projectName, $repositoryName, $reference, $headerParameters), $fetch);
    }
    /**
     * Get the addition of the artifact specified by the reference under the project and repository.
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param string $addition The type of addition.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetAdditionBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetAdditionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetAdditionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetAdditionNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetAdditionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAddition(string $projectName, string $repositoryName, string $reference, string $addition, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetAddition($projectName, $repositoryName, $reference, $addition, $headerParameters), $fetch);
    }
    /**
     * Add label to the specified artiact.
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param \Gyroscops\Harbor\Api\Model\Label $label The label that added to the artifact. Only the ID property is needed.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\AddLabelBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\AddLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\AddLabelForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\AddLabelNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\AddLabelConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\AddLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addLabel(string $projectName, string $repositoryName, string $reference, \Gyroscops\Harbor\Api\Model\Label $label, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\AddLabel($projectName, $repositoryName, $reference, $label, $headerParameters), $fetch);
    }
    /**
     * Remove the label from the specified artiact.
     *
     * @param string $projectName The name of the project
     * @param string $repositoryName The name of the repository. If it contains slash, encode it twice over with URL encoding. e.g. a/b -> a%2Fb -> a%252Fb
     * @param string $reference The reference of the artifact, can be digest or tag
     * @param int $labelId The ID of the label that removed from the artifact.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\RemoveLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\RemoveLabelForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\RemoveLabelNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\RemoveLabelConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\RemoveLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removeLabel(string $projectName, string $repositoryName, string $reference, int $labelId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\RemoveLabel($projectName, $repositoryName, $reference, $labelId, $headerParameters), $fetch);
    }
    /**
     * Get the scanner registration of the specified project. If no scanner registration is configured for the specified project, the system default scanner registration will be returned.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerOfProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerOfProjectInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration|\Psr\Http\Message\ResponseInterface
     */
    public function getScannerOfProject(string $projectNameOrId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScannerOfProject($projectNameOrId, $headerParameters), $fetch);
    }
    /**
     * Set one of the system configured scanner registration as the indepndent scanner of the specified project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param \Gyroscops\Harbor\Api\Model\ProjectScanner $payload 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\SetScannerOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\SetScannerOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\SetScannerOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\SetScannerOfProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\SetScannerOfProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function setScannerOfProject(string $projectNameOrId, \Gyroscops\Harbor\Api\Model\ProjectScanner $payload, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\SetScannerOfProject($projectNameOrId, $payload, $headerParameters), $fetch);
    }
    /**
     * Retrieve the system configured scanner registrations as candidates of setting project level scanner.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListScannerCandidatesOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListScannerCandidatesOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListScannerCandidatesOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListScannerCandidatesOfProjectInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration[]|\Psr\Http\Message\ResponseInterface
     */
    public function listScannerCandidatesOfProject(string $projectNameOrId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListScannerCandidatesOfProject($projectNameOrId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user see the recent operation logs of the projects which he is member of
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListAuditLogsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListAuditLogsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListAuditLogsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\AuditLog[]|\Psr\Http\Message\ResponseInterface
     */
    public function listAuditLogs(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListAuditLogs($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get recent logs of the projects
     *
     * @param string $projectName The name of the project
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\AuditLog[]|\Psr\Http\Message\ResponseInterface
     */
    public function getLogs(string $projectName, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetLogs($projectName, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * List P2P providers
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Metadata[]|\Psr\Http\Message\ResponseInterface
     */
    public function listProviders(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListProviders($headerParameters), $fetch);
    }
    /**
     * This endpoint checks status of a instance, the instance can be given by ID or Endpoint URL (together with credential)
     *
     * @param \Gyroscops\Harbor\Api\Model\Instance $instance The JSON object of instance.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PingInstancesBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PingInstancesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PingInstancesNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PingInstancesInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pingInstances(\Gyroscops\Harbor\Api\Model\Instance $instance, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PingInstances($instance, $headerParameters), $fetch);
    }
    /**
     * List P2P provider instances
     *
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListInstancesBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListInstancesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListInstancesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListInstancesNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListInstancesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Instance[]|\Psr\Http\Message\ResponseInterface
     */
    public function listInstances(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListInstances($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Create p2p provider instances
     *
     * @param \Gyroscops\Harbor\Api\Model\Instance $instance The JSON object of instance.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateInstanceBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateInstanceUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateInstanceForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateInstanceNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateInstanceConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateInstanceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createInstance(\Gyroscops\Harbor\Api\Model\Instance $instance, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateInstance($instance, $headerParameters), $fetch);
    }
    /**
     * Delete the specified P2P provider instance
     *
     * @param string $preheatInstanceName Instance Name
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteInstanceUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteInstanceForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteInstanceNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteInstanceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInstance(string $preheatInstanceName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteInstance($preheatInstanceName, $headerParameters), $fetch);
    }
    /**
     * Get a P2P provider instance
     *
     * @param string $preheatInstanceName Instance Name
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetInstanceBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetInstanceUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetInstanceForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetInstanceNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetInstanceInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Instance|\Psr\Http\Message\ResponseInterface
     */
    public function getInstance(string $preheatInstanceName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetInstance($preheatInstanceName, $headerParameters), $fetch);
    }
    /**
     * Update the specified P2P provider instance
     *
     * @param string $preheatInstanceName Instance Name
     * @param \Gyroscops\Harbor\Api\Model\Instance $instance The instance to update
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateInstanceBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateInstanceUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateInstanceForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateInstanceNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateInstanceInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateInstance(string $preheatInstanceName, \Gyroscops\Harbor\Api\Model\Instance $instance, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateInstance($preheatInstanceName, $instance, $headerParameters), $fetch);
    }
    /**
     * List preheat policies
     *
     * @param string $projectName The name of the project
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListPoliciesBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListPoliciesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListPoliciesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListPoliciesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\PreheatPolicy[]|\Psr\Http\Message\ResponseInterface
     */
    public function listPolicies(string $projectName, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListPolicies($projectName, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Create a preheat policy under a project
     *
     * @param string $projectName The name of the project
     * @param \Gyroscops\Harbor\Api\Model\PreheatPolicy $policy The policy schema info
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreatePolicyBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreatePolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreatePolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreatePolicyConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreatePolicyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createPolicy(string $projectName, \Gyroscops\Harbor\Api\Model\PreheatPolicy $policy, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreatePolicy($projectName, $policy, $headerParameters), $fetch);
    }
    /**
     * Delete a preheat policy
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeletePolicyBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeletePolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeletePolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeletePolicyNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeletePolicyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePolicy(string $projectName, string $preheatPolicyName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeletePolicy($projectName, $preheatPolicyName, $headerParameters), $fetch);
    }
    /**
     * Get a preheat policy
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetPolicyBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPolicyNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPolicyInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\PreheatPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getPolicy(string $projectName, string $preheatPolicyName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetPolicy($projectName, $preheatPolicyName, $headerParameters), $fetch);
    }
    /**
     * Manual preheat
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param \Gyroscops\Harbor\Api\Model\PreheatPolicy $policy The policy schema info
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ManualPreheatBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ManualPreheatUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ManualPreheatForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ManualPreheatNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ManualPreheatInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function manualPreheat(string $projectName, string $preheatPolicyName, \Gyroscops\Harbor\Api\Model\PreheatPolicy $policy, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ManualPreheat($projectName, $preheatPolicyName, $policy, $headerParameters), $fetch);
    }
    /**
     * Update preheat policy
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param \Gyroscops\Harbor\Api\Model\PreheatPolicy $policy The policy schema info
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdatePolicyBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdatePolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdatePolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdatePolicyNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdatePolicyConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdatePolicyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updatePolicy(string $projectName, string $preheatPolicyName, \Gyroscops\Harbor\Api\Model\PreheatPolicy $policy, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdatePolicy($projectName, $preheatPolicyName, $policy, $headerParameters), $fetch);
    }
    /**
     * List executions for the given policy
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Execution[]|\Psr\Http\Message\ResponseInterface
     */
    public function listExecutions(string $projectName, string $preheatPolicyName, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListExecutions($projectName, $preheatPolicyName, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get a execution detail by id
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param int $executionId Execution ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Execution|\Psr\Http\Message\ResponseInterface
     */
    public function getExecution(string $projectName, string $preheatPolicyName, int $executionId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetExecution($projectName, $preheatPolicyName, $executionId, $headerParameters), $fetch);
    }
    /**
     * Stop a execution
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param int $executionId Execution ID
     * @param \Gyroscops\Harbor\Api\Model\Execution $execution The data of execution
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function stopExecution(string $projectName, string $preheatPolicyName, int $executionId, \Gyroscops\Harbor\Api\Model\Execution $execution, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\StopExecution($projectName, $preheatPolicyName, $executionId, $execution, $headerParameters), $fetch);
    }
    /**
     * List all the related tasks for the given execution
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param int $executionId Execution ID
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Task[]|\Psr\Http\Message\ResponseInterface
     */
    public function listTasks(string $projectName, string $preheatPolicyName, int $executionId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListTasks($projectName, $preheatPolicyName, $executionId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get the log text stream of the specified task for the given execution
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param int $executionId Execution ID
     * @param int $taskId Task ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPreheatLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPreheatLog(string $projectName, string $preheatPolicyName, int $executionId, int $taskId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetPreheatLog($projectName, $preheatPolicyName, $executionId, $taskId, $headerParameters), $fetch);
    }
    /**
     * Get all providers at project level
     *
     * @param string $projectName The name of the project
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersUnderProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersUnderProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersUnderProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersUnderProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListProvidersUnderProjectInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ProviderUnderProject[]|\Psr\Http\Message\ResponseInterface
     */
    public function listProvidersUnderProject(string $projectName, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListProvidersUnderProject($projectName, $headerParameters), $fetch);
    }
    /**
     * Get all robot accounts of specified project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListRobotV1BadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRobotV1NotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRobotV1InternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Robot[]|\Psr\Http\Message\ResponseInterface
     */
    public function listRobotV1(string $projectNameOrId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListRobotV1($projectNameOrId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Create a robot account
     *
     * @param string $projectNameOrId The name or id of the project
     * @param \Gyroscops\Harbor\Api\Model\RobotCreateV1 $robot The JSON object of a robot account.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1BadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1UnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1ForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1NotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotV1InternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotCreated|\Psr\Http\Message\ResponseInterface
     */
    public function createRobotV1(string $projectNameOrId, \Gyroscops\Harbor\Api\Model\RobotCreateV1 $robot, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateRobotV1($projectNameOrId, $robot, $headerParameters), $fetch);
    }
    /**
     * This endpoint deletes specific robot account information by robot ID.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $robotId Robot ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotV1BadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotV1UnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotV1ForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotV1NotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotV1InternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRobotV1(string $projectNameOrId, int $robotId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteRobotV1($projectNameOrId, $robotId, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns specific robot account information by robot ID.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $robotId Robot ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRobotByIDV1UnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRobotByIDV1ForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRobotByIDV1NotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRobotByIDV1InternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Robot|\Psr\Http\Message\ResponseInterface
     */
    public function getRobotByIDV1(string $projectNameOrId, int $robotId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRobotByIDV1($projectNameOrId, $robotId, $headerParameters), $fetch);
    }
    /**
     * Used to disable/enable a specified robot account.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $robotId Robot ID
     * @param \Gyroscops\Harbor\Api\Model\Robot $robot The JSON object of a robot account.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotV1BadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotV1UnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotV1ForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotV1NotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotV1ConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotV1InternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateRobotV1(string $projectNameOrId, int $robotId, \Gyroscops\Harbor\Api\Model\Robot $robot, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateRobotV1($projectNameOrId, $robotId, $robot, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns the immutable tag rules of a project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListImmuRulesBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListImmuRulesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListImmuRulesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListImmuRulesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ImmutableRule[]|\Psr\Http\Message\ResponseInterface
     */
    public function listImmuRules(string $projectNameOrId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListImmuRules($projectNameOrId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint add an immutable tag rule to the project
     *
     * @param string $projectNameOrId The name or id of the project
     * @param \Gyroscops\Harbor\Api\Model\ImmutableRule $immutableRule 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateImmuRuleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateImmuRuleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateImmuRuleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateImmuRuleNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateImmuRuleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createImmuRule(string $projectNameOrId, \Gyroscops\Harbor\Api\Model\ImmutableRule $immutableRule, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateImmuRule($projectNameOrId, $immutableRule, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $immutableRuleId The ID of the immutable rule
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteImmuRuleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteImmuRuleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteImmuRuleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteImmuRuleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteImmuRule(string $projectNameOrId, int $immutableRuleId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteImmuRule($projectNameOrId, $immutableRuleId, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $immutableRuleId The ID of the immutable rule
     * @param \Gyroscops\Harbor\Api\Model\ImmutableRule $immutableRule 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateImmuRuleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateImmuRuleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateImmuRuleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateImmuRuleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateImmuRule(string $projectNameOrId, int $immutableRuleId, \Gyroscops\Harbor\Api\Model\ImmutableRule $immutableRule, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateImmuRule($projectNameOrId, $immutableRuleId, $immutableRule, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns webhook policies of a project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $queryParameters {
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListWebhookPoliciesOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListWebhookPoliciesOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListWebhookPoliciesOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListWebhookPoliciesOfProjectInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookPolicy[]|\Psr\Http\Message\ResponseInterface
     */
    public function listWebhookPoliciesOfProject(string $projectNameOrId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListWebhookPoliciesOfProject($projectNameOrId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint create a webhook policy if the project does not have one.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy Properties "targets" and "event_types" needed.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateWebhookPolicyOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateWebhookPolicyOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateWebhookPolicyOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateWebhookPolicyOfProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createWebhookPolicyOfProject(string $projectNameOrId, \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateWebhookPolicyOfProject($projectNameOrId, $policy, $headerParameters), $fetch);
    }
    /**
     * This endpoint is aimed to delete webhookpolicy of a project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $webhookPolicyId The ID of the webhook policy
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteWebhookPolicyOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteWebhookPolicyOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteWebhookPolicyOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteWebhookPolicyOfProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteWebhookPolicyOfProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWebhookPolicyOfProject(string $projectNameOrId, int $webhookPolicyId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteWebhookPolicyOfProject($projectNameOrId, $webhookPolicyId, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns specified webhook policy of a project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $webhookPolicyId The ID of the webhook policy
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getWebhookPolicyOfProject(string $projectNameOrId, int $webhookPolicyId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetWebhookPolicyOfProject($projectNameOrId, $webhookPolicyId, $headerParameters), $fetch);
    }
    /**
     * This endpoint is aimed to update the webhook policy of a project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $webhookPolicyId The ID of the webhook policy
     * @param \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy All properties needed except "id", "project_id", "creation_time", "update_time".
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateWebhookPolicyOfProject(string $projectNameOrId, int $webhookPolicyId, \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateWebhookPolicyOfProject($projectNameOrId, $webhookPolicyId, $policy, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns the executions of a specific webhook policy.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $webhookPolicyId The ID of the webhook policy
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsOfWebhookPolicyBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsOfWebhookPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsOfWebhookPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsOfWebhookPolicyNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListExecutionsOfWebhookPolicyInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Execution[]|\Psr\Http\Message\ResponseInterface
     */
    public function listExecutionsOfWebhookPolicy(string $projectNameOrId, int $webhookPolicyId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListExecutionsOfWebhookPolicy($projectNameOrId, $webhookPolicyId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns the tasks of a specific webhook execution.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $webhookPolicyId The ID of the webhook policy
     * @param int $executionId Execution ID
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksOfWebhookExecutionBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksOfWebhookExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksOfWebhookExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksOfWebhookExecutionNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListTasksOfWebhookExecutionInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Task[]|\Psr\Http\Message\ResponseInterface
     */
    public function listTasksOfWebhookExecution(string $projectNameOrId, int $webhookPolicyId, int $executionId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListTasksOfWebhookExecution($projectNameOrId, $webhookPolicyId, $executionId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns the logs of a specific webhook task.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $webhookPolicyId The ID of the webhook policy
     * @param int $executionId Execution ID
     * @param int $taskId Task ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLogsOfWebhookTaskInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getLogsOfWebhookTask(string $projectNameOrId, int $webhookPolicyId, int $executionId, int $taskId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetLogsOfWebhookTask($projectNameOrId, $webhookPolicyId, $executionId, $taskId, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns last trigger information of project webhook policy.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\LastTriggerBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\LastTriggerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\LastTriggerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\LastTriggerInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookLastTrigger[]|\Psr\Http\Message\ResponseInterface
     */
    public function lastTrigger(string $projectNameOrId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\LastTrigger($projectNameOrId, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns webhook jobs of a project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var int $policy_id The policy ID.
     *     @var array $status The status of webhook job.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListWebhookJobsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListWebhookJobsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListWebhookJobsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListWebhookJobsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookJob[]|\Psr\Http\Message\ResponseInterface
     */
    public function listWebhookJobs(string $projectNameOrId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListWebhookJobs($projectNameOrId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get supported event types and notify types.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSupportedEventTypesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSupportedEventTypesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSupportedEventTypesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\SupportedWebhookEventTypes|\Psr\Http\Message\ResponseInterface
     */
    public function getSupportedEventTypes(string $projectNameOrId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSupportedEventTypes($projectNameOrId, $headerParameters), $fetch);
    }
    /**
     * Get all user groups information, it is open for system admin
     *
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $ldap_group_dn search with ldap group DN
     *     @var string $group_name group name need to search, fuzzy matches
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListUserGroupsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListUserGroupsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListUserGroupsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserGroup[]|\Psr\Http\Message\ResponseInterface
     */
    public function listUserGroups(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListUserGroups($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Create user group information
     *
     * @param \Gyroscops\Harbor\Api\Model\UserGroup $usergroup 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserGroupBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserGroupUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserGroupForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserGroupConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserGroupInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createUserGroup(\Gyroscops\Harbor\Api\Model\UserGroup $usergroup, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateUserGroup($usergroup, $headerParameters), $fetch);
    }
    /**
     * This endpoint is to search groups by group name.  It's open for all authenticated requests.
     *
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $groupname Group name for filtering results.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\SearchUserGroupsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\SearchUserGroupsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserGroupSearchItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function searchUserGroups(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\SearchUserGroups($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Delete user group
     *
     * @param int $groupId 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserGroupBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserGroupUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserGroupForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserGroupInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserGroup(int $groupId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteUserGroup($groupId, $headerParameters), $fetch);
    }
    /**
     * Get user group information
     *
     * @param int $groupId Group ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserGroupBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserGroupUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserGroupForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserGroupNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserGroupInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserGroup|\Psr\Http\Message\ResponseInterface
     */
    public function getUserGroup(int $groupId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetUserGroup($groupId, $headerParameters), $fetch);
    }
    /**
     * Update user group information
     *
     * @param int $groupId Group ID
     * @param \Gyroscops\Harbor\Api\Model\UserGroup $usergroup 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserGroupBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserGroupUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserGroupForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserGroupNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserGroupInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateUserGroup(int $groupId, \Gyroscops\Harbor\Api\Model\UserGroup $usergroup, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateUserGroup($groupId, $usergroup, $headerParameters), $fetch);
    }
    /**
     * Get the artifact icon with the specified digest. As the original icon image is resized and encoded before returning, the parameter "digest" in the path doesn't match the hash of the returned content
     *
     * @param string $digest The digest of the resource
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetIconBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetIconNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetIconInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Icon|\Psr\Http\Message\ResponseInterface
     */
    public function getIcon(string $digest, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetIcon($digest, $headerParameters), $fetch);
    }
    /**
     * List the robot accounts with the specified level and project.
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListRobotBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRobotNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRobotInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Robot[]|\Psr\Http\Message\ResponseInterface
     */
    public function listRobot(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListRobot($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Create a robot account
     *
     * @param \Gyroscops\Harbor\Api\Model\RobotCreate $robot The JSON object of a robot account.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRobotInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotCreated|\Psr\Http\Message\ResponseInterface
     */
    public function createRobot(\Gyroscops\Harbor\Api\Model\RobotCreate $robot, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateRobot($robot, $headerParameters), $fetch);
    }
    /**
    * List quotas
    *
    * @param array $queryParameters {
    *     @var int $page The page number
    *     @var int $page_size The size of per page
    *     @var string $reference The reference type of quota.
    *     @var string $reference_id The reference id of quota.
    *     @var string $sort Sort method, valid values include:
    'hard.resource_name', '-hard.resource_name', 'used.resource_name', '-used.resource_name'.
    Here '-' stands for descending order, resource_name should be the real resource name of the quota.
    
    * }
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\ListQuotasUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\ListQuotasForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\ListQuotasInternalServerErrorException
    *
    * @return null|\Gyroscops\Harbor\Api\Model\Quota[]|\Psr\Http\Message\ResponseInterface
    */
    public function listQuotas(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListQuotas($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get the specified quota
     *
     * @param int $id Quota ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetQuotaInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Quota|\Psr\Http\Message\ResponseInterface
     */
    public function getQuota(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetQuota($id, $headerParameters), $fetch);
    }
    /**
     * Update hard limits of the specified quota
     *
     * @param int $id Quota ID
     * @param \Gyroscops\Harbor\Api\Model\QuotaUpdateReq $hard The new hard limits for the quota
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateQuotaBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateQuotaUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateQuotaForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateQuotaNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateQuotaInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateQuota(int $id, \Gyroscops\Harbor\Api\Model\QuotaUpdateReq $hard, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateQuota($id, $hard, $headerParameters), $fetch);
    }
    /**
     * This endpoint deletes specific robot account information by robot ID.
     *
     * @param int $robotId Robot ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRobotInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRobot(int $robotId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteRobot($robotId, $headerParameters), $fetch);
    }
    /**
     * This endpoint returns specific robot account information by robot ID.
     *
     * @param int $robotId Robot ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRobotByIDUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRobotByIDForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRobotByIDNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRobotByIDInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Robot|\Psr\Http\Message\ResponseInterface
     */
    public function getRobotByID(int $robotId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRobotByID($robotId, $headerParameters), $fetch);
    }
    /**
     * Refresh the robot secret
     *
     * @param int $robotId Robot ID
     * @param \Gyroscops\Harbor\Api\Model\RobotSec $robotSec The JSON object of a robot account.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\RefreshSecBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\RefreshSecUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\RefreshSecForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\RefreshSecNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\RefreshSecInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotSec|\Psr\Http\Message\ResponseInterface
     */
    public function refreshSec(int $robotId, \Gyroscops\Harbor\Api\Model\RobotSec $robotSec, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\RefreshSec($robotId, $robotSec, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates specific robot account information by robot ID.
     *
     * @param int $robotId Robot ID
     * @param \Gyroscops\Harbor\Api\Model\Robot $robot The JSON object of a robot account.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRobotInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateRobot(int $robotId, \Gyroscops\Harbor\Api\Model\Robot $robot, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateRobot($robotId, $robot, $headerParameters), $fetch);
    }
    /**
     * List replication policies
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $name Deprecated, use "query" instead. The policy name.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListReplicationPoliciesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListReplicationPoliciesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListReplicationPoliciesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationPolicy[]|\Psr\Http\Message\ResponseInterface
     */
    public function listReplicationPolicies(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListReplicationPolicies($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Create a replication policy
     *
     * @param \Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy The replication policy
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateReplicationPolicyBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateReplicationPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateReplicationPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateReplicationPolicyConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateReplicationPolicyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createReplicationPolicy(\Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateReplicationPolicy($policy, $headerParameters), $fetch);
    }
    /**
     * Delete the specific replication policy
     *
     * @param int $id Replication policy ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteReplicationPolicyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReplicationPolicy(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteReplicationPolicy($id, $headerParameters), $fetch);
    }
    /**
     * Get the specific replication policy
     *
     * @param int $id Policy ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationPolicyInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationPolicy(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationPolicy($id, $headerParameters), $fetch);
    }
    /**
     * Update the replication policy
     *
     * @param int $id The policy ID
     * @param \Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy The replication policy
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateReplicationPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateReplicationPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateReplicationPolicyNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateReplicationPolicyConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateReplicationPolicyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateReplicationPolicy(int $id, \Gyroscops\Harbor\Api\Model\ReplicationPolicy $policy, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateReplicationPolicy($id, $policy, $headerParameters), $fetch);
    }
    /**
     * List replication executions
     *
     * @param array $queryParameters {
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var int $policy_id The ID of the policy that the executions belong to.
     *     @var string $status The execution status.
     *     @var string $trigger The trigger mode.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListReplicationExecutionsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListReplicationExecutionsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListReplicationExecutionsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationExecution[]|\Psr\Http\Message\ResponseInterface
     */
    public function listReplicationExecutions(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListReplicationExecutions($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Start one replication execution according to the policy
     *
     * @param \Gyroscops\Harbor\Api\Model\StartReplicationExecution $execution The ID of policy that the execution belongs to
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\StartReplicationBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\StartReplicationUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\StartReplicationForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\StartReplicationInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function startReplication(\Gyroscops\Harbor\Api\Model\StartReplicationExecution $execution, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\StartReplication($execution, $headerParameters), $fetch);
    }
    /**
     * Get the replication execution specified by ID
     *
     * @param int $id The ID of the execution.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationExecutionInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationExecution|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationExecution(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationExecution($id, $headerParameters), $fetch);
    }
    /**
     * Stop the replication execution specified by ID
     *
     * @param int $id The ID of the execution.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\StopReplicationUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\StopReplicationForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\StopReplicationNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\StopReplicationInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function stopReplication(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\StopReplication($id, $headerParameters), $fetch);
    }
    /**
     * List replication tasks for a specific execution
     *
     * @param int $id The ID of the execution that the tasks belongs to.
     * @param array $queryParameters {
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $status The task status.
     *     @var string $resource_type The resource type.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListReplicationTasksUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListReplicationTasksForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListReplicationTasksInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ReplicationTask[]|\Psr\Http\Message\ResponseInterface
     */
    public function listReplicationTasks(int $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListReplicationTasks($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get the log of the specific replication task
     *
     * @param int $id The ID of the execution that the tasks belongs to.
     * @param int $taskId The ID of the task.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetReplicationLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getReplicationLog(int $id, int $taskId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetReplicationLog($id, $taskId, $headerParameters), $fetch);
    }
    /**
     * List registry adapters
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListRegistryProviderTypesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRegistryProviderTypesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRegistryProviderTypesInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listRegistryProviderTypes(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListRegistryProviderTypes($headerParameters), $fetch);
    }
    /**
     * List all registered registry provider information
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListRegistryProviderInfosUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRegistryProviderInfosForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRegistryProviderInfosInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function listRegistryProviderInfos(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListRegistryProviderInfos($headerParameters), $fetch);
    }
    /**
     * List the registries
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $name Deprecated, use `q` instead.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListRegistriesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRegistriesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRegistriesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Registry[]|\Psr\Http\Message\ResponseInterface
     */
    public function listRegistries(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListRegistries($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Create a registry
     *
     * @param \Gyroscops\Harbor\Api\Model\Registry $registry The registry
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRegistryBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRegistryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRegistryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRegistryConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRegistryInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createRegistry(\Gyroscops\Harbor\Api\Model\Registry $registry, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateRegistry($registry, $headerParameters), $fetch);
    }
    /**
     * Check status of a registry
     *
     * @param \Gyroscops\Harbor\Api\Model\RegistryPing $registry The registry
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PingRegistryBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PingRegistryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PingRegistryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PingRegistryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PingRegistryInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pingRegistry(\Gyroscops\Harbor\Api\Model\RegistryPing $registry, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PingRegistry($registry, $headerParameters), $fetch);
    }
    /**
     * Delete the specific registry
     *
     * @param int $id Registry ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRegistryInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRegistry(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteRegistry($id, $headerParameters), $fetch);
    }
    /**
     * Get the specific registry
     *
     * @param int $id Registry ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Registry|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistry(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRegistry($id, $headerParameters), $fetch);
    }
    /**
     * Update the registry
     *
     * @param int $id The registry ID
     * @param \Gyroscops\Harbor\Api\Model\RegistryUpdate $registry The registry
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRegistryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRegistryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRegistryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRegistryConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRegistryInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateRegistry(int $id, \Gyroscops\Harbor\Api\Model\RegistryUpdate $registry, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateRegistry($id, $registry, $headerParameters), $fetch);
    }
    /**
     * Get the registry info
     *
     * @param int $id Registry ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryInfoUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryInfoForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryInfoNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRegistryInfoInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RegistryInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getRegistryInfo(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRegistryInfo($id, $headerParameters), $fetch);
    }
    /**
     * Get the metrics of the latest scan all process
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScanAllMetricsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScanAllMetricsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScanAllMetricsPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScanAllMetricsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Stats|\Psr\Http\Message\ResponseInterface
     */
    public function getLatestScanAllMetrics(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetLatestScanAllMetrics($headerParameters), $fetch);
    }
    /**
     * Get the metrics of the latest scheduled scan all process
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLatestScheduledScanAllMetricsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Stats|\Psr\Http\Message\ResponseInterface
     */
    public function getLatestScheduledScanAllMetrics(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetLatestScheduledScanAllMetrics($headerParameters), $fetch);
    }
    /**
     * This API is for retrieving general system info, this can be called by anonymous request.  Some attributes will be omitted in the response when this API is called by anonymous request.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemInfoInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\GeneralInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemInfo(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSystemInfo($headerParameters), $fetch);
    }
    /**
     * This endpoint is for retrieving system volume info that only provides for admin user.  Note that the response only reflects the storage status of local disk.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetVolumesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetVolumesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetVolumesNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetVolumesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\SystemInfo|\Psr\Http\Message\ResponseInterface
     */
    public function getVolumes(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetVolumes($headerParameters), $fetch);
    }
    /**
     * This endpoint is for downloading a default root certificate.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetCertNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetCertInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getCert(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetCert($headerParameters), $fetch);
    }
    /**
     * Test the OIDC endpoint, the setting of the endpoint is provided in the request.  This API can only be called by system admin.
     *
     * @param \Gyroscops\Harbor\Api\Model\SystemOidcPingPostBody $endpoint Request body for OIDC endpoint to be tested.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PingOIDCBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PingOIDCUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PingOIDCForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pingOIDC(\Gyroscops\Harbor\Api\Model\SystemOidcPingPostBody $endpoint, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PingOIDC($endpoint, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user get gc execution history.
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCHistoryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCHistoryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCHistoryInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\GCHistory[]|\Psr\Http\Message\ResponseInterface
     */
    public function getGCHistory(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetGCHistory($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user get gc status filtered by specific ID.
     *
     * @param int $gcId The ID of the gc log
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\GCHistory|\Psr\Http\Message\ResponseInterface
     */
    public function getGC(int $gcId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetGC($gcId, $headerParameters), $fetch);
    }
    /**
     * Stop the GC execution specified by ID
     *
     * @param int $gcId The ID of the gc log
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\StopGCUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\StopGCForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\StopGCNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\StopGCInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function stopGC(int $gcId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\StopGC($gcId, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user get gc job logs filtered by specific ID.
     *
     * @param int $gcId The ID of the gc log
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCLogBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getGCLog(int $gcId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetGCLog($gcId, $headerParameters), $fetch);
    }
    /**
     * This endpoint is for get schedule of gc job.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetGCScheduleInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\GCHistory|\Psr\Http\Message\ResponseInterface
     */
    public function getGCSchedule(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetGCSchedule($headerParameters), $fetch);
    }
    /**
     * This endpoint is for update gc schedule.
     *
     * @param \Gyroscops\Harbor\Api\Model\Schedule $schedule Updates of gc's schedule.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateGCScheduleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateGCScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateGCScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateGCScheduleConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateGCScheduleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createGCSchedule(\Gyroscops\Harbor\Api\Model\Schedule $schedule, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateGCSchedule($schedule, $headerParameters), $fetch);
    }
    /**
     * This endpoint is for update gc schedule.
     *
     * @param \Gyroscops\Harbor\Api\Model\Schedule $schedule Updates of gc's schedule.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateGCScheduleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateGCScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateGCScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateGCScheduleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateGCSchedule(\Gyroscops\Harbor\Api\Model\Schedule $schedule, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateGCSchedule($schedule, $headerParameters), $fetch);
    }
    /**
     * get purge job execution history.
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeHistoryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeHistoryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeHistoryInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ExecHistory[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPurgeHistory(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetPurgeHistory($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user get purge job status filtered by specific ID.
     *
     * @param int $purgeId The ID of the purge log
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeJobUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeJobForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeJobNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeJobInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ExecHistory|\Psr\Http\Message\ResponseInterface
     */
    public function getPurgeJob(int $purgeId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetPurgeJob($purgeId, $headerParameters), $fetch);
    }
    /**
     * Stop the purge audit log execution specified by ID
     *
     * @param int $purgeId The ID of the purge log
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\StopPurgeUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\StopPurgeForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\StopPurgeNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\StopPurgeInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function stopPurge(int $purgeId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\StopPurge($purgeId, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user get purge job logs filtered by specific ID.
     *
     * @param int $purgeId The ID of the purge log
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeJobLogBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeJobLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeJobLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeJobLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeJobLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPurgeJobLog(int $purgeId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetPurgeJobLog($purgeId, $headerParameters), $fetch);
    }
    /**
     * This endpoint is for get schedule of purge job.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPurgeScheduleInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ExecHistory|\Psr\Http\Message\ResponseInterface
     */
    public function getPurgeSchedule(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetPurgeSchedule($headerParameters), $fetch);
    }
    /**
    * This endpoint is for update purge job schedule.
    
    *
    * @param \Gyroscops\Harbor\Api\Model\Schedule $schedule The purge job's schedule, it is a json object. |
    The sample format is |
    {"parameters":{"audit_retention_hour":168,"dry_run":true, "include_operations":"create,delete,pull"},"schedule":{"type":"Hourly","cron":"0 0 * * * *"}} |
    the include_operation should be a comma separated string, e.g. create,delete,pull, if it is empty, no operation will be purged.
    
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleBadRequestException
    * @throws \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\CreatePurgeScheduleInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function createPurgeSchedule(\Gyroscops\Harbor\Api\Model\Schedule $schedule, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreatePurgeSchedule($schedule, $headerParameters), $fetch);
    }
    /**
    * This endpoint is for update purge job schedule.
    
    *
    * @param \Gyroscops\Harbor\Api\Model\Schedule $schedule The purge job's schedule, it is a json object. |
    The sample format is |
    {"parameters":{"audit_retention_hour":168,"dry_run":true, "include_operations":"create,delete,pull"},"schedule":{"type":"Hourly","cron":"0 0 * * * *"}} |
    the include_operation should be a comma separated string, e.g. create,delete,pull, if it is empty, no operation will be purged.
    
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\UpdatePurgeScheduleBadRequestException
    * @throws \Gyroscops\Harbor\Api\Exception\UpdatePurgeScheduleUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\UpdatePurgeScheduleForbiddenException
    * @throws \Gyroscops\Harbor\Api\Exception\UpdatePurgeScheduleInternalServerErrorException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function updatePurgeSchedule(\Gyroscops\Harbor\Api\Model\Schedule $schedule, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdatePurgeSchedule($schedule, $headerParameters), $fetch);
    }
    /**
     * Get the system level allowlist of CVE.  This API can be called by all authenticated users.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemCVEAllowlistUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSystemCVEAllowlistInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\CVEAllowlist|\Psr\Http\Message\ResponseInterface
     */
    public function getSystemCVEAllowlist(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSystemCVEAllowlist($headerParameters), $fetch);
    }
    /**
     * This API overwrites the system level allowlist of CVE with the list in request body.  Only system Admin has permission to call this API.
     *
     * @param \Gyroscops\Harbor\Api\Model\CVEAllowlist $allowlist The allowlist with new content
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemCVEAllowlistUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemCVEAllowlistForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutSystemCVEAllowlistInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putSystemCVEAllowlist(\Gyroscops\Harbor\Api\Model\CVEAllowlist $allowlist, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PutSystemCVEAllowlist($allowlist, $headerParameters), $fetch);
    }
    /**
     * This endpoint is for getting a schedule for the scan all job, which scans all of images in Harbor.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanAllScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanAllScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanAllSchedulePreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanAllScheduleInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Schedule|\Psr\Http\Message\ResponseInterface
     */
    public function getScanAllSchedule(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScanAllSchedule($headerParameters), $fetch);
    }
    /**
     * This endpoint is for creating a schedule or a manual trigger for the scan all job, which scans all of images in Harbor.
     *
     * @param \Gyroscops\Harbor\Api\Model\Schedule $schedule Create a schedule or a manual trigger for the scan all job.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScanAllScheduleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScanAllScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScanAllScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScanAllScheduleConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScanAllSchedulePreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScanAllScheduleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createScanAllSchedule(\Gyroscops\Harbor\Api\Model\Schedule $schedule, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateScanAllSchedule($schedule, $headerParameters), $fetch);
    }
    /**
     * This endpoint is for updating the schedule of scan all job, which scans all of images in Harbor.
     *
     * @param \Gyroscops\Harbor\Api\Model\Schedule $schedule Updates the schedule of scan all job, which scans all of images in Harbor.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateScanAllScheduleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateScanAllScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateScanAllScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateScanAllSchedulePreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateScanAllScheduleInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateScanAllSchedule(\Gyroscops\Harbor\Api\Model\Schedule $schedule, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateScanAllSchedule($schedule, $headerParameters), $fetch);
    }
    /**
     * Stop scanAll job execution
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\StopScanAllBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\StopScanAllUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\StopScanAllForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\StopScanAllInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function stopScanAll(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\StopScanAll($headerParameters), $fetch);
    }
    /**
     * Get worker pools
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetWorkerPoolsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWorkerPoolsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWorkerPoolsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WorkerPool[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkerPools(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetWorkerPools($headerParameters), $fetch);
    }
    /**
     * Get workers in current pool
     *
     * @param string $poolId The name of the pool. 'all' stands for all pools
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetWorkersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWorkersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWorkersNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWorkersInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Worker[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkers(string $poolId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetWorkers($poolId, $headerParameters), $fetch);
    }
    /**
     * Stop running job
     *
     * @param string $jobId The id of the job.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\StopRunningJobUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\StopRunningJobForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\StopRunningJobNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\StopRunningJobInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function stopRunningJob(string $jobId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\StopRunningJob($jobId, $headerParameters), $fetch);
    }
    /**
     * Get job log by job id, it is only used by administrator
     *
     * @param string $jobId The id of the job.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ActionGetJobLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ActionGetJobLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ActionGetJobLogNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ActionGetJobLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionGetJobLog(string $jobId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ActionGetJobLog($jobId, $headerParameters), $fetch);
    }
    /**
     * list job queue
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListJobQueuesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListJobQueuesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListJobQueuesNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListJobQueuesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\JobQueue[]|\Psr\Http\Message\ResponseInterface
     */
    public function listJobQueues(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListJobQueues($headerParameters), $fetch);
    }
    /**
     * stop and clean, pause, resume pending jobs in the queue
     *
     * @param string $jobType The type of the job. 'all' stands for all job types
     * @param \Gyroscops\Harbor\Api\Model\ActionRequest $actionRequest 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ActionPendingJobsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ActionPendingJobsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ActionPendingJobsNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ActionPendingJobsInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionPendingJobs(string $jobType, \Gyroscops\Harbor\Api\Model\ActionRequest $actionRequest, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ActionPendingJobs($jobType, $actionRequest, $headerParameters), $fetch);
    }
    /**
     * List schedules
     *
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListSchedulesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListSchedulesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListSchedulesNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ListSchedulesInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScheduleTask[]|\Psr\Http\Message\ResponseInterface
     */
    public function listSchedules(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListSchedules($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get scheduler paused status
     *
     * @param string $jobType The type of the job. 'all' stands for all job types, current only support query with all
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSchedulePausedUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSchedulePausedForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSchedulePausedNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSchedulePausedInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\SchedulerStatus|\Psr\Http\Message\ResponseInterface
     */
    public function getSchedulePaused(string $jobType, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSchedulePaused($jobType, $headerParameters), $fetch);
    }
    /**
     * This API simply replies a pong to indicate the process to handle API is up, disregarding the health status of dependent components. This path does not require any authentication.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getPing(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetPing($headerParameters), $fetch);
    }
    /**
     * Get Retention Metadatas.
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getRentenitionMetadata(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRentenitionMetadata($headerParameters), $fetch);
    }
    /**
     * Create Retention Policy, you can reference metadatas API for the policy model. You can check project metadatas to find whether a retention policy is already binded. This method should only be called when no retention policy binded to project yet.
     *
     * @param \Gyroscops\Harbor\Api\Model\RetentionPolicy $policy Create Retention Policy successfully.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRetentionBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRetentionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRetentionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateRetentionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createRetention(\Gyroscops\Harbor\Api\Model\RetentionPolicy $policy, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateRetention($policy, $headerParameters), $fetch);
    }
    /**
     * Delete Retention Policy, you can reference metadatas API for the policy model. You can check project metadatas to find whether a retention policy is already binded. This method should only be called when retention policy has already binded to project.
     *
     * @param int $id Retention ID.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRetentionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRetentionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteRetentionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteRetention(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteRetention($id, $headerParameters), $fetch);
    }
    /**
     * Get Retention Policy.
     *
     * @param int $id Retention ID.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function getRetention(int $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRetention($id, $headerParameters), $fetch);
    }
    /**
     * Update Retention Policy, you can reference metadatas API for the policy model. You can check project metadatas to find whether a retention policy is already binded. This method should only be called when retention policy has already binded to project.
     *
     * @param int $id Retention ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionPolicy $policy 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRetentionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRetentionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateRetentionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateRetention(int $id, \Gyroscops\Harbor\Api\Model\RetentionPolicy $policy, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateRetention($id, $policy, $headerParameters), $fetch);
    }
    /**
     * Get Retention executions, execution status may be delayed before job service schedule it up.
     *
     * @param int $id Retention ID.
     * @param array $queryParameters {
     *     @var int $page The page number.
     *     @var int $page_size The size of per page.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListRetentionExecutionsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRetentionExecutionsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRetentionExecutionsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionExecution[]|\Psr\Http\Message\ResponseInterface
     */
    public function listRetentionExecutions(int $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListRetentionExecutions($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Trigger a Retention Execution, if dry_run is True, nothing would be deleted actually.
     *
     * @param int $id Retention ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsPostBody $body 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\TriggerRetentionExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\TriggerRetentionExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\TriggerRetentionExecutionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function triggerRetentionExecution(int $id, \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsPostBody $body, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\TriggerRetentionExecution($id, $body, $headerParameters), $fetch);
    }
    /**
     * Stop a Retention execution, only support "stop" action now.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $body The action, only support "stop" now.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\OperateRetentionExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\OperateRetentionExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\OperateRetentionExecutionInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function operateRetentionExecution(int $id, int $eid, \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $body, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\OperateRetentionExecution($id, $eid, $body, $headerParameters), $fetch);
    }
    /**
     * Get Retention tasks, each repository as a task.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param array $queryParameters {
     *     @var int $page The page number.
     *     @var int $page_size The size of per page.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListRetentionTasksUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRetentionTasksForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListRetentionTasksInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionExecutionTask[]|\Psr\Http\Message\ResponseInterface
     */
    public function listRetentionTasks(int $id, int $eid, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListRetentionTasks($id, $eid, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Get Retention job task log, tags ratain or deletion detail will be shown in a table.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param int $tid Retention execution ID.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionTaskLogUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionTaskLogForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetRetentionTaskLogInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getRetentionTaskLog(int $id, int $eid, int $tid, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetRetentionTaskLog($id, $eid, $tid, $headerParameters), $fetch);
    }
    /**
     * Returns a list of currently configured scanner registrations.
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListScannersBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListScannersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListScannersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListScannersInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration[]|\Psr\Http\Message\ResponseInterface
     */
    public function listScanners(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListScanners($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Creats a new scanner registration with the given data.
     *
     * @param \Gyroscops\Harbor\Api\Model\ScannerRegistrationReq $registration A scanner registration to be created.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScannerBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScannerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScannerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateScannerInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createScanner(\Gyroscops\Harbor\Api\Model\ScannerRegistrationReq $registration, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateScanner($registration, $headerParameters), $fetch);
    }
    /**
     * Pings scanner adapter to test endpoint URL and authorization settings.
     *
     * @param \Gyroscops\Harbor\Api\Model\ScannerRegistrationSettings $settings A scanner registration settings to be tested.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\PingScannerBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PingScannerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PingScannerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PingScannerInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pingScanner(\Gyroscops\Harbor\Api\Model\ScannerRegistrationSettings $settings, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\PingScanner($settings, $headerParameters), $fetch);
    }
    /**
     * Deletes the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteScannerInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration|\Psr\Http\Message\ResponseInterface
     */
    public function deleteScanner(string $registrationId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteScanner($registrationId, $headerParameters), $fetch);
    }
    /**
     * Retruns the details of the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifer.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerRegistration|\Psr\Http\Message\ResponseInterface
     */
    public function getScanner(string $registrationId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScanner($registrationId, $headerParameters), $fetch);
    }
    /**
     * Set the specified scanner registration as the system default one.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param \Gyroscops\Harbor\Api\Model\IsDefault $payload 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\SetScannerAsDefaultUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\SetScannerAsDefaultForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\SetScannerAsDefaultInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function setScannerAsDefault(string $registrationId, \Gyroscops\Harbor\Api\Model\IsDefault $payload, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\SetScannerAsDefault($registrationId, $payload, $headerParameters), $fetch);
    }
    /**
     * Updates the specified scanner registration.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param \Gyroscops\Harbor\Api\Model\ScannerRegistrationReq $registration A scanner registraiton to be updated.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateScannerUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateScannerForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateScannerNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateScannerInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateScanner(string $registrationId, \Gyroscops\Harbor\Api\Model\ScannerRegistrationReq $registration, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateScanner($registrationId, $registration, $headerParameters), $fetch);
    }
    /**
     * Get the metadata of the specified scanner registration, including the capabilities and customized properties.
     *
     * @param string $registrationId The scanner registration identifier.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerMetadataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerMetadataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScannerMetadataInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScannerAdapterMetadata|\Psr\Http\Message\ResponseInterface
     */
    public function getScannerMetadata(string $registrationId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScannerMetadata($registrationId, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListUsersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListUsersForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ListUsersInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserResp[]|\Psr\Http\Message\ResponseInterface
     */
    public function listUsers(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListUsers($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This API can be used only when the authentication mode is for local DB.  When self registration is disabled.
     *
     * @param \Gyroscops\Harbor\Api\Model\UserCreationReq $userReq The new user
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createUser(\Gyroscops\Harbor\Api\Model\UserCreationReq $userReq, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateUser($userReq, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetCurrentUserInfoUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetCurrentUserInfoInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserResp|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrentUserInfo(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetCurrentUserInfo($headerParameters), $fetch);
    }
    /**
     * This endpoint is to search the users by username.  It's open for all authenticated requests.
     *
     * @param array $queryParameters {
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $username Username for filtering results.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\SearchUsersUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\SearchUsersInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserSearchRespItem[]|\Psr\Http\Message\ResponseInterface
     */
    public function searchUsers(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\SearchUsers($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint let administrator of Harbor mark a registered user as removed.It actually won't be deleted from DB.
     *
     * @param int $userId User ID for marking as to be removed.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteUserInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUser(int $userId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteUser($userId, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $userId 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\UserResp|\Psr\Http\Message\ResponseInterface
     */
    public function getUser(int $userId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetUser($userId, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $userId Registered user ID
     * @param \Gyroscops\Harbor\Api\Model\UserProfile $profile Only email, realname and comment can be modified.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserProfileUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserProfileForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserProfileNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserProfileInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateUserProfile(int $userId, \Gyroscops\Harbor\Api\Model\UserProfile $profile, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateUserProfile($userId, $profile, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $userId 
     * @param \Gyroscops\Harbor\Api\Model\UserSysAdminFlag $sysadminFlag Toggle a user to admin or not.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\SetUserSysAdminUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\SetUserSysAdminForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\SetUserSysAdminNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\SetUserSysAdminInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function setUserSysAdmin(int $userId, \Gyroscops\Harbor\Api\Model\UserSysAdminFlag $sysadminFlag, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\SetUserSysAdmin($userId, $sysadminFlag, $headerParameters), $fetch);
    }
    /**
     * This endpoint is for user to update password. Users with the admin role can change any user's password. Regular users can change only their own password.
     *
     * @param int $userId 
     * @param \Gyroscops\Harbor\Api\Model\PasswordReq $password Password to be updated, the attribute 'old_password' is optional when the API is called by the system administrator.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateUserPassword(int $userId, \Gyroscops\Harbor\Api\Model\PasswordReq $password, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateUserPassword($userId, $password, $headerParameters), $fetch);
    }
    /**
    * 
    *
    * @param array $queryParameters {
    *     @var string $scope The scope for the permission
    *     @var bool $relative If true, the resources in the response are relative to the scope,
    eg for resource '/project/1/repository' if relative is 'true' then the resource in response will be 'repository'.
    
    * }
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\GetCurrentUserPermissionsUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\GetCurrentUserPermissionsInternalServerErrorException
    *
    * @return null|\Gyroscops\Harbor\Api\Model\Permission[]|\Psr\Http\Message\ResponseInterface
    */
    public function getCurrentUserPermissions(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetCurrentUserPermissions($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user generate a new CLI secret for himself.  This API only works when auth mode is set to 'OIDC'. Once this API returns with successful status, the old secret will be invalid, as there will be only one CLI secret for a user.
     *
     * @param int $userId User ID
     * @param \Gyroscops\Harbor\Api\Model\OIDCCliSecretReq $secret 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\SetCliSecretBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\SetCliSecretUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\SetCliSecretForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\SetCliSecretNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\SetCliSecretPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\SetCliSecretInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function setCliSecret(int $userId, \Gyroscops\Harbor\Api\Model\OIDCCliSecretReq $secret, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\SetCliSecret($userId, $secret, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user list labels by name, scope and project_id
     *
     * @param array $queryParameters {
     *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
     *     @var string $sort Sort the resource list in ascending or descending order. e.g. sort by field1 in ascending order and field2 in descending order with "sort=field1,-field2"
     *     @var int $page The page number
     *     @var int $page_size The size of per page
     *     @var string $name The label name.
     *     @var string $scope The label scope. Valid values are g and p. g for global labels and p for project labels.
     *     @var int $project_id Relevant project ID, required when scope is p.
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ListLabelsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ListLabelsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ListLabelsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Label[]|\Psr\Http\Message\ResponseInterface
     */
    public function listLabels(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListLabels($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user creates a label.
     *
     * @param \Gyroscops\Harbor\Api\Model\Label $label The json object of label.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\CreateLabelBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateLabelConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateLabelUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createLabel(\Gyroscops\Harbor\Api\Model\Label $label, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\CreateLabel($label, $headerParameters), $fetch);
    }
    /**
     * Delete the label specified by ID.
     *
     * @param int $labelId Label ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteLabel(int $labelId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DeleteLabel($labelId, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user get the label by specific ID.
     *
     * @param int $labelId Label ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelByIDUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelByIDNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelByIDInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Label|\Psr\Http\Message\ResponseInterface
     */
    public function getLabelByID(int $labelId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetLabelByID($labelId, $headerParameters), $fetch);
    }
    /**
     * This endpoint let user update label properties.
     *
     * @param int $labelId Label ID
     * @param \Gyroscops\Harbor\Api\Model\Label $label The updated label json object.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateLabelBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateLabelNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateLabelConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateLabelInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateLabel(int $labelId, \Gyroscops\Harbor\Api\Model\Label $label, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\UpdateLabel($labelId, $label, $headerParameters), $fetch);
    }
    /**
     * Export scan data for selected projects
     *
     * @param \Gyroscops\Harbor\Api\Model\ScanDataExportRequest $criteria The criteria for the export
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var string $X-Scan-Data-Type The type of scan data to export
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataMethodNotAllowedException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\ExportScanDataInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScanDataExportJob|\Psr\Http\Message\ResponseInterface
     */
    public function exportScanData(\Gyroscops\Harbor\Api\Model\ScanDataExportRequest $criteria, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ExportScanData($criteria, $headerParameters), $fetch);
    }
    /**
     * Get the scan data export execution specified by ID
     *
     * @param int $executionId Execution ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanDataExportExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanDataExportExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanDataExportExecutionNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanDataExportExecutionInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScanDataExportExecution|\Psr\Http\Message\ResponseInterface
     */
    public function getScanDataExportExecution(int $executionId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScanDataExportExecution($executionId, $headerParameters), $fetch);
    }
    /**
     * Get a list of specific scan data export execution jobs for a specified user
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanDataExportExecutionListUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanDataExportExecutionListForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanDataExportExecutionListNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetScanDataExportExecutionListInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\ScanDataExportExecutionList|\Psr\Http\Message\ResponseInterface
     */
    public function getScanDataExportExecutionList(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetScanDataExportExecutionList($headerParameters), $fetch);
    }
    /**
     * Download the scan data report. Default format is CSV
     *
     * @param int $executionId Execution ID
     * @param array $queryParameters {
     *     @var string $format The format of the data to be exported. e.g. CSV or PDF
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\DownloadScanDataUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DownloadScanDataForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DownloadScanDataNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DownloadScanDataInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadScanData(int $executionId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\DownloadScanData($executionId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Retrieve the vulnerability summary of the system
     *
     * @param array $queryParameters {
     *     @var bool $with_dangerous_cve Specify whether the dangerous CVEs are included inside summary information
     *     @var bool $with_dangerous_artifact Specify whether the dangerous Artifact are included inside summary information
     * }
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetSecuritySummaryUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSecuritySummaryForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSecuritySummaryNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetSecuritySummaryInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\SecuritySummary|\Psr\Http\Message\ResponseInterface
     */
    public function getSecuritySummary(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetSecuritySummary($queryParameters, $headerParameters), $fetch);
    }
    /**
    * Get the vulnerability list. use q to pass the query condition, 
    supported conditions:
    cve_id(exact match)
    cvss_score_v3(range condition)
    severity(exact match)
    repository_name(exact match) 
    project_id(exact match) 
    package(exact match)
    tag(exact match) 
    digest(exact match)
    
    *
    * @param array $queryParameters {
    *     @var string $q Query string to query resources. Supported query patterns are "exact match(k=v)", "fuzzy match(k=~v)", "range(k=[min~max])", "list with union releationship(k={v1 v2 v3})" and "list with intersetion relationship(k=(v1 v2 v3))". The value of range and list can be string(enclosed by " or '), integer or time(in format "2020-04-09 02:36:00"). All of these query patterns should be put in the query string "q=xxx" and splitted by ",". e.g. q=k1=v1,k2=~v2,k3=[min~max]
    *     @var int $page The page number
    *     @var int $page_size The size of per page
    *     @var bool $tune_count Enable to ignore X-Total-Count when the total count > 1000, if the total count is less than 1000, the real total count is returned, else -1.
    *     @var bool $with_tag Specify whether the tag information is included inside vulnerability information
    * }
    * @param array $headerParameters {
    *     @var string $X-Request-Id An unique ID for the request
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Gyroscops\Harbor\Api\Exception\ListVulnerabilitiesBadRequestException
    * @throws \Gyroscops\Harbor\Api\Exception\ListVulnerabilitiesUnauthorizedException
    * @throws \Gyroscops\Harbor\Api\Exception\ListVulnerabilitiesInternalServerErrorException
    *
    * @return null|\Gyroscops\Harbor\Api\Model\VulnerabilityItem[]|\Psr\Http\Message\ResponseInterface
    */
    public function listVulnerabilities(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\ListVulnerabilities($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint is for retrieving resource and action info that only provides for admin user(system admin and project admin).
     *
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Harbor\Api\Exception\GetPermissionsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPermissionsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPermissionsNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetPermissionsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Permissions|\Psr\Http\Message\ResponseInterface
     */
    public function getPermissions(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Harbor\Api\Endpoint\GetPermissions($headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
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