<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Klub Wędkowania</title>
    <style> @import url('styl2.css'); </style>
    </head>
<body>
    <div class="ban"><h2>"Wędkuj z nami!"</h2></div>
    <div><img src="ryba2.jpg" alt="szczupak"></div>
    <div><h3>Ryby spokojnego żeru (białe)</h3></div>
    <?php
        $polacz = mysqli_connect('localhost','root','','wedkowanie2');
    $sql = "SELECT id, nazwa, wystepowanie FROM ryby WHERE stylzycia=2;";
            $zapyt = mysqli_select_db($polacz, $sql);
            $ile = mysqli_num_rows($zapyt);
            for ($i=0; $i<$ile; $i++)
            {
                $r = mysqli_fetch_array($zapyt);
                echo $r['id'].".".$r['nazwa'].", wystepuje w: ".$r['wystepowanie']."<br>";
            }
        mysql_close($idbd);        
        ?>
    <div class="ban" ><p>„Stronę wykonał: Michał Jan Lewandowski”</p></div>
    </body>
</html>