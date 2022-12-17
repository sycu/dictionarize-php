<?php

function dictionarize(string $source, array $words): string
{
    $reserved = ['__construct', 'argv', 'this'];

    preg_match_all('/(function |class |\$)(\w+)/', $source, $output);
    $keywords = array_diff(array_unique($output[2]), $reserved);
    shuffle($words);

    foreach ($keywords as $keyword) {
        $source = preg_replace("/\b{$keyword}\b/", array_pop($words), $source);
    }

    return $source;
}

$words = explode(PHP_EOL, file_get_contents('/usr/share/dict/polish'));

echo(dictionarize(file_get_contents($argv[1]), $words));
