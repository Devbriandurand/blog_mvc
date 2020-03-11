<?php
session_start();
require ('controller/frontend/frontend.php');
require ('controller/backend/backend.php');

try
{   
    if (isset($_GET['action']))
    {
        if ($_GET['action'] == 'listPosts')
        {
            listPosts();
        }
        elseif ($_GET['action'] == 'post')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                post();
            }
            else
            {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

// VÉRIFICATION ADD COMMENT
        elseif ($_GET['action'] == 'addComment')
        {
            if (isset($_GET['id']) && $_GET['id'] > 0)
            {
                if (!empty($_POST['author']) && !empty($_POST['comment']))
                {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else
                {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else
            {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'contact')
        {       
                afficherContactView(); 
        }

        elseif ($_GET['action'] == 'inscription')
        {
            if (isset($_POST['submitInscription']))
            {
                if (isset($_POST['pseudo']) && $_POST['password'])
                {
                    if (!empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['password2']))
                    {
                        if ($_POST['password'] == $_POST['password2'])
                        {
                            Member($_POST['pseudo'], password_hash($_POST['password'], PASSWORD_DEFAULT));
                            header('Location: index.php?action=connexion');
                        }
                        else
                        {
                            throw new Exception('Les mots de passe ne sont pas identique !');
                        }
                    }
                }
                else
                {
                    throw new Exception('Veuillez saisir tous les champs !');
                }
            }
            else
            {
                afficherRegisterView();
            }
        }

        elseif ($_GET['action'] == 'connexion')
        {
            if (isset($_POST['submitConnexion']))
            {
                if (isset($_POST['username']) && $_POST['mdp'])
                {
                    if (!empty($_POST['username']) && !empty($_POST['mdp']))
                    {
                        login($_POST['username'], $_POST['mdp']);
                    }
                }
                else
                    {
                        throw new Exception('Veuillez saisir tout les champs');
                    }
            }
            else
            {
                afficherLoginView();
            }
        }

//Afficher controller amdinistration
        elseif ($_GET['action'] == 'administration')
        {
            if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1){
                afficherAdministration();
            } else{
                throw new Exception('Vous n\'avez pas accès à cette page');
            }
                
        }

//Afficher la page profil
        elseif ($_GET['action'] == 'profil')
        {
            if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0){
                afficherProfil();
            } else{
                throw new Exception('Vous n\'avez pas accès à cette page');
            }
        }

//Afficher la page edition chapitre
        elseif($_GET['action'] == "afficherEditChapter")
        {       
                afficherPageEditChapter($_GET['id']);
        } 
//On ajoute le chapitre modifier
        elseif($_GET['action'] == "editChapter")
        {
                editChapter($_GET['id'], $_POST['title'], $_POST['content']);
        }

//Afficher la page ajout d'un nouveau chapitre
        elseif($_GET['action'] == "afficherFormAddChap")
        {
                afficherFormAddChap();
        }
//Ajoute un nouveau chapitre
        if($_GET['action'] == "addChapitre"){
                addChapitre($_POST);
        }

//Verification suppression chapitre
        elseif($_GET['action'] == "deleteChapter")
        {
                deletChapter($_GET['id']); 
        }
//Verification suppression commentaire
        elseif($_GET['action'] == "deleteComment")
        {
                deletComment($_GET['id']); 
        }
//Verification suppression user
        elseif($_GET['action'] == "deleteUser")
        {
                deletUser($_GET['id']); 
        }

//Signaler commentaire
        elseif($_GET['action'] == "signalerCom")
        {
                signalComment($_GET['id']); 
        }
        
//Désignaler commentaire
        elseif($_GET['action'] == "designalementComment")
        {
                designalerComment($_GET['id']); 
        }

// DECONNEXION
        elseif ($_GET['action'] == 'deconnexion')
        {
                session_destroy();
                header('Location: index.php?action=connexion');
                session_start();
        }
    }

    else
    {
        listPosts();
    }

}
catch(Exception $e)

{
    echo 'Erreur : ' . $e->getMessage();
}

