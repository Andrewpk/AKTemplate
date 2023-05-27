<?php /** @noinspection PhpUndefinedVariableInspection */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AKTemplate Example</title>
    <style>
        div {
            display: grid;
            place-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<div>
    <p>
        This random number is from the php template: <?= $t->rando ?>
    </p>
<!--    <p>-->
<!--        Our super secret variable is inaccessible: --><?php //= $superSecretVariable ?>
<!--    </p>-->
</div>
</body>
</html>
