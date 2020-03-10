<?php
namespace Brian\Blog\Model;
require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, SUBSTRING(content,1,500) AS content , DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content , DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }
//Requete permettant d'inserer une ligne dans la table post(chapitre)
    public function addChapter($title, $content)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUE (?,?,NOW())');
        $req->execute(array($title, $content));
    }


//Requete permettant de modifier et d'inserer le chapitre éditer
        public function updateChapter($postId, $chapTitle, $chapContent)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET title = :title, content= :content WHERE id = :id');
        $req->execute(array(':id'=> $postId, ':title' => $chapTitle,':content' => $chapContent));
        return $req;
    }

}




        // $req = $db->prepare('UPDATE posts SET title = "?", content="?" WHERE id = ?');
        // $req->execute(array( $chapTitle, $chapContent, $postId));