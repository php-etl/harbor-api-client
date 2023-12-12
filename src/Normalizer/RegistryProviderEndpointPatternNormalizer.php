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
class RegistryProviderEndpointPatternNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderEndpointPattern';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderEndpointPattern';
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
        $object = new \Gyroscops\Harbor\Api\Model\RegistryProviderEndpointPattern();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('endpoint_type', $data) && $data['endpoint_type'] !== null) {
            $object->setEndpointType($data['endpoint_type']);
        }
        elseif (\array_key_exists('endpoint_type', $data) && $data['endpoint_type'] === null) {
            $object->setEndpointType(null);
        }
        if (\array_key_exists('endpoints', $data) && $data['endpoints'] !== null) {
            $values = array();
            foreach ($data['endpoints'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\RegistryEndpoint', 'json', $context);
            }
            $object->setEndpoints($values);
        }
        elseif (\array_key_exists('endpoints', $data) && $data['endpoints'] === null) {
            $object->setEndpoints(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEndpointType()) {
            $data['endpoint_type'] = $object->getEndpointType();
        }
        if (null !== $object->getEndpoints()) {
            $values = array();
            foreach ($object->getEndpoints() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['endpoints'] = $values;
        }
        return $data;
    }
}