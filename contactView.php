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

		<section class="containerContact">

			<h1 id="titleContact">CONTACTER MOI</h1>

				<form action="contactView.php" method="_POST"  class="formContact">
					<fieldset id="fieldsetContact">
						<legend id="legendContact" align="center"><strong>Contact Info<strong></legend>
							<p id="infos">
								<strong>Jean Forteroche Écrivain</strong>
							<br>25 Rue d'Iréki 75010 Paris
						<br>
							<span id="tel">Tel :</span>
	 						01 02 03 04 05</p>
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
	 								<textarea id="inputTextarea" placeholder="Saisissez votre message" rows="10" cols="50"required></textarea>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
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