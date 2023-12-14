<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class UpdateUserPassword extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $user_id;
    /**
     * This endpoint is for user to update password. Users with the admin role can change any user's password. Regular users can change only their own password.
     *
     * @param int $userId 
     * @param \Gyroscops\Harbor\Api\Model\PasswordReq $password Password to be updated, the attribute 'old_password' is optional when the API is called by the system administrator.
     * @param array $headerParameters {
     *     @var string $X-Request-Id An unique ID for the request
     * }
     */
    public function __construct(int $userId, \Gyroscops\Harbor\Api\Model\PasswordReq $password, array $headerParameters = array())
    {
        $this->user_id = $userId;
        $this->body = $password;
        $this->headerParameters = $headerParameters;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{user_id}'), array($this->user_id), '/users/{user_id}/password');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Request-Id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('X-Request-Id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordBadRequestException($response);
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordForbiddenException($response);
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\UpdateUserPasswordInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\Errors', 'json'), $response);
        }
        throw new \Gyroscops\Harbor\Api\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('basic');
    }
}