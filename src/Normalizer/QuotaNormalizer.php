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
class QuotaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Quota';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Quota';
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
        $object = new \Gyroscops\Harbor\Api\Model\Quota();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('update_time', $data)) {
            $object->setUpdateTime($data['update_time']);
        }
        if (\array_key_exists('used', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['used'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setUsed($values);
        }
        if (\array_key_exists('ref', $data)) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['ref'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setRef($values_1);
        }
        if (\array_key_exists('hard', $data)) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['hard'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setHard($values_2);
        }
        if (\array_key_exists('creation_time', $data)) {
            $object->setCreationTime($data['creation_time']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
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
        if (null !== $object->getUsed()) {
            $values = array();
            foreach ($object->getUsed() as $key => $value) {
                $values[$key] = $value;
            }
            $data['used'] = $values;
        }
        if (null !== $object->getRef()) {
            $values_1 = array();
            foreach ($object->getRef() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['ref'] = $values_1;
        }
        if (null !== $object->getHard()) {
            $values_2 = array();
            foreach ($object->getHard() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $data['hard'] = $values_2;
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        return $data;
    }
}