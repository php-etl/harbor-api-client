<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class PutUsersByUserIdPassword extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    protected $user_id;
    /**
     * This endpoint is for user to update password. Users with the admin role can change any user's password. Guest users can change only their own password.
     *
     * @param int $userId Registered user ID.
     * @param \Gyroscops\Harbor\Api\Model\Password $password Password to be updated, the attribute 'old_password' is optional when the API is called by the system administrator.
     */
    public function __construct(int $userId, \Gyroscops\Harbor\Api\Model\Password $password)
    {
        $this->user_id = $userId;
        $this->body = $password;
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
    /**
     * {@inheritdoc}
     *
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordInternalServerErrorException
     * @throws \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordBadRequestException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordForbiddenException();
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordUnauthorizedException();
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordInternalServerErrorException();
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\PutUsersByUserIdPasswordBadRequestException();
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}