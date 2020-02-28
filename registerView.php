        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="public/css/style.css">
            <title>page inscription</title>
        </head>
        <body>
        
        
      <?php ob_start(); ?>
       
        <section class="sectionRegister">
        <h1 id="titleInscription">INSCRIPTION</h1>
            
    <form class="formulaireInscription" action="" method="POST" name="formInscription">
        <fieldset class="fieldsetRegister">
            <legend align="center" id="legendInscription" >Formulaire d'inscription</legend>
                    
            <table class="tableRegister">
                <tr>
                    <td align='left'>
                        <label for="username"><strong>Username</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="text" name="username" value="<?php if(isset($username)){echo $username;} ?>"placeholder="Saisissez un pseudo" required>
                    </td>
                </tr>
                <tr>
                    <td align="left">
                        <label for="email"><strong>E-mail</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="email" name="email"  value="<?php if(isset($email)){echo $email;}?>" placeholder="Saisissez votre email" required>
                    </td>
                </tr>

                <tr>
                    <td align="left">
                        <label><strong>Mot de passe</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" type="password" name="mdp" placeholder="Saisissez votre mot de passe" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><strong>Confirmer mot de passe</strong></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input size="60" id="inputRegister" align="center" type="password" name="mdp" placeholder="Saisissez votre mot de passe" required>
                    </td>
                </tr>
                <tr>      
            <br/>
                       
            </table> 
            <input id="inputRegisterSend" type="submit" name="submitFormInscription" value="M'inscrire">
        </fieldset>
    </form>
    </section>
            <?php $content = ob_get_clean(); ?>
            <?php require_once('view/frontend/template.php')  ?>

            
</body>
    </html>