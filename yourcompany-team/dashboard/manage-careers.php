<?php require 'header.php' ?>
<?php

if (isset($_POST['createCareer'])) {

    $careername = $_POST['career-name'];
    $careerpublish = $_POST['publishCareerCheckbox'];
    $careerimage = $_FILES['careerImage']['name'];

    if (empty($careername)) {
        header('Location: manage-careers.php?error=emptyFields');
        exit();
    } else {
        $target = "../../Photos/Career Infographics/New Careers/" . basename($careerimage);
        if (!move_uploaded_file($_FILES['careerImage']['tmp_name'], $target)) {
            header('Location: manage-careers.php?error=imageNotUploaded');
            exit();
        } else {
            $sql = "INSERT INTO carrer_names (car_name, car_img, created_by, published) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn_2);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: manage-careers.php?error=sqlError1");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, 'ssss', $careername, $careerimage, $_SESSION['userId'], $careerpublish);
                if (!mysqli_stmt_execute($stmt)) {
                    header('Location: manage-careers.php?error=sqlError2&erroris=' . $mysqli->error());
                    exit();
                } else {
                    header('Location: manage-careers.php?error=&success=careerAdded');
                    exit();
                }
            }
        }
    }
} else {
    if ($_SESSION) {
        $allcareers = getAllCareers();
?>
    
    <body>
    <head>
        <title>Manage Careers</title>
    </head>
    <?php require 'navbar.php'; ?>
    <form action="manage-careers.php" method="POST" enctype="multipart/form-data" class="manage-careers main">
        <h2>Manage Careers</h2>
        <div class="manage-careers-left">
        <fieldset>
            <legend>Carrer Picture</legend>
                <input type="file" name="careerImage">
            </fieldset>
            <input name="career-name" type="text" placeholder="Career Name*">
            <input type="hidden" name="publishCareerCheckbox" value="0" />
            <input type="checkbox" name="publishCareerCheckbox" value="1" />Publish
            <button name="createCareer" type="submit">Create Career</button>
        </div>
        <div class="manage-careers-right">
            <table>
                <tr>
                    <td>Career Id</td>
                    <td>Career Name</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                    <?php foreach($allcareers as $ac){ ?>
                        <td><?php echo $ac['car_id']?></td>
                        <td><?php echo $ac['car_name']?></td>
                        <td><a href="#" class="bg-blue"><i class='fas fa-pencil-alt'></i></a></td>
                        <td><a href="#" class="bg-red"><i class='fas fa-trash-alt'></i></a></td>
                    <?php }?>
                </tr>
            </table>
        </div>
    </form>
    <?php require 'footer.php';?>

<?php
    } else {
        header('Location: ../index.php');
        exit();
    }
} ?>