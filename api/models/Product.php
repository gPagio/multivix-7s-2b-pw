<?php
class Product {
    public $id;
    public $descricao;
    public $preco;

    public function __construct($id = null, $descricao = null, $preco = null) {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }
}