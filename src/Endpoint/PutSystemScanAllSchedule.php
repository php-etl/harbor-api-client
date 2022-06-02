<?php

namespace Harbor\Api\Endpoint;

class PutSystemScanAllSchedule extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint is for updating the schedule of scan all job, which scans all of images in Harbor.
     *
     * @param \Harbor\Api\Model\AdminJobSchedule $schedule Updates the schedule of scan all job, which scans all of images in Harbor.
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
     * @throws \Harbor\Api\Exception\PutSystemScanAllScheduleBadRequestException
     * @throws \Harbor\Api\Exception\PutSystemScanAllScheduleUnauthorizedException
     * @throws \Harbor\Api\Exception\PutSystemScanAllScheduleForbiddenException
     * @throws \Harbor\Api\Exception\PutSystemScanAllScheduleInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutSystemScanAllScheduleBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutSystemScanAllScheduleUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutSystemScanAllScheduleForbiddenException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutSystemScanAllScheduleInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}