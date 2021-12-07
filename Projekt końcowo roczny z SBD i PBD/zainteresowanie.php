<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-08">
    <title>Lewandowski</title>
    </head>
<body>
    <h1>Zrzut danych z tabeli "Zainteresowanie"</h1>
    <ul>
    <li><a href="agenci.php">Agenci</a></li>
    <li><a href="klienci.php">Klienci</a></li>
    <li><a href="index.php">Oferty</a></li>
    <li><a href="zainteresowanie.php"><b><u>Zainteresowanie</u></b></a></li>
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

$sql = "SELECT Id_oferty, id_klienta FROM zainteresowanie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table><tr><th>ID Oferty</th><th>ID Klienta</th></tr>";
  while($row = $result->fetch_assoc()) {
        echo "<tr><td>"
            .$row["Id_oferty"].
            "</td><td>"
            .$row["id_klienta"].
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