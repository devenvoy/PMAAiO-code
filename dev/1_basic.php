<?php

include "utils.php";

error_reporting(E_ERROR | E_PARSE);
echo "Hello World!";
ln();
echo "This is my first program";
ln();

$nullVar;
echo "is null: " . is_null($nullVar);
ln();
$numVar = 10;
echo "is int :" . is_int($numVar);
ln();
$doubleVar = 3.14;
echo "is double :" . is_double($doubleVar);
ln();
$floatvar = (float) 3.99;
echo "is float :" . is_float($floatVar);
ln();
$stringVar = "Devansh";
echo "is string" . is_string($stringVar);
ln();
echo "is number :" . is_numeric($doubleVar);
ln();
