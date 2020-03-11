<?php ob_start(); ?>
<h1 id='titleProfil'>MON PROFIL</h1>
<?php 
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)  
{
	//Variable error=1 succes
	$error = 1;
	//2moctet = 2000000 d'octets
	if ($_FILES['image']['size'] <= 2000000) 
	{
		$informationsImage = pathinfo($_FILES['image']['name']); //récupère les information sous form de tableau grace a pathinfo()
		$extensionImage = $informationsImage['extension'];
		$extensionArray = array('png', 'jpg', 'jpeg', 'gif');//Format image accepter

		if (in_array($extensionImage, $extensionArray)) 
		{
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
					<table id="tableProfil">
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

    <div class="containerChapPost">
    <table id="adminTabHeader">
        <tr>
            <th id="adminTh">
                Chapitre
            </th>

            <th id="adminTh">
                Extrait
            </th>
            <th id="adminTh">
                Date
            </th>
            <th id="adminTh">
                Info
            </th>
            
        <?php foreach ($chapters as $chapter) : ?>
            <tr>
                <td class="tdAdminTitle" id="tdAdmin"><?= $chapter['title'] ?></td>
                <td id="tdAdmin"><?= $chapter['content'] ?></td>
                <td id="tdAdmin"><?= $chapter['creation_date_fr'] ?></td>
                <td id="tdAdmin">
                    <a id="lireLaSuiteChap" href="index.php">Lire la suite</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>