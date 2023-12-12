<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetExecution extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name;
    protected $preheat_policy_name;
    protected $execution_id;
    /**
     * Get a execution detail by id
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param int $executionId Execution ID
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(string $projectName, string $preheatPolicyName, int $executionId, array $headerParameters = array())
    {
        $this->project_name = $projectName;
        $this->preheat_policy_name = $preheatPolicyName;
        $this->execution_id = $executionId;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name}', '{preheat_policy_name}', '{execution_id}'), array($this->project_name, $this->preheat_policy_name, $this->execution_id), '/projects/{project_name}/preheat/policies/{preheat_policy_name}/executions/{execution_id}');
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
        $optionsResolver->setDefined(array('X-Request-Id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetExecutionInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Execution
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Execution', 'json');
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetExecutionBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetExecutionUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetExecutionForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetExecutionNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetExecutionInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}