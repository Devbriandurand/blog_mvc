<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>

<body>


    <?php ob_start(); ?>
    <h1 id="titleLogin">PAGE DE CONNEXION</h1>

    <form class="formLogin" action="index.php?action=connexion" method="POST">

        <fieldset class="fieldsetLogin">
            <legend id="legendLogin" align='center'><strong>Connexion</strong></legend>
            <label for="username"><strong>Login</strong></label>
            <input id="inputLogin" type="text" name="username">
            <label><strong>Mot de passe</strong></label>
            <input id="inputLogin" type="password" name="mdp">
            <input id="inputLoginSubmit" type="submit" name="submitConnexion">
            <div class=containerLinkRegister>
                        <a href="index.php?action=inscription">
                            <strong>Vous n'êtes pas encore membre ?</strong>
                        </a>
                    </div>
        </fieldset>
                    
    </form>
    <div id="containerImgLogin"><img id="imgLogin" src="public/images/imgAlaskas.jpg"></div>
    <?php $content = ob_get_clean(); ?>



    <?php require('template.php'); ?>
</body>

</html>