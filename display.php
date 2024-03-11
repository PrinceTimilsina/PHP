<?php
include'connectingfordisplay.php';
$sql = "SELECT * FROM display1";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    while($row=$result->fetch_assoc()) {
        echo "Title:" .$row['Title'] ."<br>";
        echo "Content:" .$row["content"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection 

$conn->close();
?>
