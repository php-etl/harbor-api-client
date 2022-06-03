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
class ChartMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ChartMetadata';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ChartMetadata';
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
        $object = new \Gyroscops\Harbor\Api\Model\ChartMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('engine', $data)) {
            $object->setEngine($data['engine']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('deprecated', $data)) {
            $object->setDeprecated($data['deprecated']);
        }
        if (\array_key_exists('appVersion', $data)) {
            $object->setAppVersion($data['appVersion']);
        }
        if (\array_key_exists('apiVersion', $data)) {
            $object->setApiVersion($data['apiVersion']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('sources', $data)) {
            $values = array();
            foreach ($data['sources'] as $value) {
                $values[] = $value;
            }
            $object->setSources($values);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('keywords', $data)) {
            $values_1 = array();
            foreach ($data['keywords'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setKeywords($values_1);
        }
        if (\array_key_exists('home', $data)) {
            $object->setHome($data['home']);
        }
        if (\array_key_exists('icon', $data)) {
            $object->setIcon($data['icon']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['engine'] = $object->getEngine();
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDeprecated()) {
            $data['deprecated'] = $object->getDeprecated();
        }
        $data['appVersion'] = $object->getAppVersion();
        $data['apiVersion'] = $object->getApiVersion();
        $data['name'] = $object->getName();
        if (null !== $object->getSources()) {
            $values = array();
            foreach ($object->getSources() as $value) {
                $values[] = $value;
            }
            $data['sources'] = $values;
        }
        $data['version'] = $object->getVersion();
        if (null !== $object->getKeywords()) {
            $values_1 = array();
            foreach ($object->getKeywords() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['keywords'] = $values_1;
        }
        if (null !== $object->getHome()) {
            $data['home'] = $object->getHome();
        }
        $data['icon'] = $object->getIcon();
        return $data;
    }
}