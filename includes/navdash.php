<?php
unset($_SESSION['CompanyEmail']);
session_destroy();
echo '<script type = "text/javascript">
alert("Account Logged Out!");
window.location.href = "../login/loginpage.php";
</script>';
