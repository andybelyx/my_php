<?php

class FrontController
{
    	public function dispatch($url) {
		$parts = explode('/', $url);
		$productlist = $parts[1];
		$filename = 'Controllers/User/' . $url . '.php';
     
        // echo $controllerName;
        // echo $filename;
		if (file_exists($filename)) {
			require_once($filename);
			$controller = new $productlist();
			$controller->execute();
		} else {
			echo '<h1>Redirect 404</h1>';
		}
	}
    // public function dispatch() {
    //     require_once('Controllers/User/Another.php');
    //     $show = new Another();
    //     $show->execute();
    // }
}