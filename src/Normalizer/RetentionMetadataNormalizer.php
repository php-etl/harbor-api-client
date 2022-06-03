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
class RetentionMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RetentionMetadata';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RetentionMetadata';
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
        $object = new \Gyroscops\Harbor\Api\Model\RetentionMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('templates', $data)) {
            $values = array();
            foreach ($data['templates'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\RetentionRuleMetadata', 'json', $context);
            }
            $object->setTemplates($values);
        }
        if (\array_key_exists('tag_selectors', $data)) {
            $values_1 = array();
            foreach ($data['tag_selectors'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Harbor\\Api\\Model\\RetentionSelectorMetadata', 'json', $context);
            }
            $object->setTagSelectors($values_1);
        }
        if (\array_key_exists('scope_selectors', $data)) {
            $values_2 = array();
            foreach ($data['scope_selectors'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Gyroscops\\Harbor\\Api\\Model\\RetentionSelectorMetadata', 'json', $context);
            }
            $object->setScopeSelectors($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTemplates()) {
            $values = array();
            foreach ($object->getTemplates() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['templates'] = $values;
        }
        if (null !== $object->getTagSelectors()) {
            $values_1 = array();
            foreach ($object->getTagSelectors() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['tag_selectors'] = $values_1;
        }
        if (null !== $object->getScopeSelectors()) {
            $values_2 = array();
            foreach ($object->getScopeSelectors() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['scope_selectors'] = $values_2;
        }
        return $data;
    }
}