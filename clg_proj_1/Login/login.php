<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h1 {
            text-align: center;
        }

        form {
            justify-content: center;
            display: grid;
            width: 100%;
        }
    </style>
</head>

<body>

<h1>Login</h1>

<form method="post">
    <label>
        Email: <input type="email" name="email">
    </label>
    <br>
    <label>
        Password: <input type="password" name="password">
    </label>
    <br>
    <input type="submit" name="submit" value="Submit" style="width: 100px;">
</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){
    $username = $_POST['email'];
    $password = $_POST['password'];
}