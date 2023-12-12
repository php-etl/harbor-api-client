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
class SecuritySummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\SecuritySummary';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\SecuritySummary';
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
        $object = new \Gyroscops\Harbor\Api\Model\SecuritySummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('critical_cnt', $data) && $data['critical_cnt'] !== null) {
            $object->setCriticalCnt($data['critical_cnt']);
        }
        elseif (\array_key_exists('critical_cnt', $data) && $data['critical_cnt'] === null) {
            $object->setCriticalCnt(null);
        }
        if (\array_key_exists('high_cnt', $data) && $data['high_cnt'] !== null) {
            $object->setHighCnt($data['high_cnt']);
        }
        elseif (\array_key_exists('high_cnt', $data) && $data['high_cnt'] === null) {
            $object->setHighCnt(null);
        }
        if (\array_key_exists('medium_cnt', $data) && $data['medium_cnt'] !== null) {
            $object->setMediumCnt($data['medium_cnt']);
        }
        elseif (\array_key_exists('medium_cnt', $data) && $data['medium_cnt'] === null) {
            $object->setMediumCnt(null);
        }
        if (\array_key_exists('low_cnt', $data) && $data['low_cnt'] !== null) {
            $object->setLowCnt($data['low_cnt']);
        }
        elseif (\array_key_exists('low_cnt', $data) && $data['low_cnt'] === null) {
            $object->setLowCnt(null);
        }
        if (\array_key_exists('none_cnt', $data) && $data['none_cnt'] !== null) {
            $object->setNoneCnt($data['none_cnt']);
        }
        elseif (\array_key_exists('none_cnt', $data) && $data['none_cnt'] === null) {
            $object->setNoneCnt(null);
        }
        if (\array_key_exists('unknown_cnt', $data) && $data['unknown_cnt'] !== null) {
            $object->setUnknownCnt($data['unknown_cnt']);
        }
        elseif (\array_key_exists('unknown_cnt', $data) && $data['unknown_cnt'] === null) {
            $object->setUnknownCnt(null);
        }
        if (\array_key_exists('total_vuls', $data) && $data['total_vuls'] !== null) {
            $object->setTotalVuls($data['total_vuls']);
        }
        elseif (\array_key_exists('total_vuls', $data) && $data['total_vuls'] === null) {
            $object->setTotalVuls(null);
        }
        if (\array_key_exists('scanned_cnt', $data) && $data['scanned_cnt'] !== null) {
            $object->setScannedCnt($data['scanned_cnt']);
        }
        elseif (\array_key_exists('scanned_cnt', $data) && $data['scanned_cnt'] === null) {
            $object->setScannedCnt(null);
        }
        if (\array_key_exists('total_artifact', $data) && $data['total_artifact'] !== null) {
            $object->setTotalArtifact($data['total_artifact']);
        }
        elseif (\array_key_exists('total_artifact', $data) && $data['total_artifact'] === null) {
            $object->setTotalArtifact(null);
        }
        if (\array_key_exists('fixable_cnt', $data) && $data['fixable_cnt'] !== null) {
            $object->setFixableCnt($data['fixable_cnt']);
        }
        elseif (\array_key_exists('fixable_cnt', $data) && $data['fixable_cnt'] === null) {
            $object->setFixableCnt(null);
        }
        if (\array_key_exists('dangerous_cves', $data) && $data['dangerous_cves'] !== null) {
            $values = array();
            foreach ($data['dangerous_cves'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Gyroscops\\Harbor\\Api\\Model\\DangerousCVE', 'json', $context);
            }
            $object->setDangerousCves($values);
        }
        elseif (\array_key_exists('dangerous_cves', $data) && $data['dangerous_cves'] === null) {
            $object->setDangerousCves(null);
        }
        if (\array_key_exists('dangerous_artifacts', $data) && $data['dangerous_artifacts'] !== null) {
            $values_1 = array();
            foreach ($data['dangerous_artifacts'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Gyroscops\\Harbor\\Api\\Model\\DangerousArtifact', 'json', $context);
            }
            $object->setDangerousArtifacts($values_1);
        }
        elseif (\array_key_exists('dangerous_artifacts', $data) && $data['dangerous_artifacts'] === null) {
            $object->setDangerousArtifacts(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCriticalCnt()) {
            $data['critical_cnt'] = $object->getCriticalCnt();
        }
        if (null !== $object->getHighCnt()) {
            $data['high_cnt'] = $object->getHighCnt();
        }
        if (null !== $object->getMediumCnt()) {
            $data['medium_cnt'] = $object->getMediumCnt();
        }
        if (null !== $object->getLowCnt()) {
            $data['low_cnt'] = $object->getLowCnt();
        }
        if (null !== $object->getNoneCnt()) {
            $data['none_cnt'] = $object->getNoneCnt();
        }
        if (null !== $object->getUnknownCnt()) {
            $data['unknown_cnt'] = $object->getUnknownCnt();
        }
        if (null !== $object->getTotalVuls()) {
            $data['total_vuls'] = $object->getTotalVuls();
        }
        if (null !== $object->getScannedCnt()) {
            $data['scanned_cnt'] = $object->getScannedCnt();
        }
        if (null !== $object->getTotalArtifact()) {
            $data['total_artifact'] = $object->getTotalArtifact();
        }
        if (null !== $object->getFixableCnt()) {
            $data['fixable_cnt'] = $object->getFixableCnt();
        }
        if (null !== $object->getDangerousCves()) {
            $values = array();
            foreach ($object->getDangerousCves() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['dangerous_cves'] = $values;
        }
        if (null !== $object->getDangerousArtifacts()) {
            $values_1 = array();
            foreach ($object->getDangerousArtifacts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['dangerous_artifacts'] = $values_1;
        }
        return $data;
    }
}