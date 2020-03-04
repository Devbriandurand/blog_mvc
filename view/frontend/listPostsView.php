<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>Le blog de Jean Forteroche</title>
</head>
<body>
<?php $title = 'Jean Forteroche'; ?>

<?php ob_start(); ?>
<h1 id="titleListPostsView">MES BILLETS !</h1>
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
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br /><br /> <br /><br />
            <em><a id="linkSuitPost" href="index.php?action=post&amp;id=<?= $data['id'] ?>">lire la suite</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

</body>
</html>