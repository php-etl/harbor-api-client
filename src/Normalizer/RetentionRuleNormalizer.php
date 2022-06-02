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
class RetentionRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\RetentionRule';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\RetentionRule';
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
        $object = new \Harbor\Api\Model\RetentionRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
        }
        if (\array_key_exists('scope_selectors', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['scope_selectors'] as $key => $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Harbor\\Api\\Model\\RetentionSelector', 'json', $context);
                }
                $values[$key] = $values_1;
            }
            $object->setScopeSelectors($values);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
        }
        if (\array_key_exists('params', $data)) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['params'] as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $object->setParams($values_2);
        }
        if (\array_key_exists('template', $data)) {
            $object->setTemplate($data['template']);
        }
        if (\array_key_exists('action', $data)) {
            $object->setAction($data['action']);
        }
        if (\array_key_exists('tag_selectors', $data)) {
            $values_3 = array();
            foreach ($data['tag_selectors'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Harbor\\Api\\Model\\RetentionSelector', 'json', $context);
            }
            $object->setTagSelectors($values_3);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if (null !== $object->getScopeSelectors()) {
            $values = array();
            foreach ($object->getScopeSelectors() as $key => $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values[$key] = $values_1;
            }
            $data['scope_selectors'] = $values;
        }
        if (null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        if (null !== $object->getParams()) {
            $values_2 = array();
            foreach ($object->getParams() as $key_1 => $value_2) {
                $values_2[$key_1] = $value_2;
            }
            $data['params'] = $values_2;
        }
        if (null !== $object->getTemplate()) {
            $data['template'] = $object->getTemplate();
        }
        if (null !== $object->getAction()) {
            $data['action'] = $object->getAction();
        }
        if (null !== $object->getTagSelectors()) {
            $values_3 = array();
            foreach ($object->getTagSelectors() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['tag_selectors'] = $values_3;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        return $data;
    }
}