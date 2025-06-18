<?php
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../dao/ProductDAO.php';

class ProductController {
    private static $productDAO;

    public function __construct() {
        self::$productDAO = new ProductDAO();
    }

    public function listAllProducts() {
        $products = self::$productDAO->listarTodos();
        header('Content-Type: application/json');
        echo json_encode($products);
    }

    public function getProductById($idProduto) {
        $product = self::$productDAO->buscarPorId($idProduto);
        header('Content-Type: application/json');
        if ($product) {
            echo json_encode($product);
        } else {
            http_response_code(404);
            echo json_encode(['message' => 'Produto não encontrado']);
        }
    }

    public function createProduct() {
        $data = json_decode(file_get_contents("php://input"), true);

        if (isset($data['descricao']) && isset($data['preco'])) {
            $produto = new Product(null, $data['descricao'], $data['preco']);
            $success = self::$productDAO->inserir($produto);

            header('Content-Type: application/json');
            if ($success) {
                http_response_code(201);
                echo json_encode(['message' => 'Produto criado com sucesso']);
            } else {
                http_response_code(500);
                echo json_encode(['message' => 'Erro ao criar produto']);
            }
        } else {
            http_response_code(400);
            echo json_encode(['message' => 'Dados inválidos']);
        }
    }

    public function patchProduct($idProduto) {
        $data = json_decode(file_get_contents("php://input"), true);

        $produtoExistente = self::$productDAO->buscarPorId($idProduto);

        if (!$produtoExistente) {
            http_response_code(404);
            echo json_encode(['message' => 'Produto não encontrado']);
            return;
        }

        if (isset($data['descricao'])) {
            $produtoExistente->descricao = $data['descricao'];
        }
        if (isset($data['preco'])) {
            $produtoExistente->preco = $data['preco'];
        }

        $success = self::$productDAO->atualizar($produtoExistente);

        header('Content-Type: application/json');
        if ($success) {
            echo json_encode(['message' => 'Produto atualizado com sucesso']);
        } else {
            http_response_code(500);
            echo json_encode(['message' => 'Erro ao atualizar produto']);
        }
    }

    public function deleteProduct($idProduto) {
        $success = self::$productDAO->excluir($idProduto);

        header('Content-Type: application/json');
        if ($success) {
            echo json_encode(['message' => 'Produto excluído com sucesso']);
        } else {
            http_response_code(500);
            echo json_encode(['message' => 'Erro ao excluir produto']);
        }
    }
}
?>
