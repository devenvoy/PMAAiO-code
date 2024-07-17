<?php

// ability  to read  and write file on the server 
// php has built in functionality to read and write files.

$file = 'utils/users.txt';

// check if file  exits  

if (file_exists($file)) {
    // read file content  and numbers of bytes of file
    // echo readfile($file);

    // create a pointer to the file with different access 
    $handle = fopen($file,'r');
    // read the file content from start to length specified 
    // filesize get the length of file
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} 
// if file does not exits 
else{
    // create file if not file_exists
    $handle = fopen($file, 'w');
    // data to enter to file 
    $contents = "Devansh$PHP_EOL prince$PHP_EOL riya$PHP_EOL priyanshi$PHP_EOL aryan$PHP_EOL smit$PHP_EOL harsh$PHP_EOL";
    // used to write to a file
    fwrite($handle, $contents);
    fclose($handle);
}