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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Asimovian&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

   <div>
      <div class="d-flex justify-content-around mt-5 mb-5">

         <div class="card" style="width: 18rem;">
            <img src="assets/img/bryan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
               <h4 class="mt-4"> Guerrier </h4>
               <hr>
               <p class="card-text"><span> Health : </span> 500 <br><span> Mana : </span> 500 <br></p>
               <p><span> Weapon : </span> 500 <br><span> Weapon Damage : </span>500 <br></p>
               <p class="card-text"><span> Shield : </span>500 <br><span> Shield Absorption : </span>500 <br></p>
            </div>
         </div>

         <h1>VS</h1>

         <div class="card-test">
            <div class="card" style="width: 18rem;">
               <img src="assets/img/Orc.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h4 class="mt-4"> Orc </h4>
                  <hr>
                  <p class="card-text"><span>Health : </span> 500 <br><span> Mana : </span> 500 <br></p>
                  <p><span> Damage Min : </span> 500 <br><span> Damage Max : </span> 500 <br></p>
               </div>
            </div>
         </div>
      </div>



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


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>