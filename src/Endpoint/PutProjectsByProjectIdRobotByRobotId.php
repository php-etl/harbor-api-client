<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutProjectsByProjectIdRobotByRobotId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $robot_id;
    /**
     * Used to disable/enable a specified robot account.
     *
     * @param int $projectId Relevant project ID.
     * @param int $robotId The ID of robot account.
     * @param \Gyroscops\Harbor\Api\Model\RobotAccountUpdate $robot Request body of enable/disable a robot account.
     */
    public function __construct(int $projectId, int $robotId, \Gyroscops\Harbor\Api\Model\RobotAccountUpdate $robot)
    {
        $this->project_id = $projectId;
        $this->robot_id = $robotId;
        $this->body = $robot;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{robot_id}'), array($this->project_id, $this->robot_id), '/projects/{project_id}/robots/{robot_id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdRobotByRobotIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdRobotByRobotIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}