<?php

namespace Harbor\Api\Endpoint;

class GetProjectsByProjectIdWebhookLasttrigger extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint returns last trigger information of project webhook policy.
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
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/webhook/lasttrigger');
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
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerBadRequestException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerUnauthorizedException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerForbiddenException
     * @throws \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\WebhookLastTrigger[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\WebhookLastTrigger[]', 'json');
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetProjectsByProjectIdWebhookLasttriggerInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}