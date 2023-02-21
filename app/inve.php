<?php
$con = mysqli_connect("localhost", "root");
if (!$con) {
    echo ("Can't connect!");
}
mysqli_select_db($con, "inventory_system");
$sqlitem = "SELECT * FROM item";
$result = mysqli_query($con, $sqlitem);
while ($row = mysqli_fetch_array($result)) {
    $data[] = array(
        "ItemID" => $row['ItemID'],
        "ItemName" => $row['ItemName'],
    );
}
echo json_encode(array("data" => $data));
