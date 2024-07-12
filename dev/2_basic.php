<?php

include 'utils.php';
error_reporting(E_ERROR | E_PARSE);

echo "<h1>### Type casting ###</h1>".PHP_EOL;

echo "using settype() - assign new type to original var".PHP_EOL;

$test = "5.14";
echo "$test";

settype($test, 'string').PHP_EOL;
echo "$test " . gettype($test).PHP_EOL;

settype($test, 'double').PHP_EOL;
echo "$test " . gettype($test).PHP_EOL;

settype($test, 'integer').PHP_EOL;
echo "$test " . gettype($test).PHP_EOL;

settype($test, 'bool').PHP_EOL;
echo "$test " . gettype($test).PHP_EOL;
  
$test = 3.14;
echo "using (data_type) value - does not change original variable data type ".PHP_EOL;

$test = (string) $test;
echo "$test " . gettype($test).PHP_EOL;

$test = (double) $test;
echo "$test " . gettype($test).PHP_EOL;

$test = (int) $test;
echo "$test " . gettype($test).PHP_EOL;

$test = (bool) $test;
echo "$test " . gettype($test).PHP_EOL;
