<?php

include "utils/constants.php";

error_reporting(E_ERROR | E_PARSE);
echo "Hello World!" . newline;

echo "This is my first program" . newline . newline;

$nullVar;
echo "is null: " . is_null($nullVar) . newline;

$numVar = 10;
echo "is int :" . is_int($numVar) . newline;

$doubleVar = 3.14;
echo "is double :" . is_double($doubleVar) . newline;

$floatVar = (float) 3.99;
echo "is float :" . is_float($floatVar) . newline;

$stringVar = "Devansh";
echo "is string" . is_string($stringVar) . newline;

echo "is number :" . is_numeric($doubleVar) . newline;

echo newline . newline;

echo "using var_dump() to find data type" . newline;
var_dump("Hello");
echo newline;
var_dump(250);
echo newline;
var_dump(3.14);
echo newline;
var_dump(false);
echo newline;
var_dump([1, 2, 3]);


echo newline.newline;

echo "print are also used for output".newline;
print "hello from print".newline;
print ("also you can print like this");

echo newline . newline;
print ("print_r() are used to print array");
echo newline;
print_r([1, 2, 3, 45, 5]);

