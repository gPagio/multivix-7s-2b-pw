<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController {
    public function index() {
        $products = Product::listAllProducts();
        echo json_encode($products);
    }
}
