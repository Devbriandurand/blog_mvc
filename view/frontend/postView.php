<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<h1 id="titlePostView">Mes chapitres !</h1>

<p><a id="retourBillet" href="index.php">Retour à la liste des billets</a></p>

<div class="news">
    <h3 id="titleBillet">
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>
    
    <p id="content">
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>

</div>

<h2 id="titleComment">Commentaires</h2>

<div class="containerFormComment">

<form id="formulaireComment" action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <fieldset id="fieldsetPost">
        <legend align="center" id="legendFormPost">LAISSER MOI VOTRE AVIS</legend>
        <table>
        <tr>
            <td>
                <label for="author"><strong>Auteur</strong></label>
            </td>
         </tr>
        <tr>
            <td>
                <input size="79" type="text" name="author" placeholder="Pseudo">
            </td>
        </tr>
        <tr>
            <td>
                <label for="comment"><strong>Commentaire</strong></label>        
            </td>
        </tr>
        <tr>
            <td>
                <textarea id="comment" name="comment" placeholder="Vous n'allez tout de même pas partir sans me laisser une petit commentaire ?! ^_^" rows="12" cols="60"></textarea>
            </td>
        </tr>
        <tr>
            <td align='center'>
                <input type="submit" value="Envoyer">
            </td>
        </tr>
    </table>
    </fieldset>
</form>


<span id='containerComment'>
<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] .' <span><input type=button value="supprimer" </span>'  ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) .'<hr>' ?></p>
<?php
}
?>
</span>
</div>
<hr id="hrPost">
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
