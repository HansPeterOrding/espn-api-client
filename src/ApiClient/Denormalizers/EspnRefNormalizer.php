<?php

declare(strict_types=1);

namespace HansPeterOrding\EspnApiClient\ApiClient\Denormalizers;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class EspnRefNormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
    {
        if (is_array($data)) {
            $data = $this->transformRefs($data);
        }

        // Weiterreichen an den nächsten Normalizer in der Kette (z.B. ObjectNormalizer)
        // Wir setzen ein Flag, um Endlosschleifen zu verhindern
        return $this->denormalizer->denormalize($data, $type, $format, $context + ['espn_ref_normalized' => true]);
    }

    private function transformRefs(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                // Check: Ist das ein Objekt mit einer $ref?
                if (isset($value['$ref'])) {
                    // Erzeuge neuen Key: aus "type" wird "typeReference"
                    // Du kannst hier auch "Link" oder sonst was wählen
                    $newKey = $key . 'Reference';
                    $data[$newKey] = $value['$ref'];

                    // Wenn das Objekt NUR aus $ref bestand oder wir den Rest ignorieren wollen:
                    // Wir löschen das Original-Objekt "type", damit der Serializer nicht mehr darüber stolpert
                    unset($data[$key]);
                } else {
                    // Rekursiv weiter suchen (für tiefe Verschachtelungen)
                    $data[$key] = $this->transformRefs($value);
                }
            }

            // Optional: $ref auf oberster Ebene entfernen
            if ($key === '$ref') {
                unset($data['$ref']);
            }
        }

        return $data;
    }

    public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
    {
        // Greift ein, wenn es ein Array ist und wir noch nicht hier waren
        return is_array($data) && !isset($context['espn_ref_normalized']);
    }

    public function getSupportedTypes(?string $format): array
    {
        // Gilt für alle Typen
        return ['*' => false];
    }
}
