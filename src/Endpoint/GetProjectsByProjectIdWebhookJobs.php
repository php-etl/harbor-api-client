<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetProjectsByProjectIdWebhookJobs extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * This endpoint returns webhook jobs of a project.
     *
     * @param int $projectId Relevant project ID.
     * @param array $queryParameters {
     *     @var int $policy_id The policy ID.
     * }
     */
    public function __construct(int $projectId, array $queryParameters = array())
    {
        $this->project_id = $projectId;
        $this->queryParameters = $queryParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/webhook/jobs');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('policy_id'));
        $optionsResolver->setRequired(array('policy_id'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('policy_id', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsBadRequestException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookJob[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\WebhookJob[]', 'json');
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetProjectsByProjectIdWebhookJobsBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}