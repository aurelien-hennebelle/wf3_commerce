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

        $this->show('products/index',["products"=>$tabProducts->findAll()]);
    }

    public function create()
    {
    	   
         $this->show('products/create');

    }

    public function read($id)
    {
        
         $this->show('products/read'); 
         
    }

    public function edit($id)
    {
    	 
         $this->show('products/edit');
          
    }

    public function delete($id)
    {

    	 $this->show('products/delete');

    }

}