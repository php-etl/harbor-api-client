<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostRetentionsByIdExecution extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Trigger a Retention job, if dry_run is True, nothing would be deleted actually.
     *
     * @param int $id Retention ID.
     * @param \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsPostBody $action
     */
    public function __construct(int $id, \Gyroscops\Harbor\Api\Model\RetentionsIdExecutionsPostBody $action)
    {
        $this->id = $id;
        $this->body = $action;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/retentions/{id}/executions');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionsByIdExecutionUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionsByIdExecutionForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostRetentionsByIdExecutionInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRetentionsByIdExecutionUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRetentionsByIdExecutionForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostRetentionsByIdExecutionInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
