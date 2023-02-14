<?php
session_start();
$server = "localhost";
$username = "root";
$con = mysqli_connect($server, $username);
if (!$con) {
    echo ("Can't connect!");
}

if (!empty($_POST['login'])) {
    mysqli_select_db($con, "inventory_system");
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $query =  "SELECT * FROM company_account
                    WHERE CompanyEmail = '$email' and CompanyPassword = '$pass'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $_SESSION['CompanyEmail'] = $email;
        $_SESSION['CompanyPass'] = $pass;
        if (is_array($row)) {
            $_SESSION['CompanyEmail'] = $row['CompanyEmail'];
            $_SESSION['CompanyPass'] = $row['CompanyPass'];
        }
        if (isset($_SESSION['CompanyEmail'])) {
            echo '<script type = "text/javascript">
                alert("Account login Succesfully!");
                window.location.href = "../inventory_dashboard/index.php";
                </script>';
        }
    } else {
        echo '<script type = "text/javascript">
        alert("Invalid Username and Password!");
        window.location.href = "loginpage.php";
        </script>';
    }
}
