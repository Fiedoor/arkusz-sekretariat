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
            $q1 = "SELECT imie,nazwisko,adres,miasto,czyRODO,czyBadania FROM pracownicy WHERE id=2;";
            $res1 = mysqli_query($conn, $q1);
            echo "<h3>Dane</h3>";
            foreach ($res1 as $r) {
                echo "<p>" . $r['imie'] . "&nbsp" . $r['nazwisko'] . "</p>";
                echo "<hr>";
                echo "<h3>Adres</h3>";
                echo "<p>" . $r['adres'] . '&nbsp' . $r['miasto'] . "</p>";
                echo "<hr>";
                if ($r['czyRODO'] == 1) {
                    echo "<p>RODO: podpisano</p>";
                } else {
                    echo "<p>RODO: niepodpisano</p>";
                }
                if ($r['czyBadania'] == 1) {
                    echo "<p>Badania: aktualne</p>";
                } else {
                    echo "<p>Badania: niektualne</p>";
                }
            }
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
            $q3 = "SELECT id,imie,nazwisko from pracownicy WHERE id=2;";
            $res3 = mysqli_query($conn, $q3);
            foreach ($res3 as $r) {
                echo "<img src=" . $r['id'] . ".jpg alt='pracownik'>";
                echo "<h2>" . $r['imie'] . "&nbsp" . $r['nazwisko'] . "</h2>";
            }
            $q4 = "SELECT pracownicy.id,nazwa,opis FROM pracownicy JOIN stanowiska ON pracownicy.stanowiska_id=stanowiska.id WHERE pracownicy.id=2;";
            $res4 = mysqli_query($conn, $q4);
            foreach ($res4 as $r) {
                echo "<h4>" . $r['nazwa'] . "</h4>";
                echo "<h5>" . $r['opis'] . "</h5>";
            }
            mysqli_close($conn);
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