<?php

// Inclut le contenu des fichiers
require '../Models/Subject.php';

try {
    $sf = new Subject();
    $drama = new Subject();
    $comedy = new Subject();
    echo $sf->getSubjectName(); // Unknow Category
    echo '<hr>';

    $sf->setSubjectName("Science-Fiction");
    echo $sf->getSubjectName(); // Science Fiction
    echo '<hr>';

    $sf->setSubjectName(("P"));
} // Fin du try
catch (Exception $e) {
    echo $e->getMessage();
}
