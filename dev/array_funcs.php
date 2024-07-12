<?php

include("utils/constants.php");

$fruits = [
    "apple",
    "orange",
    "pear"
];

echo newline .newline . "length of array : = ";
echo count($fruits);


echo newline .newline . "search array : = ";
echo var_dump(in_array("apple",$fruits));

// Add to array
$fruits[] = "grape";
echo newline .newline ."";
print_r($fruits);

// insert at end
array_push($fruits,"blueberry");
echo newline .newline ."";
print_r($fruits);

// insert at start
array_unshift($fruits,"strawberry");
echo newline .newline ."";
print_r($fruits);

// remove from array

// remove last
array_pop($fruits);
echo newline .newline ."";
print_r($fruits);

// remove first
array_shift($fruits);
echo newline .newline ."";
print_r($fruits);

// remove specific value using key or index
unset($fruits[2]);
echo newline .newline ."";
print_r($fruits);

// split into 2 chunks
$chunked_arr = array_chunk($fruits,2);
echo newline .newline ."";
print_r($chunked_arr);

// concatenate array
$merged_arr = array_merge($chunked_arr[0], $chunked_arr[1]);
echo newline .newline ."";
print_r($merged_arr);


// combine array 
$arr1 = ["A", "B", "w"];
$arr2 = ["apple","banana","watermelon"];
$combined_arr = array_combine($arr1, $arr2);
echo newline .newline ."";
print_r($combined_arr);

// array keys
$keys = array_keys($combined_arr);
echo newline .newline ."";
print_r($keys);

// flipped array 
$fliped_arr  = array_flip($keys);
echo newline .newline ."";
print_r($fliped_arr);

// reverse array
$reversed_arr = array_reverse($combined_arr);
echo newline .newline ."";
print_r($reversed_arr);

// create ranged array
$numbers = range(1, 20);
echo newline .newline ."";
print_r($numbers);

// map array width value
$newNums = array_map(
    fn($num) => "Number $num",
    $numbers
);
echo newline .newline ."";
print_r($newNums);


// filter array 
$lt10_arr = array_filter($numbers, fn($num) => $num < 10);
echo newline .newline ."";
print_r($lt10_arr);

// reduce array
// carry - previous iteration result value
// num -  next iteration value
$reduced_arr = array_reduce($numbers, fn($carry, $num) => $carry + $num);
echo newline .newline ."";
print_r($reduced_arr);
