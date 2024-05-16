<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tem";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("bruh". $conn->connect_error);
}



$title = $_POST["title"];
$description = $_POST["description"];

$sql = "INSERT INTO przepisy(title, description) VALUES ('$title', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Yippe you did it <p><a href='mainpage.php'>Click here to go back</a></p>";
} else {
    echo "bruh";
}

$conn->close();
?>