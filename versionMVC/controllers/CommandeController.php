<?php
require_once __DIR__ . "/../models/Commande.php";

class CommandeController {
    public function index($client_id) {
        $commandes = Commande::allByClient($client_id);
        include __DIR__ . "/../views/commandes.php";
    }

    public function ajout($client_id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Commande::add($client_id, $_POST['numero']);
            echo "<p>La commande a bien été ajoutée.</p><a href='index.php'>Retour</a>";
        } else {
            include __DIR__ . "/../views/ajout.php";
        }
    }

    public function modifier($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Commande::update($id, $_POST['numero']);
            echo "<p>La commande a bien été modifiée.</p><a href='index.php'>Retour</a>";
        } else {
            include __DIR__ . "/../views/modification.php";
        }
    }

    public function supprimer($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Commande::delete($id);
            echo "<p>La commande a bien été supprimée.</p><a href='index.php'>Retour</a>";
        } else {
            include __DIR__ . "/../views/supprimer.php";
        }
    }
}
