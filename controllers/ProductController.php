<?php
require_once '../models/Product.php';
require_once '../models/Category.php';

$productModel = new Product();
$categoryModel = new Category();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $productModel->addProduct($_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['quantite'], $_POST['id_categorie']);
    }

    if (isset($_POST['action']) && $_POST['action'] === 'delete') {
        $productModel->deleteProduct($_POST['id']);
    }

    if (isset($_POST['action']) && $_POST['action'] === 'update') {
        if(isset($_POST["typeAc"])){
            $productModel->updateProduct($_POST['id'], $_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['quantite'], $_POST['id_categorie']);
       
        }else{
            $produit = $productModel->getProductById($_POST['id']);
       //     var_dump($produit);
            $categories = $categoryModel->getCategories();
        }
    }

}


$products = $productModel->getProducts();
$categories = $categoryModel->getCategories();
include '../views/products.php';
?>