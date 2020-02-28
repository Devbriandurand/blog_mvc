<?php
namespace OpenClassrooms\Blog\Model;
require_once("model/Manager.php");

class UserManager extends Manager
{
		public function verify($login, $mdp)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, username, admin FROM users WHERE username = ? AND password = ?');
        $req->execute(array($login, $mdp));
        return $req;
    }
}
?>
	