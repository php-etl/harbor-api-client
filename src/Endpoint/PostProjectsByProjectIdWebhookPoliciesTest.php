<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostProjectsByProjectIdWebhookPoliciesTest extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint tests webhook connection of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy Only property "targets" needed.
     */
    public function __construct(int $projectId, \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy)
    {
        $this->project_id = $projectId;
        $this->body = $policy;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPoliciesTestBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}