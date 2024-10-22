<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // htmlspecialchars sanitizes the data inputted by the user, so that code injection cannot happen
    // so if a user inputs &, it would be seen as &amp instead.
    $firstname = htmlspecialchars($_POST["first-name"]);
    $lastname = htmlspecialchars($_POST["last-name"]);
    $favouritePet = htmlspecialchars($_POST["pet-type"]);

    if (empty($firstname)) {
        exit();
        header("Location: ../index.php");
    }

    echo "These are the data that the user submitted";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritePet;

    header("Location: ../index.php");
}
else {
    header("Location: ../index.php");
}