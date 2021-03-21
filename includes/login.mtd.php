<?php require 'config.php'; ?>

<?php
if (isset($_POST['usrLogin'])) {

    $usremail = $_POST['usrEmail'];
    $usrpassword = $_POST['usrPwd'];

    if (empty($usremail) || empty($usrpassword)) {
        header("Location: ../index.php?lgerror=emptyFields");
        exit();
    } else {
        $sql = "SELECT * FROM mtd_user_dt WHERE usr_email=?;";
        $stmt = mysqli_stmt_init($conn_1);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?lgerror=sqlError1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $usremail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($usrpassword, $row['usr_pwd']);

                if ($pwdCheck == false) {
                    header("Location: ../index.php?lgerror=wrongPassword");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userName'] = $row['usr_name'];
                    $_SESSION['userId'] = $row['mtduid'];
                    $_SESSION['userTeir'] = $row['usr_teir'];

                    header("Location: ../dashboard/");
                } else {
                    header("Location: ../index.php?lgerror=wrongPassword");
                }
            } else {
                header("Location: ../index.php?lgerror=notAuthenticated");
                exit();
            }
        }
    }
} else {
    header('Location: ../index.php');
    exit();
}
