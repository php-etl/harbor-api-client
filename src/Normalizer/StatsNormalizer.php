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

class StatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Stats';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Stats';
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
        $object = new \Gyroscops\Harbor\Api\Model\Stats();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('metrics', $data) && $data['metrics'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metrics'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setMetrics($values);
        } elseif (\array_key_exists('metrics', $data) && $data['metrics'] === null) {
            $object->setMetrics(null);
        }
        if (\array_key_exists('completed', $data) && $data['completed'] !== null) {
            $object->setCompleted($data['completed']);
        } elseif (\array_key_exists('completed', $data) && $data['completed'] === null) {
            $object->setCompleted(null);
        }
        if (\array_key_exists('total', $data) && $data['total'] !== null) {
            $object->setTotal($data['total']);
        } elseif (\array_key_exists('total', $data) && $data['total'] === null) {
            $object->setTotal(null);
        }
        if (\array_key_exists('ongoing', $data) && $data['ongoing'] !== null) {
            $object->setOngoing($data['ongoing']);
        } elseif (\array_key_exists('ongoing', $data) && $data['ongoing'] === null) {
            $object->setOngoing(null);
        }
        if (\array_key_exists('requester', $data) && $data['requester'] !== null) {
            $object->setRequester($data['requester']);
        } elseif (\array_key_exists('requester', $data) && $data['requester'] === null) {
            $object->setRequester(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMetrics()) {
            $values = array();
            foreach ($object->getMetrics() as $key => $value) {
                $values[$key] = $value;
            }
            $data['metrics'] = $values;
        }
        if (null !== $object->getCompleted()) {
            $data['completed'] = $object->getCompleted();
        }
        if (null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        if (null !== $object->getOngoing()) {
            $data['ongoing'] = $object->getOngoing();
        }
        if (null !== $object->getRequester()) {
            $data['requester'] = $object->getRequester();
        }
        return $data;
    }
}
