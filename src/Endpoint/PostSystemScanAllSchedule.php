<?php

namespace Harbor\Api\Endpoint;

class PostSystemScanAllSchedule extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for creating a schedule or a manual trigger for the scan all job, which scans all of images in Harbor.
     *
     * @param \Harbor\Api\Model\AdminJobSchedule $schedule Create a schedule or a manual trigger for the scan all job.
     */
    public function __construct(\Harbor\Api\Model\AdminJobSchedule $schedule)
    {
        $this->body = $schedule;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/system/scanAll/schedule';
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
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleBadRequestException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleForbiddenException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleConflictException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleInternalServerErrorException
     * @throws \Harbor\Api\Exception\PostSystemScanAllScheduleServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostSystemScanAllScheduleBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostSystemScanAllScheduleUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostSystemScanAllScheduleForbiddenException();
        }
        if (409 === $status) {
            throw new \Harbor\Api\Exception\PostSystemScanAllScheduleConflictException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostSystemScanAllScheduleInternalServerErrorException();
        }
        if (503 === $status) {
            throw new \Harbor\Api\Exception\PostSystemScanAllScheduleServiceUnavailableException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}