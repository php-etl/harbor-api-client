<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class StopExecution extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_name;
    protected $preheat_policy_name;
    protected $execution_id;
    /**
     * Stop a execution
     *
     * @param string $projectName The name of the project
     * @param string $preheatPolicyName Preheat Policy Name
     * @param int $executionId Execution ID
     * @param \Gyroscops\Harbor\Api\Model\Execution $execution The data of execution
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(string $projectName, string $preheatPolicyName, int $executionId, \Gyroscops\Harbor\Api\Model\Execution $execution, array $headerParameters = array())
    {
        $this->project_name = $projectName;
        $this->preheat_policy_name = $preheatPolicyName;
        $this->execution_id = $executionId;
        $this->body = $execution;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_name}', '{preheat_policy_name}', '{execution_id}'), array($this->project_name, $this->preheat_policy_name, $this->execution_id), '/projects/{project_name}/preheat/policies/{preheat_policy_name}/executions/{execution_id}');
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
        $optionsResolver->setDefined(array('X-Request-Id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('X-Request-Id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\StopExecutionInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\StopExecutionBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\StopExecutionUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\StopExecutionForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\StopExecutionNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\StopExecutionInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}