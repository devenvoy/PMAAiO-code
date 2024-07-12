<?php

include "utils/constants.php";

// simple array

echo "<h3>Simple array </h3>";
$_numbers = [1, 22, 55, 184, 88];
$_fruits = array("apples", "orange", "pear");

print_r($_numbers);
echo newline;
var_dump($_fruits);

echo "print fruits : " . newline;
echo $_fruits[0].newline;
echo $_fruits[1].newline;
echo $_fruits[2].newline;

// Associative array 
// also you can say hash map (key instead of index)

echo "<h3>Associative array </h3>";
$colors = array(
    "red" => "#f00",
    "green" => "#00f",
    "yellow" => "YELLOW",
    "grey" => "GREY",
);

print_r($colors);
echo newline;

$person = [
    "first_name" => "Brad",
    "last_name" => "Smith",
    "email" => "brad.test@gmail.com"
];

// MultiDimension array
echo "<h3>MultiDimension array </h3>";
$people = [
    [
        "first_name" => "Brad",
        "last_name" => "Smith",
        "email" => "brad.test@gmail.com"
    ],
    [
        "first_name" => "john",
        "last_name" => "doe",
        "email" => "john.test@gmail.com"
    ],
    [
        "first_name" => "Brad",
        "last_name" => "Smith",
        "email" => "brad.test@gmail.com"
    ],
    [
        "first_name" => "emily",
        "last_name" => "parker",
        "email" => "emily.test@gmail.com"
    ]
];
print_r($people);

echo "<h3>Encode to json</h3>";
//var_dump(json_encode($people));
echo json_encode($people);
