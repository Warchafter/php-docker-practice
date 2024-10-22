<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Pet Preference Form</h2>
    <form action="includes/formhandler.php" method="post">
        <label for="first-name">First Name:</label><br>
        <input required type="text" id="first-name" name="first-name" required><br><br>

        <label for="last-name">Last Name:</label><br>
        <input required type="text" id="last-name" name="last-name" required><br><br>

        <label for="pet-type">Favorite Pet Type:</label><br>
        <select id="pet-type" name="pet-type" required>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
            <option value="fish">Fish</option>
            <option value="other">Other</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>