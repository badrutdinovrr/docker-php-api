<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SwarmInitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SwarmInitPostBody';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\SwarmInitPostBody;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\SwarmInitPostBody();
        if (property_exists($data, 'ListenAddr') && $data->{'ListenAddr'} !== null) {
            $object->setListenAddr($data->{'ListenAddr'});
        }
        if (property_exists($data, 'AdvertiseAddr') && $data->{'AdvertiseAddr'} !== null) {
            $object->setAdvertiseAddr($data->{'AdvertiseAddr'});
        }
        if (property_exists($data, 'DataPathAddr') && $data->{'DataPathAddr'} !== null) {
            $object->setDataPathAddr($data->{'DataPathAddr'});
        }
        if (property_exists($data, 'DefaultAddrPool') && $data->{'DefaultAddrPool'} !== null) {
            $values = [];
            foreach ($data->{'DefaultAddrPool'} as $value) {
                $values[] = $value;
            }
            $object->setDefaultAddrPool($values);
        }
        if (property_exists($data, 'ForceNewCluster') && $data->{'ForceNewCluster'} !== null) {
            $object->setForceNewCluster($data->{'ForceNewCluster'});
        }
        if (property_exists($data, 'SubnetSize') && $data->{'SubnetSize'} !== null) {
            $object->setSubnetSize($data->{'SubnetSize'});
        }
        if (property_exists($data, 'Spec') && $data->{'Spec'} !== null) {
            $object->setSpec($this->denormalizer->denormalize($data->{'Spec'}, 'Docker\\API\\Model\\SwarmSpec', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getListenAddr()) {
            $data->{'ListenAddr'} = $object->getListenAddr();
        }
        if (null !== $object->getAdvertiseAddr()) {
            $data->{'AdvertiseAddr'} = $object->getAdvertiseAddr();
        }
        if (null !== $object->getDataPathAddr()) {
            $data->{'DataPathAddr'} = $object->getDataPathAddr();
        }
        if (null !== $object->getDefaultAddrPool()) {
            $values = [];
            foreach ($object->getDefaultAddrPool() as $value) {
                $values[] = $value;
            }
            $data->{'DefaultAddrPool'} = $values;
        }
        if (null !== $object->getForceNewCluster()) {
            $data->{'ForceNewCluster'} = $object->getForceNewCluster();
        }
        if (null !== $object->getSubnetSize()) {
            $data->{'SubnetSize'} = $object->getSubnetSize();
        }
        if (null !== $object->getSpec()) {
            $data->{'Spec'} = $this->normalizer->normalize($object->getSpec(), 'json', $context);
        }

        return $data;
    }
}
