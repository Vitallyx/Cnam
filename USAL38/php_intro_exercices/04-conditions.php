<?php
//EXERCICE 4.A
//----------------------------------------------------------------------------------
function isMajor(int $x)
{
    $majorité = 18;
    if ($x >= $majorité) {
        return true;
    } else {
        return false;
    }
}
isMajor(12);
isMajor(18);
isMajor(42);
?><br>


<?php
//EXERCICE 4.B
//----------------------------------------------------------------------------------
function getRetired(int $age)
{
    $retraite = 65;
    if ($age > $retraite) {
        $difference = ($age - $retraite);
        echo ("Vous êtes à la retraite depuis $difference années. <br>");
    } else if ($age <= 0) {
        echo ("Vous n’êtes pas encore né <br>");
    } else if ($age < $retraite) {
        $difference = ($retraite - $age);
        echo ("Il vous reste $difference années avant la retraite. <br>");
    } else {
        echo ("Vous êtes à la retraite cette année <br>");
    }
}
getRetired(12);
getRetired(60);
getRetired(72);
getRetired(-2);
getRetired(65);
?><br>


<?php
//EXERCICE 4.C
//----------------------------------------------------------------------------------
function getMax(float $x, $y, $z)
{
    if ($x == $y || $x == $z || $z == $y) {
?> <br>
    <?php
        return 0;
    } else {
    ?> <br>
<?php
        return round((max($x, $y, $z)), 3);
    }
}
echo getMax(45.2, 45.2, 12.55);
echo getMax(1415.125, 45.2, 12.55);
echo getMax(151, 411452.26458565, 12.55);
?><br>

<?php
//EXERCICE 4.D
//----------------------------------------------------------------------------------
function capitalCity(string $x)
{
    $y = strtolower($x);
    switch ($y) {
        case "france":
            echo "Paris<br>";
            break;
        case "allemagne":
            echo "Berlin <br>";
            break;
        case "italie":
            echo "Rome <br>";
            break;
        case "maroc":
            echo "Rabat <br>";
            break;
        case "espagne":
            echo "Madrid <br>";
            break;
        case "portugal":
            echo "Lisbonne <br>";
            break;
        case "angleterre":
            echo "Londres <br>";
            break;
        default:
            echo "Capitale inconnue <br>";
    }
}
capitalCity('France');
capitalCity('Angleterre');
capitalCity('Japon');
?><br>