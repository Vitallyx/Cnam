<?php
//EXERCICE 8.A
//----------------------------------------------------------------------------------
require '07-inputs.php';
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

function htmlList(string $x, array $y)
{
    echo('<h3>' . $x . '/<h3>');
    if (!$y == []){
        echo('<ul>');
        foreach($y) {
        echo('<li>' . $y . '</li>');
    }
    echo('</ul>');
} else {
    echo('<p>Le tableau est vide</p>');
}

}

htmlList("Liste des personnes", $names);
?><br>