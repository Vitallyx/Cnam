<?php
require 'inc/header.php';
/*
*Je récupère la paramètre page depuis l'url 
*je vérifie si la valeur de $page correspond
*à un nom de fichier dans le répertoire "inc"
*/

$page = $_GET['page'] ?? 'home';

//echo $page;

switch ($page) {
    case 'home':
        require 'inc/home.php';
        break;
    case 'categories':
        require 'inc/categories.php';
        break;
    default:
        require 'inc/error.php';
        break;
}



require 'inc/footer.php';
