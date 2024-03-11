<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'connecting.php';
    if(isset($_POST['push'])){
        $content = $_POST['Title'];
        $content2 =$_POST['Description'];
        $query = "INSERT INTO  main_content(Title,Description) VALUES ('$content','$content2')";
        $result = mysqli_query($conn,$query);
        if(isset($result)){
            echo"data has been inserted sucessfully";
        }
        else{
            echo"Data unable to inset";
        }
    }

    ?>
        
    <form method="post" action="">
        <textarea name="Title" placeholder="Your Title is here..." cols="20" rows="10"></textarea>
        <textarea name="Description" placeholder="Your description is here..." cols="20" rows="10"></textarea>
        <input type="submit" name="push" value="submit">
    </form>

</body>
</html>
