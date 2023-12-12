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
class ReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Reference';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Reference';
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
        $object = new \Gyroscops\Harbor\Api\Model\Reference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('parent_id', $data) && $data['parent_id'] !== null) {
            $object->setParentId($data['parent_id']);
        }
        elseif (\array_key_exists('parent_id', $data) && $data['parent_id'] === null) {
            $object->setParentId(null);
        }
        if (\array_key_exists('child_id', $data) && $data['child_id'] !== null) {
            $object->setChildId($data['child_id']);
        }
        elseif (\array_key_exists('child_id', $data) && $data['child_id'] === null) {
            $object->setChildId(null);
        }
        if (\array_key_exists('child_digest', $data) && $data['child_digest'] !== null) {
            $object->setChildDigest($data['child_digest']);
        }
        elseif (\array_key_exists('child_digest', $data) && $data['child_digest'] === null) {
            $object->setChildDigest(null);
        }
        if (\array_key_exists('platform', $data) && $data['platform'] !== null) {
            $object->setPlatform($this->denormalizer->denormalize($data['platform'], 'Gyroscops\\Harbor\\Api\\Model\\Platform', 'json', $context));
        }
        elseif (\array_key_exists('platform', $data) && $data['platform'] === null) {
            $object->setPlatform(null);
        }
        if (\array_key_exists('annotations', $data) && $data['annotations'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['annotations'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setAnnotations($values);
        }
        elseif (\array_key_exists('annotations', $data) && $data['annotations'] === null) {
            $object->setAnnotations(null);
        }
        if (\array_key_exists('urls', $data) && $data['urls'] !== null) {
            $values_1 = array();
            foreach ($data['urls'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUrls($values_1);
        }
        elseif (\array_key_exists('urls', $data) && $data['urls'] === null) {
            $object->setUrls(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        if (null !== $object->getChildId()) {
            $data['child_id'] = $object->getChildId();
        }
        if (null !== $object->getChildDigest()) {
            $data['child_digest'] = $object->getChildDigest();
        }
        if (null !== $object->getPlatform()) {
            $data['platform'] = $this->normalizer->normalize($object->getPlatform(), 'json', $context);
        }
        if (null !== $object->getAnnotations()) {
            $values = array();
            foreach ($object->getAnnotations() as $key => $value) {
                $values[$key] = $value;
            }
            $data['annotations'] = $values;
        }
        if (null !== $object->getUrls()) {
            $values_1 = array();
            foreach ($object->getUrls() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['urls'] = $values_1;
        }
        return $data;
    }
}