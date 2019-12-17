<?php
    $page = "exercice2";
    include 'header.php';
// On démarre la session AVANT d'écrire du code HTML
// Je l'ai placé volontaiterement dans le header
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Cecile';
$_SESSION['nom'] = 'Deleu';
$_SESSION['age'] = 30;
?>
<div class=" jumbotron d-flex  flex-column align-items-center">
    <p>Salut <?php echo $_SESSION['prenom']; ?> !<br /></p>      
</div>
 <?php
    include 'footer.php';
  ?>
