<?php 

include("utils/constants.php");


$y = 12;
function registerUser($email){   // Args = email

    // to use global variable
    global $y;
    echo $y . newline;

    echo "$email registered";
}


function sum($n1 , $n2 ){
    return $n1 + $n2;
}

function sub($n1 , $n2 = 0)
{
    return $n1 - $n2;
}

$mul = fn($n1 = 1 , $n2 = 1) => $n1 * $n2;


registerUser("dev@gmail.com");   // parameter = dev@gmail.com

echo newline;
echo "sum(80, 99) = ".sum(80, 99);

echo newline;
echo "sub(99-80) = ".sub(99-80);

echo newline;
echo "sub(900) = ".sub(900);

echo newline;
echo "mul(20,20) = " . $mul(20, 20);
