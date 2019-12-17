<?php
    $page = "exercice1";
    include 'header.php';
        $IP = 'Voici l\'adresse IP '.$_SERVER['REMOTE_ADDR'].'!!!';
        $name = 'Voici le nom du serveur ' .$_SERVER['SERVER_NAME'];
        $userAgent = 'Voici l\'user agent ' .$_SERVER['HTTP_USER_AGENT'];
?>
<div class=" jumbotron d-flex  flex-column align-items-center">
    <p><?= $IP;?></p>
    <p><?= $name;?></p>
    <p><?= $userAgent;?></p>
</div>
 <?php
    include 'footer.php';
  ?>
