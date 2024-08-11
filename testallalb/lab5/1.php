<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Enter Your name:</label>
        <input type="text" name="yn" required><br>
        <label for="">Enter Your phone:</label>
        <input type="text" name="yp" required><br>
        <label for="">Enter kilomete:</label>
        <input type="text" name="km" required><br>
        <input type="submit">
    </form>
    <?php
    function convertkilometetomile($KM){
        return "Convert kilomete to miles:".$KM*0.621371;
    }
    if (isset($_POST["yn"]) && isset($_POST["yp"]) && isset($_POST["km"])) {
        $name = $_POST['yn'];
        $phone = $_POST['yp'];
        $km=$_POST['km'];
        echo"<hr>";
        echo"Answer:<br>";
        echo "Name:$name.<br>";
        echo "Phone:$phone.<br>";
        echo convertkilometetomile($km);
    }
    ?>

</body>

</html>