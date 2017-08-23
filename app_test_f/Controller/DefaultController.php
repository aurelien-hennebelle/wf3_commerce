<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		
		//Tableau de données
		$fakeusers=["Bruce","Franck","Tony","Trillian","Mickey","Max"];

		//$indice=intval(rand(0,(count($fakeusers)-1)));
		  $indice=array_rand($fakeusers,1); //Le 1 à droite force array_round à retourner un seul résultat.

		$this->show('default/home',['nickname' =>$fakeusers[$indice]]);
					/*(	appel url=>[index->valeur])*/
	}

	/**
	 * Page contact
	 */
	public function contact()
    {
        //traiter le formulaire contact ici...

        $this->show('default/contact');
    }

    /**
	 * Page mention légale
	 */
	public function mentions_legales()
    {
        
        $this->show('default/mentions_legales');
    }

    /**
	 * Page articles
	 */
	/*public function articles()
    {
        
        $this->show('default/articles');
    }*/

}