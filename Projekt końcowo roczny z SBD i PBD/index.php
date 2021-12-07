<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-08">
    <title>Lewandowski</title>
    </head>
<body>
    <h1>Wymarzony dom</h1>
     <ul>
    <li><a href="agenci.php">Agenci</a></li>
    <li><a href="klienci.php">Klienci</a></li>
    <li><a href="index.php"><b><u>Oferty</u></b></a></li>
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

$sql = "SELECT Id_oferty, Woj, Status, Pow, L_pokoi, L_laz, Cena, Data_zglosz, Id_agenta FROM oferty";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table><tr><th>ID</th><th>Województwo</th><th>Status</th><th>Powierzchnia</th><th>Liczba pokoi</th><th>Liczba łazienek</th><th>Cena</th><th>Data zgłoszenia</th><th>Id Agenta</th></tr>";
  while($row = $result->fetch_assoc()) {
        echo "<tr><td>"
            .$row["Id_oferty"].
            "</td><td>"
            .$row["Woj"].
            "</td><td>"
            .$row["Status"].
            "</td><td>"
            .$row["Pow"].
            "</td><td>"
            .$row["L_pokoi"].
            "</td><td>"
            .$row["L_laz"].
            "</td><td>"
            .$row["Cena"].
            "</td><td>"
            .$row["Data_zglosz"].
            "</td><td>"
            .$row["Id_agenta"].
            "</td></tr>";
  }
     echo "</table>";
} else {
  echo "0 results";
}  
$pytanie2 = "SELECT woj, ROUND(AVG(cena), 2) FROM oferty GROUP BY woj ORDER BY woj DESC";
$result = mysqli_query($conn, $pytanie2) or die("Problemy z odczytem danych!");
    echo "<table><tr><th>Województwo</th><th>Cena</th></tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row['woj']."</td><td>".$row['ROUND(AVG(cena), 2)']."</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw2:</h5>";

