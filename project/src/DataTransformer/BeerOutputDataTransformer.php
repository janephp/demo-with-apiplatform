<?php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\Entity\Beer;
use Generated\Model\BeerOutput;
use Jane\AutoMapper\AutoMapperInterface;

class BeerOutputDataTransformer implements DataTransformerInterface
{
    private AutoMapperInterface $autoMapper;

    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    /**
     * @param Beer $data
     *
     * @return BeerOutput
     */
    public function transform($data, string $to, array $context = [])
    {
        return $this->autoMapper->map($data, BeerOutput::class, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return BeerOutput::class === $to && $data instanceof Beer;
    }
}