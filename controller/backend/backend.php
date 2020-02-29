<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

 function newAdmin($username, $mdp)
{
    $log = new \OpenClassrooms\Blog\Model\UserManager();
    $verify = $log->verify($login, $mdp); 
    if (isset($verify['username'])) {
        header('Location: index.php?action=administration');
    } 
    else {
         throw new Exception('Login ou mot de passe incorrect !');
    }

}
 function login($username, $mdp)
{
    $log = new \OpenClassrooms\Blog\Model\UserManager();
    $verify = $log->verify($login, $mdp); 
    if (isset($verify['id'])) {
        header('Location: index.php?action=administration');
    } 
    else {
         throw new Exception('Login ou mot de passe incorrect !');
    }

}


