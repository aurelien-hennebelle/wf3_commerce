<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;

class SecurityController extends Controller
{
  
  private $UserManager;

  public function __construct()
  {
  	$this->UserManager=new UserManager;
  	$this->UserManager->setTable('users');
  } 

  public function signin()
  {
    // If method POST

      // Récupérer les données du formulaire

      // Vérifier les données (dans la bdd - Est ce que l'utilisateur existe ?)

      // Controller les identifiants (login + pwd)

      // Ajoute l'utilisateur à la SESSION

      // Redirige l'utilisateur vers sa page profil

    // Affiche le formulaire d'identification
    $this->show('security/signin', [
      "title" => "Identification"
    ]);
  }

  public function signup()
  {
    
    // if method POST
    if($_SERVER['REQUEST_METHOD']==="POST")
    {
    	$save=true;


      // Récupérer les données du formulaire
    	$username=$_POST['username'];
    	$email=$_POST['email'];
    	$password=$_POST['password'];
    	$repeat_password=$_POST['repeat_password'];

      // Controlle des données du POST
    	//Contrôle de l'adresse email
    	if(empty($email))
    	{
    		$save=false;
    		//Message d'erreur
    	}
    	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    	{
    		$save=false;
    	}
		//Contrôle du mdp
		if($password != $repeat_password)
		{
			$save=false;
		}

    // Test de l'existance de l'utilisateur (dans la bdd)
      // SI L'UTLISATEUR N'EXISTE PAS
    	if(!$this->UserManager->emailExists($email))
    	{
    		/*var_dump($_POST);*/
    		// On enregistre les données dans la BDD
    		$user=$this->UserManager->insert([
    			"username" => $username,
    			"email" => $email,
    			"password" => $password,
    			]);
			/*var_dump($user);*/
    		// Ajoute l'utilisateur à la SESSION
        	$_SESSION['user']=array(
        		'id' => $user['id'] ,
        		'email' => $user['email'] , 
        		'username' => $user['username'] ,  
        		);
        	/*var_dump($_SESSION);*/
        	// On redirige l'utilisateur vers sa page de profil
        	$this->redirectToRoute('profile');
    	}
    	else
    	{
    		 // SI L'UTLISATEUR EXISTE
    			// On affiche un message d'erreur
    	}

     }     

    // Affiche le formulaire d'inscription
    $this->show('security/signup', [
      "title" => "Inscription"
    ]);
  }

  public function logout()
  {
    // On detruit la SESSION

    // On redirige vers la page d'accueil
  }

  public function lostPwd()
  {
    // if method POST

      // Récupération des données du POST

      // Récupération de l'utilisateur dans la BDD (est ce que l'utilisateur existe ?)

          // Generation du Token

          // Envois du mail avec le process de renouvellement du MDP

          // Affiche le message de prise en compte de la demande

    // Affichage du formulaire (adresse email)
    $this->show('security/pwd/lost', [
      "title" => "Mot de passe oublié ?"
    ]);
  }

  public function resetPwd()
  {
    // If method POST

        // Récupération des données du POST

        // Controle du Token

        // Controle des MDP

        // Récupération de l'utilisateur dans la BDD

        // M.A.J. du MDP dans la BDD

        // Redirige l'utilisateur vers la page signIN

    // Affichage du formulaire
    $this->show('security/pwd/reset', [
      "title" => "Changer le mot de passe"
    ]);

  }
}
