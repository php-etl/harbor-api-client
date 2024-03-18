<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetUser extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $user_id;
    /**
     * 
     *
     * @param int $userId 
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(int $userId, array $headerParameters = [])
    {
        $this->user_id = $userId;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{user_id}'], [$this->user_id], '/users/{user_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Request-Id']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Request-Id', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetUserInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException
     *
     * @return \Gyroscops\Harbor\Api\Model\UserResp
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return $serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\UserResp', 'json');
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUserUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUserForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUserNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetUserInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        throw new \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['basic'];
    }
}