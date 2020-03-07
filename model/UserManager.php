<?php
namespace Brian\Blog\Model;
require_once("model/Manager.php");

class UserManager extends Manager
{   //Cette fonction nous permets de prepare une requete afin de selectionné l'id & pseudo sachant que nous n'avons pas la valeur de pseudo ni de password
		public function verify($username, $mdp)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, pseudo, admin FROM users WHERE pseudo = ? AND password = ?');
        $req->execute(array($username, $mdp));
        return $req->fetch();
    }

    //Cette fonction nous permets de prepare puis d'inserer un utilisateur (pseudo,password)
		public function addmember($pseudo, $password)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO users (pseudo, password) VALUES (?,?)');
        $affectedLines = $req->execute(array($pseudo, $password));

        return $affectedLines;
    }

    //Cette fonction nous permets de selectionné toute la table USERS
    public function getUsers()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM users ');

        return $req;
    }

    //Cette fonction nous permets de selectionné un utilisateur precis
    public function getOneUser()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT pseudo FROM users ');

        return $req;
    }
}

?>