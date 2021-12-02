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
// echo stringLength("mPasskkkke");
// echo stringLength("azer");
?><br>


<?php
//EXERCICE 7.B
//----------------------------------------------------------------------------------
function passwordCheck(string $x)
{
    if (!preg_match('/^(?=.\d)(?=.[A-Za-z])(?=.\W)$/', $x) && stringLength($x) === false) {
        return "false";
    }
    return 'true';
}
echo passwordCheck("r21");
echo passwordCheck("1dzdz234Azer");

?>


<?php
//EXERCICE 7.C
//----------------------------------------------------------------------------------
// $users = [
//     'joe' => 'Azer1234!',
//     'jack' => 'Azer-4321',
//     'admin' => '1234_Azer',
// ];

// //array search

// function userLogin(string $x, string $y, array $z)
// {
//     $users = [
//         'joe' => 'Azer1234!',
//         'jack' => 'Azer-4321',
//         'admin' => '1234_Azer',
//     ];

//     $z = [
//         '$x' => '$y'
//     ];


//     if (is_string($x) || passwordCheck($y)) {
//         if (!array_diff($users, $z)) {
//             return true;
//         }
//         return false;
//     }
//     return false;
// }
// echo userLogin('joe', 'Azer1234hh!', ($users))
?><br>