
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

    <h3>-Ajouter un article-</h3>
    <form method="post" action="script.php">
      <input id="Title" name="title" placeholder="Titre de l'article" value=""><br>
      <input id="File" type="file" name="userfile" size="50" value="">
      <textarea id="Text" name="text" placeholder="Contenu..." row="15" value=""></textarea></br>
      <input class="btn" id="btn1" type="submit" value="Soumettre">
    </form>

    </section>
  </body>
</html>
