

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/script.js"></script>
    <title>Application de Gestion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Gestion Produits</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../controllers/userController.php">Gestion des Utilisateurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../controllers/categoryController.php">Gestion des Catégories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../controllers/productController.php">Gestion des Produits</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>

   <div class="mt-5">
         <h1><center>Bienvenue dans l'application de gestion</center></h1>
   </div>
  <!---  <nav>
        <ul>
            <li><a href="../controllers/userController.php">Gestion des Utilisateurs</a></li>
            <li><a href="../controllers/categoryController.php">Gestion des Catégories</a></li>
            <li><a href="../controllers/productController.php">Gestion des Produits</a></li>
        </ul>
    </nav> --->
</body>
</html>

