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
class ProjectSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\ProjectSummary';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\ProjectSummary';
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
        $object = new \Harbor\Api\Model\ProjectSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('master_count', $data)) {
            $object->setMasterCount($data['master_count']);
        }
        if (\array_key_exists('project_admin_count', $data)) {
            $object->setProjectAdminCount($data['project_admin_count']);
        }
        if (\array_key_exists('developer_count', $data)) {
            $object->setDeveloperCount($data['developer_count']);
        }
        if (\array_key_exists('chart_count', $data)) {
            $object->setChartCount($data['chart_count']);
        }
        if (\array_key_exists('repo_count', $data)) {
            $object->setRepoCount($data['repo_count']);
        }
        if (\array_key_exists('quota', $data)) {
            $object->setQuota($this->denormalizer->denormalize($data['quota'], 'Harbor\\Api\\Model\\ProjectSummaryQuota', 'json', $context));
        }
        if (\array_key_exists('guest_count', $data)) {
            $object->setGuestCount($data['guest_count']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMasterCount()) {
            $data['master_count'] = $object->getMasterCount();
        }
        if (null !== $object->getProjectAdminCount()) {
            $data['project_admin_count'] = $object->getProjectAdminCount();
        }
        if (null !== $object->getDeveloperCount()) {
            $data['developer_count'] = $object->getDeveloperCount();
        }
        if (null !== $object->getChartCount()) {
            $data['chart_count'] = $object->getChartCount();
        }
        if (null !== $object->getRepoCount()) {
            $data['repo_count'] = $object->getRepoCount();
        }
        if (null !== $object->getQuota()) {
            $data['quota'] = $this->normalizer->normalize($object->getQuota(), 'json', $context);
        }
        if (null !== $object->getGuestCount()) {
            $data['guest_count'] = $object->getGuestCount();
        }
        return $data;
    }
}