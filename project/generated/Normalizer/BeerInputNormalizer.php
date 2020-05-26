<?php

namespace Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BeerInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Generated\\Model\\BeerInput';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Generated\Model\BeerInput;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Generated\Model\BeerInput();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $value = $data['id'];
            if (is_int($data['id'])) {
                $value = $data['id'];
            } elseif (is_null($data['id'])) {
                $value = $data['id'];
            }
            $object->setId($value);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $value_1 = $data['name'];
            if (is_string($data['name'])) {
                $value_1 = $data['name'];
            } elseif (is_null($data['name'])) {
                $value_1 = $data['name'];
            }
            $object->setName($value_1);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('brewer', $data) && $data['brewer'] !== null) {
            $value_2 = $data['brewer'];
            if (is_string($data['brewer'])) {
                $value_2 = $data['brewer'];
            } elseif (is_null($data['brewer'])) {
                $value_2 = $data['brewer'];
            }
            $object->setBrewer($value_2);
        }
        elseif (\array_key_exists('brewer', $data) && $data['brewer'] === null) {
            $object->setBrewer(null);
        }
        if (\array_key_exists('style', $data) && $data['style'] !== null) {
            $value_3 = $data['style'];
            if (is_string($data['style'])) {
                $value_3 = $data['style'];
            } elseif (is_null($data['style'])) {
                $value_3 = $data['style'];
            }
            $object->setStyle($value_3);
        }
        elseif (\array_key_exists('style', $data) && $data['style'] === null) {
            $object->setStyle(null);
        }
        if (\array_key_exists('volume', $data) && $data['volume'] !== null) {
            $value_4 = $data['volume'];
            if (is_int($data['volume'])) {
                $value_4 = $data['volume'];
            } elseif (is_null($data['volume'])) {
                $value_4 = $data['volume'];
            }
            $object->setVolume($value_4);
        }
        elseif (\array_key_exists('volume', $data) && $data['volume'] === null) {
            $object->setVolume(null);
        }
        if (\array_key_exists('alcohol', $data) && $data['alcohol'] !== null) {
            $value_5 = $data['alcohol'];
            if (is_int($data['alcohol'])) {
                $value_5 = $data['alcohol'];
            } elseif (is_null($data['alcohol'])) {
                $value_5 = $data['alcohol'];
            }
            $object->setAlcohol($value_5);
        }
        elseif (\array_key_exists('alcohol', $data) && $data['alcohol'] === null) {
            $object->setAlcohol(null);
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $value_6 = $data['country'];
            if (is_string($data['country'])) {
                $value_6 = $data['country'];
            } elseif (is_null($data['country'])) {
                $value_6 = $data['country'];
            }
            $object->setCountry($value_6);
        }
        elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('color', $data) && $data['color'] !== null) {
            $value_7 = $data['color'];
            if (is_string($data['color'])) {
                $value_7 = $data['color'];
            } elseif (is_null($data['color'])) {
                $value_7 = $data['color'];
            }
            $object->setColor($value_7);
        }
        elseif (\array_key_exists('color', $data) && $data['color'] === null) {
            $object->setColor(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $value = $object->getId();
        if (is_int($object->getId())) {
            $value = $object->getId();
        } elseif (is_null($object->getId())) {
            $value = $object->getId();
        }
        $data['id'] = $value;
        $value_1 = $object->getName();
        if (is_string($object->getName())) {
            $value_1 = $object->getName();
        } elseif (is_null($object->getName())) {
            $value_1 = $object->getName();
        }
        $data['name'] = $value_1;
        $value_2 = $object->getBrewer();
        if (is_string($object->getBrewer())) {
            $value_2 = $object->getBrewer();
        } elseif (is_null($object->getBrewer())) {
            $value_2 = $object->getBrewer();
        }
        $data['brewer'] = $value_2;
        $value_3 = $object->getStyle();
        if (is_string($object->getStyle())) {
            $value_3 = $object->getStyle();
        } elseif (is_null($object->getStyle())) {
            $value_3 = $object->getStyle();
        }
        $data['style'] = $value_3;
        $value_4 = $object->getVolume();
        if (is_int($object->getVolume())) {
            $value_4 = $object->getVolume();
        } elseif (is_null($object->getVolume())) {
            $value_4 = $object->getVolume();
        }
        $data['volume'] = $value_4;
        $value_5 = $object->getAlcohol();
        if (is_int($object->getAlcohol())) {
            $value_5 = $object->getAlcohol();
        } elseif (is_null($object->getAlcohol())) {
            $value_5 = $object->getAlcohol();
        }
        $data['alcohol'] = $value_5;
        $value_6 = $object->getCountry();
        if (is_string($object->getCountry())) {
            $value_6 = $object->getCountry();
        } elseif (is_null($object->getCountry())) {
            $value_6 = $object->getCountry();
        }
        $data['country'] = $value_6;
        $value_7 = $object->getColor();
        if (is_string($object->getColor())) {
            $value_7 = $object->getColor();
        } elseif (is_null($object->getColor())) {
            $value_7 = $object->getColor();
        }
        $data['color'] = $value_7;
        return $data;
    }
}