<?php
	
	$w_routes = array(
		['GET'		, '/'					 , 'Default#home'		        , 'home'],
		['GET|POST'	, '/contact/'   		 , 'Default#contact'			, 'contact'],

		['GET'		 , '/products'			   , 'products#index'	, 'products_index'],
		['GET|POST'  , '/product/create'	   , 'products#create'	, 'product_create'],
		['GET'		 , '/product/[i:id]'	   , 'products#read'	, 'product_read'],
		['GET|POST'   , '/product/[i:id]/edit'  , 'products#edit'	, 'product_edit'],
		['GET|POST', '/product/[i:id]/delete', 'products#delete'	, 'product_delete'],		
	);