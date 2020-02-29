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
            
    <form class="formulaireInscription" action="index.php?action=inscription" method="POST" name="formInscription">
        <fieldset class="fieldsetRegister">
            <legend align="center" id="legendInscription" >Formulaire d'inscription</legend>
                    
            <table class="tableRegister">
                <tr>
                    <td align='left'>
                        <label for="pseudo"><strong>Pseudo</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="text" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>"placeholder="Saisissez un pseudo">
                    </td>
                </tr>
                <tr>
                    <td align='left'>
                        <label for="mail"><strong>E-mail</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="text" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>"placeholder="Saisissez un email">
                    </td>
                </tr>
                <tr>
                    <td align='left'>
                        <label for="mail"><strong>Confirmation E-mail</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="text" name="mail2" placeholder="Confirmer votre email">
                    </td>
                </tr>
                <tr>
                    <td align="left">
                        <label><strong>Mot de passe</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="password" name="mdp" placeholder="Saisissez votre mot de passe">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><strong>Confirmer mot de passe</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" align="center" type="password" name="mdp2" placeholder="Saisissez votre mot de passe">
                    </td>
                </tr>
                <tr>      
            <br/>
                       
            </table> 
            <input id="inputRegisterSend" type="submit" name="FormInscription" value="M'inscrire">
        </fieldset>
    </form>
    </section>
            <?php $content = ob_get_clean(); ?>
            <?php require('view/frontend/template.php');  ?>

</body>
    </html>