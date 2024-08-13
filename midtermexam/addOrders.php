<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["drink"]) || isset($_POST["topping[]"]) || isset($_POST["topping[]"])) {
    $drink = $_POST["drink"];
    $type = $_POST["type"];
    $topping = $_POST["topping"];
    if ($drink == "ชาเขียว" || $drink == "ชานม" || $drink == "ชาเขียว" || $drink == "ชามะนาว") {
        $price = 40;
    } else {
        $price = 50;
    }
    $price += 5 * count($topping);
    echo "<script>alert('เพื่ม: $drink$type  ราคา:  $price  บาท');
    window.location.href = 'index.php';</script>";
}
