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
    $regex = "(?=.\d)(?=.[A-Za-z])[0-9A-Za-z@#-_$%^&+=§!?]";

    if (!preg_match("/^$regex$/", $x) && stringLength($x) === false) {
        return "false";
    }
    return 'true';
}
echo passwordCheck("r21");
echo passwordCheck("dc521sqcsqzer");

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
    $users = [
        'joe' => 'Azer1234!',
        'jack' => 'Azer-4321',
        'admin' => '1234_Azer',
    ];

    $z = [
        $x => $y
    ];

    if (passwordCheck($y)) {
        if (array_search($z, $users)) {
            return true;
        }
        return false;
    }
    return false;
}
echo userLogin('joe', 'Azer1234!', ($users))
?>