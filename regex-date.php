<?php

$string = '2007-12-31';

$regex = '~(\d{4})[.-](\d{2})[.-](\d{2})~';
$regexH = '~-~';

$novoFormato = '$3-$2-$1';
$comHifen = '/';

$resultado = preg_replace($regex, $novoFormato, $string);
$resultadoH = preg_replace($regexH, $comHifen, $string);

echo $string . PHP_EOL;
echo $resultado . PHP_EOL;
echo $resultadoH . PHP_EOL;
