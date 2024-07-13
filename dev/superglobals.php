<?php

include("utils/constants.php");
error_reporting(E_ERROR | E_PARSE) ;
/*

These are specially-defined array variables in PHP that make it easy for you to get information about a request or its context. 

The superglobals are available throughout your script. 

These variables can be accessed from any function, class or any file without doing any special task such as declaring any global variable etc. 

They are mainly used to store and get information from one page to another etc in an application. 

Below is the list of superglobal variables available in PHP: 

$GLOBALS
$_SERVER
$_REQUEST
$_GET
$_POST
$_SESSION
$_COOKIE
$_FILES
$_ENV

*/


/*

$GLOBALS : It is a superglobal variable which is used to access global variables from anywhere in the PHP script. PHP stores all the global variables in array $GLOBALS[] where index holds the global variable name, which can be accessed.

*/

$x = 300;
$y = 200;
 
function multiplication(){
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
 
multiplication();
echo $z.newline;

/*

$_SERVER : It is a PHP super global variable that stores the information about headers, paths and script locations. Some of these elements are used to get the information from the superglobal variable $_SERVER.

*/

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
?>


<!DOCTYPE html>
<html>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        NAME: <input type="text" name="fname">
        <button type="submit">SUBMIT</button>
    </form>

    <br>
    <hr>
<br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="name">Please enter your name: </label>
        <input name="name" type="text"><br>
        <label for="age">Please enter your age: </label>
        <input name="age" type="text"><br>
        <input type="submit" value="Submit">
        <button type="submit">SUBMIT</button>
    </form>

    <br>
    <hr>
    <br/>
    <?php

/*

$_REQUEST : It is a superglobal variable which is used to collect the data after submitting a HTML form. $_REQUEST is not used mostly, because $_POST and $_GET perform the same task and are widely used.

*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo newline;
    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty($name)){
        echo "Name is empty";
    } else {
        echo $name;
    }
        echo newline;
}

/*

$_POST : It is a super global variable used to collect data from the HTML form after submitting it. When form uses method post to transfer data, the data is not visible in the query string, because of which security levels are maintained in this method.

*/

$nm=$_POST['name'];
$age=$_POST['age'];
echo "<strong>".$nm." is $age years old.</strong>".newline;


/*

$_GET : $_GET is a super global variable used to collect data from the HTML form after submitting it. When form uses method get to transfer data, the data is visible in the query string, therefore the values are not hidden. $_GET super global array variable stores the values that come in the URL.

*/


$name = $_GET['name'];
$city = $_GET['city'];
echo "<h3>I am ".$name." from ".$city."</h3><br>";


?>
</body>

</html>