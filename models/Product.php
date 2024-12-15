<?php
require_once '../config/database.php';

class Product {
    public function addProduct($nom, $description, $prix, $quantite, $id_categorie) {
        global $connexion;
        $stmt = pg_prepare($connexion, "add_product", "INSERT INTO products (nom, description, prix, quantite, id_categorie) VALUES ($1, $2, $3, $4, $5)");
        return pg_execute($connexion, "add_product", [$nom, $description, $prix, $quantite, $id_categorie]);
    }

    public function getProducts() {
        global $connexion;
        $result = pg_query($connexion, "SELECT p.*, c.libelle AS category_name FROM products p JOIN categories c ON p.id_categorie = c.id");
        return pg_fetch_all($result);
    }


    public function getProductById($id) {
        global $connexion;
        
        $result = pg_query($connexion, 
        "SELECT p.*, c.libelle AS category_name FROM products p 
        JOIN categories c ON p.id_categorie = c.id AND p.id = $id");

        return pg_fetch_assoc($result);
    }

    public function updateProduct($id, $nom, $description, $prix, $quantite, $id_categorie) {
        global $connexion;
        $stmt = pg_prepare($connexion, "update_product", "UPDATE products SET nom = $1, description = $2, prix = $3, quantite = $4, id_categorie = $5 WHERE id = $6");
        pg_execute($connexion, "update_product", [$nom, $description, $prix, $quantite, $id_categorie, $id]);
        header('Location: ProductController.php');
    }

    public function deleteProduct($id) {
        global $connexion;
        $stmt = pg_prepare($connexion, "delete_product", "DELETE FROM products WHERE id = $1");
        return pg_execute($connexion, "delete_product", [$id]);
    }
    function getDeletedProducts() {
        global $connexion;
        $query = "SELECT * FROM products WHERE deleted = true"; 
        $result = pg_query($connexion, $query);
        return pg_fetch_all($result);
    }
}
?>