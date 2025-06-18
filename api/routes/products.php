<?php
$router->get('/api/products', function() {
    require_once __DIR__ . '/../controllers/ProductController.php';
    $controller = new ProductController();
    $controller->listAllProducts();
});

$router->get('/api/products/{idProduto}', function($idProduto) {
    require_once __DIR__ . '/../controllers/ProductController.php';
    $controller = new ProductController();
    $controller->getProductById($idProduto);
});

$router->post('/api/products', function() {
    require_once __DIR__ . '/../controllers/ProductController.php';
    $controller = new ProductController();
    $controller->createProduct();
});

$router->patch('/api/products/{idProduto}', function($idProduto) {
    require_once __DIR__ . '/../controllers/ProductController.php';
    $controller = new ProductController();
    $controller->patchProduct($idProduto);
});


$router->delete('/api/products/{idProduto}', function($idProduto) {
    require_once __DIR__ . '/../controllers/ProductController.php';
    $controller = new ProductController();
    $controller->deleteProduct($idProduto);
});
