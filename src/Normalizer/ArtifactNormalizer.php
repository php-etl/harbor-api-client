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
class ArtifactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\Artifact';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\Artifact';
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
        $object = new \Gyroscops\Harbor\Api\Model\Artifact();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('media_type', $data) && $data['media_type'] !== null) {
            $object->setMediaType($data['media_type']);
        }
        elseif (\array_key_exists('media_type', $data) && $data['media_type'] === null) {
            $object->setMediaType(null);
        }
        if (\array_key_exists('manifest_media_type', $data) && $data['manifest_media_type'] !== null) {
            $object->setManifestMediaType($data['manifest_media_type']);
        }
        elseif (\array_key_exists('manifest_media_type', $data) && $data['manifest_media_type'] === null) {
            $object->setManifestMediaType(null);
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        }
        elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('repository_id', $data) && $data['repository_id'] !== null) {
            $object->setRepositoryId($data['repository_id']);
        }
        elseif (\array_key_exists('repository_id', $data) && $data['repository_id'] === null) {
            $object->setRepositoryId(null);
        }
        if (\array_key_exists('digest', $data) && $data['digest'] !== null) {
            $object->setDigest($data['digest']);
        }
        elseif (\array_key_exists('digest', $data) && $data['digest'] === null) {
            $object->setDigest(null);
        }
        if (\array_key_exists('size', $data) && $data['size'] !== null) {
            $object->setSize($data['size']);
        }
        elseif (\array_key_exists('size', $data) && $data['size'] === null) {
            $object->setSize(null);
        }
        if (\array_key_exists('icon', $data) && $data['icon'] !== null) {
            $object->setIcon($data['icon']);
        }
        elseif (\array_key_exists('icon', $data) && $data['icon'] === null) {
            $object->setIcon(null);
        }
        if (\array_key_exists('push_time', $data) && $data['push_time'] !== null) {
            $object->setPushTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['push_time']));
        }
        elseif (\array_key_exists('push_time', $data) && $data['push_time'] === null) {
            $object->setPushTime(null);
        }
        if (\array_key_exists('pull_time', $data) && $data['pull_time'] !== null) {
            $object->setPullTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['pull_time']));
        }
        elseif (\array_key_exists('pull_time', $data) && $data['pull_time'] === null) {
            $object->setPullTime(null);
        }
        if (\array_key_exists('extra_attrs', $data) && $data['extra_attrs'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['extra_attrs'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setExtraAttrs($values);
        }
        elseif (\array_key_exists('extra_attrs', $data) && $data['extra_attrs'] === null) {
            $object->setExtraAttrs(null);
        }
        if (\array_key_exists('annotations', $data) && $data['annotations'] !== null) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['annotations'] as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setAnnotations($values_1);
        }
        elseif (\array_key_exists('annotations', $data) && $data['annotations'] === null) {
            $object->setAnnotations(null);
        }
        if (\array_key_exists('references', $data) && $data['references'] !== null) {
            $values_2 = array();
            foreach ($data['references'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Gyroscops\\Harbor\\Api\\Model\\Reference', 'json', $context);
            }
            $object->setReferences($values_2);
        }
        elseif (\array_key_exists('references', $data) && $data['references'] === null) {
            $object->setReferences(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_3 = array();
            foreach ($data['tags'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Gyroscops\\Harbor\\Api\\Model\\Tag', 'json', $context);
            }
            $object->setTags($values_3);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('addition_links', $data) && $data['addition_links'] !== null) {
            $values_4 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['addition_links'] as $key_2 => $value_4) {
                $values_4[$key_2] = $this->denormalizer->denormalize($value_4, 'Gyroscops\\Harbor\\Api\\Model\\AdditionLink', 'json', $context);
            }
            $object->setAdditionLinks($values_4);
        }
        elseif (\array_key_exists('addition_links', $data) && $data['addition_links'] === null) {
            $object->setAdditionLinks(null);
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $values_5 = array();
            foreach ($data['labels'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Gyroscops\\Harbor\\Api\\Model\\Label', 'json', $context);
            }
            $object->setLabels($values_5);
        }
        elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('scan_overview', $data) && $data['scan_overview'] !== null) {
            $values_6 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['scan_overview'] as $key_3 => $value_6) {
                $values_6[$key_3] = $this->denormalizer->denormalize($value_6, 'Gyroscops\\Harbor\\Api\\Model\\NativeReportSummary', 'json', $context);
            }
            $object->setScanOverview($values_6);
        }
        elseif (\array_key_exists('scan_overview', $data) && $data['scan_overview'] === null) {
            $object->setScanOverview(null);
        }
        if (\array_key_exists('accessories', $data) && $data['accessories'] !== null) {
            $values_7 = array();
            foreach ($data['accessories'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Gyroscops\\Harbor\\Api\\Model\\Accessory', 'json', $context);
            }
            $object->setAccessories($values_7);
        }
        elseif (\array_key_exists('accessories', $data) && $data['accessories'] === null) {
            $object->setAccessories(null);
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
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getMediaType()) {
            $data['media_type'] = $object->getMediaType();
        }
        if (null !== $object->getManifestMediaType()) {
            $data['manifest_media_type'] = $object->getManifestMediaType();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getRepositoryId()) {
            $data['repository_id'] = $object->getRepositoryId();
        }
        if (null !== $object->getDigest()) {
            $data['digest'] = $object->getDigest();
        }
        if (null !== $object->getSize()) {
            $data['size'] = $object->getSize();
        }
        if (null !== $object->getIcon()) {
            $data['icon'] = $object->getIcon();
        }
        if (null !== $object->getPushTime()) {
            $data['push_time'] = $object->getPushTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getPullTime()) {
            $data['pull_time'] = $object->getPullTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getExtraAttrs()) {
            $values = array();
            foreach ($object->getExtraAttrs() as $key => $value) {
                $values[$key] = $value;
            }
            $data['extra_attrs'] = $values;
        }
        if (null !== $object->getAnnotations()) {
            $values_1 = array();
            foreach ($object->getAnnotations() as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $data['annotations'] = $values_1;
        }
        if (null !== $object->getReferences()) {
            $values_2 = array();
            foreach ($object->getReferences() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['references'] = $values_2;
        }
        if (null !== $object->getTags()) {
            $values_3 = array();
            foreach ($object->getTags() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['tags'] = $values_3;
        }
        if (null !== $object->getAdditionLinks()) {
            $values_4 = array();
            foreach ($object->getAdditionLinks() as $key_2 => $value_4) {
                $values_4[$key_2] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['addition_links'] = $values_4;
        }
        if (null !== $object->getLabels()) {
            $values_5 = array();
            foreach ($object->getLabels() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['labels'] = $values_5;
        }
        if (null !== $object->getScanOverview()) {
            $values_6 = array();
            foreach ($object->getScanOverview() as $key_3 => $value_6) {
                $values_6[$key_3] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['scan_overview'] = $values_6;
        }
        if (null !== $object->getAccessories()) {
            $values_7 = array();
            foreach ($object->getAccessories() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['accessories'] = $values_7;
        }
        return $data;
    }
}