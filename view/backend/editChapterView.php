
<?php ob_start(); ?>    

<h1 id="titleEditChapter">PAGE ADMIN <br/> EDITION DE CHAPITRE</h1>
   
   <form id="formulaireAddChapter" action="index.php?action=editChapter&amp;id=<?= $chapter['id']; ?>" method="post">

                <fieldset  id="fieldsetAddChap">
                    <legend align="center" id="legendFormPost">MODIFICATION DE BILLET</legend>
                        <table class="tableEditChapter">
                            <tr>
                                <td id="tdAddChapter">
                                    <label for="title"><strong>TITRE DU CHAPITRE</strong></label>
                                </td>
                            </tr>
                            <tr>
                                <td id="tdAddChapter" align='center'>
                                    <input class="editChapInput" name="title" value="<?= $chapter['title'] ?>"></input>
                                </td>
                            </tr>
                            <tr>
                                <td id="tdAddChapter">
                                    <label for="content"><strong>CONTENUE DU CHAPITRE</strong></label>        
                                </td>
                            </tr>
                            <tr>
                                <td id="tdAddChapter">
                                    <textarea class="tinymce" name="content" rows="20" cols="60" >
                                      <?= ($chapter['content']); ?>
                                    </textarea>
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