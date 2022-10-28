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

class SearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Search';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Search';
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
        $object = new \Gyroscops\Harbor\Api\Model\Search();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('project', $data) && $data['project'] !== null) {
            $values = array();
            foreach ($data['project'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\Project', 'json', $context);
            }
            $object->setProject($values);
        } elseif (\array_key_exists('project', $data) && $data['project'] === null) {
            $object->setProject(null);
        }
        if (\array_key_exists('chart', $data) && $data['chart'] !== null) {
            $values_1 = array();
            foreach ($data['chart'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Harbor\\Api\\Model\\SearchResult', 'json', $context);
            }
            $object->setChart($values_1);
        } elseif (\array_key_exists('chart', $data) && $data['chart'] === null) {
            $object->setChart(null);
        }
        if (\array_key_exists('repository', $data) && $data['repository'] !== null) {
            $values_2 = array();
            foreach ($data['repository'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Gyroscops\\Harbor\\Api\\Model\\SearchRepository', 'json', $context);
            }
            $object->setRepository($values_2);
        } elseif (\array_key_exists('repository', $data) && $data['repository'] === null) {
            $object->setRepository(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProject()) {
            $values = array();
            foreach ($object->getProject() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['project'] = $values;
        }
        if (null !== $object->getChart()) {
            $values_1 = array();
            foreach ($object->getChart() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['chart'] = $values_1;
        }
        if (null !== $object->getRepository()) {
            $values_2 = array();
            foreach ($object->getRepository() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['repository'] = $values_2;
        }
        return $data;
    }
}
