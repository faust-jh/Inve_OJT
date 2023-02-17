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

$sql = "INSERT INTO company_account (CompanyName, CompanyEmail, CompanyPassword) VALUES ('$compname','$compmail', '$comppass')";
mysqli_query($con, $sql);
mysqli_close($con);
echo '<script type = "text/javascript">
        alert("Account Successfully Created!");
        window.location.href = "../landingpage/landingpage.php";
        </script>';
