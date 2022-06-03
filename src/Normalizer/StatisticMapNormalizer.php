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
class StatisticMapNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\StatisticMap';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\StatisticMap';
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
        $object = new \Gyroscops\Harbor\Api\Model\StatisticMap();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('total_project_count', $data)) {
            $object->setTotalProjectCount($data['total_project_count']);
        }
        if (\array_key_exists('public_project_count', $data)) {
            $object->setPublicProjectCount($data['public_project_count']);
        }
        if (\array_key_exists('private_project_count', $data)) {
            $object->setPrivateProjectCount($data['private_project_count']);
        }
        if (\array_key_exists('public_repo_count', $data)) {
            $object->setPublicRepoCount($data['public_repo_count']);
        }
        if (\array_key_exists('total_repo_count', $data)) {
            $object->setTotalRepoCount($data['total_repo_count']);
        }
        if (\array_key_exists('private_repo_count', $data)) {
            $object->setPrivateRepoCount($data['private_repo_count']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTotalProjectCount()) {
            $data['total_project_count'] = $object->getTotalProjectCount();
        }
        if (null !== $object->getPublicProjectCount()) {
            $data['public_project_count'] = $object->getPublicProjectCount();
        }
        if (null !== $object->getPrivateProjectCount()) {
            $data['private_project_count'] = $object->getPrivateProjectCount();
        }
        if (null !== $object->getPublicRepoCount()) {
            $data['public_repo_count'] = $object->getPublicRepoCount();
        }
        if (null !== $object->getTotalRepoCount()) {
            $data['total_repo_count'] = $object->getTotalRepoCount();
        }
        if (null !== $object->getPrivateRepoCount()) {
            $data['private_repo_count'] = $object->getPrivateRepoCount();
        }
        return $data;
    }
}