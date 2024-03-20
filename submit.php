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

$sql = "INSERT INTO przepisy(title) VALUES ('$title)";

if ($conn->query($sql) === TRUE) {
    echo "Yippe you did it";
} else {
    echo "bruh";
}

$conn->close();
?>