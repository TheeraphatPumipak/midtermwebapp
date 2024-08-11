<form action="check.php" method='Post'>
    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "lab06sec1";
    $conn = mysqli_connect($host, $user, $password, $dbname);
    $sql = "SELECT * FROM movie";
    if ($conn) {
        $db = mysqli_query($conn, $sql);
        while ($rs = mysqli_fetch_assoc($db)) {
            $Wacth = $rs['watched'];
            $Q = $rs['movie_title'];
            if ($Wacth == 0) {
                echo "<input type='checkbox' value='$Q' name='movie[]'>$Q<br>";
            }
            else{
                echo "<input type='checkbox' disabled >$Q<br>";
            }
        }
    }
 ?>
 <input type="Submit">
 </form>