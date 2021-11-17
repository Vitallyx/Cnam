<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body></body>

<?php
$retraite = 65;
$age = $_GET["age"] ?? 0;
$age = intval($age);

if ($age > $retraite) {
    $difference = ($age - $retraite);
    echo ("Vous êtes à la retraite depuis $difference années.");
} else if ($age <= 0) {
    echo ("Vous n'êtes pas né");
} else if ($age < $retraite) {
    $difference = ($retraite - $age);
    echo ("Il vous reste $difference années avant la retraite.");
} else {
    echo ("Vous etes a la retraite BINGO");
}
?>
</body>

</html>