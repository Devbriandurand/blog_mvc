<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

 function login($login, $mdp)
{
    $log = new \OpenClassrooms\Blog\Model\UserManager();
    $verify = $log->verify($login, $mdp); 
    if ($verify) {
        header('Location index.php?action=administration');
    } else {

         throw new Exception('Login ou mot de passe incorrect !');
    }

}


