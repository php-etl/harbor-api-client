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
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ReplicationPolicy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ReplicationPolicy';
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
        $object = new \Gyroscops\Harbor\Api\Model\ReplicationPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('src_registry', $data) && $data['src_registry'] !== null) {
            $object->setSrcRegistry($this->denormalizer->denormalize($data['src_registry'], 'Gyroscops\\Harbor\\Api\\Model\\Registry', 'json', $context));
        }
        elseif (\array_key_exists('src_registry', $data) && $data['src_registry'] === null) {
            $object->setSrcRegistry(null);
        }
        if (\array_key_exists('dest_registry', $data) && $data['dest_registry'] !== null) {
            $object->setDestRegistry($this->denormalizer->denormalize($data['dest_registry'], 'Gyroscops\\Harbor\\Api\\Model\\Registry', 'json', $context));
        }
        elseif (\array_key_exists('dest_registry', $data) && $data['dest_registry'] === null) {
            $object->setDestRegistry(null);
        }
        if (\array_key_exists('dest_namespace', $data) && $data['dest_namespace'] !== null) {
            $object->setDestNamespace($data['dest_namespace']);
        }
        elseif (\array_key_exists('dest_namespace', $data) && $data['dest_namespace'] === null) {
            $object->setDestNamespace(null);
        }
        if (\array_key_exists('dest_namespace_replace_count', $data) && $data['dest_namespace_replace_count'] !== null) {
            $object->setDestNamespaceReplaceCount($data['dest_namespace_replace_count']);
        }
        elseif (\array_key_exists('dest_namespace_replace_count', $data) && $data['dest_namespace_replace_count'] === null) {
            $object->setDestNamespaceReplaceCount(null);
        }
        if (\array_key_exists('trigger', $data) && $data['trigger'] !== null) {
            $object->setTrigger($this->denormalizer->denormalize($data['trigger'], 'Gyroscops\\Harbor\\Api\\Model\\ReplicationTrigger', 'json', $context));
        }
        elseif (\array_key_exists('trigger', $data) && $data['trigger'] === null) {
            $object->setTrigger(null);
        }
        if (\array_key_exists('filters', $data) && $data['filters'] !== null) {
            $values = array();
            foreach ($data['filters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\ReplicationFilter', 'json', $context);
            }
            $object->setFilters($values);
        }
        elseif (\array_key_exists('filters', $data) && $data['filters'] === null) {
            $object->setFilters(null);
        }
        if (\array_key_exists('replicate_deletion', $data) && $data['replicate_deletion'] !== null) {
            $object->setReplicateDeletion($data['replicate_deletion']);
        }
        elseif (\array_key_exists('replicate_deletion', $data) && $data['replicate_deletion'] === null) {
            $object->setReplicateDeletion(null);
        }
        if (\array_key_exists('deletion', $data) && $data['deletion'] !== null) {
            $object->setDeletion($data['deletion']);
        }
        elseif (\array_key_exists('deletion', $data) && $data['deletion'] === null) {
            $object->setDeletion(null);
        }
        if (\array_key_exists('override', $data) && $data['override'] !== null) {
            $object->setOverride($data['override']);
        }
        elseif (\array_key_exists('override', $data) && $data['override'] === null) {
            $object->setOverride(null);
        }
        if (\array_key_exists('enabled', $data) && $data['enabled'] !== null) {
            $object->setEnabled($data['enabled']);
        }
        elseif (\array_key_exists('enabled', $data) && $data['enabled'] === null) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('creation_time', $data) && $data['creation_time'] !== null) {
            $object->setCreationTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creation_time']));
        }
        elseif (\array_key_exists('creation_time', $data) && $data['creation_time'] === null) {
            $object->setCreationTime(null);
        }
        if (\array_key_exists('update_time', $data) && $data['update_time'] !== null) {
            $object->setUpdateTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['update_time']));
        }
        elseif (\array_key_exists('update_time', $data) && $data['update_time'] === null) {
            $object->setUpdateTime(null);
        }
        if (\array_key_exists('speed', $data) && $data['speed'] !== null) {
            $object->setSpeed($data['speed']);
        }
        elseif (\array_key_exists('speed', $data) && $data['speed'] === null) {
            $object->setSpeed(null);
        }
        if (\array_key_exists('copy_by_chunk', $data) && $data['copy_by_chunk'] !== null) {
            $object->setCopyByChunk($data['copy_by_chunk']);
        }
        elseif (\array_key_exists('copy_by_chunk', $data) && $data['copy_by_chunk'] === null) {
            $object->setCopyByChunk(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getSrcRegistry()) {
            $data['src_registry'] = $this->normalizer->normalize($object->getSrcRegistry(), 'json', $context);
        }
        if (null !== $object->getDestRegistry()) {
            $data['dest_registry'] = $this->normalizer->normalize($object->getDestRegistry(), 'json', $context);
        }
        if (null !== $object->getDestNamespace()) {
            $data['dest_namespace'] = $object->getDestNamespace();
        }
        if (null !== $object->getDestNamespaceReplaceCount()) {
            $data['dest_namespace_replace_count'] = $object->getDestNamespaceReplaceCount();
        }
        if (null !== $object->getTrigger()) {
            $data['trigger'] = $this->normalizer->normalize($object->getTrigger(), 'json', $context);
        }
        if (null !== $object->getFilters()) {
            $values = array();
            foreach ($object->getFilters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['filters'] = $values;
        }
        if (null !== $object->getReplicateDeletion()) {
            $data['replicate_deletion'] = $object->getReplicateDeletion();
        }
        if (null !== $object->getDeletion()) {
            $data['deletion'] = $object->getDeletion();
        }
        if (null !== $object->getOverride()) {
            $data['override'] = $object->getOverride();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getSpeed()) {
            $data['speed'] = $object->getSpeed();
        }
        if (null !== $object->getCopyByChunk()) {
            $data['copy_by_chunk'] = $object->getCopyByChunk();
        }
        return $data;
    }
}