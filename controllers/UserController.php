<?php
require_once '../models/User.php';



$userModel = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $userModel->addUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mot_de_passe']);
    }
    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $userModel->deleteUser($_POST['id']);
    }
    if (isset($_POST['action']) && $_POST['action'] === 'update') {
        if(isset($_POST["typeAc"])){
            $userModel->updateUser($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email']);
            header('Location: UserController.php');
        }else{
            $user = $userModel->getUserById($_POST['id']);
        }
    }

    if (isset($_POST['email']) && isset($_POST['mdp'])) {
        if(isset($_POST["typeAc"])){
            $userModel->updateUser($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email']);
        }else{
            $user = $userModel->getUserById($_POST['id']);
        }
    }
   
}

$users = $userModel->getUsers();

include '../views/users.php';
?>