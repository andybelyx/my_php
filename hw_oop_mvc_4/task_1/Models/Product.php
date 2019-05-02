<?php

require_once('DbConnection.php');

class Product
{
    protected $connection;

    public function __construct() {
        $this->connection = DbConnection::getInstance();
    }

    public function getlist() {
        $products = $this->connection->runQuery('SELECT * FROM products');
        $result = [];
        foreach ($products as $product) {
            $result[] = [
                'name' => $product['name'],
                'price' => $product['price'],
                'weight' => $product['weight']
            ];
        }
        return $result;
    }
}