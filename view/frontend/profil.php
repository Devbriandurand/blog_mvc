<?php 
$title = 'Jean Forteroche';
?>

<?php 
if($_SESSION['id'] == 0) {
?>
    <div id="text_inscription">
        <h2>Inscription</h2>

        <p class="paragraphe" >Pour vous inscrire suivez le lien - <a href="<?= $_POST['URL_PATH'] ?>profil/inscription">Inscription</a></p>
        
    </div>

    <div id="text_connexion">
        <h2>Connexion</h2>

        <p class="paragraphe">Pour vous connecter - <a href="<?= $_POST['URL_PATH'] ?>profil/connexion">Connexion</a><br />
        Vous avez oubliez votre mot de passe ? Merci de suivre ce lien - <a href="<?= $_POST['URL_PATH'] ?>profil/recuperation">Recupération du mot de passe</a>
        </p>

        
    </div>   
<?php
}
else {
?>
    <div id="profil">
        <h2>Profil de <?php echo $_SESSION['pseudo']; ?></h2>
        <br />
        <p class="paragraphe">Pseudo = <?php echo $_SESSION['pseudo']; ?></p>  
        <p class="paragraphe">Mail = <?php echo $_SESSION['mail']; ?></p>  
        <?php
        if(isset($_SESSION['id']) == $_SESSION['id']) {
        ?>
        <br />
        <a href="<?= $_POST['URL_PATH'] ?>profil/editProfil">Editer mon profil - </a>
        <a href="<?= $_POST['URL_PATH'] ?>profil/deconnexion">Se déconnecter</a>

        <?php
        }
        ?>

        <?php 
            if($_SESSION['admin'] == true) {
        ?>
        <br />
        <a href="<?= $_POST['URL_PATH'] ?>administration">Accéder à l'espace administration</a>
        
        <?php
        }
        ?>
    </div>
<?php
}
?>
require('template.php');