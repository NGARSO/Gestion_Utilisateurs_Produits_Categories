<?php
$serveur = "localhost";
$port = "5432";
$user = "postgres";
$pwd = "noush";
$dbname = "Gestion_utilisateurs_produits";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if (!$connexion) {
    die("Erreur de connexion");
} else {
    //echo "Connexion réussie";
}
?>