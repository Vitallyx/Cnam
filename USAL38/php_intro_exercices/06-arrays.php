<?php
//EXERCICE 6.A
//----------------------------------------------------------------------------------
$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

function firstItem(array $name)
{
    if (empty($name)) {
        return null;
    }
    return ($name[0]);
}
echo firstItem($names);
?>
<hr>


<?php
//EXERCICE 6.B
//----------------------------------------------------------------------------------
function lastItem(array $name)
{
    if (empty($name)) {
        return null;
    }
    return end($name);
}
echo lastItem($names);
?>
<hr>


<?php
//EXERCICE 6.C
//----------------------------------------------------------------------------------
function sortItems(array $name)
{
    if (empty($name)) {
        return [];
    } else
        return rsort($name);
}
var_dump(sortItems($names));
?>
<hr>


<?php
//EXERCICE 6.D
//----------------------------------------------------------------------------------
function stringItems(array $name)
{
    if (empty($name)) {
        return "Nothing to display";
    } else {
        sort($name);
        return implode(', ', $name);
    }
}
var_dump(stringItems($names));
?>