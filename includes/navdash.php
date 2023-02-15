<?php
session_start();
unset($_SESSION['CompanyEmail']);
unset($_SESSION['CompanyPass']);
session_destroy();
echo '<script type = "text/javascript">
alert("Account Logged Out!");
window.location.href = "../login/loginpage.php";
</script>';
