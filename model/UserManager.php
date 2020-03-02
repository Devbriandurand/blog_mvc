<?php
namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class UserManager extends Manager
{
		public function verify($username, $mdp)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pseudo, admin FROM users WHERE pseudo = ? AND password = ?');
        $req->execute(array($username, $mdp));
        return $req->fetch();
    }

		public function addmember($pseudo, $password)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO users (pseudo, password) VALUES (?,?)');
        $affectedLines = $req->execute(array($pseudo, $password));

        return $affectedLines;
    }
}

?>