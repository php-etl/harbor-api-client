<?php

namespace Harbor\Api\Endpoint;

class PutProjectsByProjectIdScanner extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
     * Set one of the system configured scanner registration as the indepndent scanner of the specified project.
     *
     * @param int $projectId The project identifier.
     * @param \Harbor\Api\Model\ProjectScanner $payload 
     */
    public function __construct(int $projectId, \Harbor\Api\Model\ProjectScanner $payload)
    {
        $this->project_id = $projectId;
        $this->body = $payload;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/projects/{project_id}/scanner');
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
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerBadRequestException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerUnauthorizedException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerForbiddenException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerNotFoundException
     * @throws \Harbor\Api\Exception\PutProjectsByProjectIdScannerInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutProjectsByProjectIdScannerBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutProjectsByProjectIdScannerUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PutProjectsByProjectIdScannerForbiddenException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PutProjectsByProjectIdScannerNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutProjectsByProjectIdScannerInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}