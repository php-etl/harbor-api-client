<?php

namespace Harbor\Api\Endpoint;

class PostProjectsByProjectIdImmutabletagrule extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint add an immutable tag rule to the project
     *
     * @param int $projectId Relevant project ID.
     * @param \Harbor\Api\Model\RetentionRule $retentionRule 
     */
    public function __construct(int $projectId, \Harbor\Api\Model\RetentionRule $retentionRule)
    {
        $this->project_id = $projectId;
        $this->body = $retentionRule;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/immutabletagrules');
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
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}