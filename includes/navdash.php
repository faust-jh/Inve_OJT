<?php
session_start();
session_unset();
session_destroy();
echo '<script type = "text/javascript">
    alert("Account Logged Out!");
    window.location.href = "../landingpage/landingpage.php";
    </script>';
