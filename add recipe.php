<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cook the page</title>
    <link rel="stylesheet" href="css.css">
    <style>
        @import url('https://fonts.cdnfonts.com/css/public-pixel');
    </style>
</head>

<body>
    
    <tem>
        <img src="Temmie.jpeg">
    </tem>
    
    <form method="POST">
        <input type="text" name="query" placeholder="Tytuł">
        <br>
        <input type="text" name="description" placeholder="Opis">
        <br>
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

    if($conn->connect_error) {
        die("Połączenie nieudane". $conn->connect_error);
    } else {
        echo"it failed you dummy";
    }
    $conn->close();
    ?>
</body>
</html>