<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutUsersByUserIdCliSecret extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $user_id;
    /**
    * This endpoint let user generate a new CLI secret for himself.  This API only works when auth mode is set to 'OIDC'.
    Once this API returns with successful status, the old secret will be invalid, as there will be only one CLI secret
    for a user.
    
    *
    * @param int $userId User ID
    * @param \Gyroscops\Harbor\Api\Model\UsersUserIdCliSecretPutBody $inputSecret JSON object that includes the new secret
    */
    public function __construct(int $userId, \Gyroscops\Harbor\Api\Model\UsersUserIdCliSecretPutBody $inputSecret)
    {
        $this->user_id = $userId;
        $this->body = $inputSecret;
    }
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{user_id}'), array($this->user_id), '/users/{user_id}/cli_secret');
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
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretPreconditionFailedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretNotFoundException();
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretForbiddenException();
        }
        if (412 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretPreconditionFailedException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretUnauthorizedException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretBadRequestException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdCliSecretInternalServerErrorException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}