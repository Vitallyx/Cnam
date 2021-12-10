<?php
//EXERCICE 1.A
//----------------------------------------------------------------------------------
function hello(string $name)
{
    if (empty($name)) {
        return "Hello Nobody";
    } else {
        return "Hello $name";
    }
}
hello("");
