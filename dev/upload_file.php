<?php

if (isset($_POST["submit"])) {

    $allowed_ext = array("png", "jpg", "jpeg", "gif");

    // name is file property
    if (!empty($_FILES['upload']['name'])) {
        print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_temp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";

        $file_ext = explode(".", $file_name);
        $file_ext = strtolower(end($file_ext));

        // validate file ext ( TYPE ) if it is image or not
        if (in_array($file_ext, $allowed_ext)) {

            // check file is less then 1 mb size 
            if ($file_size <= 100000) {

                // if all corrects then it will take image and upload to path or folder in server
                move_uploaded_file($file_temp, $target_dir);
                $message = "<p style=\"color:green;\">File Uploaded</p>";

            } else {
                $message = "<p style=\"color:red;\">file is too large (file !> 1mb)</p>";
            }
        } else {
            $message = "<p style=\"color:red;\">Invalid file size </p>";
        }
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