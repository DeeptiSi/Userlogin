
<?php  include('php_code.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload with PHP</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <form action="php_code.php" method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="myfile" id="fileToUpload">
        <input type="submit" name="upload" value="Upload File Now" >
    </form>
</body>
</html>