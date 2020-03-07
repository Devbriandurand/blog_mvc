<?php
// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

//Affiche les elements de listpost
 function listPosts()
{
    $postManager = new Brian\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/listPostsView.php');
}

 function post()
{
    $postManager = new Brian\Blog\Model\PostManager();
    $commentManager = new Brian\Blog\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}
//Ajout d'un commentaire
 function addComment($postId, $author, $comment)
{
    $commentManager = new Brian\Blog\Model\CommentManager();
    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

//Signalement d'un commentaire
function afficherMessageProfil()
{
    $message = new Brian\Blog\Model\UserManager();
    $messages = $message->getOneUser();
}
function alertComment() 
{
    $alertedComment = $this->CommentManager->reportComment($id);  
    $alert = $_POST['alert'];    
    header('Location: ' . 'chapitres'); 
}

function afficherRegisterView(){
    require('view/frontend/registerView.php');
}

function afficherLoginView(){
    require('view/frontend/loginView.php');
}

function afficherProfil()
{
    $chpt = new Brian\Blog\Model\PostManager();
    $chapters = $chpt->getPosts();
    require('view/frontend/profil.php');
}

function afficherContactView()
{
    require('view/frontend/contactView.php');
}
