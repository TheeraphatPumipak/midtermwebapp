<style>
    table,
    th,
    td {
        border: 1px solid;
        border-collapse: collapse;
        padding: 5px;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "midexam";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT  * FROM orders";
$rs = mysqli_query($conn, $sql);
if ($conn) {
    echo "<table id='table'>
    <thead>
        <th>ที่</th>
        <th>รายการ</th>
        <th>ประเภท</th>
        <th>ราคา</th>
    </thead>";
    if (mysqli_num_rows($rs)==0) {
        echo "<tr>
    <th colspan='4'>ไม่พบข้อมูล</th>
    </tr>";
    }
    else{
    while ($read = mysqli_fetch_assoc($rs)) {
        $id = $read['id'];
        $drink = $read['drinking'];
        $type = $read['type'];
        $price = $read['price'];
        echo "
    <tr>
    <th>$id</th>
    <th>$drink</th>
    <th>$type</th>
    <th>$price</th>
    </tr>";
    }}
    echo "
    </td>
    </table>";
}
