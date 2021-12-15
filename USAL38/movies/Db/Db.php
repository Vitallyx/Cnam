<?php

require 'DbConnect.php';

$connection = new DbConnect();

$toto = new DbConnect();


// Connexion à la base de données

// $host = "localhost"; // Adresse du serveur de base de données
// $port = "3306"; // Port du serveur de base de données
$username = "root"; // Nom d'utilisateur pour la connexion à la base de données
$password = ""; // Mot de passworde pour la connexion à la base de données

// Chaine de connexion = Data Source Name
$dsn = "mysql:host=localhost;port=3306;dbname=db_movies;charset=utf8";

// Établissement de la connexion
$connection = new PDO($dsn, $username, $password);
// var_dump($connection);

// Création d'un requête SQl
$sql = "SELECT * FROM subjects;";

// Exécution de la requête SQL
// On récupère l'état de la requête dans la variable $state
$state = $connection->query($sql);

if ($state === false) {
    echo "Query error";
    exit;
}

// Récupération des résultats de la requête
$result = $state->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $subject) {
    echo '<h2>' . $subject['subject_name'] . '</h2>';
}

// Affichage des résultats
echo "<pre>";
