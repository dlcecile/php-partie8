<?php
setcookie('login', time() + 365 * 24 * 3600, null, null, false, true);
setcookie('password', time() + 365 * 24 * 3600, null, null, false, true);
$page = "exercice4";
include 'header.php';
$message = '';
if (isset($_POST['login']) & isset($_POST['password'])) {
    $_COOKIE['login'] = $_POST['login'];
    $_COOKIE['password'] = $_POST['password'];
    //on peut faire un var_dump($_COOKIE);
    $message = 'Bienvenue ' . trim(strip_tags($_COOKIE['login'])) . ' ' . trim(strip_tags($_COOKIE['password'])) . ' !!!';
} else {
    ?>
    <div class="jumbotron  d-flex flex-column align-items-center">
        <form action="exo4.php" method="POST">
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
<?php } ?>
<p><?= $message ?></p>
<?php
include 'footer.php';
?>
