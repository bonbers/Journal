<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100|Roboto:100" rel="stylesheet">
  <script src="jquery-3.2.1.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Dojo-wikicoda-pizza</title>
</head>

<body>


  <header>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="list.php">Liste commandes</a></li>
    </ul>
  </header>


            </div>
            <form method="post" action="retour.php" enctype="multipart/form-data">
              <input ID="btn" type="submit" value="Voir votre article"></input>
            </form>

          </div>



        </div>
      </div>
    </section>

  <div class="list">
    <?php
    include("connect.php");


      $reponse = $pdo->query('SELECT * FROM bbc');
      $reponse1 = $reponse->fetchAll();
      // var_dump($reponse1);
      foreach ($reponse1 as $value) {
          echo '<p>Article écrit le : '.$value->date.'</p><p>Titre : '.$value->titre.'</p><img src="./upload/' . $value->image .'"> <p> Article : ' . $value->article . '</p><hr>';
      }
      ?>

    </div>
    </div>

</body>

</html>
