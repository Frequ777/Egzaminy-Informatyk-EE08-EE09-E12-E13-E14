<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>„Portal ogłoszeniowy”</title>
    <style> @import url(styl1.css) </style>
    </head>
    <body>
    <div id="baner"><h1>„Portal Ogłoszeniowy”</h1></div>
    <div id="lewy"><h2>„Kategorie ogłoszeń”</h2>
        <ol>
            <li>Ksiażki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
        </ol>
        <img src="ksiazki.jpg" alt="„Kupię / sprzedam książkę”">
        <table>
        <tr>
            <td>Liczba ogłoszeń</td>
            <td>Cena ogłoszeń</td>
            <td>Bonus</td>
            </tr>
        <tr>
            <td>1-10</td>
            <td>1 PLN</td>
            <td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
            </tr>
        <tr>
            <td>11-50</td>
            <td>0,80 PLN</td>
            </tr>
        <tr>
            <td>51 i więcej</td>
            <td>0,60 PLN</td>
            </tr>
        </table>
        </div>
    <div id="prawy"><h2>„Ogłoszenia kategorii książki”</h2>
        <?php
        /* $kw1 = "SELECT id, tytul, tresc FROM ogloszenie WHERE ogloszenie.kategoria=1";
        $kw2 ="SELECT telefon FROM uzytkownik JOIN ogloszenie WHERE uzytkownik.id=ogloszenie.uzytkownik_id AND ogloszenie.id=1";
        $conn = mysqli_connect ('localhost','root','','ogloszenia'); 
        $conn = mysqli_connect ('localhost','root','','ogloszenia');
        $zap1 = mysqli_query ($conn, "SELECT id, tytul, tresc FROM ogloszenie WHERE ogloszenie.kategoria=1");
        $wynik = mysqli_query($conn, $zap1);
        $zap2 = mysqli_query ($conn, "SELECT telefon FROM uzytkownik JOIN ogloszenie WHERE uzytkownik.id=ogloszenie.uzytkownik_id AND ogloszenie.id=1");
        $wynik2 = mysqli_query($conn, $zap2);
        while ($wiersz = mysqli_fetch_row($wynik)){
            $wiersz1=mysqli_fetch_row($wynik2);
            echo "<h3>".$wiesz[0]." ".$wiersz[1]."</h3>";
            echo "<p>".$wiersz[2]."</p>";
            echo "<p>Telefon komórkowy: ".wiersz1[0]."</p>";
        }    
        mysql_close($conn);*/
        $con = mysqli_connect('localhost','root','','ogloszenia');
        $zapytanie1='SELECT id, tytul, tresc FROM ogloszenie WHERE ogloszenie.kategoria=1';
        $wynik = mysqli_query($con,$zapytanie1);
        $zapytanie2 = 'SELECT telefon FROM uzytkownik, ogloszenie WHERE uzytkownik.id=ogloszenie.uzytkownik_id';
        $wynik2 = mysqli_query($con, $zapytanie2);
        while ($wiersz = mysqli_fetch_row($wynik))
        {
            $wiersz1=mysqli_fetch_row($wynik2);
            echo "<h3>".$wiersz[id]." ".$wiersz[1]."</h3>";
            echo "<p>".$wiersz[2]."</p>";
            echo "<p>Telefon komórkowy: ".$wiersz1[0]."</p>";
        }
        mysqli_close($con);
        ?>
        </div>
    <footer id="stopka">„Portal ogłoszeniowy opracował:” Michał Jan Lewandowski</footer>
    </body>
</html>