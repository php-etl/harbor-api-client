<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostProjectsByProjectIdRobot extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Create a robot account for project
     *
     * @param int $projectId Relevant project ID.
     * @param \Gyroscops\Harbor\Api\Model\RobotAccountCreate $robot Request body of creating a robot account.
     */
    public function __construct(int $projectId, \Gyroscops\Harbor\Api\Model\RobotAccountCreate $robot)
    {
        $this->project_id = $projectId;
        $this->body = $robot;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotConflictException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotAccountPostRep
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\RobotAccountPostRep', 'json');
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotInternalServerErrorException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotBadRequestException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdRobotConflictException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}