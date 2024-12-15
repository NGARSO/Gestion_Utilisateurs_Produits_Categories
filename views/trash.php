<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Corbeille</title>
</head>
<body>

<nav class="navbar navbar-expand-lg" style="background-color:#007bff">
  <div class="container-fluid">
    <a class="navbar-brand  text-light" href="#">Gestion Produits</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active  text-light" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active  text-light" aria-current="page" href="../controllers/userController.php">Gestion des Utilisateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active  text-light" aria-current="page" href="../controllers/categoryController.php">Gestion des Catégories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active  text-light" aria-current="page" href="../controllers/productController.php">Gestion des Produits</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>


<?php
include 'path/to/your/functions.php'; 
ini_set('display_errors', 1);
?>
    <h1>Corbeille</h1>

    <div class="mt-5">
         <h2>Utilisateurs supprimés</h2>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php 
      //  $deletedUsers = getDeletedUsers(); 
        if (!empty($deletedUsers)) {
            foreach ($deletedUsers as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user['id']); ?></td>
                <td><?php echo htmlspecialchars($user['nom']); ?></td>
                <td><?php echo htmlspecialchars($user['prenom']); ?></td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
                <td>
                    <form action="UserController.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
                        <input type="hidden" name="action" value="restore">
                        <button type="submit">Restaurer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; 
        } else {
            echo '<tr><td colspan="5">Aucun utilisateur supprimé.</td></tr>';
        } ?>
    </table>

    <h2>Catégories supprimées</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
            <th>Actions</th>
        </tr>
        <?php 
     //   $deletedCategories = getDeletedCategories(); 
        if (!empty($deletedCategories)) {
            foreach ($deletedCategories as $category): ?>
            <tr>
                <td><?php echo htmlspecialchars($category['id']); ?></td>
                <td><?php echo htmlspecialchars($category['libelle']); ?></td>
                <td>
                    <form action="CategoryController.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($category['id']); ?>">
                        <input type="hidden" name="action" value="restore">
                        <button type="submit">Restaurer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; 
        } else {
            echo '<tr><td colspan="3">Aucune catégorie supprimée.</td></tr>';
        } ?>
    </table>

    <h2>Produits supprimés</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Actions</th>
        </tr>
        <?php 
  //      $deletedProducts = getDeletedProducts();
        if (!empty($deletedProducts)) {
            foreach ($deletedProducts as $product): ?>
            <tr>
                <td><?php echo htmlspecialchars($product['id']); ?></td>
                <td><?php echo htmlspecialchars($product['nom']); ?></td>
                <td><?php echo htmlspecialchars($product['description']); ?></td>
                <td><?php echo htmlspecialchars($product['prix']); ?></td>
                <td><?php echo htmlspecialchars($product['quantite']); ?></td>
                <td>
                    <form action="ProductController.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
                        <input type="hidden" name="action" value="restore">
                        <button type="submit">Restaurer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; 
        } else {
            echo '<tr><td colspan="6">Aucun produit supprimé.</td></tr>';
        } ?>
    </table>
</body>
</html>