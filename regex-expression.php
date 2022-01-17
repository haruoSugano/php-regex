<?php

$regexp = '~(\d\d)(\w)~';
$alvo = '11aa22bb33c';

$encotrado = preg_match($regexp, $alvo, $match);
$achouTodas = preg_match_all($regexp, $alvo, $match, PREG_OFFSET_CAPTURE);

echo $encotrado . PHP_EOL;
echo $achouTodas . PHP_EOL;

echo $match . PHP_EOL;

print_r($match);
