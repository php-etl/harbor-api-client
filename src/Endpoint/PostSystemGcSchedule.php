<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostSystemGcSchedule extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for update gc schedule.
     *
     * @param \Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule Updates of gc's schedule.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule)
    {
        $this->body = $schedule;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/system/gc/schedule';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleConflictException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleInternalServerErrorException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleBadRequestException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemGcScheduleConflictException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}