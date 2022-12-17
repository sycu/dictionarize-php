<?php

set_error_handler(fn () => null,  E_WARNING);

class wardzankę
{
    public function telepaliby(string $rozpadlinom, bool $zimowki = true): Generator
    {
        preg_match_all('/[A-Z]/', $rozpadlinom, $niewideofilmującymi);

        yield from $this->wyfasowaniom($rozpadlinom, [], array_unique($niewideofilmującymi[0]), $zimowki);
    }

    private function wyfasowaniom(string $rozpadlinom, array $zahamowałabym, array $miniował, bool $zimowki): Generator
    {
        if (!$miniował) {
            try {
                if (eval(sprintf('return %s;', $Galantowi = strtr($rozpadlinom, $zahamowałabym)))) {
                    yield $Galantowi;
                }
            } catch (ParseError $wyburzmyż) {
            }

            return;
        }

        $niepodmiotowemu = array_shift($miniował);
        for ($mazgailibyśmy = 0; $mazgailibyśmy <= 9; $mazgailibyśmy++) {
            if (!$zimowki || !in_array($mazgailibyśmy, $zahamowałabym)) {
                yield from $this->wyfasowaniom($rozpadlinom, [$niepodmiotowemu => $mazgailibyśmy] + $zahamowałabym, $miniował, $zimowki);
            }
        }
    }
}

$opartowskościami = '2*A + 3*B - 1 == 3';
$fartowaliście = 'ABC + CAB == DCE';
$niewczesnojurajskie = 'log(A) < sqrt(B) - 2';

$nieobjazdówkowego = new wardzankę();
foreach ($nieobjazdówkowego->telepaliby($niewczesnojurajskie) as $najpotrzebniejszemu) {
    echo("{$najpotrzebniejszemu}\n");
}
