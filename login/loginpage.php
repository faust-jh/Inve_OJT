<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<?php
include 'includes/sidebardesign.php';
?>

<div class="loginContainer m-1" style="width:60%;">
    <div class="loginForm m-5">
        <div class="loginLog">
            <h3>Login</h3>
            <h7 class="text-muted">See your growth and monitor your bussines!</h7>
        </div>

        <div class="loginData mt-3">
                
            <label for="email" class="form-label">Email</label>
<<<<<<< HEAD:login/loginpage.php
            <input type="text" class="loginInput form-control border-dark" style="border-radius: 50px; font-size:15px; " id="email" placeholder="Email@gmail.com">

            <label for="password" class="form-label">Password</label>

            <input type="password" class="loginInput form-control border-dark " style="border-radius: 50px;font-size:15px;" id="password" placeholder="Min. of 8 characters">
=======
            <input type="text" class="loginInput form-control border-dark" style="border-radius: 50px; font-size:15px; "  id="email" placeholder="Email@gmail.com">
                
            <label for="password" class="form-label">Password</label>

            <input type="password" class="loginInput form-control border-dark " style="border-radius: 50px;font-size:15px;"  id="password" placeholder="Min. of 8 characters">
>>>>>>> 72c6dc52b8e6a39ebca29e453164b42379562219:loginpage/loginpage.php
            <a href="#" class="forgetPass d-flex justify-content-end mt-1">Forget password?</a>

            <a href="#" class=" btn_loginAccnt btn  border-dark form-control">Login</a>
        
        </div>

        <div class="loginHorizon mt-3">
            <span class="loginHorizontal">or Sign with Google</span>
        </div>
<<<<<<< HEAD:login/loginpage.php
        <a href="#" class=" btn_signGoogle btn  border-dark form-control mt-2"><i class="fa-brands fa-google"></i> Sign in with Google</a>
        <span>Not a member?</span><a href="../register/createAccnt.php" class="signUp " style="font-weight: 600;"> <i>Sign up now</i></a>


    </div>

=======
        <a href="#" class=" btn_signGoogle btn  border-dark form-control mt-2"><i class="fa-brands fa-google"></i>  Sign in with Google</a>
        <span>Not a member?</span><a href="createAccnt.php" class="signUp " style="font-weight: 600;"> <i>Sign up now</i></a>
    
>>>>>>> 72c6dc52b8e6a39ebca29e453164b42379562219:loginpage/loginpage.php

    </div>  
    
   
</div>



<?
include '../includes/footer.php';
