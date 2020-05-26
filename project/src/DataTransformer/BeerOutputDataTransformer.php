<?php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\Entity\Beer;
use Generated\Model\BeerOutput;

class BeerOutputDataTransformer implements DataTransformerInterface
{
    /**
     * @param Beer $data
     *
     * @return BeerOutput
     */
    public function transform($data, string $to, array $context = [])
    {
        $output = new BeerOutput();
        $output->setName($data->getName());
        $output->setBrewer($data->getBrewer());

        return $output;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return BeerOutput::class === $to && $data instanceof Beer;
    }
}