<?php
namespace Clg_proj_1\libs\Auth;
include '../../config/database.php';
include '../../model/User.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f9;
    }

    h1 {
        text-align: center;
        margin-right: 300px;
        /* Add space between the header and form */
    }

    form {
        display: grid;
        grid-template-columns: 1fr;
        gap: 15px;
        /* Gap between fields */
        width: 400px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        /* Center-align all text in the form */
    }

    label {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="password"] {
        width: 90%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 16px;
        box-sizing: border-box;
        text-align: center;
        /* Center-align input text */
    }

    input[type="submit"] {
        justify-self: center;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 24px;
        cursor: pointer;
        font-size: 16px;
        width: 50%;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .register-link {
        text-align: center;
        margin-top: 10px;
    }

    .register-link a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .register-link a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>

    <h1>Login User</h1>

    <div>
        <form method="post">
            <label>
                Email Address <input type="email" name="email">
            </label>
            <label>
                Password <input type="password" name="password">
            </label>
            <input type="submit" name="submit" value="Submit" style="width: 100px;">
        </form>

        <div class="register-link">
            <p>Don't have an account? <a href="registration.php">Register here</a></p>
        </div>
    </div>

    <?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

        $select = "select * from user where email = '$email' and password = '$password'";
        $result = mysqli_query($connection, $select);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_array($result);
            
            $user = new \Clg_proj_1\Model\User(
                id: $row["id"],
                email: $row["email"],
                password: $row["password"],                 
                first_name: $row["first_name"],
                last_name: $row["last_name"],
                age: $row["age"],
                address: $row["address"],
                first_created: $row["first_created"],
                last_updated: $row["last_updated"],
            );

            session_start();
            $_SESSION["user"] = $user;
            
            header("Location: /phpcodes/clg_proj_1/libs/inc/home.php");

        }else{
            echo "<script>alert('incorrect email and password')</script>";
        }

}

?>
</body>

</html>