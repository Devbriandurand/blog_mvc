<!DOCTYPE html>
<html lang="FR">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Jean Forteroche, auteur et écrivain. Vous pourrez découvrir différent extrait sur mon blog, qui seront diffusés en ligne régulièrement.">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title><?= $title ?></title>
</head>
	<body>
		<?php require('view/frontend/menuNav.php'); ?>
		<?= $content ?>
		<?php require('view/frontend/footer.php'); ?>
	</body>
</html>