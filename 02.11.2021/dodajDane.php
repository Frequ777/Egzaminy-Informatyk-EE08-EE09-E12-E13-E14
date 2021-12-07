<?php
$con=mysqli_connect("localhost", "root", "", "ogloszenia");


$imie = $_POST['imie'];
$naz = $_POST['naz'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];

$zapyt="INSERT INTO uzytkownik(imie,nazwisko,telefon,email) VALUES ('$imie', '$naz', $tel, '$mail');";
mysqli_query($con,$zapyt);

mysqli_close;

?>