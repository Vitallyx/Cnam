<?php
//EXERCICE 7.A
//----------------------------------------------------------------------------------
function stringLength(string $x)
{
    if (strlen($x) > 9 && !empty($x)) {
        return true;
    }
    return 'false';
}
echo stringLength("motDePasse");
echo stringLength("azer");
?><br>


<?php
//EXERCICE 7.B
//----------------------------------------------------------------------------------
function passwordCheck(string $x)
{
    if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z@#\-_$%^&+=§!\?]$/', $x) && stringLength($x) === true) {
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
    $users = [
        'joe' => 'Azer1234!',
        'jack' => 'Azer-4321',
        'admin' => '1234_Azer',
    ];

    $z = [
        '$x' => '$y'
    ];


    if (is_string($x) || passwordCheck($y)) {
        if (!array_diff($users, $z)) {
            return true;
        }
        return false;
    }
    return false;
}
userLogin('joe', 'Azer1234!', ($users))
?><br>