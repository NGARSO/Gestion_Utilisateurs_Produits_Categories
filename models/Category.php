<?php
require_once '../config/database.php';

class Category {
    public function addCategory($libelle) {
        global $connexion;
        $stmt = pg_prepare($connexion, "add_category", "INSERT INTO categories (libelle) VALUES ($1)");
        
        if (!$stmt) {
            die("Erreur lors de la préparation de la requête : " . pg_last_error($connexion));
        }

        return pg_execute($connexion, "add_category", [$libelle]);
    }

    public function getCategories() {
        global $connexion;
        $result = pg_query($connexion, "SELECT * FROM categories");

        if (!$result) {
            die("Erreur lors de l'exécution de la requête : " . pg_last_error($connexion));
        }

        return pg_fetch_all($result);
    }

    public function getCategorieByID($id) {
        global $connexion;
        $result = pg_query($connexion, "SELECT * FROM categories WHERE id = $id");

        if (!$result) {
            die("Erreur lors de l'exécution de la requête : " . pg_last_error($connexion));
        }

        return pg_fetch_assoc($result);
    }

    public function updateCategory($id, $libelle) {
        global $connexion;
 
        $stmt = pg_prepare($connexion, "update_category", "UPDATE categories SET libelle = $1 WHERE id = $2");
        $result = pg_execute($connexion, "update_category", array($libelle, (int)$id));
        header('Location: CategoryController.php');
exit();
        return $result;
    }

    public function deleteCategory($id) {
        global $connexion;
        $stmt = pg_prepare($connexion, "delete_category", "DELETE FROM categories WHERE id = $1");
        
        if (!$stmt) {
            die("Erreur lors de la préparation de la requête : " . pg_last_error($connexion));
        }

        return pg_execute($connexion, "delete_category", [$id]);
    }
    function getDeletedCategories() {
        global $connexion;
        $query = "SELECT * FROM categories WHERE deleted = true"; 
        $result = pg_query($connexion, $query);
        return pg_fetch_all($result);
    }
}
?>