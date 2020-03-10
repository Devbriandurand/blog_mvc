<?php
//CHARGEMENT DES CLASS
require_once ('model/PostManager.php');
require_once ('model/CommentManager.php');
require_once ('model/UserManager.php');
require_once ('controller/frontend/frontend.php');

//VERIFIE PUIS INSCRIT UN UTILISATEUR
    function newAdmin($username, $mdp)
    {
        $log = new Brian\Blog\Model\UserManager();
        $verify = $log->verify($login, $mdp);
        if (isset($verify['username']))
        {
            header('Location: index.php?action=administration');
        }
        else
        {
            throw new Exception('Login ou mot de passe incorrect !');
        }
    }

//VERIFICATION DE CONNEXION ADMIN/USER
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
        elseif ($verify['admin'] == 0)
        {
            $_SESSION['admin'] = 0;
            $_SESSION['pseudo'] = $verify['pseudo'];
            header('Location: index.php?action=profil');
        }
        else
        {
            throw new Exception('Login ou mot de passe incorrect !');
        }
    }

//AJOUT UN NOUVEL UTILISATEUR (PSEUDO&PASSWORD)
    function Member($pseudo, $password)
    {
        $mbr = new Brian\Blog\Model\UserManager();
        $affectedLines = $mbr->addmember($pseudo, $password);

        if ($affectedLines)
        {
            header('Location: index.php');
        }
        else
        {
            throw new Exception('Erreur d\'insertion dans la base de données');
        }

    }

//AFFICHE LA PAGE ADMINISTRATION 
    function afficherAdministration()
    {
        $chpt = new Brian\Blog\Model\PostManager();
        $chapters = $chpt->getPosts();

        $com = new Brian\Blog\Model\CommentManager();
        $comments = $com->commentsGet();

        $usr = new Brian\Blog\Model\UserManager();
        $users = $usr->getUsers();
        require('view/backend/administration.php');
    }

//SUPRESSION CHAPITRE
    function deletChapter($chapterId)
    {
        $commentManager = new Brian\Blog\Model\CommentManager();
        $commentManager->deleteChapter($chapterId);

        header('Location: index.php?action=administration');
    }

//SUPRESSION COMMENTAIRE
    function deletComment($commentId)
    {
        $commentManager = new Brian\Blog\Model\CommentManager();
        $commentManager->deleteComment($commentId);

        header('Location: index.php?action=administration');
    }
//SUPRESSION USER
    function deletUser($userId)
    {
        $commentManager = new Brian\Blog\Model\CommentManager();
        $commentManager->deleteUser($userId);

        header('Location: index.php?action=administration');
    }
//DÉSIGNALEMENT D'UN COMMENTAIRE
    function designalerComment($commentId)
    {
        $commentManager = new Brian\Blog\Model\CommentManager();
        $commentManager->alertComment($commentId);

        header('Location: index.php?action=administration');
    }

//AJOUT D'UN CHAPITRE
    function addChapitre($arrayChap)
    {
        $postManager = new Brian\Blog\Model\PostManager();
        $affectedLines = $postManager->addChapter($arrayChap['title'],$arrayChap['content'] );
        if ($affectedLines === false) 
        {
            throw new Exception('Impossible d\'ajouter le chapitre !');
        }
        else {
            header('Location: index.php?action=administration');
        }
    }



//EDIT CHAPITRE
    function editChapter($postId, $chapTitle, $chapContent)
    {
        $postManager = new Brian\Blog\Model\PostManager();
        $post = $postManager->updateChapter($postId, $chapTitle, $chapContent);

        header('Location: index.php?action=administration');
    }










//AFFICHE LA PAGE ADD CHAPITRE
    function afficherFormAddChap()
    {
        require ('view/backend/addChapterView.php');
    }

//AFFICHE LA PAGE EDIT CHAPITRE
function afficherPageEditChapter($postId)
{
    $chapterManager = new Brian\Blog\Model\PostManager();
    $chapter = $chapterManager->getPost($postId);

    require ('view/backend/editChapterView.php');
}
