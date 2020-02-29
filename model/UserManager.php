<?php
namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class UserManager extends Manager
{
		public function verify($username, $mdp)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, username, admin FROM users WHERE username = ? AND password = ?');
        $req->execute(array($login, $mdp));
        return $req->fetch();
    }

		public function addmember($username, $mdp)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO newusers (username, password) VALUES (?,?)');
        $req->execute(array($username, $mdp));
        return $req->fetch();
    }
}

?>
	