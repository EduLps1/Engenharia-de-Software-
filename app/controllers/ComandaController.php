<?php
require_once 'app/models/ComandaModel.php';

class ComandaController {
    private $model;

    public function __construct() {
        session_start(); // 🔥 importante
        $this->model = new ComandaModel();
    }

    public function listar() {
        $comandas = $this->model->getAll();
        require 'app/views/comandas/listar.php';
    }

    public function criar($dados) {
        $this->model->insert($dados);
        header("Location: /comandas");
    }
}