<?php

include "utils/constants.php";

/**
 * < less than 
 * > greater than
 * <= less than equal 
 * >= greater than equal
 * == equal to
 * === identical to
 * != not equal to 
 * !== not identical to 
 */

echo "<h3>if Statement</h3>";

$age = 20;
echo "age = $age ".newline;
if($age >= 20){
    echo "You can vote";
}

echo "<h3>if..else Statement</h3>";

$age = 17;
echo "age = $age ".newline;
if($age > 20){
    echo "You can vote";
} else{
    echo "you cannot vote";
}


echo "<h3>if..elsif..else Statement</h3>";

$t = date("H:i");
echo "time = $t ".newline;
if($t < 12){
    echo "Good Morning";
} else if ($t < 17) {
    echo "Good After noon";
} else{
    echo "Good Evening";
}


echo "<h3>ternary Operator</h3>";

$posts = ["first post"];
echo !empty($posts) ? $posts[0].newline : "empty post".newline;
echo  $posts[1] ?? "no more post";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <form method="POST" action="">
    <label for="colors">Choose a color:</label>
        <select name="colors" id="colors" onchange="this.form.submit()">
            <option value="red">select here</option>
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="green">green</option>
            <option value="black">black</option>
        </select>
    </form>
    <?php
    echo "<h3>switch Statement</h3>";

    if (isset($_POST['colors'])) {
        $favColor = $_POST['colors'];

        switch ($favColor) {
            case 'red':
                echo "You chose red";
                break;
            case 'blue':
                echo "You chose blue";
                break;
            case 'green':
                echo "You chose green";
                break;
            case 'black':
                echo "You chose black";
                break;
            default:
                echo "Select from selection";
                break;
        }
    } else {
        echo "Select a color from the dropdown.";
    }
    ?>
</body>
</html>

