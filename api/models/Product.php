<?php
class Product {
    public static function all() {
        // Exemplo estático — depois pode vir do banco
        return [
            ['id' => 1, 'name' => 'Produto A', 'price' => 100],
            ['id' => 2, 'name' => 'Produto B', 'price' => 150]
        ];
    }
}
