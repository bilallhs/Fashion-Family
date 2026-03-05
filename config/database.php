<?php
// config/database.php

// Paramètres de connexion (WAMP par défaut)
$host = 'localhost';
$dbname = 'fashion_family';
$user = 'root';
$pass = 'root';

try {
    // Création de l'instance PDO (Connexion)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);

    // Configuration des options de PDO pour la sécurité et le débogage
    // ERRMODE_EXCEPTION : Lance une exception en cas d'erreur SQL (indispensable pour le débug)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // DEFAULT_FETCH_MODE : Retourne les données sous forme de tableau associatif par défaut
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // En cas d'erreur critique, on arrête le script et on affiche l'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}