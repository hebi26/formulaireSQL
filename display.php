

<?php
include('header.php');
include('conec.php');
?>
<nav class="nav">
  <ul>
    <li><a href="index.php">Créer un article</a></li>
    <li><a href="display.php">Liste des articles</a></li>
  </ul>
</nav>

<section class="main">
<h1>Liste des Articles</h1>

<?php
//-----------------Requete pour lire l'ensemble des articles---------------//

$display = $pdo->query('SELECT * FROM article');
$list = $display->fetchAll();

foreach ($list as $value) {
    echo '<h3>'.$value->titre.'</h3><img src="img/'.$value->fichier.'"><p>'.$value->texte.'</p><p>Ecrit le : '.$value->date.'</p><hr>';
}
?>
</section>
