<?php 

// here we will destroy our session when user logouts 


session_start();

session_destroy();
header("Location: /phpcodes/dev/sessions.php");