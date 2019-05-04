<?php

class FrontController
{
    	public function dispatch($url) {
		$parts = explode('/', $url);
		$controllerName = ucfirst($parts[1]);
		$fileName = 'Controllers/' . ucfirst($parts[0]) . '/' . $controllerName . '.php'; 
		
		
		
		// print_r($fileName);
		// $productlist = $parts[1];
			
		
		// $filename = 'Controllers/User/' . $url . '.php';

        // var_dump($parts);
		// echo $productlist.PHP_EOL;
        // echo $filename;
		if (file_exists($fileName)) {
			require_once($fileName);
			$controller = new $controllerName();
			$controller->execute();
		} else {
			echo '<h1>Redirect 404</h1>';
		}
	}
}