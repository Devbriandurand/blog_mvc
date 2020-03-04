    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>page inscription</title>
    </head>

    <body>
        <?php ob_start(); ?>
        <h1 id="titleInscription">INSCRIPTION</h1>
        <form class="formulaireInscription" action="index.php?action=inscription" method="POST" name="formInscription">
            <fieldset>
                <legend align="center"><strong>Formulaire d'inscription</strong></legend>
            <table class="tableRegister">
                <tr>
                    <td align="left">
                        <label for="pseudo"><strong>Pseudo</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="text" name="pseudo"
                            value="<?php if(isset($pseudo)){echo $pseudo;} ?>" placeholder="Saisissez un pseudo">
                    </td>
                </tr>
                <tr>
                    <td align="left">
                        <label for="password"><strong>Mot de passe</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="password" name="password"
                            placeholder="Saisissez votre mot de passe">
                    </td>
                </tr>
                <tr>
                    <td align="left">
                        <label for="password2"><strong>Confirmation du mot de passe</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="password" name="password2"
                            placeholder="Confirmation de votre mot de passe">
                    </td>
                </tr>
                <tr>
                    <td> <input id="inputRegisterSend" type="submit" name="submitInscription" value="M'inscrire">
                    </td>
                </tr>
            </table>
            </fieldset>
            <div class=containerLinkConnexion>
                <a href="index.php?action=connexion">
                    <strong>Vous êtes déjà membre ?</strong>
                </a>
            </div>
            
        </form>

        <?php $content = ob_get_clean(); ?>
        <?php require('view/frontend/template.php');  ?>

    </body>

    </html>