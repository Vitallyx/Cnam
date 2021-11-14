<?php
//EXERCICE 2.A
//----------------------------------------------------------------------------------
function hello(string $name)
{
    if (empty($name)) {
        return "Hello Nobody";
    } else {
        return "Hello $name";
    }
}
echo hello("");
