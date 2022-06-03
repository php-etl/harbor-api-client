<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PostLabel extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint let user creates a label.
     *
     * @param \Gyroscops\Harbor\Api\Model\Label $label The json object of label.
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\Label $label)
    {
        $this->body = $label;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/labels';
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
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelUnsupportedMediaTypeException
     * @throws \Gyroscops\Harbor\Api\Exception\PostLabelInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLabelBadRequestException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLabelUnauthorizedException();
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLabelConflictException();
        }
        if (415 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLabelUnsupportedMediaTypeException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PostLabelInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}