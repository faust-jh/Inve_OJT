<?php

include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebardesign.php';




?>

<div class="createContainer  m-1" style="width:60%">
    <div class="createForm m-5">
        <div class="createLog">
            <h3>Create Account</h3>

        </div>

        <div class="createData mt-3">

            <label for="companyname" class="form-label">Company Name </label>
            <input type="text" class="createInput form-control border-dark" style="border-radius: 50px; font-size:15px; " id="companyname" placeholder="Company name">

            <label for="createEmail" class="form-label mt-2">Email</label>
            <input type="text" class="createInput form-control border-dark" style="border-radius: 50px; font-size:15px; " id="createEmail" placeholder="Email@gmail.com">

            <label for="createPassword" class="form-label mt-2">Password</label>
            <input type="text" class="loginInput form-control border-dark " style="border-radius: 50px;font-size:15px;" id="createPassword" placeholder="Min. of 8 characters">

            <label for="confirmPassword" class="form-label mt-2">Confirm Password</label>
            <input type="text" class="loginInput form-control border-dark " style="border-radius: 50px;font-size:15px;" id="confirmPassword" placeholder="Min. of 8 characters">


            <a href="#" class=" btn_createAccnt btn  border-dark form-control">Register</a>
            <span>Already a member?</span><a href="loginpage.php" class="signUp " style="font-weight: 600;"> <i>Sign in now</i></a>

        </div>


    </div>


</div>

<?
include '../includes/footer.php';
