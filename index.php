<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Sekretariat</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <main>
        <div id="left">
            <h1>Akta Pracownicze</h1>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'firma');

            ?>
            <hr>
            <h3>Dokumenty pracownika</h3>
            <a href="cv.txt" download>Pobierz</a>
            <h1>Liczba zatrudnionych pracowników</h1>
            <p>
                <?php
                $q2 = "SELECT COUNT(*) FROM pracownicy;";
                $liczba = mysqli_query($conn, $q2);
                foreach ($liczba as $l) {
                    foreach ($l as $l1) {
                        echo $l1;
                    }
                }
                ?>
            </p>
        </div>
        <div id="right">
            <?php
            //skrypt3
            ?>
        </div>
    </main>
    <footer>
        Autorem aplikacji jest: Stanisław Fiedoruk 5J
        <ul>
            <li>skontaktuj się</li>
            <li>poznaj naszą firmę</li>
        </ul>
    </footer>
</body>

</html>