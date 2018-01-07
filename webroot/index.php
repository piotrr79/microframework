<?php

/*
 *
 * Microframework index file 
 * 
 */
	  
	  // get controller / action name from request	
	  if (isset($_GET['controller']) && isset($_GET['action'])) {
			$controller = $_GET['controller'];
			$action     = $_GET['action'];
	  // if request empty ('/') redirect to main controller
	  } else {
			$controller = 'MainController';
			$action     = 'home';
	  }
	  
	  require_once('../Controller/'.$controller.'.php');
	  
	  $controller = new $controller;
	  $controller->$action();
	
?>
