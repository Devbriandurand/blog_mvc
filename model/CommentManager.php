<?php

namespace Brian\Blog\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

        public function commentsGet()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM comments ');

        return $req;
    }
    
    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    // Signaler un commentaire.
    public function reportComment($id) {
        $db = $this->newManager->dbConnect();
        $request = $db->prepare('UPDATE comments SET alert = 1 WHERE id = ?');
        $request->execute(array($id));
    }

    //Editer un commentaire
    public function editComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $request = $db->prepare('UPDATE comments SET comment= ?, comment_date = NOW() WHERE id =?');
        $comment = $request->execute(array($comment, $id));
        //resultat
        return $comment;
    }
    //Supprimer un commentaire
    public function deleteComment($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM comments WHERE id = ?');
        $delete = $req->execute(array($id));
        return $supprime;
    }


}