<!DOCTYPE html>
<html lang="FR">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Jean Forteroche, auteur et écrivain. Vous pourrez découvrir différent extrait sur mon blog, qui seront diffusés en ligne régulièrement.">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- API JS TINY -->
	<script src="https://cdn.tiny.cloud/1/hlwyt6jdbtw8ypzpemnz5gzg2n4aaouadj8b0d94q9ljjyd5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	  <script>
    tinymce.init({
      selector: 'textarea.tinymce',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Jean_forteroche',
    });
  </script>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title><?= $title ?></title>
</head>
	<body class="bodyTemplate">

		<?php require('menuNav.php'); ?>
		<div id="contentTemplate"><?= $content ?></div>
		<?php require('footer.php'); ?>
		
	</body>
</html>