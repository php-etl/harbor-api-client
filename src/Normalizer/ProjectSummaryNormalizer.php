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
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ProjectSummary';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ProjectSummary';
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
        $object = new \Gyroscops\Harbor\Api\Model\ProjectSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('repo_count', $data) && $data['repo_count'] !== null) {
            $object->setRepoCount($data['repo_count']);
        }
        elseif (\array_key_exists('repo_count', $data) && $data['repo_count'] === null) {
            $object->setRepoCount(null);
        }
        if (\array_key_exists('project_admin_count', $data) && $data['project_admin_count'] !== null) {
            $object->setProjectAdminCount($data['project_admin_count']);
        }
        elseif (\array_key_exists('project_admin_count', $data) && $data['project_admin_count'] === null) {
            $object->setProjectAdminCount(null);
        }
        if (\array_key_exists('maintainer_count', $data) && $data['maintainer_count'] !== null) {
            $object->setMaintainerCount($data['maintainer_count']);
        }
        elseif (\array_key_exists('maintainer_count', $data) && $data['maintainer_count'] === null) {
            $object->setMaintainerCount(null);
        }
        if (\array_key_exists('developer_count', $data) && $data['developer_count'] !== null) {
            $object->setDeveloperCount($data['developer_count']);
        }
        elseif (\array_key_exists('developer_count', $data) && $data['developer_count'] === null) {
            $object->setDeveloperCount(null);
        }
        if (\array_key_exists('guest_count', $data) && $data['guest_count'] !== null) {
            $object->setGuestCount($data['guest_count']);
        }
        elseif (\array_key_exists('guest_count', $data) && $data['guest_count'] === null) {
            $object->setGuestCount(null);
        }
        if (\array_key_exists('limited_guest_count', $data) && $data['limited_guest_count'] !== null) {
            $object->setLimitedGuestCount($data['limited_guest_count']);
        }
        elseif (\array_key_exists('limited_guest_count', $data) && $data['limited_guest_count'] === null) {
            $object->setLimitedGuestCount(null);
        }
        if (\array_key_exists('quota', $data) && $data['quota'] !== null) {
            $object->setQuota($this->denormalizer->denormalize($data['quota'], 'Gyroscops\\Harbor\\Api\\Model\\ProjectSummaryQuota', 'json', $context));
        }
        elseif (\array_key_exists('quota', $data) && $data['quota'] === null) {
            $object->setQuota(null);
        }
        if (\array_key_exists('registry', $data) && $data['registry'] !== null) {
            $object->setRegistry($this->denormalizer->denormalize($data['registry'], 'Gyroscops\\Harbor\\Api\\Model\\Registry', 'json', $context));
        }
        elseif (\array_key_exists('registry', $data) && $data['registry'] === null) {
            $object->setRegistry(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRepoCount()) {
            $data['repo_count'] = $object->getRepoCount();
        }
        if (null !== $object->getProjectAdminCount()) {
            $data['project_admin_count'] = $object->getProjectAdminCount();
        }
        if (null !== $object->getMaintainerCount()) {
            $data['maintainer_count'] = $object->getMaintainerCount();
        }
        if (null !== $object->getDeveloperCount()) {
            $data['developer_count'] = $object->getDeveloperCount();
        }
        if (null !== $object->getGuestCount()) {
            $data['guest_count'] = $object->getGuestCount();
        }
        if (null !== $object->getLimitedGuestCount()) {
            $data['limited_guest_count'] = $object->getLimitedGuestCount();
        }
        if (null !== $object->getQuota()) {
            $data['quota'] = $this->normalizer->normalize($object->getQuota(), 'json', $context);
        }
        if (null !== $object->getRegistry()) {
            $data['registry'] = $this->normalizer->normalize($object->getRegistry(), 'json', $context);
        }
        return $data;
    }
}