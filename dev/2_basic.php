<?php

include 'utils.php';
error_reporting(E_ERROR | E_PARSE);

echo "<h1>### Type casting ###</h1>";
ln();
ln();

echo "using settype() - assign new type to original var";
ln();

$test = "5.14";
echo "$test";
ln();
settype($test, 'string');
echo "$test " . gettype($test);
ln();
settype($test, 'double');
echo "$test " . gettype($test);
ln();
settype($test, 'integer');
echo "$test " . gettype($test);
ln();
settype($test, 'bool');
echo "$test " . gettype($test);
ln(); ln(); ln();

$test = 3.14;
echo "using (data_type) value - does not change original variable data type ";
ln();
$test = (string) $test;
echo "$test " . gettype($test);
ln();
$test = (double) $test;
echo "$test " . gettype($test);
ln();
$test = (int) $test;
echo "$test " . gettype($test);
ln();
$test = (bool) $test;
echo "$test " . gettype($test);
ln();