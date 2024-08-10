<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body >
    <form action="" method="post">
        <label for="yn">Enter Your name: </label>
        <input type="Text" name="yn" id="yn" required><br>
        <label for="yp">Enter Your Phone: </label>
        <input type="Number" name="yp" id="yp" required><br>
        <label for="yn">Enter kilometers: </label>
        <input type="Number" name="km" id="km" required><br>
        <button type="submit">submit</button>

    </form>

    <?php

    function Convert($km)
    {
        return $km * 0.621371;
    }

    if (isset($_POST["yn"]) && isset($_POST["yp"]) && isset($_POST["km"])) {
        $name = $_POST["yn"];
        $Phone = $_POST["yp"];
        $km = $_POST["km"];
        echo "<Strong>Answer:</Strong><br> ";
        echo "Name: $name <br>";
        echo "Phone: $Phone <br>";
        echo "Convert kilometers to miles: " . Convert($km);
    }

    ?>
</body>

</html>