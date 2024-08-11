<?php

use function Laravel\Prompts\alert;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Name"]) && isset($_POST["Email"])) {
  $name = $_POST["Name"];
  $email = $_POST["Email"];


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "testmid";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $name = mysqli_real_escape_string($conn, $name);
  $email = mysqli_real_escape_string($conn, $email);

  $sql = "INSERT INTO customers(name, email) VALUES('$name', '$email')";
  // $result = $conn->query($sql);
  if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "บันทึกสำเร็จ";
    echo "<script>alert('Success');</script>";
  }
  // if ($result->num_rows > 0) {
  //   // output data of each row
  //   // while($row = $result->fetch_assoc()) {
  //   //   echo "  Name: " . $row["name"]. "   Email:" . $row["email"]. "<br>";
  //   // }

  // }
  mysqli_close($conn);
} ?>
