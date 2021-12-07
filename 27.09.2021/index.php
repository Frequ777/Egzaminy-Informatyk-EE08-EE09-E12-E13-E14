<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    </head>
    <body>
    <?php 
        $dbcon = mysqli_connect('localhost', 'root', "", 'wedkowanie');
        $que = "SELECT nazwa, wystepowanie FROM ryby;";
        $answ = mysqli_query($dbcon, $que);
        foreach($answ as $row){
            echo $row['nazwa'];
            echo " wystepowanie: ";
            echo $row['wystepowanie'];
            echo $row['styl_zycia'];
            $stlz = 
            switch
            echo '<br>';
        }
        mysqli_close($dbcon);
        
        ?>
    </body>
</html>