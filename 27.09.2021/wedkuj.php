<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
    </head>
<body>
    <div class="banner"><h1>Portal dla wędkarzy</h1>
    </div>
    <div class="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
<?php 
        $dbc = mysqli_connect('localhost', 'root', "", 'wedkowanie');
        $query = "SELECT nazwa, wystepowanie FROM ryby WHERE ryby.styl_zycia=1;";
        $response = mysqli_query($dbc, $query);
        foreach($response as $row){
        echo '<li>';
        echo $row['nazwa'];
        echo '  text  ';
        echo $row['wystepowanie'];
        echo '</li>';
        }
              mysqli_close($dbc);
        /*
        echo '<pre>';
        print_r($response);
        echo '</pre>';
        */
        ?>
        </ul>
    </div>
    <div class="prawy">
        <img src="ryba1.jpg" alt="Sum"><br>
    <a href="kwerendy.txt">Pobierz kwerendy</a>    
    </div>
    <div class="stoopka"><p>Stronę wykonał: Michał Lewandowski</p>
    </div>
    </body>
</html>