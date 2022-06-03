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
class RobotAccountCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RobotAccountCreate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RobotAccountCreate';
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
        $object = new \Gyroscops\Harbor\Api\Model\RobotAccountCreate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('access', $data)) {
            $values = array();
            foreach ($data['access'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\RobotAccountAccess', 'json', $context);
            }
            $object->setAccess($values);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('expires_at', $data)) {
            $object->setExpiresAt($data['expires_at']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAccess()) {
            $values = array();
            foreach ($object->getAccess() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['access'] = $values;
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getExpiresAt()) {
            $data['expires_at'] = $object->getExpiresAt();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        return $data;
    }
}