<?php

if (isset($_POST["submit"])) {
    // name is file property
    if (!empty($_FILES['upload']['name'])) {
        print_r($_FILES);
    } else {
        $message = "<p style=\"color:red;\">please choose a file </p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>

<?php echo $message ?? null; ?>

<!-- enctype="multipart/form-data" without this file upload not going to work  -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

    <p> Select Image to upload </p>
    <input type="file" name="upload">
    <input type="submit" value="submit" name="submit">
</form>
</body>

</html>