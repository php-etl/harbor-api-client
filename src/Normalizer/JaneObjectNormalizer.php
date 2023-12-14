<?php

namespace Gyroscops\Harbor\Api\Normalizer;

use Gyroscops\Harbor\Api\Runtime\Normalizer\CheckArray;
use Gyroscops\Harbor\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = array('Gyroscops\\Harbor\\Api\\Model\\Errors' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ErrorsNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Error' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ErrorNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ProjectReq' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectReqNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\Project' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectMetadataNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\CVEAllowlist' => 'Gyroscops\\Harbor\\Api\\Normalizer\\CVEAllowlistNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\CVEAllowlistItem' => 'Gyroscops\\Harbor\\Api\\Normalizer\\CVEAllowlistItemNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserGroup' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserGroupNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectMemberEntityNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\ProjectMember' => 'Gyroscops\\Harbor\\Api\\Normalizer\\ProjectMemberNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\RoleRequest' => 'Gyroscops\\Harbor\\Api\\Normalizer\\RoleRequestNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserEntity' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserEntityNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserProfile' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserProfileNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserCreationReq' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserCreationReqNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo' => 'Gyroscops\\Harbor\\Api\\Normalizer\\OIDCUserInfoNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserResp' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserRespNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\PasswordReq' => 'Gyroscops\\Harbor\\Api\\Normalizer\\PasswordReqNormalizer', 'Gyroscops\\Harbor\\Api\\Model\\UserSearchRespItem' => 'Gyroscops\\Harbor\\Api\\Normalizer\\UserSearchRespItemNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Gyroscops\\Harbor\\Api\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Gyroscops\\Harbor\\Api\\Model\\Errors' => false, 'Gyroscops\\Harbor\\Api\\Model\\Error' => false, 'Gyroscops\\Harbor\\Api\\Model\\ProjectReq' => false, 'Gyroscops\\Harbor\\Api\\Model\\Project' => false, 'Gyroscops\\Harbor\\Api\\Model\\ProjectMetadata' => false, 'Gyroscops\\Harbor\\Api\\Model\\CVEAllowlist' => false, 'Gyroscops\\Harbor\\Api\\Model\\CVEAllowlistItem' => false, 'Gyroscops\\Harbor\\Api\\Model\\UserGroup' => false, 'Gyroscops\\Harbor\\Api\\Model\\ProjectMemberEntity' => false, 'Gyroscops\\Harbor\\Api\\Model\\ProjectMember' => false, 'Gyroscops\\Harbor\\Api\\Model\\RoleRequest' => false, 'Gyroscops\\Harbor\\Api\\Model\\UserEntity' => false, 'Gyroscops\\Harbor\\Api\\Model\\UserProfile' => false, 'Gyroscops\\Harbor\\Api\\Model\\UserCreationReq' => false, 'Gyroscops\\Harbor\\Api\\Model\\OIDCUserInfo' => false, 'Gyroscops\\Harbor\\Api\\Model\\UserResp' => false, 'Gyroscops\\Harbor\\Api\\Model\\PasswordReq' => false, 'Gyroscops\\Harbor\\Api\\Model\\UserSearchRespItem' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false);
    }
}