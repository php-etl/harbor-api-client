<?php

namespace Gyroscops\Harbor\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Gyroscops\Harbor\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SearchRepositoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\SearchRepository';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\SearchRepository';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Gyroscops\Harbor\Api\Model\SearchRepository();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('repository_name', $data) && $data['repository_name'] !== null) {
            $object->setRepositoryName($data['repository_name']);
        } elseif (\array_key_exists('repository_name', $data) && $data['repository_name'] === null) {
            $object->setRepositoryName(null);
        }
        if (\array_key_exists('project_name', $data) && $data['project_name'] !== null) {
            $object->setProjectName($data['project_name']);
        } elseif (\array_key_exists('project_name', $data) && $data['project_name'] === null) {
            $object->setProjectName(null);
        }
        if (\array_key_exists('artifact_count', $data) && $data['artifact_count'] !== null) {
            $object->setArtifactCount($data['artifact_count']);
        } elseif (\array_key_exists('artifact_count', $data) && $data['artifact_count'] === null) {
            $object->setArtifactCount(null);
        }
        if (\array_key_exists('project_public', $data) && $data['project_public'] !== null) {
            $object->setProjectPublic($data['project_public']);
        } elseif (\array_key_exists('project_public', $data) && $data['project_public'] === null) {
            $object->setProjectPublic(null);
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        } elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('pull_count', $data) && $data['pull_count'] !== null) {
            $object->setPullCount($data['pull_count']);
        } elseif (\array_key_exists('pull_count', $data) && $data['pull_count'] === null) {
            $object->setPullCount(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRepositoryName()) {
            $data['repository_name'] = $object->getRepositoryName();
        }
        if (null !== $object->getProjectName()) {
            $data['project_name'] = $object->getProjectName();
        }
        if (null !== $object->getArtifactCount()) {
            $data['artifact_count'] = $object->getArtifactCount();
        }
        if (null !== $object->getProjectPublic()) {
            $data['project_public'] = $object->getProjectPublic();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getPullCount()) {
            $data['pull_count'] = $object->getPullCount();
        }
        return $data;
    }
}
