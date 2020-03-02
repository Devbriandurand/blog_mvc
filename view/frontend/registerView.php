        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="style.css">
            <title>page inscription</title>
        </head>

        <body>


            <?php ob_start(); ?>

            <section class="sectionRegister">
                <h1 id="titleInscription">INSCRIPTION</h1>

                <form class="formulaireInscription" action="index.php?action=inscription" method="POST"
                    name="formInscription">
                    <fieldset class="fieldsetRegister">
                        <legend align="center" id="legendInscription">Formulaire d'inscription</legend>

                        <table class="tableRegister">
                            <tr>
                                <td align='left'>
                                    <label for="pseudo"><strong>Pseudo</strong></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input size="60" id="inputRegister" type="text" name="pseudo"
                                        value="<?php if(isset($pseudo)){echo $pseudo;} ?>"
                                        placeholder="Saisissez un pseudo">
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
                            <br />

                        </table>
                        <input id="inputRegisterSend" type="submit" name="submitInscription" value="M'inscrire">
                    </fieldset>
                </form>
            </section>
            <?php $content = ob_get_clean(); ?>
            <?php require('view/frontend/template.php');  ?>

        </body>

        </html>