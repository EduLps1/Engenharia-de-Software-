<?php
class ComandaModel {

    public function __construct() {
        if (!isset($_SESSION['comandas'])) {
            $_SESSION['comandas'] = [];
        }
    }

    public function getAll() {
        return $_SESSION['comandas'];
    }

    public function insert($dados) {
        $_SESSION['comandas'][] = [
            'cliente' => $dados['cliente'],
            'valor' => $dados['valor']
        ];
    }
}