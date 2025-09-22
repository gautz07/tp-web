<?php
require_once __DIR__ . "/../config/database.php";

class Client {
    public static function all() {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM clients");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
