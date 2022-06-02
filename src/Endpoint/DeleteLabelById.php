<?php

namespace Harbor\Api\Endpoint;

class DeleteLabelById extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
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
    use \Harbor\Api\Runtime\Client\EndpointTrait;
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
     * @throws \Harbor\Api\Exception\DeleteLabelByIdBadRequestException
     * @throws \Harbor\Api\Exception\DeleteLabelByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\DeleteLabelByIdNotFoundException
     * @throws \Harbor\Api\Exception\DeleteLabelByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\DeleteLabelByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\DeleteLabelByIdUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\DeleteLabelByIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\DeleteLabelByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}