<?php
$con = mysqli_connect("localhost", "root");
if (!$con) {
    echo ("Can't connect!");
}
mysqli_select_db($con, "inventory_system");
/*GETTING THE VALUES FROM THE PRODUCT TABLE*/
$sql = "SELECT ProductName FROM product WHERE ProductID > 0";
$sql2 = "SELECT * FROM sales";
$result = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql2);

while ($row2 = mysqli_fetch_array($result2)) {
    $row = mysqli_fetch_array($result);
    $data[] = array(
        "SalesID" => (int)$row2["SalesID"],
        "ProductName" => (string)$row["ProductName"],
        "TotalSold" => (int)$row2["TotalSold"],
        "TotalDefect" => (int)$row2["TotalDefect"],
        "TotalRevenue" => (int)$row2["TotalRevenue"],
        "SalesDate" => $row2["SalesDate"]
    );
}
echo json_encode(array("data" => $data));
