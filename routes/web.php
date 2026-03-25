<?php


require_once __DIR__ . '/../app/controllers/ReservaController.php';

$controller = new ReservaController();

$action = $_GET['action'] ?? 'listar';

switch ($action) {

    case 'criar':
        $controller->criar();
        break;

    case 'cancelar':
        $controller->cancelar();
        break;

    default:
        $reservas = $controller->listar();
        require __DIR__ . '/../app/views/listar.php';
}
