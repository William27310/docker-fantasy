<?php

require "Character.php";
require "Guerrier.php";

 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
    <?php $cookie = new Character(10,10); 
    var_dump($cookie); ?>

    <?php $barbare = new Guerrier(100,100,"Masse",2,"Bouclier du soleil",100);
    var_dump($barbare); ?>

 </body>
 </html>