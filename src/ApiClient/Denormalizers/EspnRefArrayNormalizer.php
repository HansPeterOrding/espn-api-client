<?php

namespace HansPeterOrding\EspnApiClient\ApiClient\Denormalizers;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class EspnRefArrayNormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    private const ALREADY_CALLED = 'ESPN_REF_ARRAY_DENORMALIZER_ALREADY_CALLED';

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        // 1. Prevent infinite recursion loops
        if (isset($context[self::ALREADY_CALLED])) {
            return false;
        }

        // 2. Validate this is a collection array
        if (!is_array($data) || empty($data)) {
            return false;
        }

        // 3. Look closely at the first item to see if it fits the shape [{"$ref": "..."}]
        $firstElement = reset($data);

        return is_array($firstElement) && isset($firstElement['$ref']);
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): array
    {
        // Set the flag so this denormalizer steps aside during the next recursive cycle
        $context[self::ALREADY_CALLED] = true;

        $references = [];

        foreach($element as $referenceContainingArray) {
            $references[] = $referenceContainingArray['$ref'];
        }

        // 2. Pass the flat array back into the main chain so the core ArrayDenormalizer
        // or EspnRefNormalizer can inject it into your DTO target safely.
        return $this->denormalizer->denormalize($references, $type, $format, $context);
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            '*' => false, // Set to false to force checking supportsDenormalization() every time, bypassing caching conflicts
        ];
    }
}
