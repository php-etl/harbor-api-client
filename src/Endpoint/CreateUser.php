<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class CreateUser extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    /**
     * This API can be used only when the authentication mode is for local DB.  When self registration is disabled.
     *
     * @param \Gyroscops\Harbor\Api\Model\UserCreationReq $userReq The new user
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(\Gyroscops\Harbor\Api\Model\UserCreationReq $userReq, array $headerParameters = [])
    {
        $this->body = $userReq;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/users';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
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
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserConflictException
     * @throws \Gyroscops\Harbor\Api\Exception\CreateUserInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateUserBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateUserUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateUserForbiddenException($response);
        }
        if (409 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateUserConflictException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\CreateUserInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        throw new \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return ['basic'];
    }
}