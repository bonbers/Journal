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

  </header>

  <div class="ensemble">
    <section class="top">
      <div class="row">

            </div>
            <form method="post" action="retour.php">
              <input ID="btn" type="submit" value="Voir votre article"></input>
            </form>

          </div>
        </div>

        </div>
      </div>
    </section>
  </div>
<?php

include("connect.php");

$titre = $_POST['titre'];
$image = $_POST['image'];
$article = $_POST['article'];

$req = $pdo->prepare("INSERT INTO bbc (titre, image, article)
VALUES (:titre, :image, :article)");

$req->execute(array(
    'titre' => $titre,
    'image' => $image,
    'article' => $article
));

print_r($pdo->errorInfo());
?>
