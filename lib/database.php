<?php
require_once __DIR__ . '/../vendor/autoload.php';

use MongoDB\Client;

class DatabaseConnection {
    private Client $client;

    public function __construct() {
        $this->client = new Client("mongodb://localhost:27017");
    }

    public function getCollection(string $collection): MongoDB\Collection {
        return $this->client->testdb->$collection;
    }
}
