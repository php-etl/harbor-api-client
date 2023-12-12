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
class PermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Permissions';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Permissions';
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
        $object = new \Gyroscops\Harbor\Api\Model\Permissions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('system', $data) && $data['system'] !== null) {
            $values = array();
            foreach ($data['system'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\Permission', 'json', $context);
            }
            $object->setSystem($values);
        }
        elseif (\array_key_exists('system', $data) && $data['system'] === null) {
            $object->setSystem(null);
        }
        if (\array_key_exists('project', $data) && $data['project'] !== null) {
            $values_1 = array();
            foreach ($data['project'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Harbor\\Api\\Model\\Permission', 'json', $context);
            }
            $object->setProject($values_1);
        }
        elseif (\array_key_exists('project', $data) && $data['project'] === null) {
            $object->setProject(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSystem()) {
            $values = array();
            foreach ($object->getSystem() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['system'] = $values;
        }
        if (null !== $object->getProject()) {
            $values_1 = array();
            foreach ($object->getProject() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['project'] = $values_1;
        }
        return $data;
    }
}