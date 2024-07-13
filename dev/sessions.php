<?php

include("utils/constants.php");

/*
sessions are a way to store information (in variables) to be used across multiple pages.
unlike cookies , sessions are stored in the server

ex: userId or UID to get user data 
also we can store  access token 

*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form 
    action = "<?php echo htmlspecialchars(
        $_SERVER['PHP_SELF']
    );?>",
    method="post">
    <div>
        <label for="username">Username : </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password : </label>
        <input type="password" name="password">
    </div>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if($username == "admin" AND $password == "admin@123"){
        $_SESSION["username"] = $username;
        header('Location: /phpcodes/dev/dashboard.php');
    }else{
        echo "<script>alert('incorrect login')</script>";
    }
}