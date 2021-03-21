<?php
if (isset($_POST['userLogin'])) {

    require 'conn.php';

    $usremail = $_POST['emailUser'];
    $usrpassword = $_POST['pwdUser'];

    if (empty($usremail) || empty($usrpassword)) {
        header("Location: ../login.php?error=emptyFields");
        exit();
    } else {
        $sql = "SELECT * FROM mtd_usr_data WHERE usr_email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $usremail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($usrpassword, $row['usr_pwd']);

                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongPassword");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userName'] = $row['usr_name'];
                    $_SESSION['userId'] = $row['mtduid'];
                    $_SESSION['userTeir'] = $row['usr_teir'];

                    header("Location: ../dashboard/");
                    
                } else {
                    header("Location: ../login.php?error=wrongPassword");
                }
            } else {
                header("Location: ../login.php?error=notAuthenticated");
                exit();
            }
        }
    }
}
else{
    header('Location: ../login.php');
    exit();
} 