<?php
$server = "localhost";
$username = "root";
$con = mysqli_connect($server, $username);
if (!$con) {
    echo ("Can't connect!");
}

$itemname = $_POST['recipient-name'];
mysqli_select_db($con, "inventory_system");

$sql = "INSERT INTO item (ItemName, CompanyAccountID) VALUES ('$itemname', 1)";
mysqli_query($con, $sql);
mysqli_close($con);