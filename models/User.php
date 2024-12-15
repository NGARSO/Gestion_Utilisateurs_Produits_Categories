<?php
require_once '../config/database.php';

class User {
    public function addUser($nom, $prenom, $email, $mot_de_passe) {
        global $connexion;
        $stmt = pg_prepare($connexion, "add_user", "INSERT INTO users (nom, prenom, email, mot_de_passe) VALUES ($1, $2, $3, $4)");
        return pg_execute($connexion, "add_user", [$nom, $prenom, $email, password_hash($mot_de_passe, PASSWORD_DEFAULT)]);
    }

    public function getUsers() {
        global $connexion;
        $result = pg_query($connexion, "SELECT * FROM users");
        return pg_fetch_all($result);
    }
    public function getUserById($id) {
        global $connexion;
        $result = pg_query($connexion, "SELECT * FROM users WHERE id = $id");
        return pg_fetch_assoc($result);
    }

    public function getUserAuth($email, $mdp) {
        global $connexion;
        $result = pg_query($connexion, "SELECT * FROM users WHERE email = $email AND mot_de_passe = $mdp");
        return pg_fetch_assoc($result);
    }

    public function updateUser($id, $nom, $prenom, $email) {
        global $connexion;
       $stmt = pg_prepare($connexion, "update_user", "UPDATE users SET nom = $1, prenom = $2, email = $3 WHERE id = $4");
       $result = pg_execute($connexion, "update_user", array($nom, $prenom, $email, (int) $id));
       
       header('Location: UserController.php');
       
    }

    public function deleteUser($id) {
        global $connexion;
        $stmt = pg_prepare($connexion, "delete_user", "DELETE FROM users WHERE id = $1");
        return pg_execute($connexion, "delete_user", [$id]);
    }
    function getDeletedUsers() {
        global $connexion; 
        $query = "SELECT * FROM users WHERE deleted = true"; 
        $result = pg_query($connexion, $query);
        return pg_fetch_all($result);
    }
}
?>