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
class RetentionPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\RetentionPolicy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\RetentionPolicy';
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
        $object = new \Harbor\Api\Model\RetentionPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('rules', $data)) {
            $values = array();
            foreach ($data['rules'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Harbor\\Api\\Model\\RetentionRule', 'json', $context);
            }
            $object->setRules($values);
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($this->denormalizer->denormalize($data['scope'], 'Harbor\\Api\\Model\\RetentionPolicyScope', 'json', $context));
        }
        if (\array_key_exists('trigger', $data)) {
            $object->setTrigger($this->denormalizer->denormalize($data['trigger'], 'Harbor\\Api\\Model\\RetentionRuleTrigger', 'json', $context));
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('algorithm', $data)) {
            $object->setAlgorithm($data['algorithm']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRules()) {
            $values = array();
            foreach ($object->getRules() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['rules'] = $values;
        }
        if (null !== $object->getScope()) {
            $data['scope'] = $this->normalizer->normalize($object->getScope(), 'json', $context);
        }
        if (null !== $object->getTrigger()) {
            $data['trigger'] = $this->normalizer->normalize($object->getTrigger(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getAlgorithm()) {
            $data['algorithm'] = $object->getAlgorithm();
        }
        return $data;
    }
}