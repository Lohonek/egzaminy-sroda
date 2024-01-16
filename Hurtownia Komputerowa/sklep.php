<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="header1">
            <img src="zad1.png" alt="hurtownia komputerowa">
        </div>
        <div class="header2">
            <ul>
                <li>Sprzet <ol>
                        <li>Procesory</li>
                        <li>Pamiec Ram</li>
                        <li>Monitory</li>
                        <li>Obudowy</li>
                        <li>Karty graficzne</li>
                        <li>Dyski twarde</li>
                    </ol>
                </li>
                <li>Oprogramowanie</li>
            </ul>
        </div>
        <div class="header3">
            <h2>Hurtownia komputerowa</h2>
            Wybierz kategorie sprzetu
            <form method="post">
                <input type="number" name="wybor">
                <input type="submit" value="Sprawdz">
            </form>
        </div>
    </header>
    <main>
        <h1>Podzespoly we wskazanej kategorii</h1>
        <?php
        $wybor = $_POST["wybor"];
        $con  = mysqli_connect("localhost", "root", "", "asd");
        $kwe = " SELECT `nazwa`,`opis`,`cena` FROM `podzespoly` WHERE `typy_id` = $wybor";

        if ($wybor == 1) {
            $aa = mysqli_query($con, $kwe);
            while ($wynik = mysqli_fetch_array($aa)) {
                echo $wynik['nazwa'] . " " . $wynik['opis'] . " " . "CENA:" . " " . $wynik['cena'] . "<br>" . "<br>";
            }
        }

        if ($wybor == 2) {
            $aa = mysqli_query($con, $kwe);
            while ($wynik = mysqli_fetch_array($aa)) {
                echo $wynik['nazwa'] . " " . $wynik['opis'] . " " . "CENA:" . " " . $wynik['cena'] . "<br>" . "<br>";
            }
        }

        mysqli_close($con);
        ?>
    </main>
    <footer>
        <h3> Hurtownia dzila od poniedzialku do soboty w godzinach 7<sup>00</sup>- 16<sup>00</sup></h3>
        <a href="mailto:bok@hurtownia.pl">Napisz do nas</a>
        Partnerzy:
        <a href="http://intel.pl" target="_blank">Intel</a>
        <a href="http://amd.pl" target="_blank">AMD</a>
        <p>Strone wykonal: Wojtus</p>
    </footer>
</body>

</html>