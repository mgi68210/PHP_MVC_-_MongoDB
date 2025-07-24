<?php
require_once __DIR__ . '/vendor/autoload.php'; 

use MongoDB\BSON\ObjectId;

$id = new ObjectId();
echo "ID généré : " . $id;
