<?php

require "Character.php";
require "Guerrier.php";
require "Orc.php";

 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
    <?php $barbare = new Guerrier(100,100,"Masse",2,"Bouclier du soleil",100);
    var_dump($barbare);
    $barbare->getDamage(150);
    var_dump($barbare);
    ?>

 </body>
 </html>