<?php ob_start(); ?>

    <h1 id="titleAdministration">PAGE ADMINISTRATION</h1>
        <h2 id="titleAdminChaptH2">Chapitres</h2>
    <div class="containerChapAdmin">
    <table id="adminTabHeader">
        <tr>
            <th id="adminTh">
                ID
            </th>
            <th id="adminTh">
                TITRE
            </th>

            <th id="adminTh">
                CONTENU
            </th>
            <th id="adminTh">
                DATE
            </th>
            <th id="adminTh">
                MODIFS
            </th>
        </tr>
        <?php foreach ($chapters as $chapter) : ?>
            <tr>
                <td id="ChapterId"><?= $chapter['id'] ?></td>
                <td id="ChapterTitle"><?= $chapter['title'] ?></td>
                <td id="ChapterContent"><?= $chapter['content'] ?></td>
                <td id="ChapterDate"><?= $chapter['creation_date_fr'] ?></td>
                <td id="ChapterModif">
                    <a href="index.php?action=editChapter">Modifier</a>
                    <hr>
                    <a href="index.php?action=deleteChapter">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>

<h2 id="titleAdminComH2">Commentaires</h2>

<div class="containerComAdmin">
    <table id="adminTabHeader">
        <tr>
            <th id="adminTh">
                ID
            </th>
            <th id="adminTh">
                POST_ID
            </th>
            <th id="adminTh">
                AUTEUR
            </th>
            <th id="adminTh">
                COMMENTAIRE
            </th>
            <th id="adminTh">
                DATE
            </th>
            <th id="adminTh">
                MODIFS
            </tr>

        <?php foreach ($comments as $comment) : ?>
            <tr>
                <td id="ComId"><?= $comment['id'] ?></td>
                <td id="ComTitle"><?= $comment['post_id'] ?></td>
                <td id="ComContent"><?= $comment['author'] ?></td>
                <td id="ComDate"><?= $comment['comment'] ?></td>
                <td id="ComDate"><?= $comment['comment_date_fr'] ?></td>
                <td id="ComModif">
                    <a href="index.php?action=editComment">Modifier</a>
                    <hr>
                    <a href="index.php?action=deleteComment">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>