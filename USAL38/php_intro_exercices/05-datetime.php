<?php
//EXERCICE 5.A
//----------------------------------------------------------------------------------
function getToday()
{
    echo date('d/m/Y');
}
getToday();
?>
<hr>


<?php
//EXERCICE 5.B
//----------------------------------------------------------------------------------

function getTimeLeft(string $date, $format = 'Y-m-d')
{
    $today = date($format);
    $today2 = new DateTime('now');


    $x = DateTime::createFromFormat($format, $date);
    if ($x->format($format) == $date) {
        $date2 = new DateTime($date);
        $diference = $today2->diff($date2);
        if ($date > $today) {
            if ($diference->y == 0 && $diference->m > 1) {
                echo "Dans " . $diference->m . " mois, " . $diference->d . " jours <br>";
            }
            if ($diference->m == 0) {
                echo "Dans " . $diference->d . " jours <br>";
            }
            if ($diference->y > 0) {
                echo "Dans " . $diference->y . " ans, " . $diference->m . " mois, " . $diference->d . " jours <br>";
            }
        }

        if ($date < $today) {
            echo "Évènement passé <br>";
        }
        if ($date == $today) {
            echo "Aujourd'hui <br>";
        }
    } else {
        echo $date . " est une date invalide ! <br>";
    }
}
getTimeLeft("5020-02-22");
getTimeLeft("2020-01-35");
getTimeLeft("2021-12-01");
getTimeLeft("2025-05-16");
getTimeLeft("2021-05-30");
getTimeLeft("2022-10-01");
?>