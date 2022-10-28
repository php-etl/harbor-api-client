<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class GetChartrepoByRepoChartsByNameByVersionLabel extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $repo;
    protected $name;
    protected $version;
    /**
     * Return the attahced labels of the specified chart version.
     *
     * @param string $repo The project name
     * @param string $name The chart name
     * @param string $version The chart version
     */
    public function __construct(string $repo, string $name, string $version)
    {
        $this->repo = $repo;
        $this->name = $name;
        $this->version = $version;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{repo}', '{name}', '{version}'), array($this->repo, $this->name, $this->version), '/chartrepo/{repo}/charts/{name}/{version}/labels');
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
     * @throws \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\UnauthorizedChartAPIError', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ForbiddenChartAPIError', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\NotFoundChartAPIError', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\GetChartrepoByRepoChartsByNameByVersionLabelInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\InternalChartAPIError', 'json'));
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
