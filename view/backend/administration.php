<?php ob_start(); ?>
<?php $title = 'titleAdministration' ?>

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
            <th id="adminTh">
                NEW CHAPITRE
            </th>
        </tr>
        <tr>

        </tr>
        <?php foreach ($chapters as $chapter) : ?>
            <tr>
                <td class="tdAdminId" id="tdAdmin"><?= $chapter['id'] ?></td>
                <td class="tdAdminTitle" id="tdAdmin"><?= $chapter['title'] ?></td>
                <td id="tdAdmin"><?= $chapter['content'] ?></td>
                <td id="tdAdmin"><?= $chapter['creation_date_fr'] ?></td>
                <td id="tdAdmin">
                    <a id="modifAdminEdit" href="index.php?action=afficherEditChapter&amp;id=<?= $chapter['id'] ?>">Editer</a>
                    <hr>
                    <a id="modifAdminDelete" href="index.php?action=deleteChapter&amp;id=<?= $chapter['id'] ?>">Supprimer</a>
                </td>
                <td id="tdAdmin"><a href="index.php?action=afficherFormAddChap">Create new chapitre</a></td>
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
                SIGNALEMENT
            </th>
             <th id="adminTh">
                MODIFS
            </th>
        </tr>
        <?php foreach ($comments as $comment) : ?>
            <tr>
                <td class="tdAdminId" id="tdAdmin"><?= $comment['id'] ?></td>
                <td class="tdPostId" id="tdAdmin"><?= $comment['post_id'] ?></td>
                <td id="tdAdmin"><?= htmlspecialchars($comment['author']) ?></td>
                <td id="tdAdmin"><?= htmlspecialchars($comment['comment']) ?></td>
                <td id="tdAdmin"><?= $comment['comment_date'] ?></td>
                <td id="tdAdmin"><?= $comment['signalement'] ?></td>
                <td id="tdAdmin">
                    <?php if ($comment['signalement'] == "oui"):?>
                    <a id="modifAdminDesignaler" href="index.php?action=designalementComment&amp;id=<?= $comment['id'] ?>">Désignaler</a>
                    <hr>
                    <?php endif; ?>
                    
                    <a id="modifAdminDelete" href="index.php?action=deleteComment&amp;id=<?= $comment['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
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
                <td class="tdAdminId" id="tdAdmin"><?= $user['id'] ?></td>
                <td id="tdAdmin"><?= $user['pseudo'] ?></td>
                <td id="tdAdmin"><?= $user['password'] ?></td>
                <td id="tdAdmin"><?= $user['admin'] ?></td>
                <td id="tdAdmin">
                    <a id="modifAdminDelete" href="index.php?action=deleteUser&amp;id=<?= $user['id'] ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>