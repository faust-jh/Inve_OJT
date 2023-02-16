<?php

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebardesign.php';

?>
<div class="createData mt-3">

    <form id="create" name="create" method="POST" action="reg.php" autocomplete="off">
        <div class="row">
            <div class="col">
                <label for="companyname" class="form-label">Company Name </label>
                <input type="text" class="createInput form-control border-dark" style="border-radius: 50px; font-size:15px; " id="companyname" name="companyname" placeholder="Company name">

                <label for="createEmail" class="form-label mt-2">Email</label>
                <input type="email" class="createInput form-control border-dark" style="border-radius: 50px; font-size:15px; " id="companyemail" name="companyemail" placeholder="Email@gmail.com">

                <label for="createPassword" class="form-label mt-2">Password</label>
                <input type="password" class="loginInput form-control border-dark " style="border-radius: 50px;font-size:15px;" id="companypass" name="companypass" placeholder="Min. of 8 characters">

                <label for="confirmPassword" class="form-label mt-2">Confirm Password</label>
                <input type="password" class="loginInput form-control border-dark " style="border-radius: 50px;font-size:15px;" id="companyconpass" name="companyconpass" placeholder="Min. of 8 characters">
                <div class="place">
                    <input type="checkbox" onclick="showpass2()">Show Password
                </div>
                <input type="submit" id="createbutton" name="createbutton" value="Register" class=" btn_createAccnt btn  border-dark form-control">
            </div>
            <div class="col">
            <img src="../design/images/Computer.png" class="" alt="...">
            </div>
        </div>
    </form>
    <span>Already a member?</span><a href="../login/loginpage.php" class="signUp " style="font-weight: 600;"> <i>Sign in now</i></a>
</div>
<?
include '../includes/footer.php';
