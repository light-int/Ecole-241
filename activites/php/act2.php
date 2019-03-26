<?php 
  // afficher tout les types de variables  
  // -----------------------------------------

  // String
  $title = "ACT2";
  $oka   = "okacode";
  // integer
  $num   = 22;
  // float
  $moy   = 60.75;
  // tableau
  $all   = ['ivan', 'Sensei', 'Capitaine','etc...'];
  // Objets
  class oka
  {
      function crie()
      {
          return "okacode okaaaaa!!!!";
      }
  }
  $oka_crie = new oka();
  // boolean
  $true = true;
  // null
  $N = null;

?>

<!doctype html>
<html lang="fr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= $title ?></title>
  </head>
  <body>

  	<div class="container-fluid" id="app">
      <div class="row justify-content-md-center">
        <div class="col-md-auto">
          <div class="card" style="width: 35rem;">
            <img src="http://www.bluthemes.com/assets/img/blog/12/bullseye.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <!-- Affichage OKA -->
              <h1 class="card-title text-center"><?= $oka ?></h1>
              <p class="text-center"><em><?php var_dump($oka); ?></em></p>
              <p>
                <b>Nombre: </b><?= $num ?> - <em><?php var_dump($num); ?></em><br>
                <b>Moyenne: </b><?= $moy ?> - <em><?php var_dump($moy); ?></em><br>
                <b>Apprenants:</b><br>
                <em><?= var_dump($all); ?></em>
                <ul>
                  <li><?= $all[0] ?></li>
                  <li><?= $all[1] ?></li>
                  <li><?= $all[2] ?></li>
                  <li><?= $all[3] ?></li>
                </ul>
                <b>Le crie: </b><?= $oka_crie->crie() ?> - <em><?php var_dump($oka_crie); ?></em><br>
                <b>Sont-il pret a toute eventualite? </b><?= $true ?> - <em><?php var_dump($true); ?></em><br>
                <b>Que pensez-vous des proverbes du commandant BOBO:</b> Ils sont <em><?php var_dump($N); ?></em>
              </p>

            </div>
          </div>

        </div>
      </div>
  	</div>

  </body>
</html>
