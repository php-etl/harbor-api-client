<?php

namespace Harbor\Api\Endpoint;

class GetRetentionsByIdExecutions extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Get a Retention job, job status may be delayed before job service schedule it up.
     *
     * @param int $id Retention ID.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/retentions/{id}/executions');
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
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsUnauthorizedException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsForbiddenException
     * @throws \Harbor\Api\Exception\GetRetentionsByIdExecutionsInternalServerErrorException
     *
     * @return null|\Harbor\Api\Model\RetentionExecution[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Harbor\\Api\\Model\\RetentionExecution[]', 'json');
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\GetRetentionsByIdExecutionsUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\GetRetentionsByIdExecutionsForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\GetRetentionsByIdExecutionsInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}