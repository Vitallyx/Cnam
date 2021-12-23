<?php
require './Car.php';
$mustang = new Car(1, "Ford Mustang");

//je crée un nouvel objet stocké dans une variable à partir de la classe Car
//var_export($mustang);

$clio = new Car(2, "Renault Clio");
echo '<hr>';

//var_export($clio);

echo "<p>";
echo $mustang->getName();
echo "</p>";
