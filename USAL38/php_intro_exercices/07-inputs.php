<?php
//EXERCICE 7.A
//----------------------------------------------------------------------------------
function stringLength(string $x)
{
    if (strlen($x) <= 9) {
        return false;
    }
    return true;
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
    $numbers = preg_match('@[\d]{1,}@', $x);
    $specialChars = preg_match('@[\W]{1,}@', $x);
    if ($majChars && $minChars && $numbers && $specialChars && stringLength($x) === true) {
        return true;
    }
    return false;
}
echo passwordCheck("sdzaDer-4321");
echo passwordCheck("123sdz]Azer");
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
    if (passwordCheck($y)) {
        if (array_search($y, $z) == $x) {
            return "true";
        }
        return "false";
    }
    return "false";
}



echo userLogin('joe', 'Azer1234!', $users);
echo userLogin('jack', 'd5DDZADA@SSSs', $users);
echo userLogin('jack', 'd5DDZADA@SSSs', $users);

?>