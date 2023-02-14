<?php
include '../includes/header.php';
include '../includes/navbar.php';
?>
<?php
include '../includes/sidebardesign.php';
?>

<div class="loginContainer m-1" style="width:60%;">
    <div class="loginForm m-5">
        <div class="loginLog">
            <h3>Login</h3>
            <h7 class="text-muted">See your growth and monitor your bussines!</h7>
        </div>

        <div class="loginData mt-3">
            <form id="log" name="log" method="POST" action="log.php" autocomplete="off">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="loginInput form-control border-dark" style="border-radius: 50px; font-size:15px; " id="email" name="email" placeholder="Email@gmail.com" required>
                <label for="password" class="form-label">Password</label>
                <input type="password" class="loginInput form-control border-dark " style="border-radius: 50px;font-size:15px;" id="password" name="password" placeholder="Min. of 8 characters" required>
                <a href="#" class="forgetPass d-flex justify-content-end mt-1">Forget password?</a>
                <input type="submit" value="Login" id="login" name="login" class=" btn_loginAccnt btn  border-dark form-control">
            </form>
        </div>
        <div class="loginHorizon mt-3">
            <span class="loginHorizontal">or Sign with Google</span>
        </div>
        <a href="#" class=" btn_signGoogle btn  border-dark form-control mt-2"><i class="fa-brands fa-google"></i> Sign in with Google</a>
        <span>Not a member?</span><a href="../register/createAccnt.php" class="signUp " style="font-weight: 600;"> <i>Sign up now</i></a>


    </div>


</div>
<?
include '../includes/footer.php';
