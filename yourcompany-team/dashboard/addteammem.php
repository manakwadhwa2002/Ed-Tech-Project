<?php
if (isset($_POST['signupTeamButton'])) {

    require '../includes/config.php';

    $firstname = $_POST['nameTeam'];
    $role = $_POST['roleTeam'];
    $emailteam = $_POST['emailTeam'];
    $password = $_POST['pwdEntTeam'];
    $passwordconf = $_POST['pwdConfTeam'];

    if (empty($firstname) || empty($role) || empty($emailteam) || empty($password) || empty($passwordconf)) {
        header("Location: ../manage-team.php?error=emptyFields");
        exit();
    } elseif ($password != $passwordconf) {
        header("Location: ../manage-team.php?error=passwordMisMatch&fNameTeam=" . $firstname . "&lNameTeam=" . $lastname . "&roleTeam=" . $role);
        exit();
    } else {
        $sql = "SELECT emailTeam FROM mtd_team_dt WHERE emailTeam=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../manage-team.php?error=sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 's', $emailteam);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../manage-team.php?error=emailAlreadyExists");
            } else {
                $sql = "INSERT INTO mtd_team_dt (nameTeam, roleTeam, emailTeam, pwd_Team) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../manage-team.php?error=sqlError");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, 'ssss', $firstname, $role, $emailteam, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../manage-team.php?signup=success");
                    exit();
                }
            }
        }
    }
} else {
    if(!$_SESSION){
        header("Location: ../index.php");
    }
    else{
?>

<body>
    <head>
        <title>Manage Team</title>
    </head>
    <?php require 'header.php'?>
    <?php require 'navbar.php'?>
    <div class="manage-team main">
        <form action="#" method="POST" class="add-team-member" >
        <h2>Add New Member / Manage Team</h2>
            <input type="text" placeholder="First Name*" name="nameTeam"/><br/>
            <input type="email" placeholder="Email*" name="emailTeam"/><br/>
            <select name="roleTeam">
                <option value="">-- Choose Team --</option>
                <option value="Admin">Admin</option>
                <option value="Content Management">Content Management</option>
            </select><br/>
            <input type="password" placeholder="Enter Password*" name="pwdEntTeam"/><br/>
            <input type="password" placeholder="Confirm Password*" name="pwdConfTeam"/><br/>
            <button type="submit" name="signupTeamButton">Add Team Member</button>
        </form>
    </div>

<?php require 'footer.php'; }}?>