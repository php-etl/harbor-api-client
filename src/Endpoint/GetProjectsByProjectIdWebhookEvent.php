<?php

namespace Harbor\Api\Endpoint;

class GetProjectsByProjectIdWebhookEvent extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Get supportted event types and notify types.
     *
     * @param int $projectId Relevant project ID.
     */
    public function __construct(int $projectId)
    {
        $this->project_id = $projectId;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/webhook/events');
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
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\SupportedWebhookEventTypes
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\SupportedWebhookEventTypes', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdWebhookEventInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}