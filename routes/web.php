<?php
session_start();

require_once __DIR__ . '/../app/controllers/ReservaController.php';
require_once __DIR__ . '/../app/controllers/LoginController.php';

$reservaController = new ReservaController();
$loginController = new LoginController();

$action = $_GET['action'] ?? 'listar';

switch ($action) {
   
    case 'login':
        $loginController->index(); 
        break;

    case 'autenticar':
        $loginController->logar(); 
        break;

    case 'criar':
        $reservaController->criar();
        break;

    case 'cancelar':
        $reservaController->cancelar();
        break;

    default:
        $reservas = $reservaController->listar();
        require __DIR__ . '/../app/views/listar.php';
        break;
}