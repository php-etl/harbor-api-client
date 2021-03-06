<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetProjectsByProjectIdWebhookPolicyByPolicyId extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $policy_id;
    /**
     * This endpoint returns specified webhook policy of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param int $policyId The id of webhook policy.
     */
    public function __construct(int $projectId, int $policyId)
    {
        $this->project_id = $projectId;
        $this->policy_id = $policyId;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{policy_id}'), array($this->project_id, $this->policy_id), '/projects/{project_id}/webhook/policies/{policy_id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookPolicy
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\WebhookPolicy', 'json');
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}