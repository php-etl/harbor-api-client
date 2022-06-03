<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostProjectsByProjectIdWebhookPolicy extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint create a webhook policy if the project does not have one.
     *
     * @param int $projectId Relevant project ID
     * @param \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy Properties "targets" and "event_types" needed.
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
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/webhook/policies');
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostProjectsByProjectIdWebhookPolicyInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}