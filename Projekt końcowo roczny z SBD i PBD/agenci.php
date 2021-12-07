<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-08">
    <title>Lewandowski</title>
    </head>
<body>
    <h1>Zrzut danych z tabeli "Agenci"</h1>
     <ul>
    <li><a href="agenci.php"><b><u>Agenci</u></b></a></li>
    <li><a href="klienci.php">Klienci</a></li>
    <li><a href="index.php">Oferty</a></li>
    <li><a href="zainteresowanie.php">Zainteresowanie</a></li>
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

$sql = "SELECT Id_agenta, Imie, Nazwisko FROM agenci";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table><tr><th>ID</th><th>Imie</th><th>Nazwisko</th></tr>";
  while($row = $result->fetch_assoc()) {
        echo "<tr><td>"
            .$row["Id_agenta"].
            "</td><td>"
            .$row["Imie"].
            "</td><td>"
            .$row["Nazwisko"].
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