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

class PutRegistryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\PutRegistry';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\PutRegistry';
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
        $object = new \Gyroscops\Harbor\Api\Model\PutRegistry();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('access_key', $data) && $data['access_key'] !== null) {
            $object->setAccessKey($data['access_key']);
        } elseif (\array_key_exists('access_key', $data) && $data['access_key'] === null) {
            $object->setAccessKey(null);
        }
        if (\array_key_exists('credential_type', $data) && $data['credential_type'] !== null) {
            $object->setCredentialType($data['credential_type']);
        } elseif (\array_key_exists('credential_type', $data) && $data['credential_type'] === null) {
            $object->setCredentialType(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('access_secret', $data) && $data['access_secret'] !== null) {
            $object->setAccessSecret($data['access_secret']);
        } elseif (\array_key_exists('access_secret', $data) && $data['access_secret'] === null) {
            $object->setAccessSecret(null);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('insecure', $data) && $data['insecure'] !== null) {
            $object->setInsecure($data['insecure']);
        } elseif (\array_key_exists('insecure', $data) && $data['insecure'] === null) {
            $object->setInsecure(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAccessKey()) {
            $data['access_key'] = $object->getAccessKey();
        }
        if (null !== $object->getCredentialType()) {
            $data['credential_type'] = $object->getCredentialType();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getAccessSecret()) {
            $data['access_secret'] = $object->getAccessSecret();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getInsecure()) {
            $data['insecure'] = $object->getInsecure();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        return $data;
    }
}
