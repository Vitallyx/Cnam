<?php
//EXERCICE 5.A
//----------------------------------------------------------------------------------
function getToday()
{
    echo date('d/m/Y');
}
getToday();
?><br>


<?php
//EXERCICE 5.B
//----------------------------------------------------------------------------------
/*function getTimeLeft($date)
{
    $x = explode("-", $date);
    $y = date('Y/m/d');

    if (checkdate($x[0], $x[1], $x[2])) {
        if ($date > $y) {
            $difference = $date->diff($y);
            echo ("Dans" . $difference . " jours.");
        } else if ($date = $y) {
            echo ("Aujourd'hui");
        } else {
            echo ("Date invalide");
        }
    }
}
getTimeLeft("2019-09-29");
getTimeLeft("2020-01-30");
getTimeLeft("2021-11-14");
getTimeLeft("2020-05-16");
getTimeLeft("2021-05-30");
getTimeLeft("2022-10-17");

La fonction doit vérifier si la date fournie est valide (bon format, date cohérente).
Si la date est ultérieure à la date du jour, la fonction retourne la différence en années/mois/jours.
Si la date est égale à la date du jour, la fonction retourne « Aujourd'hui ».
Si la date est antérieur à la date du jour, la fonction retourne « Évènement passé ».

?><br>*/