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
class DangerousCVENormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\DangerousCVE';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\DangerousCVE';
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
        $object = new \Gyroscops\Harbor\Api\Model\DangerousCVE();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cve_id', $data) && $data['cve_id'] !== null) {
            $object->setCveId($data['cve_id']);
        }
        elseif (\array_key_exists('cve_id', $data) && $data['cve_id'] === null) {
            $object->setCveId(null);
        }
        if (\array_key_exists('severity', $data) && $data['severity'] !== null) {
            $object->setSeverity($data['severity']);
        }
        elseif (\array_key_exists('severity', $data) && $data['severity'] === null) {
            $object->setSeverity(null);
        }
        if (\array_key_exists('cvss_score_v3', $data) && $data['cvss_score_v3'] !== null) {
            $object->setCvssScoreV3($data['cvss_score_v3']);
        }
        elseif (\array_key_exists('cvss_score_v3', $data) && $data['cvss_score_v3'] === null) {
            $object->setCvssScoreV3(null);
        }
        if (\array_key_exists('desc', $data) && $data['desc'] !== null) {
            $object->setDesc($data['desc']);
        }
        elseif (\array_key_exists('desc', $data) && $data['desc'] === null) {
            $object->setDesc(null);
        }
        if (\array_key_exists('package', $data) && $data['package'] !== null) {
            $object->setPackage($data['package']);
        }
        elseif (\array_key_exists('package', $data) && $data['package'] === null) {
            $object->setPackage(null);
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCveId()) {
            $data['cve_id'] = $object->getCveId();
        }
        if (null !== $object->getSeverity()) {
            $data['severity'] = $object->getSeverity();
        }
        if (null !== $object->getCvssScoreV3()) {
            $data['cvss_score_v3'] = $object->getCvssScoreV3();
        }
        if (null !== $object->getDesc()) {
            $data['desc'] = $object->getDesc();
        }
        if (null !== $object->getPackage()) {
            $data['package'] = $object->getPackage();
        }
        if (null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        return $data;
    }
}