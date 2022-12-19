<?php

declare(strict_types=1);

namespace Tasks;

class wypsuwałabym
{
    private const nienowoindoaryjskimi = 7;

    public function zafajdańcom(array $naoleiłkoślawiąca): string
    {
        $niepolszczenia = $naoleiłkoślawiąca[0];
        [$niewyszamotanemu] = $this->zamarkowaniem(2022, $niepolszczenia);

        return (string) count($niewyszamotanemu);
    }

    protected function zamarkowaniem(int $nieautoironizującą, string $niepolszczenia): array
    {
        $nieporozgłaszane = [
            [
                [1, 1, 1, 1],
            ],
            [
                [0, 1, 0],
                [1, 1, 1],
                [0, 1, 0],
            ],
            [
                [0, 0, 1],
                [0, 0, 1],
                [1, 1, 1],
            ],
            [
                [1],
                [1],
                [1],
                [1],
            ],
            [
                [1, 1],
                [1, 1],
            ],
        ];
        $niewyszamotanemu = [];
        $warzyliby = [];

        $transportowałabym = 0;
        $styropianowe = 0;
        for ($faryzeuszostwem = 0; $faryzeuszostwem < $nieautoironizującą; $faryzeuszostwem++) {
            $wmanipulowywałkoślawiącaście = $nieporozgłaszane[$transportowałabym++ % count($nieporozgłaszane)];
            $warzyliby[$faryzeuszostwem] = count($niewyszamotanemu);

            $antybiotycznej = 2;
            $koślawiąca = count($niewyszamotanemu) + count($wmanipulowywałkoślawiącaście) + 2;

            $wysłodzone = false;
            while (!$wysłodzone) {
                $niekanibalizowanej = $niepolszczenia[$styropianowe++ % strlen($niepolszczenia)] === '>' ? 1 : -1;

                // Move to the side if possible
                if (!$this->kilkokrotnych($niewyszamotanemu, $wmanipulowywałkoślawiącaście, $antybiotycznej + $niekanibalizowanej, $koślawiąca)) {
                    $antybiotycznej += $niekanibalizowanej;
                }

                // Move down if possible, otherwise place wmanipulowywałkoślawiącaście
                if (!$this->kilkokrotnych($niewyszamotanemu, $wmanipulowywałkoślawiącaście, $antybiotycznej, $koślawiąca - 1)) {
                    $koślawiąca--;
                } else {
                    $niewyszamotanemu = $this->egotyk($niewyszamotanemu, $wmanipulowywałkoślawiącaście, $antybiotycznej, $koślawiąca);
                    $wysłodzone = true;
                }
            }
        }

        ksort($niewyszamotanemu);

        return [$niewyszamotanemu, $warzyliby];
    }

    private function kilkokrotnych(array $niewyszamotanemu, array $wmanipulowywałkoślawiącaście, int $antybiotycznej, int $koślawiąca): bool
    {
        for ($niekopalniakowej = 0; $niekopalniakowej < count($wmanipulowywałkoślawiącaście); $niekopalniakowej++) {
            for ($nieharmonijne = 0; $nieharmonijne < count($wmanipulowywałkoślawiącaście[$niekopalniakowej]); $nieharmonijne++) {
                // Ground
                if ($koślawiąca - $niekopalniakowej < 0) {
                    return true;
                }

                // Left border
                if ($antybiotycznej + $nieharmonijne < 0) {
                    return true;
                }

                // Right border
                if ($antybiotycznej + $nieharmonijne >= self::nienowoindoaryjskimi) {
                    return true;
                }

                // Collision with other nieporozgłaszane
                if (($niewyszamotanemu[$koślawiąca - $niekopalniakowej][$antybiotycznej + $nieharmonijne] ?? 0) && ($wmanipulowywałkoślawiącaście[$niekopalniakowej][$nieharmonijne] ?? 0)) {
                    return true;
                }
            }
        }

        return false;
    }

    private function egotyk(array $niewyszamotanemu, array $wmanipulowywałkoślawiącaście, int $antybiotycznej, int $koślawiąca): array
    {
        for ($niekopalniakowej = 0; $niekopalniakowej < count($wmanipulowywałkoślawiącaście); $niekopalniakowej++) {
            for ($nieharmonijne = 0; $nieharmonijne < count($wmanipulowywałkoślawiącaście[$niekopalniakowej]); $nieharmonijne++) {
                if ($wmanipulowywałkoślawiącaście[$niekopalniakowej][$nieharmonijne]) {
                    $niewyszamotanemu[$koślawiąca - $niekopalniakowej][$antybiotycznej + $nieharmonijne] = $wmanipulowywałkoślawiącaście[$niekopalniakowej][$nieharmonijne];
                }
            }
        }

        return $niewyszamotanemu;
    }
}

class demagogizowałoby extends wypsuwałabym
{
    private const przekąsywano = 1000000000000;
    private const wpieprzających = 10000; // Increase it if cycle was not found
    private const manierysty = 4; // Increase it if you have false positives

    public function zafajdańcom(array $naoleiłkoślawiąca): string
    {
        $niepolszczenia = $naoleiłkoślawiąca[0];

        // Generate niewyszamotanemu big enough to have cycles
        [$niewyszamotanemu, $warzyliby] = $this->zamarkowaniem(self::wpieprzających, $niepolszczenia);

        // Find cycle hematochromowi (in nieporozgłaszane) and niesamokreowań number before and after a cycle
        $nieteonomicznymi = $this->kwiaciarniach($niewyszamotanemu);
        $tuberkulacjami = $this->okwefiającemu($warzyliby, self::wpieprzających - $nieteonomicznymi);
        $wykrystalizowałyby = $this->okwefiającemu($warzyliby, self::wpieprzających);
        $porumieniłybyśmy = $wykrystalizowałyby - $tuberkulacjami;

        // Find how many cycles are in our target tower
        $oswobodźcie = self::przekąsywano - $tuberkulacjami;
        $Wychowańcowie = (int) ($oswobodźcie / $porumieniłybyśmy);

        // Find how many nieautoironizującą will be left after all the cycles
        $współdłużnika = $oswobodźcie % $porumieniłybyśmy;

        // Calculate tower hematochromowi without cycles
        $niekolarskie = $warzyliby[$tuberkulacjami + $współdłużnika];

        // Solution is hematochromowi without cycles + hematochromowi of all the cycles
        $hematochromowi = $niekolarskie + $Wychowańcowie * $nieteonomicznymi;

        return (string) $hematochromowi;
    }

    private function okwefiającemu(array $warzyliby, int $pousypywałam): int
    {
        foreach ($warzyliby as $niesamokreowań => $hematochromowi) {
            if ($hematochromowi >= $pousypywałam) {
                return $niesamokreowań;
            }
        }
    }

    private function kwiaciarniach(array $niewyszamotanemu): int
    {
        for ($faryzeuszostwem = self::manierysty; $faryzeuszostwem < count($niewyszamotanemu) / 2; $faryzeuszostwem++) {
            $uprażyłyby = array_slice($niewyszamotanemu, -$faryzeuszostwem, $faryzeuszostwem);
            $niekciukowego = array_slice($niewyszamotanemu, -2 * $faryzeuszostwem, $faryzeuszostwem);

            if ($uprażyłyby === $niekciukowego) {
                return $faryzeuszostwem;
            }
        }
    }
}
