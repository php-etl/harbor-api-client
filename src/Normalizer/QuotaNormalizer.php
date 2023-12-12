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
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('ref', $data) && $data['ref'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['ref'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setRef($values);
        }
        elseif (\array_key_exists('ref', $data) && $data['ref'] === null) {
            $object->setRef(null);
        }
        if (\array_key_exists('hard', $data) && $data['hard'] !== null) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['hard'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setHard($values_1);
        }
        elseif (\array_key_exists('hard', $data) && $data['hard'] === null) {
            $object->setHard(null);
        }
        if (\array_key_exists('used', $data) && $data['used'] !== null) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['used'] as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $object->setUsed($values_2);
        }
        elseif (\array_key_exists('used', $data) && $data['used'] === null) {
            $object->setUsed(null);
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
        if (null !== $object->getRef()) {
            $values = array();
            foreach ($object->getRef() as $key => $value) {
                $values[$key] = $value;
            }
            $data['ref'] = $values;
        }
        if (null !== $object->getHard()) {
            $values_1 = array();
            foreach ($object->getHard() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['hard'] = $values_1;
        }
        if (null !== $object->getUsed()) {
            $values_2 = array();
            foreach ($object->getUsed() as $key_2 => $value_2) {
                $values_2[$key_2] = $value_2;
            }
            $data['used'] = $values_2;
        }
        if (null !== $object->getCreationTime()) {
            $data['creation_time'] = $object->getCreationTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdateTime()) {
            $data['update_time'] = $object->getUpdateTime()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}