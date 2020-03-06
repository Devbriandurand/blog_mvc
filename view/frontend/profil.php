<?php ob_start(); ?>
<h1 id='titleProfil'>MON PROFIL</h1>
<?php 
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)  {
	//Variable error=1 succes
	$error = 1;
	//2moctet = 2000000 d'octets
	if ($_FILES['image']['size'] <= 2000000) {
		$informationsImage = pathinfo($_FILES['image']['name']); //récupère les information sous form de tableau grace a pathinfo()
		$extensionImage = $informationsImage['extension'];
		$extensionArray = array('png', 'jpg', 'jpeg', 'gif');//Format image accepter

		if (in_array($extensionImage, $extensionArray)) {
			$urlImg = 'public/uploads/' . time() .rand(). rand() . '.'.$extensionImage;
		 	move_uploaded_file($_FILES['image']['tmp_name'], $urlImg);
		 		$error = 0;
		}
	}
}
?>
    <div class="containerAvatar">
        <h2 id="titleAvatar">Avatar</h2>
<?php	
		if(isset($error) && $error == 0)
			{
				echo'<div class=containerImgAvatar><img id=imgChoise src="'.$urlImg.'" /></div>';
			} 
?>
		<form class="formAvatar" action="index.php?action=profil" method="POST" enctype="multipart/form-data">
					<table>
						<tr>
							<td>
								<input id="buttonFile" type="file" name="image">
							</td>
						</tr>
						<tr>
							<td>
								<input id="buttonSend" type="submit">
							</td>
						</tr>
					</table>
		</form>
    </div>

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