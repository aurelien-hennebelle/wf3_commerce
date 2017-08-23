<?php

namespace Controller;

use \W\Controller\Controller; //Appel à la classe controller de W
use \Manager\ArticlesManager;

class ArticlesController extends Controller //extends \W\Controller\Controller
{

    /**
	 * Page articles
	 */
	public function index()
    {  
        
       /* $tabArticles=[
         "articles" => [
        [1,"texte un"],
        [2,"texte deux"],
        [3,"texte trois"],
         ]   
        ];*/

        //Instance du Manager d'articles
        $tabArticles=new ArticlesManager();

        $this->show('articles/index',["articles"=>$tabArticles->findAll()]);
    }

    public function create()
    {
    	   

           $title=null;
           $content=null;
         /*var_dump($_SERVER['REQUEST_METHOD']);*/
         if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $save=true;

            //Récupération des données de POST
            $title=$_POST['title'];
            $content=$_POST['content'];

            //Contrôle et formatage des données


            //Enregistre dans la BDD
            if($save)
            {
                //Instance du Manager - Récupération de l'id enregistré
                $articles=new ArticlesManager();
                $article=$articles->insert(["title"=>$title, "content"=>$content]);
                $articleID=$article['id'];

                //Redirige sur la page de l'article
            
                $this->redirectToRoute('article_read', ['id' => $articleID]);
            }
   
        }

         $this->show('articles/create',["title"=>$title,"content"=>$content]);


    }

    public function read($id)
    {
         $articles_read=new ArticlesManager();
         $article_read=$articles_read->find($id);
        /*var_dump($article_read);*/
         $this->show('articles/read',["id"=>$id, "title"=>$article_read['title'],"content"=>$article_read['content']]); 
         
    }

    public function edit($id)
    {
    	 $articles_edit=new ArticlesManager();
         $article_edit=$articles_edit->find($id);

         $title='titre'/*$articles_edit['title']*/;
         $content='contenu'/*$articles_edit['content']*/;
         /*var_dump($_SERVER['REQUEST_METHOD']);*/
         if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $save=true;

            //Récupération des données de POST
            $title=$_POST['title'];
            $content=$_POST['content'];

            //Contrôle et formatage des données


            //Enregistre dans la BDD
            if($save)
            {
                //Instance du Manager - Récupération de l'id enregistré
                $articles=new ArticlesManager();
                $article=$articles->insert(["title"=>$title, "content"=>$content]);
                $articleID=$article['id'];

                //Redirige sur la page de l'article
            
                $this->redirectToRoute('article_read', ['id' => $articleID]);
            }
   
        }

         $this->show('articles/edit',["id"=>$id,"title"=>$title,"content"=>$content]);
          //$this->show('default/demo', ['username' => 'will']);
    }

    public function delete($id)
    {
    	 $this->show('articles/delete');
          //$this->show('default/demo', ['username' => 'will']);
    }

}