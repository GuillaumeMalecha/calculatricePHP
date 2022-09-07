<?php
include 'calc.inc.php';
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculatrice</title>
    <style>
        button {
            font-size: 15px;
            border: 2px solid transparent;
            border-radius: 8px;
            color: #ffffff;
            padding: 15px 25px;
            width: 100px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h2>Résultat</h2>
<br>
<button>
    <?php


    $num1 = $_POST['num1Inserted'];
    $num2 = $_POST['num2Inserted'];
    $cal = $_POST['calInserted'];

    $calculator = new Calc($num1, $num2, $cal);
    echo $calculator->calcMethod();
    ?>
</button>
</body>

</html>
