<?php

namespace Harbor\Api\Endpoint;

class DeleteProjectsByProjectIdWebhookPolicyByPolicyId extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $policy_id;
    /**
     * This endpoint is aimed to delete webhookpolicy of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param int $policyId The id of webhook policy.
     */
    public function __construct(int $projectId, int $policyId)
    {
        $this->project_id = $projectId;
        $this->policy_id = $policyId;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
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
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\DeleteProjectsByProjectIdWebhookPolicyByPolicyIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}