<?php
//EXERCICE 7.A
//----------------------------------------------------------------------------------
function stringLength(string $x)
{
    if (strlen($x) >= 9) {
        return true;
    }
    return false;
}
echo stringLength("motDePasse");
echo stringLength("azer");
?><br>


<?php
//EXERCICE 7.B
//----------------------------------------------------------------------------------
function passwordCheck(string $x)
{
    if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z@#\-_$%^&+=§!\?]$/', $x)) {
        return true;
    }
    return false;
}
?><br>


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
    if (array_search($x, ($z))) {
        return 'true';
    }
    return false;
}
echo userLogin('joe', 'Azer1234!', ($users))

?><br>