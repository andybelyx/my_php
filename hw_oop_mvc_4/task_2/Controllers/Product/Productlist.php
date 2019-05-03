<?php
require_once('vendor/autoload.php');
require_once('Models/Product.php');

class ProductList extends Product
{
    public function execute() {
        $model = new Product();
        $url = $_GET['url'];
        $parts = explode('/', $url);

        $pageNew = $parts[1];
        $page = $parts[3];
        if ($pageNew == 'productlist' && empty($page)) {
            $products = $model->getList(5,0);
        
            $loader = new \Twig\Loader\FilesystemLoader('Views');
	        $twig = new \Twig\Environment($loader);
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
        
            $loader = new \Twig\Loader\FilesystemLoader('Views');
	        $twig = new \Twig\Environment($loader);
    // var_dump($products);
                echo $twig->render('index.html', [
                    'greeting' => 'Wellcome!',
                    'products' => $products
                ]);
        } elseif($page == 2) {
            $products = $model->getList(5,5);
        
            $loader = new \Twig\Loader\FilesystemLoader('Views');
	        $twig = new \Twig\Environment($loader);
    // var_dump($products);
                echo $twig->render('index.html', [
                    'greeting' => 'Wellcome!',
                    'products' => $products
                ]);
        } elseif($page == 3) {
            $products = $model->getList(5,10);
        
            $loader = new \Twig\Loader\FilesystemLoader('Views');
	        $twig = new \Twig\Environment($loader);
    // var_dump($products);
                echo $twig->render('index.html', [
                    'greeting' => 'Wellcome!',
                    'products' => $products
                ]);
        } elseif($page == 4) {
            $products = $model->getList(5,15);

            $loader = new \Twig\Loader\FilesystemLoader('Views');
	        $twig = new \Twig\Environment($loader);
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