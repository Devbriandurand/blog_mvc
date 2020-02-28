<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<title></title>
</head>
<body>
	<?php ob_start(); ?>
<form action="index.php?action=login" method="POST">
	<label>login</label>
	<input type="text" name="login">
	<label>mdp</label>
	<input type="text" name="mdp">
	<input type="submit" name="submit">

</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
</body>
</html>