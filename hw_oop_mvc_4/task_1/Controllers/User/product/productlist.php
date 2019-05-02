<?php
require_once('vendor/autoload.php');
require_once('Models/Product.php');

class ProductList
{
    public function execute() {
        $model = new Product();
        $products = $model->getList();

        $loader = new \Twig\Loader\FilesystemLoader('Views');
	    $twig = new \Twig\Environment($loader);
    // var_dump($products);
        echo $twig->render('index.html', [
            'greeting' => 'Wellcome!',
            'products' => $products
        ]);
    }
}