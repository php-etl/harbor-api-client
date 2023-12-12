<?php

namespace Gyroscops\Harbor\Api;

class Client extends \Gyroscops\Harbor\Api\Runtime\Client\Client
{
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