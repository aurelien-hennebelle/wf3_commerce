<?php
	
	$w_routes = array(
		/*['GET|POST', '/nomDuFichierTemplate/', 'NomClasse#nomMethode', 'Variable du layout'],*/
		/*['//la ou les méthodes HTTP de la requête', '//le masque d'URL à associer(adresse de la page) ', '//le nom du contrôleur#le nom de la méthode à appeler', '//le nom de cette route-ci,*/
		['GET'		, '/'					 , 'Default#home'		        , 'home'],
		['GET|POST'	, '/contact/'   		 , 'Default#contact'			, 'contact'],
		['GET|POST'	, '/mentions_legales/'	 , 'Default#mentions_legales'	, 'mentions_legales'],

		/*['GET|POST', '/articles/', 'Articles#articles', 'articles'],*/
		['GET'		 , '/articles'			   , 'Articles#index'	, 'articles_index'],
		['GET|POST'  , '/article/create'	   , 'Articles#create'	, 'article_create'],
		['GET'		 , '/article/[i:id]'	   , 'Articles#read'	, 'article_read'],
		['GET|PUT'   , '/article/[i:id]/edit'  , 'Articles#edit'	, 'article_edit'],
		['GET|DELETE', '/article/[i:id]/delete', 'Articles#delete'	, 'article_delete'],

		['GET'		 , '/utilisateurs'			   , 'Users#index'	, 'users_index'],
		['GET|POST'  , '/utilisateur/create'	   , 'Users#create'	, 'user_create'],
		['GET'       , '/utilisateur/[i:id]'	   , 'Users#read'	, 'user_read'],
		['GET|PUT'   , '/utilisateur/[i:id]/edit'  , 'Users#edit'	, 'user_edit'],
		['GET|DELETE', '/utilisateur/[i:id]/delete', 'Users#delete' , 'user_delete'],
	);