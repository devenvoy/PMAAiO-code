<?php

error_reporting(E_ERROR | E_PARSE);
echo "Hello World!".PHP_EOL.PHP_EOL;

echo "This is my first program".PHP_EOL;

$nullVar;
echo "is null: " . is_null($nullVar).PHP_EOL;

$numVar = 10;
echo "is int :" . is_int($numVar).PHP_EOL;

$doubleVar = 3.14;
echo "is double :" . is_double($doubleVar).PHP_EOL;

$floatvar = (float) 3.99;
echo "is float :" . is_float($floatVar).PHP_EOL;

$stringVar = "Devansh";
echo "is string" . is_string($stringVar).PHP_EOL;

echo "is number :" . is_numeric($doubleVar).PHP_EOL;

