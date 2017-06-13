
<?php
include('header.php');
?>

  <body>

    <nav class="nav">
      <ul>
        <li><a href="index.php">Créer un article</a></li>
        <li><a href="display.php">Liste des articles</a></li>
      </ul>
    </nav>

    <section class="main">
      <form method="post" action="display.php">
      <input class="btn" id="btn2" type="submit" value="Lister les articles">
      </form>
      <?php

      include('conec.php');

//----------------------On défini les variables------------------------------//

      $title=$_POST['title'];
      $file=$_POST['userfile'];
      $text=$_POST['text'];

// ---------------Requete pour injecter dans la table------------------------//

      $req = $pdo->prepare("INSERT INTO article (titre, fichier, texte)
      VALUES (:titre, :fichier, :texte)");

      $req->execute(array(
          'titre' => $title,
          'fichier' => $file,
          'texte' => $text
      ));

      print_r($pdo->errorInfo());
    
      ?>

    </section>
  </body>
</html>
