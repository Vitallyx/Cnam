<?php
//EXERCICE 7.A
//----------------------------------------------------------------------------------
function stringLength(string $x)
{
    if (strlen($x) > 8) {
        return true;
    }
    return false;
}
echo stringLength("mPasskkkke");
echo stringLength("azer");
?>
<hr>


<?php
//EXERCICE 7.B
//----------------------------------------------------------------------------------
function passwordCheck(string $x)
{
    $majChars = preg_match('@[A-Z]{1,}@', $x);
    $minChars = preg_match('@[a-z]{1,}@', $x);
    $numbers = preg_match('@[0-9]{1,}@', $x);
    $specialChars = preg_match('@[\W]{1,}@', $x);
    if ($majChars && $minChars && $numbers && $specialChars && stringLength($x) === true) {
        return true;
    }
    return false;
}
echo passwordCheck("Azer1234!");
echo passwordCheck("Azer-4321");
?>
<hr>


<?php
//EXERCICE 7.C
//----------------------------------------------------------------------------------
$users = [
    'joe' => 'Azer1234!',
    'jack' => 'Azer-4321',
    'admin' => '1234_Azer',
];

function userLogin(string $x, string $y, array $z)
{
    if (array_search($y, $z) == $x && passwordCheck($y) === true) {
        return true;
    }
    return false;
}
echo userLogin('joe', 'Azers1234!', $users);
echo userLogin('jack', 'sszer1234!', $users);
echo userLogin('jack', '1234_Azer', $users);

?>