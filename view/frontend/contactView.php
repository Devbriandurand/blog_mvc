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

				<form class="formContact">
					<fieldset id="fieldsetContact">
						<legend>Contact Info</legend>
							<p id="infos">
								<strong>Jean Forteroche Écrivain</strong>
							<br>25 Rue d'Iréki 75010 Paris
						<br>
							<span id="tel">Tel :</span>
	 						01 02 03 04 05</p>
	 					<table class="tableContact">
	 						<tr>
	 							<td>
	 								<label for="">Nom</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="inputContact" type="text" name="nom">
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<label for>Prénom</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="inputContact" type="text" name="Prénom">
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<label for>E-mail</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="inputContact" type="email" name="emailContact">
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<label>Message</label>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<textarea id="inputTextarea" placeholder="Saisissez votre message" rows="10" cols="50"></textarea>
	 							</td>
	 						</tr>
	 						<tr>
	 							<td>
	 								<input id="buttonContact" type="button" name="buttonContact" value="Envoyer">
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