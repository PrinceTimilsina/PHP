<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image insert</title>
</head>
<body>
<?php
include 'connection.php'; // Make sure to include the connection file

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $des = $_POST['des'];
    $filename = $_FILES["photo"]["name"]; // Corrected "file" to "photo"
    $tempname = $_FILES["photo"]["tmp_name"]; // Corrected "flle" to "photo"
    $folder = "../image/" . $filename; // Changed folder path, assuming "images" is the folder name
    $sql = "INSERT INTO image (p_name, title, description) VALUES ('$filename', '$title', '$des')"; // Corrected table name to "image"
    mysqli_query($conn, $sql); // Changed mysql_query to mysqli_query, assuming you are using mysqli
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>Image uploaded successfully!</h3>";
    } else {
        echo "<h3>Failed to upload image!</h3>";
    }
}
?>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Enter title" required><br>
        <input type="text" name="des" placeholder="Enter description of image" required><br>
        <input type="file" name="photo" id="fileToUpload" required><br> <!-- Changed input name to "photo" -->
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
