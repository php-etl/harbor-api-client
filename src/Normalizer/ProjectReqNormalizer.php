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
class ProjectReqNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ProjectReq';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ProjectReq';
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
        $object = new \Gyroscops\Harbor\Api\Model\ProjectReq();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count_limit', $data)) {
            $object->setCountLimit($data['count_limit']);
        }
        if (\array_key_exists('project_name', $data)) {
            $object->setProjectName($data['project_name']);
        }
        if (\array_key_exists('cve_whitelist', $data)) {
            $object->setCveWhitelist($this->denormalizer->denormalize($data['cve_whitelist'], 'Gyroscops\\Harbor\\Api\\Model\\CVEWhitelist', 'json', $context));
        }
        if (\array_key_exists('storage_limit', $data)) {
            $object->setStorageLimit($data['storage_limit']);
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCountLimit()) {
            $data['count_limit'] = $object->getCountLimit();
        }
        if (null !== $object->getProjectName()) {
            $data['project_name'] = $object->getProjectName();
        }
        if (null !== $object->getCveWhitelist()) {
            $data['cve_whitelist'] = $this->normalizer->normalize($object->getCveWhitelist(), 'json', $context);
        }
        if (null !== $object->getStorageLimit()) {
            $data['storage_limit'] = $object->getStorageLimit();
        }
        if (null !== $object->getMetadata()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        return $data;
    }
}