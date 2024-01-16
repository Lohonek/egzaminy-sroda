
<?php
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$telefon = $_POST["telefon"];
$email = $_POST["email"];

$con = mysqli_connect("localhost", "root", '', 'reje');
$kwe = "INSERT INTO `uzytkownik`(`imie`, `nazwisko`, `telefon`, `email`) VALUES ('$imie','$nazwisko','$telefon','$email')";

mysqli_query($con, $kwe);

mysqli_close($con);


?>