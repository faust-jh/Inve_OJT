<?php
$server = "localhost";
$username = "root";
$con = mysqli_connect($server, $username);
if (!$con) {
    echo ("Can't connect!");
}

$itemname = $_POST['itemname'];
$categoryname = $_POST['categoryname'];
$valuename = $_POST['valuename'];
mysqli_select_db($con, "inventory_system");

$sql1 = "INSERT INTO item (ItemName, CompanyAccountID) VALUES ('$itemname', 1)";
$sql2 = "INSERT INTO item_description (CategoryName, CategoryValue, ItemID) VALUES ('$categoryname', '$valuename', 1)";
mysqli_query($con, $sql1);
mysqli_query($con, $sql2);
mysqli_close($con);