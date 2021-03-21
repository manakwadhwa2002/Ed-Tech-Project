<?php require 'includes/config.php';?>
<?php
if (isset($_POST['loginTeamButton'])) {

    $emailteam = $_POST['emailTeam'];
    $password = $_POST['pwdEntTeam'];

    if (empty($emailteam) || empty($password)) {
        header("Location: index.php?error=emptyFields");
        exit();
    } else {
        $sql = "SELECT * FROM mtd_team_dt WHERE emailTeam=?;";
        $stmt = mysqli_stmt_init($conn_4);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: index.php?error=sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $emailteam);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pwd_team']);
                $roleCheck = $row['roleTeam'];

                if ($pwdCheck == false) {
                    header("Location: index.php?error=wrongPassword");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userName'] = $row['nameTeam'];
                    $_SESSION['userId'] = $row['team_uid'];
                    $_SESSION['userRole'] = $row['roleTeam'];

                    header("Location: dashboard/");
                    
                } else {
                    header("Location: index.php?error=wrongPassword");
                }
            } else {
                header("Location: index.php?error=notAuthenticated");
                exit();
            }
        }
    }
} 
else {
    
    if($_SESSION){
        header("Location: dashboard/");
        exit();
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Login | yourcompany</title>
    <link rel="stylesheet" href="team-login.css" type="text/css" />
    <link rel="icon" href="../Photos/favicon.ico" />
    <script src="https://kit.fontawesome.com/84b568a5cc.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&family=Romanesco&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login-page-main">
        <h1>Welcome to yourcompany Work Space !</h1>
        <div class="banner leftfloat">
            <img src="../Photos/Staff Login Image.png" alt="Team Login" />
        </div>
        <div class="login-form leftfloat">
            <img src="../Photos/Our Logo.png" />
            <h2>Login</h2>
            <?php
            require 'errors.php';
            ?>
            <form action="#" method="POST">
                <i class="fa fa-user leftfloat"></i><input type="text" placeholder="Email*" name="emailTeam" required>
                <i class="fa fa-lock leftfloat"></i><input type="password" placeholder="Password*" name="pwdEntTeam" required>
                <button type="submit" name="loginTeamButton">CONTRIBUTE</button>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</body>

</html>

<?php } } ?>