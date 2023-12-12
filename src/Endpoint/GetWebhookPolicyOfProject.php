<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetWebhookPolicyOfProject extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name_or_id;
    protected $webhook_policy_id;
    /**
     * This endpoint returns specified webhook policy of a project.
     *
     * @param string $projectNameOrId The name or id of the project
     * @param int $webhookPolicyId The ID of the webhook policy
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     *     @var bool $X-Is-Resource-Name The flag to indicate whether the parameter which supports both name and id in the path is the name of the resource. When the X-Is-Resource-Name is false and the parameter can be converted to an integer, the parameter will be as an id, otherwise, it will be as a name.
     * }
     */
    public function __construct(string $projectNameOrId, int $webhookPolicyId, array $headerParameters = array())
    {
        $this->project_name_or_id = $projectNameOrId;
        $this->webhook_policy_id = $webhookPolicyId;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name_or_id}', '{webhook_policy_id}'), array($this->project_name_or_id, $this->webhook_policy_id), '/projects/{project_name_or_id}/webhook/policies/{webhook_policy_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\WebhookPolicy
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\WebhookPolicy', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetWebhookPolicyOfProjectInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}