<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutReplicationExecutionById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint is for user to stop one execution of the replication.
     *
     * @param int $id The execution ID.
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/replication/executions/{id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdForbiddenException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdNotFoundException();
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutReplicationExecutionByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}