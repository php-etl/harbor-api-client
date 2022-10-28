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

class ScannerRegistrationReqNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Gyroscops\\Harbor\\Api\\Model\\ScannerRegistrationReq';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Gyroscops\\Harbor\\Api\\Model\\ScannerRegistrationReq';
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
        $object = new \Gyroscops\Harbor\Api\Model\ScannerRegistrationReq();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
        } elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('access_credential', $data) && $data['access_credential'] !== null) {
            $object->setAccessCredential($data['access_credential']);
        } elseif (\array_key_exists('access_credential', $data) && $data['access_credential'] === null) {
            $object->setAccessCredential(null);
        }
        if (\array_key_exists('auth', $data) && $data['auth'] !== null) {
            $object->setAuth($data['auth']);
        } elseif (\array_key_exists('auth', $data) && $data['auth'] === null) {
            $object->setAuth(null);
        }
        if (\array_key_exists('disabled', $data) && $data['disabled'] !== null) {
            $object->setDisabled($data['disabled']);
        } elseif (\array_key_exists('disabled', $data) && $data['disabled'] === null) {
            $object->setDisabled(null);
        }
        if (\array_key_exists('use_internal_addr', $data) && $data['use_internal_addr'] !== null) {
            $object->setUseInternalAddr($data['use_internal_addr']);
        } elseif (\array_key_exists('use_internal_addr', $data) && $data['use_internal_addr'] === null) {
            $object->setUseInternalAddr(null);
        }
        if (\array_key_exists('skip_certVerify', $data) && $data['skip_certVerify'] !== null) {
            $object->setSkipCertVerify($data['skip_certVerify']);
        } elseif (\array_key_exists('skip_certVerify', $data) && $data['skip_certVerify'] === null) {
            $object->setSkipCertVerify(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getAccessCredential()) {
            $data['access_credential'] = $object->getAccessCredential();
        }
        if (null !== $object->getAuth()) {
            $data['auth'] = $object->getAuth();
        }
        if (null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        if (null !== $object->getUseInternalAddr()) {
            $data['use_internal_addr'] = $object->getUseInternalAddr();
        }
        if (null !== $object->getSkipCertVerify()) {
            $data['skip_certVerify'] = $object->getSkipCertVerify();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        return $data;
    }
}
