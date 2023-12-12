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
        if (\array_key_exists('project_name', $data) && $data['project_name'] !== null) {
            $object->setProjectName($data['project_name']);
        }
        elseif (\array_key_exists('project_name', $data) && $data['project_name'] === null) {
            $object->setProjectName(null);
        }
        if (\array_key_exists('public', $data) && $data['public'] !== null) {
            $object->setPublic($data['public']);
        }
        elseif (\array_key_exists('public', $data) && $data['public'] === null) {
            $object->setPublic(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata', 'json', $context));
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('cve_allowlist', $data) && $data['cve_allowlist'] !== null) {
            $object->setCveAllowlist($this->denormalizer->denormalize($data['cve_allowlist'], 'Gyroscops\\Harbor\\Api\\Model\\CVEAllowlist', 'json', $context));
        }
        elseif (\array_key_exists('cve_allowlist', $data) && $data['cve_allowlist'] === null) {
            $object->setCveAllowlist(null);
        }
        if (\array_key_exists('storage_limit', $data) && $data['storage_limit'] !== null) {
            $object->setStorageLimit($data['storage_limit']);
        }
        elseif (\array_key_exists('storage_limit', $data) && $data['storage_limit'] === null) {
            $object->setStorageLimit(null);
        }
        if (\array_key_exists('registry_id', $data) && $data['registry_id'] !== null) {
            $object->setRegistryId($data['registry_id']);
        }
        elseif (\array_key_exists('registry_id', $data) && $data['registry_id'] === null) {
            $object->setRegistryId(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProjectName()) {
            $data['project_name'] = $object->getProjectName();
        }
        if (null !== $object->getPublic()) {
            $data['public'] = $object->getPublic();
        }
        if (null !== $object->getMetadata()) {
            $data['metadata'] = $this->normalizer->normalize($object->getMetadata(), 'json', $context);
        }
        if (null !== $object->getCveAllowlist()) {
            $data['cve_allowlist'] = $this->normalizer->normalize($object->getCveAllowlist(), 'json', $context);
        }
        if (null !== $object->getStorageLimit()) {
            $data['storage_limit'] = $object->getStorageLimit();
        }
        if (null !== $object->getRegistryId()) {
            $data['registry_id'] = $object->getRegistryId();
        }
        return $data;
    }
}