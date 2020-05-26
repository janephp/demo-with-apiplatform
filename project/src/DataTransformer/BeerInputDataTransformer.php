<?php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\Entity\Beer;
use Generated\Model\BeerInput;

class BeerInputDataTransformer implements DataTransformerInterface
{
    /**
     * @param BeerInput $data
     *
     * @return Beer
     */
    public function transform($data, string $to, array $context = [])
    {
        $input = new Beer();
        $input->setId($data->getId());
        $input->setStyle($data->getStyle());
        $input->setVolume($data->getVolume());
        $input->setAlcohol($data->getAlcohol());
        $input->setName($data->getName());
        $input->setBrewer($data->getBrewer());
        $input->setCountry($data->getCountry());
        $input->setColor($data->getColor());

        return $input;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        if ($data instanceof Beer) {
            return false;
        }

        return Beer::class === $to && BeerInput::class === ($context['input']['class'] ?? null);
    }
}