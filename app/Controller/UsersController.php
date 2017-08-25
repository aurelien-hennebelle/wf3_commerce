<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;

class UsersController extends Controller
{
  private $userManager;

  public function __construct()
  {
    $this->userManager = new UserManager;
    $this->userManager->setTable('users');
  }

  public function index()
  {
    // Controlle de l'accès 
    // Si l'utilisateur n'est pas identifié, on le redirige vers signin
    $user = $this->getUser();
  	
   	if(!$user)
   	{
   		$this->redirectToRoute('security_signin');
   	}

    // Controlle de la SESSION
    // Récupération des données de l'utilisateur dans la BDD
    // Affichage de la vue du profil
   	
    $this->show('users/index' , [
      "user"=>$this->userManager->find($user['id'])
      ]);
   
  }
}
