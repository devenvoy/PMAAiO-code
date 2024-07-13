<?php

session_start();

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo"<h1> Welcome $username</h1>" ;
    echo "<a href=\"logout.php\">Logout<a/>";
} else{
    echo "<h1> Welcome Guest </h1>";
    echo "<a href=\"/phpcodes\/dev/sessions.php\">go back<a/>";
}