<?php
require_once '../models/Category.php';

$categoryModel = new Category();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $categoryModel->addCategory($_POST['libelle']);
    }
    if (isset($_POST['action']) && $_POST['action'] === 'delete' && isset($_POST["id"])) {
        $categoryModel->deleteCategory($_POST["id"]);
    }
    if (isset($_POST['action']) && $_POST['action'] === 'update' && isset($_POST['typeAc'])) {
     $categoryModel->updateCategory($_POST['id'], $_POST['libelle']);
  
    }

    if(isset($_POST["action"]) && isset($_POST["id"])){
        $id = $_POST["id"];
      $categorie = $categoryModel->getCategorieByID($id);
    } 
}


$categories = $categoryModel->getCategories();
include '../views/categories.php';
?>
