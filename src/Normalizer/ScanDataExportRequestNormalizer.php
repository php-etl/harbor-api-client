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
class ScanDataExportRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ScanDataExportRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ScanDataExportRequest';
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
        $object = new \Gyroscops\Harbor\Api\Model\ScanDataExportRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('job_name', $data) && $data['job_name'] !== null) {
            $object->setJobName($data['job_name']);
        }
        elseif (\array_key_exists('job_name', $data) && $data['job_name'] === null) {
            $object->setJobName(null);
        }
        if (\array_key_exists('projects', $data) && $data['projects'] !== null) {
            $values = array();
            foreach ($data['projects'] as $value) {
                $values[] = $value;
            }
            $object->setProjects($values);
        }
        elseif (\array_key_exists('projects', $data) && $data['projects'] === null) {
            $object->setProjects(null);
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $values_1 = array();
            foreach ($data['labels'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setLabels($values_1);
        }
        elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('repositories', $data) && $data['repositories'] !== null) {
            $object->setRepositories($data['repositories']);
        }
        elseif (\array_key_exists('repositories', $data) && $data['repositories'] === null) {
            $object->setRepositories(null);
        }
        if (\array_key_exists('cveIds', $data) && $data['cveIds'] !== null) {
            $object->setCveIds($data['cveIds']);
        }
        elseif (\array_key_exists('cveIds', $data) && $data['cveIds'] === null) {
            $object->setCveIds(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $object->setTags($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getJobName()) {
            $data['job_name'] = $object->getJobName();
        }
        if (null !== $object->getProjects()) {
            $values = array();
            foreach ($object->getProjects() as $value) {
                $values[] = $value;
            }
            $data['projects'] = $values;
        }
        if (null !== $object->getLabels()) {
            $values_1 = array();
            foreach ($object->getLabels() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['labels'] = $values_1;
        }
        if (null !== $object->getRepositories()) {
            $data['repositories'] = $object->getRepositories();
        }
        if (null !== $object->getCveIds()) {
            $data['cveIds'] = $object->getCveIds();
        }
        if (null !== $object->getTags()) {
            $data['tags'] = $object->getTags();
        }
        return $data;
    }
}