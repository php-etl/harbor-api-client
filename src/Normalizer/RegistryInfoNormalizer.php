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
class RegistryInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RegistryInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RegistryInfo';
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
        $object = new \Gyroscops\Harbor\Api\Model\RegistryInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('supported_resource_filters', $data) && $data['supported_resource_filters'] !== null) {
            $values = array();
            foreach ($data['supported_resource_filters'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\FilterStyle', 'json', $context);
            }
            $object->setSupportedResourceFilters($values);
        }
        elseif (\array_key_exists('supported_resource_filters', $data) && $data['supported_resource_filters'] === null) {
            $object->setSupportedResourceFilters(null);
        }
        if (\array_key_exists('supported_triggers', $data) && $data['supported_triggers'] !== null) {
            $values_1 = array();
            foreach ($data['supported_triggers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSupportedTriggers($values_1);
        }
        elseif (\array_key_exists('supported_triggers', $data) && $data['supported_triggers'] === null) {
            $object->setSupportedTriggers(null);
        }
        if (\array_key_exists('supported_copy_by_chunk', $data) && $data['supported_copy_by_chunk'] !== null) {
            $object->setSupportedCopyByChunk($data['supported_copy_by_chunk']);
        }
        elseif (\array_key_exists('supported_copy_by_chunk', $data) && $data['supported_copy_by_chunk'] === null) {
            $object->setSupportedCopyByChunk(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getSupportedResourceFilters()) {
            $values = array();
            foreach ($object->getSupportedResourceFilters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['supported_resource_filters'] = $values;
        }
        if (null !== $object->getSupportedTriggers()) {
            $values_1 = array();
            foreach ($object->getSupportedTriggers() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['supported_triggers'] = $values_1;
        }
        if (null !== $object->getSupportedCopyByChunk()) {
            $data['supported_copy_by_chunk'] = $object->getSupportedCopyByChunk();
        }
        return $data;
    }
}