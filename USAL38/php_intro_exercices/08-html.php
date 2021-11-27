<?php
//EXERCICE 8.A
//----------------------------------------------------------------------------------
require '07-inputs.php';
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

function htmlList(string $x, array $y)
{

    /* Essayer avec explode */


    echo ('<h3>' . $x . '</h3>');
    if (!$y == []) {
        echo ('<ul>');
        foreach ($y as $value) {
            echo ('<li>' . strt($y) . '</li>');
        }
        echo ('</ul>');
    } else {
        echo ('<p>Le tableau est vide</p>');
    }
}
htmlList("Liste des personnes", $names);
?><br>