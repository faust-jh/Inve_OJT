<?php
$server = "localhost";
$username = "root";
$con = mysqli_connect($server, $username);
if (!$con) {
    echo ("Can't connect!");
}

$compname = $_POST['companyname'];
$compmail = $_POST['companyemail'];
$comppass = $_POST['companypass'];
mysqli_select_db($con, "inventory_system");

/*$sql1 = "SELECT MAX(CompanyID) FROM company_profile";
$query = mysqli_query($con, $sql1);
$result = mysqli_fetch_assoc($query);*/

$query = "SELECT CompanyID FROM company_profile ORDER BY CompanyID DESC limit 1";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
$first = $row['0'];
echo $first;

/*if ($idContainer > 0) {
$idContainer = $idContainer + 1;
$sql2 = "INSERT INTO company_account (CompanyEmail, CompanyPassword, CompanyID) VALUES ('$compmail', '$comppass', '$idContainer')";
$sql = "INSERT INTO company_profile (CompanyName) VALUES ('$compname')";

mysqli_query($con, $sql2);
mysqli_query($con, $sql);
mysqli_close($con);
}*//*else {
$sql2 = "INSERT INTO company_account (CompanyEmail, CompanyPassword, CompanyID) VALUES ('$compmail', '$comppass', 1)";
$sql = "INSERT INTO company_profile (CompanyName) VALUES ('$compname')";

mysqli_query($con, $sql2);
mysqli_query($con, $sql);
mysqli_close($con);
}*/
