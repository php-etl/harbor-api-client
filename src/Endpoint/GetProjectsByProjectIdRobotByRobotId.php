<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetProjectsByProjectIdRobotByRobotId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
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
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotAccount
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\RobotAccount', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotByRobotIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}