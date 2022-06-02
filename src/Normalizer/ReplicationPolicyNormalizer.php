<?php

namespace Harbor\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Harbor\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReplicationPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\ReplicationPolicy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\ReplicationPolicy';
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
        $object = new \Harbor\Api\Model\ReplicationPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('update_time', $data)) {
            $object->setUpdateTime($data['update_time']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('filters', $data)) {
            $values = array();
            foreach ($data['filters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Harbor\\Api\\Model\\ReplicationFilter', 'json', $context);
            }
            $object->setFilters($values);
        }
        if (\array_key_exists('dest_registry', $data)) {
            $object->setDestRegistry($this->denormalizer->denormalize($data['dest_registry'], 'Harbor\\Api\\Model\\Registry', 'json', $context));
        }
        if (\array_key_exists('creation_time', $data)) {
            $object->setCreationTime($data['creation_time']);
        }
        if (\array_key_exists('src_registry', $data)) {
            $object->setSrcRegistry($this->denormalizer->denormalize($data['src_registry'], 'Harbor\\Api\\Model\\Registry', 'json', $context));
        }
        if (\array_key_exists('dest_namespace', $data)) {
            $object->setDestNamespace($data['dest_namespace']);
        }
        if (\array_key_exists('trigger', $data)) {
            $object->setTrigger($this->denormalizer->denormalize($data['trigger'], 'Harbor\\Api\\Model\\ReplicationTrigger', 'json', $context));
        }
        if (\array_key_exists('deletion', $data)) {
            $object->setDeletion($data['deletion']);
        }
        if (\array_key_exists('override', $data)) {
            $object->setOverride($data['override']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getFilters()) {
            $values = array();
            foreach ($object->getFilters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['filters'] = $values;
        }
        if (null !== $object->getDestRegistry()) {
            $data['dest_registry'] = $this->normalizer->normalize($object->getDestRegistry(), 'json', $context);
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime();
        }
        if (null !== $object->getSrcRegistry()) {
            $data['src_registry'] = $this->normalizer->normalize($object->getSrcRegistry(), 'json', $context);
        }
        if (null !== $object->getDestNamespace()) {
            $data['dest_namespace'] = $object->getDestNamespace();
        }
        if (null !== $object->getTrigger()) {
            $data['trigger'] = $this->normalizer->normalize($object->getTrigger(), 'json', $context);
        }
        if (null !== $object->getDeletion()) {
            $data['deletion'] = $object->getDeletion();
        }
        if (null !== $object->getOverride()) {
            $data['override'] = $object->getOverride();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        return $data;
    }
}