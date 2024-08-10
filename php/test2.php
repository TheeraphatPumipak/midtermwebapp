<?php
// require("form.php");
echo"Hehe";
$sec_in_day = 60 * 60 * 24;
$now = strtotime("now");
$expired = strtotime($_POST['expired']);

if ($expired < $now) {
    echo "สินค้าหมดอายุ";
} else {
    $num_days = ceil(($expired - $now) / $sec_in_day);
    if ($num_days == 0) {
        echo "สินค้าจะหมดอายุวันนี้";
    } else {
        echo "สินค้าจะหมดอายุในอีก $num_days วัน";
    }
}
