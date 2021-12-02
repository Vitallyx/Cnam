<?php
//EXERCICE 8.A
//----------------------------------------------------------------------------------
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

function htmlList(string $x, array $y)
{
    if (empty($y)) {
        echo ("<h3>" . $x . "</h3>" . "<br>" . "<p>" . "Aucun résultat");
    } else {
        sort($y);
        $z = implode("<li>", $y);
        echo ("<h3>" . $x . "</h3>" . "<ul>" . "<li>" . $z);
    }
}
htmlList("Liste des personnes", $names);
?><br>