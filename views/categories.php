<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion des Catégories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-container {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #007bff; 
        }

        input[type="text"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #007bff; 
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #0056b3; 
            outline: none; 
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #007bff; 
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #d9edf7; 
        }

        .action-buttons {
            display: flex;
            gap: 10px; 
        }

        .info-table {
            margin-top: 40px; 
            border: 2px solid #007bff; 
        }

        .info-table th {
            background-color: #007bff; 
            color: #fff;
        }

        .info-table td {
            border-bottom: 1px solid #007bff; 
        }

        .info-table tr:hover {
            background-color: #d4edda; 
        }
    </style>
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

   <div class="mt-5">
         <h1>Gestion des Catégories</h1>
   </div>


    <div class="form-container">
        <form action="CategoryController.php" method="POST">

            <input type="text" name="libelle" id="libelle" placeholder="Nom de la catégorie" value="<?php if(isset($_POST["id"]) && $_POST["action"]==='update'){ echo $categorie['libelle']; }?>" required>
            <?php if(isset($_POST["id"] ) && $_POST["action"]==='update'){ ?>

                <input type="number" name="id" id="" value="<?php echo $categorie['id']; ?>" hidden>
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="typeAc" value="update">

            <?php }else {?>

               <input type="hidden" name="action" value="add">

            <?php }?>

            <button type="button" id="btnCat" onclick="verifAll()"> <?php if(isset($_POST["action"])){ echo 'Modifier'; }else{ echo 'Ajouter';} ?></button>
        </form>
    </div>

    <div class="m-3">
         <form action="CategoryController.php" method="POST" style="display:inline;">
            <button type="submit" class="btn btn-primary w-25">Nouvelle</button>
        </form>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($categories as $category): ?>
        <tr>
            <td><?php echo $category['id']; ?></td>
            <td><?php echo $category['libelle']; ?></td>
            <td>
                <div class="action-buttons">
                    <form action="CategoryController.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                        <input type="hidden" name="action" value="delete">
                        <button type="submit" class="supprimer">Supprimer</button>
                    </form>
         
                    <form action="CategoryController.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                        <input type="hidden" name="action" value="update">
                        <button type="submit">Modifier</button>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script src="../assets/css/js/categorie.js"></script>
</body>
</html>