$pytanie3 = "SELECT imie, nazwisko, Id_oferty, Woj, Pow, Cena FROM oferty, agenci WHERE oferty.Id_agenta=agenci.Id_agenta AND oferty.Status='A' AND oferty.Id_oferty LIKE '%MT'";
$result = mysqli_query($conn, $pytanie3) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Id oferty</th>
    <th>Woj</th>
    <th>Pow</th>
    <th>Cena</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['imie'].
            "</td><td>"
            .$row['nazwisko'].
            "</td><td>"
            .$row['Id_oferty'].
            "</td><td>"
            .$row['Woj'].
            "</td><td>"
            .$row['Pow'].
            "</td><td>"
            .$row['Cena'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw3:</h5>";
    
    $pytanie4 = "SELECT imie, nazwisko FROM agenci, oferty WHERE oferty.Id_agenta=agenci.Id_agenta AND oferty.Data_zglosz>2017-01-01";
$result = mysqli_query($conn, $pytanie4) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['imie'].
            "</td><td>"
            .$row['nazwisko'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw4:</h5>";
    
    $pytanie5 = "SELECT imie, nazwisko, Id_oferty, pow, L_pokoi, L_laz, cena FROM oferty, agenci WHERE oferty.Id_agenta=agenci.Id_agenta AND oferty.Status='A' AND oferty.Pow>180 AND oferty.L_laz<=2";
$result = mysqli_query($conn, $pytanie5) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Id Oferty</th>
    <th>Powierzchnia</th>
    <th>Liczba pokoi</th>
    <th>Liczba łazienek</th>
    <th>Cena</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['imie'].
            "</td><td>"
            .$row['nazwisko'].
            "</td><td>"
            .$row['Id_oferty'].
            "</td><td>"
            .$row['pow'].
            "</td><td>"
            .$row['L_pokoi'].
            "</td><td>"
            .$row['L_laz'].
            "</td><td>"
            .$row['cena'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw5:</h5>";
    
    $pytanie6 = "SELECT COUNT(imie) from klienci WHERE klienci.Imie LIKE 'S%'";
$result = mysqli_query($conn, $pytanie6) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Liczba imion zaczynających się na literę 'S' z klientów:</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['COUNT(imie)'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw6:</h5>";
    
    $pytanie7 = "SELECT COUNT(imie) from klienci WHERE klienci.Imie LIKE '%a'";
$result = mysqli_query($conn, $pytanie7) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Liczba imion kończących się na literę 'a' z klientów:</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['COUNT(imie)'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw7:</h5>";
    
    $pytanie8 = "SELECT AVG(cena) FROM oferty WHERE L_laz=2 AND oferty.Id_oferty LIKE '%M%'";
$result = mysqli_query($conn, $pytanie8) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Średnia cena mieszkań posiadających 2 łazienki to:</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['AVG(cena)'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw8:</h5>";
    
    $pytanie9 = "SELECT AVG(cena) FROM oferty WHERE L_laz=2 AND oferty.Id_oferty LIKE '%D%'";
$result = mysqli_query($conn, $pytanie9) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Średnia cena domów posiadających 2 łazienki to:</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['AVG(cena)'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw9:</h5>";
    
    $pytanie10 = "SELECT COUNT(id_oferty) from oferty WHERE id_oferty LIKE '%M%'";
$result = mysqli_query($conn, $pytanie10) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Liczba ofert mieszkań:</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['COUNT(id_oferty)'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw10:</h5>";
    
    $pytanie11 = "SELECT MAX(cena), Pow, L_pokoi, L_laz, id_oferty, if(Id_oferty LIKE '%N', 'Niema basenu', 'ma basen') AS 'Czy ma basen?' FROM oferty;";
$result = mysqli_query($conn, $pytanie11) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Maksymalna cena mieszkania:</th>
    <th>Powierzchnia</th>
    <th>Liczba pokoi</th>
    <th>Liczba łazienek</th>
    <th>Id oferty</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['MAX(cena)'].
            "</td><td>"
            .$row['Pow'].
            "</td><td>"
            .$row['L_pokoi'].
            "</td><td>"
            .$row['L_laz'].
            "</td><td>"
            .$row['id_oferty'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw11:</h5>";
    
    $pytanie12 = "SELECT min(cena), Pow, L_pokoi, L_laz, id_oferty, if(Id_oferty LIKE '%N', 'Niema basenu', 'ma basen') AS 'Czy ma basen?' FROM oferty;";
$result = mysqli_query($conn, $pytanie12) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Minimalna cena mieszkania:</th>
    <th>Powierzchnia</th>
    <th>Liczba pokoi</th>
    <th>Liczba łazienek</th>
    <th>Id oferty</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['min(cena)'].
            "</td><td>"
            .$row['Pow'].
            "</td><td>"
            .$row['L_pokoi'].
            "</td><td>"
            .$row['L_laz'].
            "</td><td>"
            .$row['id_oferty'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw12:</h5>";
    
    $pytanie13 = "SELECT Cena FROM oferty GROUP BY cena DESC";
$result = mysqli_query($conn, $pytanie13) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Cena ofert malejąco:</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['Cena'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw13:</h5>";
    
    $pytanie14 = "SELECT Cena, id_agenta FROM oferty WHERE oferty.Status='S' GROUP BY cena DESC";
$result = mysqli_query($conn, $pytanie14) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Cena ofert sprzedanych posortowanych malejąco:</th>
    <th>Id agenta</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['Cena'].
            "</td><td>"
            .$row['id_agenta'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw14:</h5>";
    
    $pytanie15 = "SELECT Cena, id_agenta FROM oferty WHERE oferty.Status='A' GROUP BY cena DESC ";
$result = mysqli_query($conn, $pytanie15) or die("Problemy z odczytem danych!");
    echo "<table>
    <tr>
    <th>Cena ofert aktualnych posortowanych malejąco:</th>
    <th>Id agenta</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo 
            "<tr><td>"
            .$row['Cena'].
            "</td><td>"
            .$row['id_agenta'].
            "</td></tr>";
    }
    echo "<h5>Wynik zapytania nr kw15:</h5>";
  $check= $result->num_rows;
$conn->close();
?>
    </body>
</html>