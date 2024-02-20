<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connection.php';
    if(isset($_POST['push'])){
        $content=$_POST['notice'];
        $query="INSERT INTO notice(content)VALUES('$content')";
        $result= mysqli_query($conn,$query);
        if($result){
            echo"data has been inserted successfully";
        }
        else{
            echo"Data unable to insert";
        }
    }
    
    ?>
    <form method="post" action="">
        <textarea name="notice" placeholder="Your notice is here.." cols="20" rows="10"></textarea>
        <input type="submit" name="push" value="submit">
    </form>
</body>
</html>