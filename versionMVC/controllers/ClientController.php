<?php
require_once __DIR__ . "/../models/Client.php";

class ClientController {
    public function index() {
        $clients = Client::all();
        include __DIR__ . "/../views/clients.php";
    }
}