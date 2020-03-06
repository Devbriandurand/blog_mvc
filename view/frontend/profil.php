<?php ob_start(); ?>

<h1 id='titleProfil'>Mon profil</h1>
    <div class="containerComPost">
    <table id="adminTabHeader">
        <tr>
            <th id="adminTh">
                Auteur
            </th>
            <th id="adminTh">
                Commentaire
            </th>

            <th id="adminTh">
                Date
            </th>
            <th id="adminTh">
                Signalement
            </th>
    </table>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>