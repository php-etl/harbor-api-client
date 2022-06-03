<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutProjectsByProjectIdWebhookPolicyByPolicyId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $policy_id;
    /**
     * This endpoint is aimed to update the webhook policy of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param int $policyId The id of webhook policy.
     * @param \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy All properties needed except "id", "project_id", "creation_time", "update_time".
     */
    public function __construct(int $projectId, int $policyId, \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy)
    {
        $this->project_id = $projectId;
        $this->policy_id = $policyId;
        $this->body = $policy;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{policy_id}'), array($this->project_id, $this->policy_id), '/projects/{project_id}/webhook/policies/{policy_id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}