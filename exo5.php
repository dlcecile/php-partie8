<?php
setcookie('login', 'brigitte', time() + 365 * 24 * 3600, null, null, false, true);
setcookie('password', '1', time() + 365 * 24 * 3600, null, null, false, true);
setcookie('password', '987654', time() + 365 * 24 * 3600, null, null, false, true);
$page = "exercice5";
include 'header.php';
?>
<div class="jumbotron  d-flex flex-column align-items-center">
    <form action="exo4.php" method="POST">
        <p>Hé ! Je me souviens de toi !<br />
            Tu t'appelles <?php echo $_COOKIE['login']; ?> et ton mot de passe et <?php echo $_COOKIE['password']; ?> c'est bien ça ?
        </p>
        <fieldset>  
            <legend>Contact</legend>
            <div class="identification">
                <label for="identification">Identification:</label>
            </div>
            <div class="form-group">
                <label for="login"></label>
                <input class="form-control" type="text" id="login" name="login" placeholder="pseudo"/>
            </div>
            <div class="form-group">
                <label for="password"></label>
                <input class="form-control" type="number" id="password" name="password" placeholder="Veuillez saisir 6 chiffres"/>
            </div>
            <div class="form-group">
                <input class="btn btn-danger col-12 mt-4" type="submit" value= Envoyez  name= "submit ">
            </div>
        </fieldset>
    </form>        
</div>
<?php
include 'footer.php';
?>
