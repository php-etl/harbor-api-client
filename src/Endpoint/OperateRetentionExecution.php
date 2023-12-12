<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class OperateRetentionExecution extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    protected $eid;
    /**
     * Stop a Retention execution, only support "stop" action now.
     *
     * @param int $id Retention ID.
     * @param int $eid Retention execution ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $body The action, only support "stop" now.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(int $id, int $eid, \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsEidPatchBody $body, array $headerParameters = array())
    {
        $this->id = $id;
        $this->eid = $eid;
        $this->body = $body;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{eid}'), array($this->id, $this->eid), '/retentions/{id}/executions/{eid}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\OperateRetentionExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\OperateRetentionExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\OperateRetentionExecutionInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\OperateRetentionExecutionUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\OperateRetentionExecutionForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\OperateRetentionExecutionInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}