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
class AuthproxySettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\AuthproxySetting';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\AuthproxySetting';
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
        $object = new \Gyroscops\Harbor\Api\Model\AuthproxySetting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('endpoint', $data) && $data['endpoint'] !== null) {
            $object->setEndpoint($data['endpoint']);
        }
        elseif (\array_key_exists('endpoint', $data) && $data['endpoint'] === null) {
            $object->setEndpoint(null);
        }
        if (\array_key_exists('tokenreivew_endpoint', $data) && $data['tokenreivew_endpoint'] !== null) {
            $object->setTokenreivewEndpoint($data['tokenreivew_endpoint']);
        }
        elseif (\array_key_exists('tokenreivew_endpoint', $data) && $data['tokenreivew_endpoint'] === null) {
            $object->setTokenreivewEndpoint(null);
        }
        if (\array_key_exists('skip_search', $data) && $data['skip_search'] !== null) {
            $object->setSkipSearch($data['skip_search']);
        }
        elseif (\array_key_exists('skip_search', $data) && $data['skip_search'] === null) {
            $object->setSkipSearch(null);
        }
        if (\array_key_exists('verify_cert', $data) && $data['verify_cert'] !== null) {
            $object->setVerifyCert($data['verify_cert']);
        }
        elseif (\array_key_exists('verify_cert', $data) && $data['verify_cert'] === null) {
            $object->setVerifyCert(null);
        }
        if (\array_key_exists('server_certificate', $data) && $data['server_certificate'] !== null) {
            $object->setServerCertificate($data['server_certificate']);
        }
        elseif (\array_key_exists('server_certificate', $data) && $data['server_certificate'] === null) {
            $object->setServerCertificate(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEndpoint()) {
            $data['endpoint'] = $object->getEndpoint();
        }
        if (null !== $object->getTokenreivewEndpoint()) {
            $data['tokenreivew_endpoint'] = $object->getTokenreivewEndpoint();
        }
        if (null !== $object->getSkipSearch()) {
            $data['skip_search'] = $object->getSkipSearch();
        }
        if (null !== $object->getVerifyCert()) {
            $data['verify_cert'] = $object->getVerifyCert();
        }
        if (null !== $object->getServerCertificate()) {
            $data['server_certificate'] = $object->getServerCertificate();
        }
        return $data;
    }
}