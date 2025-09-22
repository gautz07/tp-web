<?php
require_once __DIR__ . "/../config/database.php";

class Commande {
    public static function allByClient($client_id) {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM commandes WHERE client_id = ?");
        $stmt->execute([$client_id]);
        return $stmt->fetchAll();
    }

    public static function add($client_id, $numero) {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO commandes (client_id, numero_command) VALUES (?, ?)");
        return $stmt->execute([$client_id, $numero]);
    }

    public static function update($id, $numero) {
        $db = getDB();
        $stmt = $db->prepare("UPDATE commandes SET numero_command = ? WHERE ID = ?");
        return $stmt->execute([$numero, $id]);
    }

    public static function delete($id) {
        $db = getDB();
        $stmt = $db->prepare("DELETE FROM commandes WHERE ID = ?");
        return $stmt->execute([$id]);
    }
}
