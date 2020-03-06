<?php ob_start(); ?>
<h1 id='titleAdmin'>BIENVENUE DANS L'ADMINISTRATION</h1>
<!-- COMMENTAIRE SIGNALER -->
<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>