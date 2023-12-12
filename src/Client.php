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