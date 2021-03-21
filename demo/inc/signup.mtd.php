<?php
if (isset($_POST['usrSignUp'])) {

    require 'conn.php';

    $usremail = $_POST['usrEmail'];
    $usrpassword = $_POST['usrPwd'];
    $usrteir = 0;

    if (empty($usremail) || empty($usrpassword)) {
        header("Location: ../login.php?error=emptyFields");
        exit();
    } else {
        $sql = "SELECT usr_email FROM mtd_usr_data WHERE usr_email=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlError1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $emailteam);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../login.php?error=emailAlreadyExists");
            } else {
                $sql = "INSERT INTO mtd_usr_data (usr_email, usr_pwd, usr_teir) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../login.php?error=sqlError");
                    exit();
                } else {
                    $hash = password_hash($usrpassword, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, 'sss', $usremail, $hash, $usrteir);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../login.php?signup=success");
                    exit();
                }
            }
        }
    }
}else{
    header('Location: ../login.php');
    exit();
}