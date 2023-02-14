<?php
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
        header("Location: ../inventory_dashboard/index.php");
    } else {
        echo '<script>alert("Account Log In Failed")</script>';
        echo "<center> </br><h3> Login Failed </h3> </center>";
        echo '<center></br></br><button onclick = "history.back()"  class = "buttondes"> Close </button></center>';
    }
}
