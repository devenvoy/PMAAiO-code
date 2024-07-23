<?php
namespace Clg_proj_1\libs\Auth;

include_once '../../config/database.php';
include_once '../../model/User.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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


        textarea[name="address"] {
            width: 80%;
            height: 80px;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 32px;
            box-sizing: border-box;
            text-align: center;
            /* Center-align input text */
        }


        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"] {
            width: 80%;
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



    <h1>Register User here </h1>
    <div>
        <form action="<?php echo htmlspecialchars(
            $_SERVER['PHP_SELF']
        ); ?>" , method="post">
            <label>
                First Name
                <input type="text" name="first_name" required>
            </label>
            <label>
                Last Name
                <input type="text" name="last_name" required>
            </label>
            <label>
                Address
                <textarea type="text" name="address" maxlength="100" required></textarea>
            </label>
            <label>
                Age
                <input type="number" name="age" min="0" required>
            </label>
            <label>
                Email
                <input type="email" name="email" required>
            </label>
            <label>
                Password
                <input type="password" name="password" required>
            </label>
            <input type="submit" name="submit" value="Submit">
        </form>
        <div class="register-link">
            <p>Have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>



    <?php

    if (isset($_POST['submit'])) {

        $user = new \Clg_proj_1\Model\User(
            id: 0,
            first_name: $_POST['first_name'],
            last_name: $_POST['last_name'],
            age: (int) $_POST['age'], // ensure age is an integer
            address: $_POST['address'],
            email: $_POST['email'],
            password: $_POST['password'],
            first_created: date('Y-m-d H:i:s'),
            last_updated: date('Y-m-d H:i:s')
        );

        // var_dump($user);
    
        $findEmail = "select * from user where email = '{$user->email}'";
        $result = mysqli_query($connection, $findEmail);

        if (mysqli_fetch_assoc($result)) {
            echo "<script> alert('Account with this email already exists');  </script>";
            $_POST['submit'] = null;
        } else {

            $query = mysqli_query($connection, "
    insert into user values({$user->id},'{$user->first_name}','{$user->last_name}',{$user->age},'{$user->address}','{$user->email}','{$user->password}','{$user->first_created}','{$user->last_updated}')");

            if ($query) {
                header("Location: /phpcodes/clg_proj_1/libs/auth/login.php");
            } else {
                echo "" . mysqli_error($connection);
            }

            $_POST['submit'] = null;
        }
    }
    ?>
</body>

</html>