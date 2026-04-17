<?php
// 1. Test PHP
echo "✅ PHP fonctionne (Version " . phpversion() . ")<br>";

// 2. Test Connexion MySQL
$servername = "db"; 
$username = "user";     
$password = "password"; 
$dbname = "company";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification
if ($conn->connect_error) {
    die("❌ Echec de la connexion MySQL : " . $conn->connect_error);
}

echo "✅ Succès ! PHP est connecté à MySQL.";
?>
