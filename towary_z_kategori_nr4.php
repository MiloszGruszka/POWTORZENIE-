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
    <div class="towary_z_kategori_nr4">
    <?php
       $counter_records = $conn->query("SELECT COUNT(tabelanr34.ID) as 'ile' FROM tabelanr34 WHERE KATEGORIA = 4;");
       list($ile)=mysqli_fetch_row($counter_records);
       echo"<h4>Produkty: $ile rekordy</h4>";
     ?>
        </div>
</body>
</html>