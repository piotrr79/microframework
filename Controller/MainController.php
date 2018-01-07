<?php

/*
 *
 * Microframework controller 
 * 
 */
  
require_once('../BussinesLogic/IssPosition.php');

class MainController {
	
	public function home() {
		
		// call class caltulating ISS position
		$calculate = new IssPosition();
		$data = $calculate->calculatePosition();

		require_once('../View/main.php');
	}

}

//$obj = new MainController();
//echo $obj->home();
