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
    <p>
    <header>
        Hooyyy
    </header>
    <tem>
        <img src="Temmie.jpeg">
    </tem>
    <p>temmies are placeholders</p>
    </p>
    <p>
        <biiig>
            temmies cooking space
        </biiig>
    </p>
    <p>
        please don't ask why its this of all things i tried to include all the tasks
    </p>
    <p>

        <recipes>
            Recipes:
        </recipes>
        <button type="submit"><i class="fa fa-search">Filtr button</i></button><button type="submit"><i
                class="fa fa-search">Add recipes button</i></button>
    <p>
        <a href="https://pl.wikipedia.org/wiki/Bananowy_ekwiwalent#/media/Plik:Banana-Single.jpg">
            <img src="Temmie.jpeg">
        </a>
        <a href="https://pl.wikipedia.org/wiki/Bananowy_ekwiwalent#/media/Plik:Banana-Single.jpg">
            <img src="Temmie.jpeg">
        </a>
        <a href="https://pl.wikipedia.org/wiki/Bananowy_ekwiwalent#/media/Plik:Banana-Single.jpg">
            <img src="Temmie.jpeg">
        </a>
    </p>
    <p>
        <a href="https://pl.wikipedia.org/wiki/Bananowy_ekwiwalent#/media/Plik:Banana-Single.jpg">
            <img src="Temmie.jpeg">
        </a>
        <a href="https://pl.wikipedia.org/wiki/Bananowy_ekwiwalent#/media/Plik:Banana-Single.jpg">
            <img src="Temmie.jpeg">
        </a>
        <a href="https://pl.wikipedia.org/wiki/Bananowy_ekwiwalent#/media/Plik:Banana-Single.jpg">
            <img src="Temmie.jpeg">
        </a>
    </p>
    <p>
        <a href="https://pl.wikipedia.org/wiki/Bananowy_ekwiwalent#/media/Plik:Banana-Single.jpg">
            <img src="Temmie.jpeg">
        </a>
        <a href="https://pl.wikipedia.org/wiki/Bananowy_ekwiwalent#/media/Plik:Banana-Single.jpg">
            <img src="Temmie.jpeg">
        </a>
        <a href="https://pl.wikipedia.org/wiki/Bananowy_ekwiwalent#/media/Plik:Banana-Single.jpg">
            <img src="Temmie.jpeg">
        </a>
    </p>
    [why they have ourple bars]
    </p>
    <p>
        <recipesearch>
            Search recipes:
            <form class="example" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search">Search</i></button>
            </form>
        </recipesearch>
    </p>
    <p>
        thanks<img src="Temmie.jpeg">
    </p>
    <p>
        also how to change style for search box and buttons
    </p>
    <?php
    $servername = "localhost"; //nazwa servera
    $username = "root"; //nazwa użytkownika bazy danych
    $password = ""; //hasło do bazy
    $dbname = "tem"; //nazwa bazy danych

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Połączenie nieudane". $conn->connect_error);
    }
    ?>
</body>

</html>