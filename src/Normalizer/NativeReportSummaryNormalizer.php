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
class NativeReportSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\NativeReportSummary';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\NativeReportSummary';
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
        $object = new \Gyroscops\Harbor\Api\Model\NativeReportSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('report_id', $data) && $data['report_id'] !== null) {
            $object->setReportId($data['report_id']);
        }
        elseif (\array_key_exists('report_id', $data) && $data['report_id'] === null) {
            $object->setReportId(null);
        }
        if (\array_key_exists('scan_status', $data) && $data['scan_status'] !== null) {
            $object->setScanStatus($data['scan_status']);
        }
        elseif (\array_key_exists('scan_status', $data) && $data['scan_status'] === null) {
            $object->setScanStatus(null);
        }
        if (\array_key_exists('severity', $data) && $data['severity'] !== null) {
            $object->setSeverity($data['severity']);
        }
        elseif (\array_key_exists('severity', $data) && $data['severity'] === null) {
            $object->setSeverity(null);
        }
        if (\array_key_exists('duration', $data) && $data['duration'] !== null) {
            $object->setDuration($data['duration']);
        }
        elseif (\array_key_exists('duration', $data) && $data['duration'] === null) {
            $object->setDuration(null);
        }
        if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
            $object->setSummary($this->denormalizer->denormalize($data['summary'], 'Gyroscops\\Harbor\\Api\\Model\\VulnerabilitySummary', 'json', $context));
        }
        elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
            $object->setSummary(null);
        }
        if (\array_key_exists('start_time', $data) && $data['start_time'] !== null) {
            $object->setStartTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['start_time']));
        }
        elseif (\array_key_exists('start_time', $data) && $data['start_time'] === null) {
            $object->setStartTime(null);
        }
        if (\array_key_exists('end_time', $data) && $data['end_time'] !== null) {
            $object->setEndTime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['end_time']));
        }
        elseif (\array_key_exists('end_time', $data) && $data['end_time'] === null) {
            $object->setEndTime(null);
        }
        if (\array_key_exists('complete_percent', $data) && $data['complete_percent'] !== null) {
            $object->setCompletePercent($data['complete_percent']);
        }
        elseif (\array_key_exists('complete_percent', $data) && $data['complete_percent'] === null) {
            $object->setCompletePercent(null);
        }
        if (\array_key_exists('scanner', $data) && $data['scanner'] !== null) {
            $object->setScanner($this->denormalizer->denormalize($data['scanner'], 'Gyroscops\\Harbor\\Api\\Model\\Scanner', 'json', $context));
        }
        elseif (\array_key_exists('scanner', $data) && $data['scanner'] === null) {
            $object->setScanner(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getReportId()) {
            $data['report_id'] = $object->getReportId();
        }
        if (null !== $object->getScanStatus()) {
            $data['scan_status'] = $object->getScanStatus();
        }
        if (null !== $object->getSeverity()) {
            $data['severity'] = $object->getSeverity();
        }
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if (null !== $object->getSummary()) {
            $data['summary'] = $this->normalizer->normalize($object->getSummary(), 'json', $context);
        }
        if (null !== $object->getStartTime()) {
            $data['start_time'] = $object->getStartTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getEndTime()) {
            $data['end_time'] = $object->getEndTime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getCompletePercent()) {
            $data['complete_percent'] = $object->getCompletePercent();
        }
        if (null !== $object->getScanner()) {
            $data['scanner'] = $this->normalizer->normalize($object->getScanner(), 'json', $context);
        }
        return $data;
    }
}