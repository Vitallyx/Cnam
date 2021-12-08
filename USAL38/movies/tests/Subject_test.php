<?php

require '../Models/Subject.php';

$sf = new Subject();

$sf->setSubjectName("Science-Fiction");

echo $sf->getSubjectName();



var_export(($sf));
