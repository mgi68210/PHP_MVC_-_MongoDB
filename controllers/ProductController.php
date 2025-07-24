<?php

require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/repository/ProductRepository.php';

class ProductController 
{
    private ProductRepository $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository ();
    }

    public function home(){

        $produits= $this->productRepository->getAll();

        require_once __DIR__.'/../views/home.php';
    }

    public function show(string $id){
        
        $produit = $this->productRepository->getById($id);
        
        require_once __DIR__.'/../views/view-produit.php';

    }

    public function create(){
     
        require_once __DIR__.'/../views/create-produit.php';

    }

    public function store(){

          $produit = new Product();
            $produit->setNom($_POST['nom']);
            $produit->setQuantite((int) $_POST['quantité']);
            $produit->setPrix((float) $_POST['prix']);
        
            $this->productRepository->create($produit);
            
            header('Location: ?');
    }

    public function edit(string $id){
     
        $produit = $this->productRepository->getById($id);
        require_once __DIR__ . '/../views/edit.php';
    }

    public function update(){

         $produit = new Product();
            $produit->setId((string)$_POST['id']);
            $produit->setNom($_POST['nom']);
            $produit->setQuantite((int) $_POST['quantité']);
            $produit->setPrix((float) $_POST['prix']);
        
            $this->productRepository->update($produit);

            header('Location: ?');
    }

         public function delete(string $id)
    {
        $this->productRepository->delete($id);
        
        header('Location: ?');
    
}
   public function forbidden()
    {
        require_once __DIR__ . '/../views/404.php';
        http_response_code(404);
    }
} 