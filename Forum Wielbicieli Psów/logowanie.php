<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Forum wielbicieli psow</h1>
    </header>
    <main>
        <div class="left">
            <img src="obraz.jpg" alt="foksterier">
        </div>
        <div class="right">
            <div class="top">
                <h2>Zapisz sie</h2>
                <form method="post">
                    login <input type="text" name="login"> <br>
                    haslo <input type="password" name="haslo1"> <br>
                    powtorz haslo <input type="password" name="haslo2">
                    <input type="submit" value="Zapisz">
                </form>
                <?php
                $login = $_POST['login'];
                $haslo1 = $_POST['haslo1'];
                $haslo2 = $_POST['haslo2'];
                $con = mysqli_connect('localhost', 'root', '', 'psy');

                if ($login == '' or $haslo1 == '' or $haslo2 == '') {
                    echo "<p> wypelnij wszytkie pola </p>";
                } else {
                    $kwe = "SELECT login FROM uzytkownicy WHERE login LIKE '$login'";
                    $wynik = mysqli_query($con, $kwe);
                    $ile_razy = mysqli_num_rows($wynik);
                    if ($ile_razy > 0) {
                        echo " <p>login wystepuje w bazie dannych</p>";
                    } else if ($haslo1 != $haslo2) {
                        echo "<p> haslo jest inne </p>";
                    } else {
                        $szyfr = sha1($haslo1);
                        $kwe2 = "INSERT INTO uzytkownicy (`login`, `haslo`) VALUES ('$login', '$szyfr')";
                        $wynik2 =  mysqli_query($con, $kwe2);

                        if ($wynik2) {
                            echo "<p>Konto zostalo dodane</p>";
                        }
                    }
                }
                mysqli_close($con);
                ?>
            </div>
            <div class="bot">
                <h2>Zapraszamy wszystkich</h2>
                <ol>
                    <li>wlascicieli psow</li>
                    <li>weterynarzy</li>
                    <li>tych co chca kupic psa</li>
                    <li>tych co lubia psy</li>
                </ol>
                <a href="regulamin.html">Przeczytaj regulamin forum</a>
            </div>
        </div>
    </main>
    <footer>Strone wykonal: Wojtus</footer>
</body>

</html>