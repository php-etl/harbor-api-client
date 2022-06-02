<?php

namespace Harbor\Api\Endpoint;

class PutProjectsByProjectIdImmutabletagruleById extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $id;
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $id Immutable tag rule ID.
     * @param \Harbor\Api\Model\RetentionRule $retentionRule 
     */
    public function __construct(int $projectId, int $id, \Harbor\Api\Model\RetentionRule $retentionRule)
    {
        $this->project_id = $projectId;
        $this->id = $id;
        $this->body = $retentionRule;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{id}'), array($this->project_id, $this->id), '/projects/{project_id}/immutabletagrules/{id}');
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
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdForbiddenException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}