<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // Include the nav menu
    include 'includes/nav.php';
    ?>
    <h1>Operators</h1>
    <?php

        // String operator

        $a = "Hello";
        $b = "World!";
        $c = $a . " " . $b;

        echo $c;

        // Arithmetic operator
        echo "<br>";

        echo 1 + 2;
        echo "<br>";
        echo 10 % 3;
        echo "<br>";
        echo 10 ** 3;
        echo "<br>";
        echo (1 + 2) * 4;
        echo "<br>";

        // Assignment operators

        $a = 2;
        echo "<br>";
        $a += 4; // += -= *= /+
        echo $a;
        echo "<br>";

        // Comparison operator

        $a = 4;
        $b = "4";

        $c = 3;
        $d = "2";

        if ($a == $b && $c == $d and || $a == &c) {
            echo "a is equal to b.";
        }

    ?>
</body>
</html>