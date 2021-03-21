<?php require '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../Photos/favicon.ico" sizes="16x16" type="image/png">
    <link href="../style.css" rel="stylesheet" type="text/css">
    <link href="../responsive.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&family=Romanesco&family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84b568a5cc.js" crossorigin="anonymous"></script>
    <style>
        .lsfp-form-inner-left {
            padding: 1.5vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <a href="https://www.yourcompany.co"><img src="../Photos/Our Logo.png" alt="yourcompany Logo"></a>
            <div class="mobile-header-nav" id="nav-links-mobile">
                <label onclick="openNavMenu()"><i class="fas fa-bars color-white"></i></label>
                <label><i class="fa fa-phone-alt color-white"></i></label>
                <label><a href="https://api.whatsapp.com/send?phone=919953884096&&text=Hi!%C2%A0I%E2%80%99d%20like%20to%20chat%20with%20an%20expert."><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/766px-WhatsApp.svg.png" alt="whatsapp-mobile"></a></label>
            </div>
            <nav id="nav-links">
                <a href="index.php">Home</a>
                <a href="about-us.php">About Us</a>
                <a href="Products/">Services</a>
                <a href="Blogs/">Blogs</a>
                <a href="contact-us.php">Reach Us</a>
                <?php if ($_SESSION) { ?>
                    <a href="./dashboard/"><i class="fas fa-user-graduate"></i> <?php echo $_SESSION['userName']; ?></a>
                <?php } else { ?>
                    <a href="#"><i class="fas fa-user-graduate"></i> Login</a>
                <?php } ?>
            </nav>
            <div class="clearfix"></div>
            <div class="lsfp-form-outer">
                <div class="lsfp-form-inner-left">
                    <img id="yourcompany-logo-on-form" src="../Photos/Our Logo.png" alt="yourcompany logo">
                    <img src="../Photos/user-login.jpg" alt="">
                </div>
                <div class="lsfp-form-inner-right">
                    <h3>Login</h3>
                    <?php require '../error.php'; ?>
                    <form action="../includes/login.mtd.php" method="POST">
                        <input name="usrEmail" type="email" placeholder="Email*">
                        <input name="usrPwd" type="password" placeholder="Password*"><br />
                        <button name="usrLogin" type="submit">Login</button>
                    </form>
                    <span><a href="forgot-password.php">Forgot Password ?</a></span>
                    <a href="signup.php">Not a Mentorian?</a>
                </div>
            </div>
        </header>
    </div>
</body>

</html>