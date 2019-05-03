<?php

require_once('DbConnection.php');

class Product
{
    protected $connection;

    public function __construct() {
        $this->connection = DbConnection::getInstance();
    }

    public function getlist($limit,$offset) {
        $products = $this->connection->runQuery("SELECT * FROM products LIMIT $limit OFFSET $offset");
        $result = [];
        foreach ($products as $product) {
            $result[] = [
                'id' => $product['product_id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'weight' => $product['weight']
            ];
        }
        return $result;
    }
}