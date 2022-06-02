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
class GeneralInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Harbor\\Api\\Model\\GeneralInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Harbor\\Api\\Model\\GeneralInfo';
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
        $object = new \Harbor\Api\Model\GeneralInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('harbor_version', $data)) {
            $object->setHarborVersion($data['harbor_version']);
        }
        if (\array_key_exists('auth_mode', $data)) {
            $object->setAuthMode($data['auth_mode']);
        }
        if (\array_key_exists('self_registration', $data)) {
            $object->setSelfRegistration($data['self_registration']);
        }
        if (\array_key_exists('external_url', $data)) {
            $object->setExternalUrl($data['external_url']);
        }
        if (\array_key_exists('project_creation_restriction', $data)) {
            $object->setProjectCreationRestriction($data['project_creation_restriction']);
        }
        if (\array_key_exists('has_ca_root', $data)) {
            $object->setHasCaRoot($data['has_ca_root']);
        }
        if (\array_key_exists('with_notary', $data)) {
            $object->setWithNotary($data['with_notary']);
        }
        if (\array_key_exists('with_chartmuseum', $data)) {
            $object->setWithChartmuseum($data['with_chartmuseum']);
        }
        if (\array_key_exists('registry_url', $data)) {
            $object->setRegistryUrl($data['registry_url']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getHarborVersion()) {
            $data['harbor_version'] = $object->getHarborVersion();
        }
        if (null !== $object->getAuthMode()) {
            $data['auth_mode'] = $object->getAuthMode();
        }
        if (null !== $object->getSelfRegistration()) {
            $data['self_registration'] = $object->getSelfRegistration();
        }
        if (null !== $object->getExternalUrl()) {
            $data['external_url'] = $object->getExternalUrl();
        }
        if (null !== $object->getProjectCreationRestriction()) {
            $data['project_creation_restriction'] = $object->getProjectCreationRestriction();
        }
        if (null !== $object->getHasCaRoot()) {
            $data['has_ca_root'] = $object->getHasCaRoot();
        }
        if (null !== $object->getWithNotary()) {
            $data['with_notary'] = $object->getWithNotary();
        }
        if (null !== $object->getWithChartmuseum()) {
            $data['with_chartmuseum'] = $object->getWithChartmuseum();
        }
        if (null !== $object->getRegistryUrl()) {
            $data['registry_url'] = $object->getRegistryUrl();
        }
        return $data;
    }
}