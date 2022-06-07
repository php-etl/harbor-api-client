<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteLabelById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Delete the label specified by ID.
     *
     * @param int $id Label ID
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/labels/{id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdNotFoundException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteLabelByIdBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}