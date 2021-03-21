<?php require 'includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Photos/favicon.ico" sizes="16x16" type="image/png">
    <link type="text/css" rel="stylesheet" href="magicscroll.css" />
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="responsive.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&family=Romanesco&family=Montserrat&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Header Starts -->

        <header>
            <a href="https://www.yourcompany.co"><img src="Photos/Our Logo.png" alt="yourcompany Logo"></a>
            <div class="mobile-header-nav" id="nav-links-mobile">
                <label onclick="openNavMenu()"><i class="fas fa-bars color-white"></i></label>
                <label><i class="fa fa-phone-alt color-white"></i></label>
                <label><a
                        href="https://api.whatsapp.com/send?phone=919953884096&&text=Hi!%C2%A0I%E2%80%99d%20like%20to%20chat%20with%20an%20expert."><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/766px-WhatsApp.svg.png"
                            alt="whatsapp-mobile"></a></label>
            </div>
            <nav id="nav-links">
                <a href="index.php">Home</a>
                <a href="about-us.php">About Us</a>
                <a href="Products/">Services</a>
                <a href="Blogs/">Blogs</a>
                <a href="contact-us.php">Reach Us</a>
                <?php if($_SESSION){ ?>
                    <a href="./dashboard/"><i class="fas fa-user-graduate"></i> <?php echo $_SESSION['userName']; ?></a>
                <?php }else{?>
                    <a onclick="loadLoginForm()"><i class="fas fa-user-graduate"></i> Login</a>
                <?php } ?>
            </nav>
            <div class="clearfix"></div>
            <div class="login-forms-container" id="load-lsfp-form">
                <a onclick="closeLsdpForm()" class="close-lsfp-form">x</a>
                <div class="lsfp-form-outer animate">
                    <div class="lsfp-form-inner-left">
                        <img id="yourcompany-logo-on-form" src="Photos/Our Logo.png" alt="yourcompany logo">
                        <img src="Photos/user-login.jpg" alt="">
                    </div>
                    <div class="lsfp-form-inner-right" id="lsfp-form-right"></div>
                </div>
            </div>

            <div id="lgfr">
                <h3>Login</h3>
                <?php require 'error.php';?>
                <form action="includes/login.mtd.php" method="POST">
                    <input name="usrEmail" type="email" placeholder="Email*">
                    <input name="usrPwd" type="password" placeholder="Password*"><br/>
                    <button name="usrLogin" type="submit">Login</button>
                </form>
                <span><a onclick="loadForgotPasswordForm()">Forgot Password ?</a></span>
                <a onclick="loadSignUpForm()">Not a Mentorian?</a>
            </div>
            <div id="supfr">
                <h3>SignUp</h3>
                <?php require 'error.php';?>
                <form action="includes/signup.mtd.php" method="POST">
                    <input name="usrName" type="text" placeholder="Name*">
                    <input name="usrEmail" type="email" placeholder="Email*">
                    <input name="usrPwd" type="password" placeholder="Password*">
                    <input name="usrPhNum" type="number" placeholder="Phone Number"><br/>
                    <button name="usrSignUp" type="submit">Enter The Virtual World !</button>
                </form>
                <a id="alrment-link" href="#" onclick="loadLoginForm()">Already a Mentorian?</a>
            </div>
            <div id="fpfr">
                <h3>Forgot Password</h3>
                <form action="includes/forgot-password.mtd.php" method="POST">
                    <input type="email" placeholder="Please Enter Registered Email*">
                    <button type="submit">Reset Password</button>
                </form>
            </div>

            <div class="contact-form-container" id="get-expert-advice-form">
                <form class="contact-form animate"
                    action="https://www.yourcompany.co/Form Responses/expertadviceresponse.php" method="POST">
                    <span class="close-expert-advice-form" onclick="closeExpertAdviceForm()">&times;</span>
                    <img src="Photos/Product Tile Image/interview prep.svg" />
                    <h4>Book Your 30 Mins Expert Career Advice</h4>
                    <p>Take the first step towards your goals. Get your profile evaluated for free and kickstart your
                        journey to
                        success.</p>
                    <input type="text" name="expadvName" placeholder="Enter your name" required />
                    <input type="email" name="expadvEmail" placeholder="Enter your email" required />
                    <input type="number" name="expadvPhNum" placeholder="Enter your contact number" />
                    <button type="submit" name="expadvBtn">Get Expert Advice</button>
                </form>
            </div>

            <button type="button" class="free-consultation" id="fc-btn" onclick="openExpertAdviceForm()">Get Expert
                Advice</button>
            <div class="whatsapp-icon" id="whts-btn"><a
                    href="https://api.whatsapp.com/send?phone=919953884096&&text=Hi!%C2%A0I%E2%80%99d%20like%20to%20chat%20with%20an%20expert."><img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/766px-WhatsApp.svg.png" /></a>
            </div>
        </header>

        <div class="clearfix"></div>

        <!-- Header Ends -->