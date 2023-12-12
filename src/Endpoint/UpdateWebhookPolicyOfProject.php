<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class UpdateWebhookPolicyOfProject extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name_or_id;
    protected $webhook_policy_id;
    /**
     * This endpoint is aimed to update the webhook policy of a project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $webhookPolicyId The ID of the webhook policy
     * @param \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy All properties needed except "id", "project_id", "creation_time", "update_time".
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     */
    public function __construct(string $projectNameOrId, int $webhookPolicyId, \Gyroscops\Harbor\Api\Model\WebhookPolicy $policy, array $headerParameters = array())
    {
        $this->project_name_or_id = $projectNameOrId;
        $this->webhook_policy_id = $webhookPolicyId;
        $this->body = $policy;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name_or_id}', '{webhook_policy_id}'), array($this->project_name_or_id, $this->webhook_policy_id), '/projects/{project_name_or_id}/webhook/policies/{webhook_policy_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Request-Id', 'X-Is-Resource-Name'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('X-Is-Resource-Name' => false));
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        $optionsResolver->setAllowedTypes('X-Is-Resource-Name', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateWebhookPolicyOfProjectInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}