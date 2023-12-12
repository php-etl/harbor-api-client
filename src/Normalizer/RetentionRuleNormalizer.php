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
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RetentionRule';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RetentionRule';
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
        $object = new \Gyroscops\Harbor\Api\Model\RetentionRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('priority', $data) && $data['priority'] !== null) {
            $object->setPriority($data['priority']);
        }
        elseif (\array_key_exists('priority', $data) && $data['priority'] === null) {
            $object->setPriority(null);
        }
        if (\array_key_exists('disabled', $data) && $data['disabled'] !== null) {
            $object->setDisabled($data['disabled']);
        }
        elseif (\array_key_exists('disabled', $data) && $data['disabled'] === null) {
            $object->setDisabled(null);
        }
        if (\array_key_exists('action', $data) && $data['action'] !== null) {
            $object->setAction($data['action']);
        }
        elseif (\array_key_exists('action', $data) && $data['action'] === null) {
            $object->setAction(null);
        }
        if (\array_key_exists('template', $data) && $data['template'] !== null) {
            $object->setTemplate($data['template']);
        }
        elseif (\array_key_exists('template', $data) && $data['template'] === null) {
            $object->setTemplate(null);
        }
        if (\array_key_exists('params', $data) && $data['params'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['params'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setParams($values);
        }
        elseif (\array_key_exists('params', $data) && $data['params'] === null) {
            $object->setParams(null);
        }
        if (\array_key_exists('tag_selectors', $data) && $data['tag_selectors'] !== null) {
            $values_1 = array();
            foreach ($data['tag_selectors'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Harbor\\Api\\Model\\RetentionSelector', 'json', $context);
            }
            $object->setTagSelectors($values_1);
        }
        elseif (\array_key_exists('tag_selectors', $data) && $data['tag_selectors'] === null) {
            $object->setTagSelectors(null);
        }
        if (\array_key_exists('scope_selectors', $data) && $data['scope_selectors'] !== null) {
            $values_2 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['scope_selectors'] as $key_1 => $value_2) {
                $values_3 = array();
                foreach ($value_2 as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Gyroscops\\Harbor\\Api\\Model\\RetentionSelector', 'json', $context);
                }
                $values_2[$key_1] = $values_3;
            }
            $object->setScopeSelectors($values_2);
        }
        elseif (\array_key_exists('scope_selectors', $data) && $data['scope_selectors'] === null) {
            $object->setScopeSelectors(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getPriority()) {
            $data['priority'] = $object->getPriority();
        }
        if (null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        if (null !== $object->getAction()) {
            $data['action'] = $object->getAction();
        }
        if (null !== $object->getTemplate()) {
            $data['template'] = $object->getTemplate();
        }
        if (null !== $object->getParams()) {
            $values = array();
            foreach ($object->getParams() as $key => $value) {
                $values[$key] = $value;
            }
            $data['params'] = $values;
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
            foreach ($object->getScopeSelectors() as $key_1 => $value_2) {
                $values_3 = array();
                foreach ($value_2 as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $values_2[$key_1] = $values_3;
            }
            $data['scope_selectors'] = $values_2;
        }
        return $data;
    }
}