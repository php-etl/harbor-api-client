<?php

namespace Harbor\Api\Endpoint;

class GetProjectsByProjectIdRobotByRobotId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $robot_id;
    /**
     * Return the infor of the specified robot account.
     *
     * @param int $projectId Relevant project ID.
     * @param int $robotId The ID of robot account.
     */
    public function __construct(int $projectId, int $robotId)
    {
        $this->project_id = $projectId;
        $this->robot_id = $robotId;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{robot_id}'), array($this->project_id, $this->robot_id), '/projects/{project_id}/robots/{robot_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdNotFoundException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RobotAccount
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\RobotAccount', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}