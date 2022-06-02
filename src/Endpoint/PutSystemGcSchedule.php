<?php

namespace Harbor\Api\Endpoint;

class PutSystemGcSchedule extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for update gc schedule.
     *
     * @param \Harbor\Api\Model\AdminJobSchedule $schedule Updates of gc's schedule.
     */
    public function __construct(\Harbor\Api\Model\AdminJobSchedule $schedule)
    {
        $this->body = $schedule;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
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
     * @throws \Harbor\Api\Exception\PutSystemGcScheduleBadRequestException
     * @throws \Harbor\Api\Exception\PutSystemGcScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\PutSystemGcScheduleForbiddenException
     * @throws \Harbor\Api\Exception\PutSystemGcScheduleInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutSystemGcScheduleBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutSystemGcScheduleUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutSystemGcScheduleForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutSystemGcScheduleInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}