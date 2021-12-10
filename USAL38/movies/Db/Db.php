<?php

// Connexion à la base de données

// $host = "localhost"; // Adresse du serveur de base de données
// $port = "3306"; // Port du serveur de base de données
$user = "root"; // Nom d'utilisateur pour la connexion à la base de données
$pass = ""; // Mot de passe pour la connexion à la base de données

// Chaine de connexion = Data Source Name
$dsn = "mysql:host=localhost;port=3306;dbname=db_movies;charset=utf8";

// Établissement de la connexion
$connection = new PDO($dsn, $user, $pass);
// var_dump($connection);

// Création d'un requête SQl
$sql = "SELECT * FROM subjects;";

// Exécution de la requête SQL
// On récupère l'état de la requête dans la variable $state
$state = $connection->query($sql);

// Récupération des résultats de la requête
$result = $state->fetchAll();

// Affichage des résultats
echo "<pre>";
var_dump($result);
