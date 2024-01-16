<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moj kalendarz</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="left">
            <img src="logo1.png" alt="Moj kalendarz">
        </div>
        <div class="right">
            <h1>KALENDARZ</h1>

            <?php
            $con = mysqli_connect('localhost', 'root', '', 'kalendarz');
            $kwe = "SELECT `miesiac`,`rok` FROM `zadania` WHERE dataZadania LIKE '2020-07-01'";
            $wynik = mysqli_query($con, $kwe);
            while ($tab = mysqli_fetch_array($wynik)) {
                echo "miesiac: " . $tab['miesiac'] . ", rok: " . $tab['rok'];
            }
            ?>
        </div>
    </header>
    <main>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'kalendarz');
        $kwe = "SELECT `dataZadania`,`wpis` FROM `zadania` WHERE `miesiac` = 'lipiec'";
        $wynik = mysqli_query($con, $kwe);
        while ($tab = mysqli_fetch_array($wynik)) {
            echo "<div class='blokd'>" . "<h5>" . $tab['dataZadania'] . '</h5>' . "<p>" . $tab['wpis'] . '</p>' . '</div>';
        }

        ?>
    </main>
    <footer>
        <form method="post">
            dodaj wpis: <input type="text" name="wpis">
            <input type="submit" value="DODAJ" name="wyslij">
        </form>
        <?php
        if ($_POST['wyslij']) {
            $wpis = $_POST['wpis'];
            $con = mysqli_connect('localhost', 'root', '', 'kalendarz');
            $kwe = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-13';";
            mysqli_query($con, $kwe);
        }
        mysqli_close($con);
        ?>
        <p>Strone wykonał: Wojtus</p>
    </footer>
</body>

</html>