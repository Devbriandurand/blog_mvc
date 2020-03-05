<?php ob_start(); ?>

    <h1 id="titleAdministration">PAGE ADMINISTRATION</h1>
    <!-- ADMINISTRATION CHAPITRES -->
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
                EXTRAITS BILLETS 
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
                <td id="tdAdmin"><?= $chapter['id'] ?></td>
                <td id="tdAdmin"><?= $chapter['title'] ?></td>
                <td id="tdAdmin"><?= $chapter['content'] ?></td>
                <td id="tdAdmin"><?= $chapter['creation_date_fr'] ?></td>
                <td id="tdAdmin">
                    <a href="index.php?action=editChapter">Modifier</a>
                    <hr>
                    <a href="index.php?action=deleteChapter">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>

    <!-- ADMINISTRATION COMMENTAIRES -->
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
                <td id="tdAdmin"><?= $comment['id'] ?></td>
                <td id="tdAdmin"><?= $comment['post_id'] ?></td>
                <td id="tdAdmin"><?= $comment['author'] ?></td>
                <td id="tdAdmin"><?= $comment['comment'] ?></td>
                <td id="tdAdmin"><?= $comment['comment_date'] ?></td>
                <td id="tdAdmin">
                    <a href="index.php?action=editComment">Modifier</a>
                    <hr>
                    <a href="index.php?action=deleteComment">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>

<!-- ADMINISTRATION UTILISATEURS -->
    <h2 id="titleAdminComH22">Commentaires signaler</h2>

<div class="containerComAdmin">
    <table id="adminTabHeader">
        <tr>
            <th id="adminTh">
                ID
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
            </th>

        <!-- <?php foreach ($commentsAlert as $commentAlert) : ?>
            <tr>
                <td id="tdAdmin"><?= $commentAlert['id'] ?></td>
                <td id="tdAdmin"><?= $commentAlert[''] ?></td>
                <td id="tdAdmin"><?= $commentAlert[''] ?></td>
                <td id="tdAdmin"><?= $commentAlert[''] ?></td>
                <td id="tdAdmin">
                    <a href="index.php?action=editComment">Modifier</a>
                    <hr>
                    <a href="index.php?action=deleteComment">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?> -->
    </table>
    </div>
<!-- ADMINISTRATION UTILISATEURS -->
    <h2 id="titleAdminComH2">Utilisateurs</h2>

<div class="containerUserAdmin">
    <table id="adminTabHeader">
        <tr>
            <th id="adminTh">
                ID
            </th>
            <th id="adminTh">
                PSEUDO
            </th>
            <th id="adminTh">
                MOT DE PASSE
            </th>
            <th id="adminTh">
                ADMIN = 1 / USER = 0
            </th>
            <th id="adminTh">
                MODIFS
            </th>

        <?php foreach ($users as $user) : ?>
            <tr>
                <td id="tdAdmin"><?= $user['id'] ?></td>
                <td id="tdAdmin"><?= $user['pseudo'] ?></td>
                <td id="tdAdmin"><?= $user['password'] ?></td>
                <td id="tdAdmin"><?= $user['admin'] ?></td>
                <td id="tdAdmin">
                    <a href="index.php?action=editUser">Modifier</a>
                    <hr>
                    <a href="index.php?action=deleteUser">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>

<?php $contentAdministration = ob_get_clean(); ?>
<?php require('view/backend/template.php'); ?>