<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetProjectsByProjectIdRobots extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Get all robot accounts of specified project
     *
     * @param int $projectId Relevant project ID.
     */
    public function __construct(int $projectId)
    {
        $this->project_id = $projectId;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/robots');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RobotAccount[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\RobotAccount[]', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdRobotsInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}