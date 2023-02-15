<?php
$server = "localhost";
$username = "root";
$con = mysqli_connect($server, $username);
if (!$con) {
    echo ("Can't connect!");
}

if (!empty($_POST['login'])) {
    mysqli_select_db($con, "inventory_system");
}

