<?php

namespace Harbor\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Harbor\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ChartVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\ChartVersion';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\ChartVersion';
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
        $object = new \Harbor\Api\Model\ChartVersion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('labels', $data)) {
            $values = array();
            foreach ($data['labels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Harbor\\Api\\Model\\Label', 'json', $context);
            }
            $object->setLabels($values);
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
            $values_1 = array();
            foreach ($data['sources'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSources($values_1);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('keywords', $data)) {
            $values_2 = array();
            foreach ($data['keywords'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setKeywords($values_2);
        }
        if (\array_key_exists('home', $data)) {
            $object->setHome($data['home']);
        }
        if (\array_key_exists('icon', $data)) {
            $object->setIcon($data['icon']);
        }
        if (\array_key_exists('removed', $data)) {
            $object->setRemoved($data['removed']);
        }
        if (\array_key_exists('digest', $data)) {
            $object->setDigest($data['digest']);
        }
        if (\array_key_exists('urls', $data)) {
            $values_3 = array();
            foreach ($data['urls'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setUrls($values_3);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLabels()) {
            $values = array();
            foreach ($object->getLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['labels'] = $values;
        }
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
            $values_1 = array();
            foreach ($object->getSources() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['sources'] = $values_1;
        }
        $data['version'] = $object->getVersion();
        if (null !== $object->getKeywords()) {
            $values_2 = array();
            foreach ($object->getKeywords() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['keywords'] = $values_2;
        }
        if (null !== $object->getHome()) {
            $data['home'] = $object->getHome();
        }
        $data['icon'] = $object->getIcon();
        if (null !== $object->getRemoved()) {
            $data['removed'] = $object->getRemoved();
        }
        if (null !== $object->getDigest()) {
            $data['digest'] = $object->getDigest();
        }
        if (null !== $object->getUrls()) {
            $values_3 = array();
            foreach ($object->getUrls() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['urls'] = $values_3;
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        return $data;
    }
}