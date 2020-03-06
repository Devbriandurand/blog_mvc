
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

        elseif ($_GET['action'] == 'inscription')
        {
            if (isset($_POST['submitInscription']))
            {
                if (isset($_POST['pseudo']) && $_POST['password'])
                {
                    if (!empty($_POST['pseudo']) or !empty($_POST['password']) or !empty($_POST['password2']))
                    {
                        if ($_POST['password'] == $_POST['password2'])
                        {
                            Member($_POST['pseudo'], crypt($_POST['password']));
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
                    if (!empty($_POST['username']) or !empty($_POST['mdp']))
                    {
                        login($_POST['username'], $_POST['mdp']);
                        echo '<p>Bonjour </p>' . $_POST['username'];
                    }
                    else
                    {
                        throw new Exception('Veuillez saisir tous les champs !');
                    }
                }

            }
            else
            {
                afficherLoginView();
            }
        }
        elseif ($_GET['action'] == 'administration')
        {
                afficherAdministration();
        }

        elseif ($_GET['action'] == 'profil')
        {
                afficherProfil();
        }

        // DECONNEXION
        elseif ($_GET['action'] == 'deconnexion')
        {
            if(isset($_SESSION['pseudo']))
            {
                session_destroy();
                afficherLoginView();
            }
            
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

