<?php
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');
require_once('controller/frontend/frontend.php');

 function newAdmin($username, $mdp)
{
    $log = new Brian\Blog\Model\UserManager();
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
    $log = new Brian\Blog\Model\UserManager();
    $verify = $log->verify($username, $mdp);
    if ($verify['admin'] == 1)
    {
        $_SESSION['admin'] = 1;
        $_SESSION['pseudo'] = $verify['pseudo'];
        header('Location: index.php?action=administration');
    } 
    elseif (isset($verify['admin']))
    {
        header('Location: index.php?action=profile');
    }  
    else {
        throw new Exception('Login ou mot de passe incorrect !');
    }
}


   function Member($pseudo, $password)
{
    $mbr = new Brian\Blog\Model\UserManager();
    $affectedLines = $mbr->addmember($pseudo, $password);

     if($affectedLines)
    {
        header('Location: index.php');
    }
else
{
throw new Exception('Erreur d\'insertion dans la base de données');
}

}

function afficherAdministration()
{
    $chpt = new Brian\Blog\Model\PostManager();
    $chapters = $chpt->getPosts();

    $cmt = new Brian\Blog\Model\CommentManager();
    $comments = $cmt->getComments();
    
    require('view/backend/administration.php');
} 