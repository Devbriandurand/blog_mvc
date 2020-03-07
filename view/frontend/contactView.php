
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title>Le super blog de Jean Forteroche></title>
</head>
<body>
	<?php ob_start(); ?>
<h1 id="titleContact">CONTACTER MOI</h1>
		<section class="containerContact">
			<form action="index.php?action=contact" method="POST"  class="formContact">
				<fieldset class='fieldsetContact'>
					<legend align='center'><strong>Formulaire de contact</strong></legend>
	 					<table class="tableContact">
	 						<tr>
	 							<td>
	 								<label for="nom">Nom</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="inputContact" type="text" name="nom" placeholder="Saisissez votre nom" required>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<label for="prenom">Prénom</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="inputContact" type="text" name="prenom" placeholder="Saisissez votre prenom" required>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<label for="email">E-mail</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="inputContact" type="email" name="emailContact" placeholder="Saisissez votre e-mail" required>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<label>Message</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<textarea id="inputTextarea" placeholder="Veuillez saisir votre message..." rows="10" cols="50" required></textarea>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td align='center'>
	 								<input id="buttonContact" type="submit" name="buttonContact" value="Envoyer">
	 							</td>
	 						</tr>
						 </table>
				</fieldset>
			</form>
		</section>

<?php $content = ob_get_clean(); ?>
<?php require_once('view/frontend/template.php')  ?>

	</body>
</html>