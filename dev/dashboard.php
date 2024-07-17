<?php


// whenever we use session value we have to have  session started 
// for that php has this method 
session_start();

// username stored in session if user login success 

// here session has not started then we are not be able to use username from session then it will go to else block

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo"<h1> Welcome $username</h1>" ;
    echo "<a href=\"logout.php\">Logout<a/>";
} else{
    echo "<h1> Welcome Guest </h1>";
    echo "<a href=\"/phpcodes\/dev/sessions.php\">go back<a/>";
}