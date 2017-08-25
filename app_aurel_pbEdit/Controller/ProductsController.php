<?php

namespace Controller;

use \W\Controller\Controller; //Appel à la classe controller de W
use \Manager\ProductsManager;

class ProductsController extends Controller //extends \W\Controller\Controller
{

	
    public function index()
    {  
        //Instance du Manager de produits
        $tabProducts=new ProductsManager();
        /**$id=$tabProducts['id'];*/
        var_dump($tabProducts);
        $this->show('products/index',["products"=>$tabProducts->findAll()/*,"id"=>$id*/]);
    }

    public function create()
    {
    	 
         $save=true;
       
        $name=null;
        $description=null;
        $image=null;
        $price=null;
  
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            //Récupération des données.
                $name=$_POST['name'];
                $description=$_POST['description'];
                $image=$_POST['image'];
                $price=$_POST['price'];

            //Verification du formulaire


            
            //Enregistrer les données dans la bdd
            if($save)
            {
            //Instancier le manager
            $insertProducts=new ProductsManager();
            
             $insertProduct=$insertProducts->insert(["name"=>$name, "description"=>$description, "image"=>$image, "price"=>$price]);
             $insertProductID=$insertProduct['id'];
             /*var_dump($insertProductID);*/

            //Redirige sur la page de l'article
            
            $this->redirectToRoute('product_read', ['id' => $insertProductID]);

            }

        }

        //Afficher la vue
        
         $this->show('products/create',["name"=>$name, "description"=>$description, "image"=>$image, "price"=>$price]);

    }

    public function read($id)
    {
         $products_read=new ProductsManager();
         $product_read=$products_read->find($id);
        /*var_dump($article_read);*/
        
         $this->show('products/read',["id"=>$id, "name"=>$product_read['name'], "description"=>$product_read['description'], "image"=>$product_read['image'], "price"=>$product_read['price']]); 
         
    }

    public function edit($id)
    {
    	 $products_get=new ProductsManager();
         $products_edit=new ProductsManager();
         $product_get=$products_get->find($id);
         $product_edit=$products_edit->find($id);
         $save=true;

        $name=$product_get['name'];
        $description=$product_get['description'];
        $image=$product_get['image'];
        $price=$product_get['price'];
        
         if($_SERVER['REQUEST_METHOD']=="POST")
        {
           
            //Récupération des données du POST.
                /*$name=$_POST['name'];
                $description=$_POST['description'];
                $image=$_POST['image'];
                $price=$_POST['price'];*/

            //Contrôle et formatage des données


            //Enregistre dans la BDD
            if($save)
            {

                //Instance du Manager - Récupération de l'id enregistré
                                

                //Redirige sur la page de l'article
                            
                /*$this->redirectToRoute('article_read', ['id' => $articleID]);*/

              
            }
           /*$this->show('products/edit',["id"=>$id]);*/      
        $this->show('products/edit',["id"=>$id, "name"=>$name, "description"=>$description, "image"=>$image, "price"=> $price]);
        /*$this->show('articles/edit',["id"=>$id, "title"=>$title,"content"=>$content]);*/ 
       }                 
    }

    public function delete($id)
    {
         $products_delete=new ProductsManager();
         $products_get=new ProductsManager();
         $product_get=$products_get->find($id);
         $id=$product_get['id'];
         $name=$product_get['name'];
         var_dump($id);
         
         $delete_choice=null;
         $message='';

         if($_SERVER['REQUEST_METHOD']=="POST")
        {
              
        $delete_choice=$_POST['delete_choice'];
        var_dump($_SERVER['REQUEST_METHOD']);
        var_dump($delete_choice);

            if($delete_choice=="oui")
            {
                if($products_delete->delete($id))
                     {
                        $message='Produit supprimé avec succès'; 
                     }
                else
                     {
                        $message='Echec de la suppression du produit'; 
                     }

               $this->show('products/delete',["message"=>$message, "name"=>$name]);  
            }
            else
            {
                $this->redirectToRoute('products_index');
            }       
        }

      $this->show('products/delete',["message"=>$message, "name"=>$name]);  
     
    }

}