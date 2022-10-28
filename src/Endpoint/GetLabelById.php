<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetLabelById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * This endpoint let user get the label by specific ID.
     *
     * @param int $id Label ID
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/labels/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetLabelByIdInternalServerErrorException
     *
     * @return null|\Gyroscops\Harbor\Api\Model\Label
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Label', 'json');
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLabelByIdUnauthorizedException();
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLabelByIdNotFoundException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetLabelByIdInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
