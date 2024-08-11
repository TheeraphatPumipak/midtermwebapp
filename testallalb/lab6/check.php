<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "lab06sec1";
$conn = mysqli_connect($host, $user, $password, $dbname);
$sql = "UPDATE movie SET watched='0' WHERE movie_title ='Barbie'";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["movie"])) {
    $data = $_POST["movie"];
    foreach ($data as $edit) {
        $sql = "UPDATE movie SET watched='1' WHERE movie_title='$edit'";
        // echo   "$edit <br>"
        if ($conn->query($sql) === TRUE) {
            header("Location: movieForm.php");
        }
        
}}
else {
    header("Location: movieForm.php");    
}
 