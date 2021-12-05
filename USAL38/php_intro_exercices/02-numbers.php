<?php
//EXERCICE 2.A
//----------------------------------------------------------------------------------
function getSum(int $x, int $y)
{
    return $x + $y;
}
echo getSum(5, 4);
?>
<hr>


<?php
//EXERCICE 2.B
//----------------------------------------------------------------------------------
function getSub(int $x, int $y)
{
    return $x - $y;
}
echo getSum(5, 4);
?>
<hr>


<?php
//EXERCICE 2.C
//----------------------------------------------------------------------------------
function getMulti(float $x, float $y)
{
    return round(($x * $y), 2);
}
echo getMulti(15220.145, 49.1);
?>
<hr>


<?php
//EXERCICE 2.D
//----------------------------------------------------------------------------------
function getDiv(int $x, int $y)
{
    if ($y == 0 || $x == 0) {
        return 0;
    }
    return round(($x / $y), 2);
}
echo getDiv(15220.145, 49.1);
?>