<?php 
require 'header.php';
if(!$_SESSION){
?>

<!-- Main Body Starts From Here -->
<head>
    <title>Demo Login</title>
</head>

<div class="login-forms-container" id="load-lsfp-form">
    <div class="lsfp-form-outer animate">
        <div class="lsfp-form-inner-left">
            <img id="mentord-logo-on-form" src="../Photos/Our Logo.png" alt="">
            <img src="../Photos/user-login.jpg" alt="">
        </div>
        <div class="lsfp-form-inner-right" id="lsfp-form-right"></div>
    </div>
</div>

<div id="lgfr">
    <h3>Login</h3>
    <form action="inc/login.mtd.php" method="POST">
        <?php require 'errors.php'; ?>
        <input name="emailUser" type="email" placeholder="Email*" required>
        <input name="pwdUser" type="password" placeholder="Password*" required><br />
        <button type="submit" name="userLogin">Login</button>
    </form>
    <span><a onclick="loadForgotPasswordForm()">Forgot Password ?</a></span>
    <a onclick="loadSignUpForm()">Not a Mentorian?</a>
</div>
<div id="supfr">
    <h3>SignUp for Free</h3>
    <form action="inc/signup.mtd.php" method="POST">
        <?php require 'errors.php'; ?>
        <input name="usrEmail" type="email" placeholder="Email*" required>
        <input name="usrPwd" type="password" placeholder="Password*" required>
        <input name="usrPhNum" type="number" placeholder="Phone Number"><br />
        <button name="usrSignUp" type="submit">Enter The Virtual World !</button>
    </form>
    <a href="#" onclick="loadLoginForm()">Already a Mentorian?</a>
</div>
<div id="fpfr">
    <h3>Forgot Password</h3>
    <h5>Forgot Password will not work in demo version</h5>
    <form action="#" method="POST">
        <input type="email" placeholder="Please Enter Registered Email*">
        <button type="submit">Reset Password</button>
    </form>
</div>

<!-- Main Body Ends Here -->

<?php require 'footer.php'; 
}
else{
    exit();
} ?>