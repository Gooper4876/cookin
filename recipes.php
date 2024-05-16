<?php
    $servername = "localhost"; //nazwa servera
    $username = "root"; //nazwa użytkownika bazy danych
    $password = ""; //hasło do bazy
    $dbname = "tem"; //nazwa bazy danych
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die ("Connection failed, idiot" . $conn->connect_error);
    }

    $sql = "SELECT * FROM przepisy";
    $result = $conn->query($sql);

    echo "<ol>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='beans'>";
        echo "<img src='Temmie.jpeg'>";
        echo "<p>";
        echo $row["title"];
        echo "</p>";
        echo "<p>";
        echo $row["description"];
        echo "</p>";
        echo "</div>";
    }

    echo "</ol>";

    $conn->close();
?>