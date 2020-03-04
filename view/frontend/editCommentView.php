<h2>chapitres">Retour à la liste des billets</h2>

<h2>MODIFICATION COMMENTAIRE</h2>
    <p><em>Modification des commentaires.</em></p>

    <form method="post" action="administration/editPost/<?= $post['id'] ?>">

        <label for="title">Titre du chapitre</label><br />
        <input type="text" name="title" value="<?= $post['title'] ?>" /><br /><br />
        
        <label for="content">Contenu du chapitre</label><br />
        <textarea name="content"> <?= $post['content'] ?></textarea><br />

        <input type="submit">
        
  </form>
  
<?php require('template.php'); ?>