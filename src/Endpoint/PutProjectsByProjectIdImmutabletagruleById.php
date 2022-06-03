<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutProjectsByProjectIdImmutabletagruleById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $id;
    /**
     * 
     *
     * @param int $projectId Relevant project ID.
     * @param int $id Immutable tag rule ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionRule $retentionRule 
     */
    public function __construct(int $projectId, int $id, \Gyroscops\Harbor\Api\Model\RetentionRule $retentionRule)
    {
        $this->project_id = $projectId;
        $this->id = $id;
        $this->body = $retentionRule;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdImmutabletagruleByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}