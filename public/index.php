<?php
require_once __DIR__ . '/../controllers/ProductController.php';

$ProduitController = new ProductController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'view':
        $ProduitController->show($id);
        break;
    case 'create':
        $ProduitController->create();
        break;
    case 'index':
        $ProduitController->home();
        break;
    case 'store':
        $ProduitController->store();
        break;
    case 'edit':
        $ProduitController->edit($id);
        break;
    case 'update':
        $ProduitController->update();
        break;
    case 'delete':
        $ProduitController->delete($id);
        break;
    default:
        $taskController->forbidden();
        break;
}