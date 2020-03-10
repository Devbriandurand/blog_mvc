<?php ob_start(); ?>
<h1 id='titleAddChapter'>PAGE ADMIN <br/> AJOUT NOUVEAU CHAPITRE</h1>

<form id="formulaireAddChapter" action="index.php?action=addChapitre" method="post">
    <fieldset  id="fieldsetAddChap">
        <legend align="center" id="legendFormPost">AJOUTE UN NOUVEAU CHAPITRE</legend>
            <table>
                <tr>
                    <td id="tdAddChapter">
                        <label for="title"><strong>TITRE DU CHAPITRE</strong></label>
                    </td>
                </tr>
                <tr>
                    <td id="tdAddChapter" align='center'>
                        <input size="79" type="text" name="title" placeholder="Exemple: [ Chapitre V ] À la conquête de l'Alaska ! ">
                    </td>
                </tr>
                <tr>
                    <td id="tdAddChapter">
                        <label for="content"><strong>CONTENUE DU CHAPITRE</strong></label>        
                    </td>
                </tr>
                <tr>
                    <td id="tdAddChapter">
                        <textarea class="tinymce"  name="content" placeholder="Tu n'allais oublier la base ? le chapitre ! XD " rows="20" cols="60"></textarea>
                    </td>
                </tr>
                <tr>
                    <td id="tdSumbitAddChapter" align='center'>
                        <input id="sumbitAddChapter" type="submit" value="Envoyer">
                    </td>
                </tr>
        </table>
    </fieldset>
</form>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>