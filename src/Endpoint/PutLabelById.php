<?php

namespace Harbor\Api\Endpoint;

class PutLabelById extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint let user update label properties.
     *
     * @param int $id Label ID
     * @param \Harbor\Api\Model\Label $label The updated label json object.
     */
    public function __construct(int $id, \Harbor\Api\Model\Label $label)
    {
        $this->id = $id;
        $this->body = $label;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/labels/{id}');
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
     * @throws \Harbor\Api\Exception\PutLabelByIdBadRequestException
     * @throws \Harbor\Api\Exception\PutLabelByIdUnauthorizedException
     * @throws \Harbor\Api\Exception\PutLabelByIdNotFoundException
     * @throws \Harbor\Api\Exception\PutLabelByIdConflictException
     * @throws \Harbor\Api\Exception\PutLabelByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PutLabelByIdBadRequestException();
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PutLabelByIdUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PutLabelByIdNotFoundException();
        }
        if (409 === $status) {
            throw new \Harbor\Api\Exception\PutLabelByIdConflictException();
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PutLabelByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}