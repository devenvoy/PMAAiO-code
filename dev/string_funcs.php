<?php 

include("utils/constants.php");

$string = "hello world";

echo "String = $string" . newline;

// length of the String
echo "Length of string := ".strlen($string).newline;

// find position of the first occurrence of substring in a string
echo "first index of 'o' in string := ".strpos($string,"o").newline;

// find position of the last occurrence of substring in a string
echo "last index of 'o' in string := ".strrpos($string,'o').newline;

// reverse a string
echo "reverse of string := ".strrev($string).newline;

// convert all characters to lowercase
echo "convert string to lowercase := ".strtolower($string).newline;

// convert all characters to uppercase
echo "convert string to uppercase := " . strtoupper($string) . newline;

// only first characters of each word into uppercase 
echo "convert first characters of each word into uppercase := ".ucwords($string).newline;

// string replace
echo "replace 'world' with 'everyone' from string := ".str_replace('world','everyone',$string).newline;

// return position of a string specified by the offset and length
echo "sub string of string from 0 to 5 length := ".substr($string , 0 ,5).newline;
echo "sub string of string from 5 to end := ".substr($string ,5).newline;

// starts with 
echo "is string start with 'hello' := ";
if(str_starts_with($string,"hello")){
    echo "Yes" . newline;
}

// ends with
echo "is string end with 'ld' := ";
if(str_ends_with($string,"ld")){
    echo "Yes" . newline;
}

$string2 = "<h1> hello </h1>";
echo htmlspecialchars($string2) . newline;

$string3 = "<script>alert(1)</script>";
echo htmlspecialchars($string3) . newline;


echo newline.newline;
// formatted string in php
printf("%s likes %s".newline, 'brad' , 'code');
printf(" 1 + 1 = %d ".newline,1+1);
printf(" 1 + 1 = %.2f ".newline,1+1);