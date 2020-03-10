<?php ob_start(); ?>

<h1 id="titleListPostsh1">Billet simple pour l'Alaska</h1>

<p id="derniersBillets"><strong>Derniers billets du blog :</strong></p>

<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br($data['content']) ?>
            <br /><br /> <br /><br />
            <em><a id="linkSuitPost" href="index.php?action=post&amp;id=<?= $data['id'] ?>"><strong>lire la suite</strong></a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
