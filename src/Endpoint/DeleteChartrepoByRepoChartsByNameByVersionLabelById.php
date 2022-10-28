<?php

namespace Gyroscops\Harbor\Api\Endpoint;

class DeleteChartrepoByRepoChartsByNameByVersionLabelById extends \Gyroscops\Harbor\Api\Runtime\Client\BaseEndpoint implements \Gyroscops\Harbor\Api\Runtime\Client\Endpoint
{
    use \Gyroscops\Harbor\Api\Runtime\Client\EndpointTrait;
    protected $repo;
    protected $name;
    protected $version;
    protected $id;
    /**
     * Remove label from the specified chart version.
     *
     * @param string $repo The project name
     * @param string $name The chart name
     * @param string $version The chart version
     * @param int $id The label ID
     */
    public function __construct(string $repo, string $name, string $version, int $id)
    {
        $this->repo = $repo;
        $this->name = $name;
        $this->version = $version;
        $this->id = $id;
    }
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(array('{repo}', '{name}', '{version}', '{id}'), array($this->repo, $this->name, $this->version, $this->id), '/chartrepo/{repo}/charts/{name}/{version}/labels/{id}');
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
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdBadRequestException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdUnauthorizedException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdForbiddenException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdNotFoundException
     * @throws \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdBadRequestException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\BadRequestFormatedError', 'json'));
        }
        if (401 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdUnauthorizedException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\UnauthorizedChartAPIError', 'json'));
        }
        if (403 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdForbiddenException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\ForbiddenChartAPIError', 'json'));
        }
        if (404 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdNotFoundException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\NotFoundChartAPIError', 'json'));
        }
        if (500 === $status) {
            throw new \Gyroscops\Harbor\Api\Exception\DeleteChartrepoByRepoChartsByNameByVersionLabelByIdInternalServerErrorException($serializer->deserialize($body, 'Gyroscops\\Harbor\\Api\\Model\\InternalChartAPIError', 'json'));
        }
    }
    public function getAuthenticationScopes(): array
    {
        return array('basicAuth');
    }
}
