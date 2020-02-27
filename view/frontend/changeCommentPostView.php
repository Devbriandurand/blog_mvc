<?php $title = 'Blog > Editer le Commentaire de l\'article n°' . $_GET['id'] . ''?>
<?php ob_start(); ?>
    <h1>Editer le Commentaire</h1>
 
<a href="index.php?action=post&amp;id=<?= $_GET['post']?>">Retour à la liste des billets</a>
 
<?php
     while ($singlecomment = $comment->fetch())
    {
        $oldcomment = $singlecomment['comment'];
        $idcomment = $singlecomment['id'];
    ?>
    
 
     <p>Editer le commentaire de : <?= htmlspecialchars($singlecomment['author'])?> posté le <em><?= $singlecomment['comment_date_fr']?></em>
</p>
        
 
<?php
}
?>
 
<form id="formulaireComment" action="index.php?action=editComment&amp;id=<?= $post['id'] ?>" method="post">
    <fieldset>
        <legend id="legendFormPost">MODIFIER VOTRE AVIS</legend>
        <table>
        <tr>
            <td>
                <label for="author"><strong>Auteur</strong></label>
            </td>
         </tr>
        <tr>
            <td>
                <input type="text" name="author" placeholder="Pseudo">
            </td>
        </tr>
        <tr>
            <td>
                <label for="newComment"><strong>Commentaire</strong></label>        
            </td>
        </tr>
        <tr>
            <td>
                <textarea id="comment" name="comment" placeholder="Vous n'allez tout de même pas partir sans me laisser une petit commentaire ?! ^_^" rows="12" cols="60"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Envoyer">
            </td>
        </tr>
    </table>
    </fieldset>
</form>
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>








<?php include('template.php'); ?>
