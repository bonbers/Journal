<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
      <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css">
      <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great%7CSource+Sans+Pro" rel="stylesheet">
      <script src="jquery-3.2.1.js"></script>
      <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet"href="style.css"/>
      <title>Journal</title>
    </head>
    <body>

    <header>

    </header>

    <div class="ensemble">
    <form method="post" action="list.php">
    <section class="top">
      <div class="row">


        <div class="formulaire">
          <h2>JOURNAL</h2>
          <p>Remplir le formulaire...</p>

            <input id="titre" name="titre" placeholder="Titre" value=""><br>
            <label>Votre image à upload</label>
            <input type="file" id="image" name="upload" placeholder="Images à Upload" value=""><br>
            <textarea id="article" name="article" placeholder="Votre article" row="40" value=""></textarea>
            <br></br>

            <p>Validez votre article par la suite</p>
            <input id="btn" type="submit" value="Envoyer votre super article"></input>
        </div>
      </div>
    </section>
  </div>
    </body>
</html>
