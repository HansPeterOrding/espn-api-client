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
        $transformed = [];

        foreach ($data as $key => $value) {
            // Falls wir auf der numerischen Ebene einer Liste sind (z.B. Index 0, 1, 2)
            // wollen wir den Key nicht verändern, sondern nur den Inhalt transformieren
            if (is_int($key) && is_array($value)) {
                $transformed[$key] = $this->transformRefs($value);
                continue;
            }

            if (is_array($value)) {
                // FALL 1: Einzelnes Ref-Objekt -> "venue": {"$ref": "..."}
                if (isset($value['$ref'])) {
                    $transformed[$key . 'Reference'] = $value['$ref'];
                    continue;
                }

                // FALL 2: Liste von Ref-Objekten -> "competitors": [{"$ref": "..."}, {"$ref": "..."}]
                if ($this->isRefArray($value)) {
                    $transformed[$key . 'References'] = array_map(
                        static fn(array $item): string => $item['$ref'],
                        $value
                    );
                    continue;
                }

                // FALL 3: Normales verschachteltes Array -> Rekursion
                $transformed[$key] = $this->transformRefs($value);
                continue;
            }

            // Alle Skalare (Strings, Ints, etc.) einfach behalten
            if ($key !== '$ref') {
                $transformed[$key] = $value;
            }
        }

        return $transformed;
    }

    /**
     * Hilfsmethode: Prüft, ob es sich um eine flache Liste von $ref-Objekten handelt.
     */
    private function isRefArray(array $array): bool
    {
        if (empty($array)) {
            return false;
        }

        foreach ($array as $item) {
            if (!is_array($item) || !isset($item['$ref'])) {
                return false;
            }
        }

        return true;
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
