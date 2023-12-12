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
class RegistryProviderInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderInfo';
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
        $object = new \Gyroscops\Harbor\Api\Model\RegistryProviderInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('endpoint_pattern', $data) && $data['endpoint_pattern'] !== null) {
            $object->setEndpointPattern($this->denormalizer->denormalize($data['endpoint_pattern'], 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderEndpointPattern', 'json', $context));
        }
        elseif (\array_key_exists('endpoint_pattern', $data) && $data['endpoint_pattern'] === null) {
            $object->setEndpointPattern(null);
        }
        if (\array_key_exists('credential_pattern', $data) && $data['credential_pattern'] !== null) {
            $object->setCredentialPattern($this->denormalizer->denormalize($data['credential_pattern'], 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderCredentialPattern', 'json', $context));
        }
        elseif (\array_key_exists('credential_pattern', $data) && $data['credential_pattern'] === null) {
            $object->setCredentialPattern(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEndpointPattern()) {
            $data['endpoint_pattern'] = $this->normalizer->normalize($object->getEndpointPattern(), 'json', $context);
        }
        if (null !== $object->getCredentialPattern()) {
            $data['credential_pattern'] = $this->normalizer->normalize($object->getCredentialPattern(), 'json', $context);
        }
        return $data;
    }
}