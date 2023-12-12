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
class RetentionRuleMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\RetentionRuleMetadata';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\RetentionRuleMetadata';
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
        $object = new \Gyroscops\Harbor\Api\Model\RetentionRuleMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('rule_template', $data) && $data['rule_template'] !== null) {
            $object->setRuleTemplate($data['rule_template']);
        }
        elseif (\array_key_exists('rule_template', $data) && $data['rule_template'] === null) {
            $object->setRuleTemplate(null);
        }
        if (\array_key_exists('display_text', $data) && $data['display_text'] !== null) {
            $object->setDisplayText($data['display_text']);
        }
        elseif (\array_key_exists('display_text', $data) && $data['display_text'] === null) {
            $object->setDisplayText(null);
        }
        if (\array_key_exists('action', $data) && $data['action'] !== null) {
            $object->setAction($data['action']);
        }
        elseif (\array_key_exists('action', $data) && $data['action'] === null) {
            $object->setAction(null);
        }
        if (\array_key_exists('params', $data) && $data['params'] !== null) {
            $values = array();
            foreach ($data['params'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\RetentionRuleParamMetadata', 'json', $context);
            }
            $object->setParams($values);
        }
        elseif (\array_key_exists('params', $data) && $data['params'] === null) {
            $object->setParams(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRuleTemplate()) {
            $data['rule_template'] = $object->getRuleTemplate();
        }
        if (null !== $object->getDisplayText()) {
            $data['display_text'] = $object->getDisplayText();
        }
        if (null !== $object->getAction()) {
            $data['action'] = $object->getAction();
        }
        if (null !== $object->getParams()) {
            $values = array();
            foreach ($object->getParams() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['params'] = $values;
        }
        return $data;
    }
}