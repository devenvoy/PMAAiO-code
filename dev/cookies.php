<?php

include("utils/constants.php");
/*

=================   Cookies ===================

cookies are mechanism for storing data in the remote browser and thus the trackinh or identifying return users.

you can set specific data to be stored in the browser and then retrieve it when the user visits the site again

note: so cookies stored in client you should not store sensitive data inside cookies 

we can store user email , name , or user data in cookies so it can be used when user back to website 

*/


// function to set cookie 
// @Params
//  1 key 
//  2 value 
// 3. time to expire cookie 
setcookie("name", "dev",time()+86400);


// get values from cookie 
if(isset($_COOKIE["name"])){
    echo $_COOKIE["name"] . newline;
}


// to delete the cookie or unset cookie
setcookie("name", "", time() - 86400);