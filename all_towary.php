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
    <h1>Wszystkie towary</h1>
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
              $sum_records = $conn->query("SELECT tabelanr34.CENA FROM tabelanr34");
              while(list($CENA)=mysqli_fetch_row($sum_records)){
                echo("<li><b>$CENA</b></li>");
             }
            ?>
        </div>
        
</body>
</html>