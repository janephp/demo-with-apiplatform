<?php

namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\Entity\Beer;
use Generated\Model\BeerInput;
use Jane\AutoMapper\AutoMapperInterface;

class BeerInputDataTransformer implements DataTransformerInterface
{
    private AutoMapperInterface $autoMapper;

    public function __construct(AutoMapperInterface $autoMapper)
    {
        $this->autoMapper = $autoMapper;
    }

    /**
     * @param BeerInput $data
     *
     * @return Beer
     */
    public function transform($data, string $to, array $context = [])
    {
        return $this->autoMapper->map($data, Beer::class, $context);
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