<?php

if (!file_exists(__DIR__ . '/.setup_done')) {
    require_once __DIR__ . '/config/setup.php';
    file_put_contents(__DIR__ . '/.setup_done', 'ok');
}

require_once __DIR__ . '/core/Router.php';

$router = new Router();

// Rotas de produtos
require_once __DIR__ . '/routes/products.php';

// Padrão
$router->get('/api/status', function() {
    echo json_encode(['status' => 'ok', 'timestamp' => date('c')]);
});

$router->run();
