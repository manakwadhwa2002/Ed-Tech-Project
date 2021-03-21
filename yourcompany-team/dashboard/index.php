<?php require 'header.php'?>
<?php 
    $teammembers = getNumMembers();
    $usersofmtd = getNumUsers();
    $blogspublishedcareers = getPublishedBlogsCareers();
    $blogspublishedgeneral = getPublishedBlogsGeneral();
    $blogsnotpublishedcareers = getNonPublishedBlogsCareers();
    $blogsnotpublishedgeneral = getNonPublishedBlogsGeneral();
    if($_SESSION){
?>
<body>
    <head>
        <title>Team Dashboard</title>
    </head>
    <?php require 'navbar.php'?>
    <div class="dashboard main">
        <table>
            <tr>
                <td>Blogs Published</td>
                <td>Blogs Not Published</td>
                <?php 
                    if($_SESSION['userRole'] == 'Admin'){
                ?>
                <td>Team Members</td>
                <?php } ?>
                <td>Users</td>
            </tr>
            <tr>
                <td><?php echo $blogspublishedcareers+$blogspublishedgeneral ?></td>
                <td><?php echo $blogsnotpublishedcareers+$blogsnotpublishedgeneral?></td>
                <?php 
                    if($_SESSION['userRole'] == 'Admin'){
                ?>
                <td><?php echo $teammembers ?></td>
                <?php } ?>
                <td><?php echo $usersofmtd ?></td>
            </tr>
        </table>
    </div>
<?php }
    else{
        header('Location: ../index.php');
        exit();
    }
?>
<?php require 'footer.php'?>