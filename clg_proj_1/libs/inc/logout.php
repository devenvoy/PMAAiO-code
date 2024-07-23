<?php 
session_start();

session_destroy();

header("Location: /phpcodes/clg_proj_1/libs/auth/login.php");

?>