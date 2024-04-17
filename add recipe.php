<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cook the page</title>
    <link rel="stylesheet" href="cssar.css">
    <style>
        @import url('https://fonts.cdnfonts.com/css/public-pixel');
    </style>
    
</head>

<body>
    
    <tem>
        <img src="Temmie.jpeg">
    </tem>
    <form action="submit.php" method="POST" class="absolute">
            <input type="text" name="title" placeholder="tytul">
            <input type="text" name="description" placeholder="opis">
            <br>
            <input type="submit" value="Add recipe">
            <select name="category">
            <option value="breakfeast">Śniadanie</option>
            <option value="lunch">Obiad</option>
            <option value="dessert">Deser</option>
        </select>
    </form>

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
        echo "<li>" . $row["title"] . "</li>";
    }

    echo "</ol>";

    $conn->close();
    ?>
</body>
</html>