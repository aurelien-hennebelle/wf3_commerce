<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		//CONTACTS
		['GET|POST', '/contact', 'Default#contact', 'contact'],

		//PRODUCTS
		['GET', '/products/', 'Products#index', 'products_index'],
		['GET|POST', '/product/create', 'Products#create', 'product_create'],
		['GET', '/product/[i:id]', 'Products#read', 'product_read'],
		['GET|POST', '/product/[i:id]/update', 'Products#update', 'product_update'],
		['GET|POST', '/product/[i:id]/delete', 'Products#delete', 'product_delete'],

		//USERS
		['GET', '/profile', 'Users#index', 'profile'],

		//SECURITY
		['GET|POST', '/signin', 'Security#signin', 'security_signin'],
		['GET|POST', '/signup', 'Security#signup', 'security_signup'],
		['GET|POST', '/logout', 'Security#logout', 'security_logout'],
		['GET|POST', '/lost-password', 'Security#lostPwd', 'security_lost_pwd'],
		['GET|POST', '/reset-password', 'Security#resetPwd', 'security_reset_pwd'],

	);