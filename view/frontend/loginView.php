<?php ob_start(); ?>
<?php $title = 'titleLogin' ?>

    <h1 id="titleLogin">PAGE DE CONNEXION</h1>
    <form class="formLogin" action="index.php?action=connexion" method="POST">
        <fieldset class="fieldsetLogin">
            <legend id="legendLogin" align='center'><strong>Connexion</strong></legend>
                <table id="tableLogin">
                    <tbody class="tbodyLogin">
                        <tr class="containerLoginTr">
                                
                            <th>
                                <label for="username"><strong>LOGIN</strong></label>
                            <th>
                                <td>     
                                    <input id="inputLogin" type="text" name="username">
                                </td>
                            <th>
                             <label><strong>MOT DE PASSE</strong></label>
                            </th>
                                <td>
                                    <input id="inputLogin" type="password" name="mdp">
                                </td>
                                <td class="containerSubmitRegister">
                                    <input id="inputLoginSubmit" type="submit" name="submitConnexion">
                                </td> 
                            </tr>
                    </tbody>
                </table>
                    <div class="containerLinkRegister">
                            <a href="index.php?action=inscription">
                                <strong>Vous n'êtes pas encore membre ?</strong>
                            </a>
                    </div>
        </fieldset> 
    </form>

                    <div id="containerImgLogin"><img id="imgLogin" src="public/images/imgAlaskas.jpg"></div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
