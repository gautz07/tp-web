<?php
require_once "controllers/ClientController.php";
require_once "controllers/CommandeController.php";

$action = $_GET['action'] ?? 'clients';
$id = $_GET['id'] ?? null;

$clientController = new ClientController();
$commandeController = new CommandeController();

switch ($action) {
    case 'clients':
        $clientController->index();
        break;
    case 'commandes':
        $commandeController->index($id);
        break;
    case 'ajout':
        $commandeController->ajout($id);
        break;
    case 'modifier':
        $commandeController->modifier($id);
        break;
    case 'supprimer':
        $commandeController->supprimer($id);
        break;
    default:
        echo "Action inconnue.";
}
