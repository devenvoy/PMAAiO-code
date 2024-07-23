<?php 
namespace Clg_proj_1\libs\inc;

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<?php 
if(isset($_SESSION["user"])){
    $user = $_SESSION["user"];
    var_dump($user);

    echo "<br><br>";
    echo '<a href="logout.php">Logout</a>';
}else{
    echo "<h1>Welcome Guest</h1>";
}
?>
    
</body>
</html>