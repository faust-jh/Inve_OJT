<?php
session_start();
if (session_destroy()) {
    echo '<script type = "text/javascript">
        alert("Logged out Completed!");
        window.location.href = "loginpage.php";
        </script>';
}
