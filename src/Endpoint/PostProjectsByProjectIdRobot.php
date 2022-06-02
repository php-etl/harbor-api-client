<?php

namespace Harbor\Api\Endpoint;

class PostProjectsByProjectIdRobot extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Create a robot account for project
     *
     * @param int $projectId Relevant project ID.
     * @param \Harbor\Api\Model\RobotAccountCreate $robot Request body of creating a robot account.
     */
    public function __construct(int $projectId, \Harbor\Api\Model\RobotAccountCreate $robot)
    {
        $this->project_id = $projectId;
        $this->body = $robot;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/robots');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotConflictException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdRobotInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RobotAccountPostRep
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\RobotAccountPostRep', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdRobotBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdRobotUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdRobotForbiddenException();
        }
        if (409 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdRobotConflictException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdRobotInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}