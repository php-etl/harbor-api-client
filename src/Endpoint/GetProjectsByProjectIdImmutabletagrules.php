<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetProjectsByProjectIdImmutabletagrules extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint returns the immutable tag rules of a project
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
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/immutabletagrules');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\RetentionRule[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\RetentionRule[]', 'json');
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdImmutabletagrulesBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}