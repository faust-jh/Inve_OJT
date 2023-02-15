<?php

include '../includes/header.php';

include '../includes/sidebardesign.php';

?>
<div class="navbar border text-bg-light shadow-lg navbar-expand-lg bg-body-tertiary d-flex justify-content-end m-1 border">
<a button type="button" class="btn btn-primary"  href="../landingpage/landingpage.php">Back</a>
</div>
<div class="createContainer  m-1" style="width:60%">
    <div class="createForm m-5">
        <div class="createLog">
            <h3>Create Account</h3>

        </div>

        <div class="createData mt-3">

            <form id="create" name="create" method="POST" action="reg.php" autocomplete="off">
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
            </form>
            <span>Already a member?</span><a href="../login/loginpage.php" class="signUp " style="font-weight: 600;"> <i>Sign in now</i></a>
        </div>
    </div>
</div>
<?
include '../includes/footer.php';
