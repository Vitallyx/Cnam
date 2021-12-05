<?php
//EXERCICE 3.A
//----------------------------------------------------------------------------------
function  getMC2()
{
    return "Albert Einstein";
}
echo getMC2();
?>
<hr>

<?php
//EXERCICE 3.B
//----------------------------------------------------------------------------------
function  getUserName(string $x, string $y)
{
    return $x . $y;
}
echo getUserName('Bryan', 'Muller');
?>
<hr>


<?php
//EXERCICE 3.C
//----------------------------------------------------------------------------------
function getFullName(string $x, string $y)
{
    return strtolower($x) . ' ' . strtoupper($y);
}
echo getFullName('BRYAN', 'muller');
?>
<hr>


<?php
//EXERCICE 3.D
//----------------------------------------------------------------------------------
function askUser(string $x, string $y)
{
    return "Bonjour " . getFullName($x, $y) . ", connaissez-vous " . getMC2() . " ?";
}
echo askUser('BRYAN', 'muller');
?>