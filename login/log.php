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
        echo '<script>alert("Account Successfully Log In")</script>';
        echo "<center> </br> <h3> Account succefully log in! </h3> </center>";
        echo "<center> <h3> Thank you so much! </h3> </center>";
        echo '<button onclick = "pro()" class = "buttondes"> Proceed </button>';
    } else {
        echo '<script>alert("Account Log In Failed")</script>';
        echo "<center> </br><h3> Login Failed </h3> </center>";
        echo '<center></br></br><button onclick = "history.back()"  class = "buttondes"> Close </button></center>';
    }
}
