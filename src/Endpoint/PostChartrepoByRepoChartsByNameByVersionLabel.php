<?php

namespace Harbor\Api\Endpoint;

class PostChartrepoByRepoChartsByNameByVersionLabel extends \Harbor\Api\Runtime\Client\BaseEndpoint implements \Harbor\Api\Runtime\Client\Endpoint
{
    protected $repo;
    protected $name;
    protected $version;
    /**
     * Mark label to the specified chart version.
     *
     * @param string $repo The project name
     * @param string $name The chart name
     * @param string $version The chart version
     * @param \Harbor\Api\Model\Label $label The label being marked to the chart version
     */
    public function __construct(string $repo, string $name, string $version, \Harbor\Api\Model\Label $label)
    {
        $this->repo = $repo;
        $this->name = $name;
        $this->version = $version;
        $this->body = $label;
    }
    use \Harbor\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{repo}', '{name}', '{version}'), array($this->repo, $this->name, $this->version), '/chartrepo/{repo}/charts/{name}/{version}/labels');
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
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelBadRequestException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelForbiddenException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelNotFoundException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelConflictException
     * @throws \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelBadRequestException($serializer->deserialize($body, 'Harbor\\Api\\Model\\BadRequestFormatedError', 'json'));
        }
        if (401 === $status) {
            throw new \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelUnauthorizedException($serializer->deserialize($body, 'Harbor\\Api\\Model\\UnauthorizedChartAPIError', 'json'));
        }
        if (403 === $status) {
            throw new \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelForbiddenException($serializer->deserialize($body, 'Harbor\\Api\\Model\\ForbiddenChartAPIError', 'json'));
        }
        if (404 === $status) {
            throw new \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelNotFoundException($serializer->deserialize($body, 'Harbor\\Api\\Model\\NotFoundChartAPIError', 'json'));
        }
        if (409 === $status) {
            throw new \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelConflictException($serializer->deserialize($body, 'Harbor\\Api\\Model\\ConflictFormatedError', 'json'));
        }
        if (500 === $status) {
            throw new \Harbor\Api\Exception\PostChartrepoByRepoChartsByNameByVersionLabelInternalServerErrorException($serializer->deserialize($body, 'Harbor\\Api\\Model\\InternalChartAPIError', 'json'));
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('basicAuth');
    }
}