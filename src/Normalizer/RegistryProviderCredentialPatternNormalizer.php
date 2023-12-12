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
class RegistryProviderCredentialPatternNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderCredentialPattern';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RegistryProviderCredentialPattern';
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
        $object = new \Gyroscops\Harbor\Api\Model\RegistryProviderCredentialPattern();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('access_key_type', $data) && $data['access_key_type'] !== null) {
            $object->setAccessKeyType($data['access_key_type']);
        }
        elseif (\array_key_exists('access_key_type', $data) && $data['access_key_type'] === null) {
            $object->setAccessKeyType(null);
        }
        if (\array_key_exists('access_key_data', $data) && $data['access_key_data'] !== null) {
            $object->setAccessKeyData($data['access_key_data']);
        }
        elseif (\array_key_exists('access_key_data', $data) && $data['access_key_data'] === null) {
            $object->setAccessKeyData(null);
        }
        if (\array_key_exists('access_secret_type', $data) && $data['access_secret_type'] !== null) {
            $object->setAccessSecretType($data['access_secret_type']);
        }
        elseif (\array_key_exists('access_secret_type', $data) && $data['access_secret_type'] === null) {
            $object->setAccessSecretType(null);
        }
        if (\array_key_exists('access_secret_data', $data) && $data['access_secret_data'] !== null) {
            $object->setAccessSecretData($data['access_secret_data']);
        }
        elseif (\array_key_exists('access_secret_data', $data) && $data['access_secret_data'] === null) {
            $object->setAccessSecretData(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAccessKeyType()) {
            $data['access_key_type'] = $object->getAccessKeyType();
        }
        if (null !== $object->getAccessKeyData()) {
            $data['access_key_data'] = $object->getAccessKeyData();
        }
        if (null !== $object->getAccessSecretType()) {
            $data['access_secret_type'] = $object->getAccessSecretType();
        }
        if (null !== $object->getAccessSecretData()) {
            $data['access_secret_data'] = $object->getAccessSecretData();
        }
        return $data;
    }
}