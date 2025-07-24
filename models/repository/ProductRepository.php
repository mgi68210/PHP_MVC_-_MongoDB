<?php

require_once __DIR__ . '/../Product.php';
require_once __DIR__ . '/../../lib/database.php';

use MongoDB\BSON\ObjectId;

class ProductRepository
{
    private MongoDB\Collection $collection;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->collection = $db->getCollection('produits');
    }

    public function getAll(): array {
        $produits = [];
        $cible = $this->collection->find();

        foreach ($cible as $document) {
            $produit = new Product();
            $produit->setId((string) $document['_id']);
            $produit->setNom($document['nom']);
            $produit->setQuantite((int) $document['quantité']);
            $produit->setPrix((float) $document['prix']);
            $produits[] = $produit;
        }

        return $produits;
    }

    public function getById(string $id): ?Product {
        //Je convertis l'id en l'objectId
        $document = $this->collection->findOne(['_id' => new ObjectId($id)]);

        if (!$document) return null;

        $produit = new Product();
        $produit->setId((string) $document['_id']);
        $produit->setNom($document['nom']);
        $produit->setQuantite((int) $document['quantité']);
        $produit->setPrix((float) $document['prix']);

        return $produit;
    }

    public function create(Product $produit): void {
        $this->collection->insertOne([
            'nom' => $produit->getNom(),
            'quantité' => $produit->getQuantite(),
            'prix' => $produit->getPrix()
        ]);
    }

    public function update(Product $produit): void {
        $this->collection->updateOne(
            ['_id' => new ObjectId($produit->getId())],
            ['$set' => [
                'nom' => $produit->getNom(),
                'quantité' => $produit->getQuantite(),
                'prix' => $produit->getPrix()
            ]]
        );
    }

    public function delete(string $id): void {
        $this->collection->deleteOne([
            '_id' => new ObjectId($id)
        ]);
    }
}
