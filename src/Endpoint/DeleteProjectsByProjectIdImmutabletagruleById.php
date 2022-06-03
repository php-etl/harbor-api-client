<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteProjectsByProjectIdImmutabletagruleById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $id;
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $id Immutable tag rule ID.
     */
    public function __construct(int $projectId, int $id)
    {
        $this->project_id = $projectId;
        $this->id = $id;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{id}'), array($this->project_id, $this->id), '/projects/{project_id}/immutabletagrules/{id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}