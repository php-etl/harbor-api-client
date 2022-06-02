<?php

namespace Harbor\Api\Endpoint;

class PostRetentionsByIdExecution extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Trigger a Retention job, if dry_run is True, nothing would be deleted actually.
     *
     * @param int $id Retention ID.
     * @param \Harbor\Api\Model\RetentionsIdExecutionsPostBody $action 
     */
    public function __construct(int $id, \Harbor\Api\Model\RetentionsIdExecutionsPostBody $action)
    {
        $this->id = $id;
        $this->body = $action;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/retentions/{id}/executions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Harbor\Api\Exception\PostRetentionsByIdExecutionUnauthorizedException
     * @throws \Harbor\Api\Exception\PostRetentionsByIdExecutionForbiddenException
     * @throws \Harbor\Api\Exception\PostRetentionsByIdExecutionInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostRetentionsByIdExecutionUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostRetentionsByIdExecutionForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostRetentionsByIdExecutionInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}