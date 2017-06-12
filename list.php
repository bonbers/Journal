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



            </div>
            <form method="post" action="retour.php">
              <input ID="btn" type="submit" value="Voir votre article"></input>
            </form>
            </div>
<?php

include("connect.php");
/////////////////////////////////////////////////////////////////////////

if(isset($_FILES['image'])){

  $dest_dossier = './Journal/img/';
// il est copié du temporaire vers mon répertoire//
 $dest_fichier = basename($_FILES['image']);

  move_uploaded_file($_FILES['image']['tmp_name'], $dest_dossier . $dest_fichier);
  }

///////////////////////////////////////////////////////////////////////////

$titre = $_POST['titre'];
// $image = $_POST['image'];
$article = $_POST['article'];
$FILES= $_POST['image'];
$dest_dossier = './Journal/img/';
// il est copié du temporaire vers mon répertoire//
$dest_fichier = basename($_FILES['image']);

/////////////////////////////////////////////////////////////////////////

if(isset($_FILES['image']))
{
    $FILES = $_POST['image'];
}
else
{
    $_FILES="";
}

    // je l'écris dans le champ url//

    $sql = "INSERT INTO bbc(./Journal/img) VALUES('". $FILES ."', '". $dest_dossier . $dest_fichier ."')";
$req = $pdo->prepare("INSERT INTO bbc (titre, article)
VALUES (:titre, :article)");

$req->execute(array(
    'titre' => $titre,
    'article' => $article
));

print_r($pdo->errorInfo());
?>

      </body>
</html>
