<?php include_once("connect.php");?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Miłosz Gruszka</h2>
    <div class="counter">

    </div>
    <?php

    ?>
     <nav>
        <ul>
            <li><a href="index.php">Początek</a></li>
            <li><a href="towary_z_kategori_nr1.php">Towary Numer 1</a></li>
            <li><a href="towary_z_kategori_nr4.php">Towary Numer 4</a></li>
            <li><a href="all_towary.php">Wszystkie towary</a></li>
        </ul>
    </nav>
    <div class="all_towary">
        <?php 
        $all_records = $conn->query("SELECT tabelanr34.ID,tabelanr34.CENA,tabelanr34.NAZWA,tabelanr34.KATEGORIA FROM tabelanr34;");
        while(list($ID,$CENA,$NAZWA,$KATEGORIA)=mysqli_fetch_row($all_records)){
           echo("<li><b>$ID</b>,<i>$CENA,$NAZWA,$KATEGORIA</i></li>");
        }
        ?>
        </div>
        <h1>Suma Cen</h1>
        <div class="all_towary">
            <?php
              $sciezka_do_pliku = 'tabelanr34';
              $suma = array_sum(array_map('trim', file($sciezka_do_pliku)));
              echo "Suma cen wynosi: $suma";
            ?>
        </div>
        
</body>
</html>