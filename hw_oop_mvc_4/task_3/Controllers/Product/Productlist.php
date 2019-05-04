<?php
require_once('vendor/autoload.php');
require_once('Models/Product.php');

class ProductList extends Product
{
    public function execute() {
        $model = new Product();
        $url = $_GET['url'];
        $parts = explode('/', $url);

        function my_filter_function($input) {
            $data = '';
            for($i=0;$i<strlen($input);$i++) {
	            $random = rand(0,strlen($input));
	            if ($random > strlen($input)/2 ) {
		            $data .= strtoupper($input[$i]);
	            } else {
		            $data .= strtolower($input[$i]);
	            }
            }
        return $data;
        }

        $loader = new \Twig\Loader\FilesystemLoader('Views');
	    $twig = new \Twig\Environment($loader);
        $filter = new \Twig\TwigFilter('my_filter', 'my_filter_function');
        $twig->addFilter($filter);

        $pageNew = $parts[1];
        $page = $parts[3];
        if ($pageNew == 'productlist' && empty($page)) {
            $products = $model->getList(5,0);
             // var_dump($products);
                echo $twig->render('index.html', [
                    'greeting' => 'Wellcome!',
                    'products' => $products
                ]);
                exit;
        }

        
        $totalProducts = $this->connection->runQuery('select count(*) from products')->fetchColumn();


        // print_r($pageNew);
        if ($page == 1) {
            $products = $model->getList(5,0);
        
          
    // var_dump($products);
                echo $twig->render('index.html', [
                    'greeting' => 'Wellcome!',
                    'products' => $products
                ]);
        } elseif($page == 2) {
            $products = $model->getList(5,5);
        
          // var_dump($products);
                echo $twig->render('index.html', [
                    'greeting' => 'Wellcome!',
                    'products' => $products
                ]);
        } elseif($page == 3) {
            $products = $model->getList(5,10);
        
         // var_dump($products);
                echo $twig->render('index.html', [
                    'greeting' => 'Wellcome!',
                    'products' => $products
                ]);
        } elseif($page == 4) {
            $products = $model->getList(5,15);

    // var_dump($products);
                echo $twig->render('index.html', [
                    'greeting' => 'Wellcome!',
                    'products' => $products
                ]);
        } else {
			echo '<h1>Redirect 404</h1>';
        }
    } 
}


