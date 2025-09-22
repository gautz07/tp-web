<?php
function getDB() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=tpclients", "root", "");
        return $db;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
