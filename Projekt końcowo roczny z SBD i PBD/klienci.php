<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-08">
    <title>Lewandowski</title>
    </head>
<body>
    <h1>Zrzut danych z tabeli "Klienci"</h1>
     <ul>
    <li><a href="agenci.php">Agenci</a></li>
    <li><a href="klienci.php"><b><u>Klienci</u></b></a></li>
    <li><a href="index.php">Oferty</a></li>
    <li><a href="zainteresowanie.php">Zainteresowanie</a></li><li><a href="index%20%E2%80%94%20kopia.php">Zainteresowanie</a></li>
    </ul>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sklep";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id_klienta, Nazwisko, Imie FROM klienci";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table><tr><th>ID</th><th>Nazwisko</th><th>Imie</th></tr>";
  while($row = $result->fetch_assoc()) {
        echo "<tr><td>"
            .$row["Id_klienta"].
            "</td><td>"
            .$row["Nazwisko"].
            "</td><td>"
            .$row["Imie"].
            "</td></tr>";
  }
     echo "</table>";
} else {
  echo "0 results";
}   
$conn->close();
?>
    </body>
</html>