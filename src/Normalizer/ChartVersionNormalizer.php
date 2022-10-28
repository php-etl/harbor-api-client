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
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ChartVersion';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ChartVersion';
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
        $object = new \Gyroscops\Harbor\Api\Model\ChartVersion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $values = array();
            foreach ($data['labels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\Label', 'json', $context);
            }
            $object->setLabels($values);
        } elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('engine', $data) && $data['engine'] !== null) {
            $object->setEngine($data['engine']);
        } elseif (\array_key_exists('engine', $data) && $data['engine'] === null) {
            $object->setEngine(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('deprecated', $data) && $data['deprecated'] !== null) {
            $object->setDeprecated($data['deprecated']);
        } elseif (\array_key_exists('deprecated', $data) && $data['deprecated'] === null) {
            $object->setDeprecated(null);
        }
        if (\array_key_exists('appVersion', $data) && $data['appVersion'] !== null) {
            $object->setAppVersion($data['appVersion']);
        } elseif (\array_key_exists('appVersion', $data) && $data['appVersion'] === null) {
            $object->setAppVersion(null);
        }
        if (\array_key_exists('apiVersion', $data) && $data['apiVersion'] !== null) {
            $object->setApiVersion($data['apiVersion']);
        } elseif (\array_key_exists('apiVersion', $data) && $data['apiVersion'] === null) {
            $object->setApiVersion(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('sources', $data) && $data['sources'] !== null) {
            $values_1 = array();
            foreach ($data['sources'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSources($values_1);
        } elseif (\array_key_exists('sources', $data) && $data['sources'] === null) {
            $object->setSources(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
        } elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('keywords', $data) && $data['keywords'] !== null) {
            $values_2 = array();
            foreach ($data['keywords'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setKeywords($values_2);
        } elseif (\array_key_exists('keywords', $data) && $data['keywords'] === null) {
            $object->setKeywords(null);
        }
        if (\array_key_exists('home', $data) && $data['home'] !== null) {
            $object->setHome($data['home']);
        } elseif (\array_key_exists('home', $data) && $data['home'] === null) {
            $object->setHome(null);
        }
        if (\array_key_exists('icon', $data) && $data['icon'] !== null) {
            $object->setIcon($data['icon']);
        } elseif (\array_key_exists('icon', $data) && $data['icon'] === null) {
            $object->setIcon(null);
        }
        if (\array_key_exists('removed', $data) && $data['removed'] !== null) {
            $object->setRemoved($data['removed']);
        } elseif (\array_key_exists('removed', $data) && $data['removed'] === null) {
            $object->setRemoved(null);
        }
        if (\array_key_exists('digest', $data) && $data['digest'] !== null) {
            $object->setDigest($data['digest']);
        } elseif (\array_key_exists('digest', $data) && $data['digest'] === null) {
            $object->setDigest(null);
        }
        if (\array_key_exists('urls', $data) && $data['urls'] !== null) {
            $values_3 = array();
            foreach ($data['urls'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setUrls($values_3);
        } elseif (\array_key_exists('urls', $data) && $data['urls'] === null) {
            $object->setUrls(null);
        }
        if (\array_key_exists('created', $data) && $data['created'] !== null) {
            $object->setCreated($data['created']);
        } elseif (\array_key_exists('created', $data) && $data['created'] === null) {
            $object->setCreated(null);
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
