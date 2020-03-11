<?php
namespace Brian\Blog\Model;
require_once("model/Manager.php");

class CommentManager extends Manager
{
//Selectionne les commentaires
    public function getComment($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

//Selectionne tous les commentaires
        public function commentsGet()
    {   
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM comments ORDER BY signalement DESC ');//Order by afin que les signalement soit en premier
        return $req;
    }

//Post les commentaires
    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date, signalement) VALUES(?, ?, ?,NOW(), "non" )');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
    
//SIGNALER UN COMMENTAIRE
    public function signalManagerComment($CommentId)
    {  
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE comments SET signalement = "oui" WHERE id = ?');
        $comments->execute(array($CommentId));
    }

// DESIGNALER UN COMMENTAIRE
    public function alertComment($CommentId)
    {  
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE comments SET signalement = "non" WHERE id = ?');

        $comments->execute(array($CommentId));

    }

//SUPPRIMER UN COMMENTAIRE
    public function deleteComment($CommentId)
    {  
        $db = $this->dbConnect();
        $comments = $db->prepare('DELETE FROM comments WHERE id = ?');

        $comments->execute(array($CommentId));
    }
    
//SUPPRIMER UN CHAPITRE
    public function deleteChapter($ChapterId)
    {  
        $db = $this->dbConnect();
        $chapters = $db->prepare('DELETE FROM posts WHERE id = ? LIMIT 1');

        $chapters->execute(array($ChapterId));
    }

//SUPPRIMER UN USER
    public function deleteUser($userId)
    {  
        $db = $this->dbConnect();
        $users = $db->prepare('DELETE FROM users WHERE id = ? LIMIT 1');

        $users->execute(array($userId));
    }
}