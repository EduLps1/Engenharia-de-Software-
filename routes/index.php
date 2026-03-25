<?php
require_once 'app/controllers/ComandaController.php';

$controller = new ComandaController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller->listar();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->criar($_POST);
}