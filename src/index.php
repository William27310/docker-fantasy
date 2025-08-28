<?php

require "Character.php";
require "Guerrier.php";
require "Orc.php";
session_start();

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   if (isset($_POST['action'])) {
      switch ($_POST['action']) {
         case 'create-warrior':
            $barbare = new Guerrier(2000, 1000, "Sun's blade", 250, "Sun's Shield", 600);
            $_SESSION['barbare'] = $barbare;
            break;

         case 'create-orc':
            $orque = new Orc(1500, 200, 150, 300);
            $_SESSION['orque'] = $orque;
            break;

         case 'begin':
            echo "Le dé se lance..";
            break;

         case 'fight':
            echo "Le combat va commencer..";
            break;
      }
   }
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Asimovian&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

   <div class="formulaire d-flex justify-content-around">
      <form action="" method="POST">
         <input type="hidden" name="action" value="create-warrior">
         <button class="btn btn-dark p-4"> Créer le guerrier </button>
      </form>

      <form action="" method="post">
         <input type="hidden" name="action" value="create-orc">
         <button class="btn btn-dark p-4"> Créer l'orc </button>
      </form>

      <form action="" method="post">
         <input type="hidden" name="action" value="begin">
         <button class="btn btn-dark p-4"> Qui commence ? </button>
      </form>

      <form action="" method="post">
         <input type="hidden" name="action" value="fight">
         <button class="btn btn-dark p-4"> Combat ! </button>
      </form>
   </div>

   <div class="d-flex justify-content-center mt-4 mb-5">
      <a class="btn btn-dark" href="reset.php">Effacer les données</a>
   </div>

   <?php if (isset($_SESSION['barbare'])) { ?>

      <div class="d-flex justify-content-around mt-5 mb-5">
         <div class="card" style="width: 18rem;">
            <img src="assets/img/bryan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
               <h4 class="mt-4"> Guerrier </h4>
               <hr>
               <p class="card-text"><span> Health : </span> <?= $_SESSION['barbare']->getHealth() ?> <br><span> Mana : </span> <?= $_SESSION['barbare']->getMana() ?> <br></p>
               <p><span> Weapon : </span> <?= $_SESSION['barbare']->getWeapon() ?> <br><span> Weapon Damage : </span><?= $_SESSION['barbare']->getWeaponDamage() ?> <br></p>
               <p class="card-text"><span> Shield : </span><?= $_SESSION['barbare']->getShield() ?> <br><span> Shield Absorption : </span><?= $_SESSION['barbare']->getShieldValue() ?> <br></p>
            </div>
         </div>

      <?php } ?>

      <?php if (isset($_SESSION['barbare']) && isset($_SESSION['orque'])) { ?>

         <h1>VS</h1>

      <?php } ?>


      <?php if (isset($_SESSION['orque'])) { echo '<div class="d-flex justify-content-around mt-5 mb-5">' ?>

         <div class="card" style="width: 18rem;">
            <img src="assets/img/Orc.jpg" class="card-img-top" alt="...">
            <div class="card-body">
               <h4 class="mt-4"> Orc </h4>
               <hr>
               <p class="card-text"><span>Health : </span> <?= $_SESSION['orque']->gethealth() ?> <br><span> Mana : </span> <?= $_SESSION['orque']->getMana() ?> <br></p>
               <p><span> Damage Min : </span> <?= $_SESSION['orque']->getDamageMin() ?> <br><span> Damage Max : </span> <?= $_SESSION['orque']->getDamageMax() ?> <br></p>
            </div>
         </div>
      </div>

   <?php } ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>