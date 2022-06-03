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
class ScannerCapabilityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ScannerCapability';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ScannerCapability';
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
        $object = new \Gyroscops\Harbor\Api\Model\ScannerCapability();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('produces_mime_types', $data)) {
            $values = array();
            foreach ($data['produces_mime_types'] as $value) {
                $values[] = $value;
            }
            $object->setProducesMimeTypes($values);
        }
        if (\array_key_exists('consumes_mime_types', $data)) {
            $values_1 = array();
            foreach ($data['consumes_mime_types'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setConsumesMimeTypes($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProducesMimeTypes()) {
            $values = array();
            foreach ($object->getProducesMimeTypes() as $value) {
                $values[] = $value;
            }
            $data['produces_mime_types'] = $values;
        }
        if (null !== $object->getConsumesMimeTypes()) {
            $values_1 = array();
            foreach ($object->getConsumesMimeTypes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['consumes_mime_types'] = $values_1;
        }
        return $data;
    }
}