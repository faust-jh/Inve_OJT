<?php
$server = "localhost";
$username = "root";
$num = 1;
$con = mysqli_connect($server, $username);
if (!$con) {
    echo ("Can't connect!");
}

$compname = $_POST['companyname'];
$compmail = $_POST['companyemail'];
$comppass = $_POST['companypass'];

mysqli_select_db($con, "inventory_system");
$sql2 = "INSERT INTO company_account (CompanyEmail, CompanyPassword, CompanyID) VALUES ('$compmail', '$comppass', '$num')";
$sql = "INSERT INTO company_profile (CompanyName) VALUES ('$compname')";

mysqli_query($con, $sql2);
mysqli_query($con, $sql);
mysqli_close($con);
