<?php

namespace Controller;

use \W\Controller\Controller;
use\Manager\ContactsManager;

class DefaultController extends Controller
{

	public function home()
	{
		$this->show('default/home');
	}

	public function contact()
    {
        $save=true;

        $name=null;
        $email=null;
        $message=null;

        /*$name="nom";
        $email="email";
        $message="message";*/

        
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
			//Récupération des données.
        		$name=$_POST['name'];
        		$email=$_POST['email'];
        		$message=$_POST['message'];

	        //Verification du formulaire


	    	
	        //Enregistrer les données dans la bdd
			if($save)
			{
			//Instancier le manager
			$contacts_manager=new ContactsManager();
			$contacts_manager->insert(["name"=>$name, "email"=>$email,"message"=>$message]);



	        //Rediriger l'utilisateur

			}

		}

        //Afficher la vue
        $this->show('default/contact',["name"=>$name, "email"=>$email, "message"=>$message]);
    }

}