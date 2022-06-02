<?php

namespace Harbor\Api\Endpoint;

class PostProjectsByProjectIdWebhookPoliciesTest extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint tests webhook connection of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param \Harbor\Api\Model\WebhookPolicy $policy Only property "targets" needed.
     */
    public function __construct(int $projectId, \Harbor\Api\Model\WebhookPolicy $policy)
    {
        $this->project_id = $projectId;
        $this->body = $policy;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/webhook/policies/test');
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
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestBadRequestException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestUnauthorizedException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestForbiddenException
     * @throws \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}