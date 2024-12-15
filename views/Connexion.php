<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .auth-form {
            background: white;
            padding: 30px;
            border: 2px solid #007bff; 
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 300px;
        }
        .auth-form h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .auth-form input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #007bff; 
            border-radius: 5px;
            transition: border-color 0.3s;
            box-sizing: border-box;
        }
        .auth-form input:focus {
            border-color: #0056b3; 
            outline: none;
        }
        .auth-form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: 2px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s;
            margin-top: 10px;
        }
        .auth-form button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="auth-form">
        <h2>Connexion</h2>
        <form action="UserController.php" method="post">
            <input type="email" name="email" placeholder="Adresse e-mail" required>
            <input type="password" name="mdp" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>