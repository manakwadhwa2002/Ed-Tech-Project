<?php require 'config.php'; ?>

<?php
if (isset($_POST['usrSignUp'])) {

    $usrname = $_POST['usrName'];
    $usremail = $_POST['usrEmail'];
    $usrpassword = $_POST['usrPwd'];
    $usrphnum = $_POST['usrPhNum'];
    $usrteir = 0;

    if (empty($usrname) ||empty($usremail) || empty($usrpassword)) {
        header("Location: ../index.php?superror=emptyFields");
        exit();
    } else {
        $sql = "SELECT usr_email FROM mtd_user_dt WHERE usr_email=?";
        $stmt = mysqli_stmt_init($conn_1);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?superror=sqlError1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $emailteam);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../index.php?superror=emailAlreadyExists");
            } else {
                $sql = "INSERT INTO mtd_user_dt (usr_name, usr_email, usr_pwd, usr_ph_num, usr_teir) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn_1);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../index.php?superror=sqlError2");
                    exit();
                } else {
                    $hash = password_hash($usrpassword, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, 'sssss', $usrname, $usremail, $hash, $usrphnum, $usrteir);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php?signup=success");
                    exit();
                }
            }
        }
    }
} else {
    header('Location: ../index.php');
    exit();
}
