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
class SupportedWebhookEventTypesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\SupportedWebhookEventTypes';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\SupportedWebhookEventTypes';
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
        $object = new \Gyroscops\Harbor\Api\Model\SupportedWebhookEventTypes();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('event_type', $data)) {
            $values = array();
            foreach ($data['event_type'] as $value) {
                $values[] = $value;
            }
            $object->setEventType($values);
        }
        if (\array_key_exists('notify_type', $data)) {
            $values_1 = array();
            foreach ($data['notify_type'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNotifyType($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEventType()) {
            $values = array();
            foreach ($object->getEventType() as $value) {
                $values[] = $value;
            }
            $data['event_type'] = $values;
        }
        if (null !== $object->getNotifyType()) {
            $values_1 = array();
            foreach ($object->getNotifyType() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['notify_type'] = $values_1;
        }
        return $data;
    }
}