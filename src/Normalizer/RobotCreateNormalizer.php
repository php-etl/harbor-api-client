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
class RobotCreateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RobotCreate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RobotCreate';
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
        $object = new \Gyroscops\Harbor\Api\Model\RobotCreate();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('secret', $data) && $data['secret'] !== null) {
            $object->setSecret($data['secret']);
        }
        elseif (\array_key_exists('secret', $data) && $data['secret'] === null) {
            $object->setSecret(null);
        }
        if (\array_key_exists('level', $data) && $data['level'] !== null) {
            $object->setLevel($data['level']);
        }
        elseif (\array_key_exists('level', $data) && $data['level'] === null) {
            $object->setLevel(null);
        }
        if (\array_key_exists('disable', $data) && $data['disable'] !== null) {
            $object->setDisable($data['disable']);
        }
        elseif (\array_key_exists('disable', $data) && $data['disable'] === null) {
            $object->setDisable(null);
        }
        if (\array_key_exists('duration', $data) && $data['duration'] !== null) {
            $object->setDuration($data['duration']);
        }
        elseif (\array_key_exists('duration', $data) && $data['duration'] === null) {
            $object->setDuration(null);
        }
        if (\array_key_exists('permissions', $data) && $data['permissions'] !== null) {
            $values = array();
            foreach ($data['permissions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\RobotPermission', 'json', $context);
            }
            $object->setPermissions($values);
        }
        elseif (\array_key_exists('permissions', $data) && $data['permissions'] === null) {
            $object->setPermissions(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getSecret()) {
            $data['secret'] = $object->getSecret();
        }
        if (null !== $object->getLevel()) {
            $data['level'] = $object->getLevel();
        }
        if (null !== $object->getDisable()) {
            $data['disable'] = $object->getDisable();
        }
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if (null !== $object->getPermissions()) {
            $values = array();
            foreach ($object->getPermissions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['permissions'] = $values;
        }
        return $data;
    }
}