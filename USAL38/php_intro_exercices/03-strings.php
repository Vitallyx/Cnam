<?php
//EXERCICE 3.A
//----------------------------------------------------------------------------------
function  getMC2()
{
    return "Albert Einstein";
}
echo getMC2();
?><br>

<?php
//EXERCICE 3.B
//----------------------------------------------------------------------------------
function  getUserName(string $x, $y)
{
    return $x . $y;
}
echo getUserName('Bryan', 'Muller');
?><br>


<?php
//EXERCICE 3.C
//----------------------------------------------------------------------------------
function getFullName(string $x, $y)
{
    return strtolower($x) . ' ' . strtoupper($y);
}
echo getFullName('BRYAN', 'muller');
?><br>


<?php
//EXERCICE 3.D
//----------------------------------------------------------------------------------
function askUser(string $x, $y)
{

    return "Bonjour " . getFullName($x, $y) . ", connaissez-vous " . getMC2() . " ?";
}
echo askUser('BRYAN', 'muller');
?>