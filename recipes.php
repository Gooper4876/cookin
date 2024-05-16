<?php
    $servername = "localhost"; //nazwa servera
    $username = "root"; //nazwa użytkownika bazy danych
    $password = ""; //hasło do bazy
    $dbname = "tem"; //nazwa bazy danych
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die ("Connection failed, idiot" . $conn->connect_error);
    } else {
        echo "Connection works";
    }

    $sql = "SELECT * FROM przepisy";
    $result = $conn->query($sql);

    echo "<ol>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>";
        echo $row["title"];
        echo $row["description"];
        echo "</li>";
    }

    echo "</ol>";

    $conn->close();
?>