<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostSystemScanAllSchedule extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for creating a schedule or a manual trigger for the scan all job, which scans all of images in Harbor.
     *
     * @param \Gyroscops\Harbor\Api\Model\AdminJobSchedule $schedule Create a schedule or a manual trigger for the scan all job.
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleServiceUnavailableException
     * @throws \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleConflictException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleForbiddenException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleInternalServerErrorException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleBadRequestException();
        }
        if (503 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleServiceUnavailableException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostSystemScanAllScheduleConflictException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}