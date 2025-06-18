<?php
require_once __DIR__ . '/../utils/ConnectionDB.php';

class ProductDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = ConnectionDB::getConnection();
    }

    // Create
    public function inserir(Product $product) {
        $sql = "INSERT INTO produtos (descricao, preco) VALUES (:descricao, :preco)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':descricao', $product->descricao);
        $stmt->bindParam(':preco', $product->preco);
        return $stmt->execute();
    }

    // Read (Buscar por ID)
    public function buscarPorId($idProduto) {
        $sql = "SELECT * FROM produtos WHERE idProduto = :idProduto";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':idProduto', $idProduto);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new Product($row['idProduto'], $row['descricao'], $row['preco']);
        }

        return null;
    }

    // Read (Listar todos)
    public function listarTodos() {
        $sql = "SELECT * FROM produtos";
        $stmt = $this->pdo->query($sql);
        $produtos = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produtos[] = new Product($row['idProduto'], $row['descricao'], $row['preco']);
        }

        return $produtos;
    }

    // Update
    public function atualizar(Product $product) {
        $sql = "UPDATE produtos SET descricao = :descricao, preco = :preco WHERE idProduto = :idProduto";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':descricao', $product->descricao);
        $stmt->bindParam(':preco', $product->preco);
        $stmt->bindParam(':idProduto', $product->id);
        return $stmt->execute();
    }

    // Delete
    public function excluir($idProduto) {
        $sql = "DELETE FROM produtos WHERE idProduto = :idProduto";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':idProduto', $idProduto);
        return $stmt->execute();
    }
}
?>
