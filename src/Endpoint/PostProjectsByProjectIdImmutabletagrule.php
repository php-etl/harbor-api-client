<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostProjectsByProjectIdImmutabletagrule extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $project_id;
    /**
     * This endpoint add an immutable tag rule to the project
     *
     * @param int $projectId Relevant project ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionRule $retentionRule
     */
    public function __construct(int $projectId, \Gyroscops\Harbor\Api\Model\RetentionRule $retentionRule)
    {
        $this->project_id = $projectId;
        $this->body = $retentionRule;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/immutabletagrules');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdImmutabletagruleInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
