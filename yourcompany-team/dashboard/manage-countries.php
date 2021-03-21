<?php require 'header.php'; ?>
<?php
if (isset($_POST['createCountry'])) {

    $countname = $_POST['country-name'];
    $countimg = $_FILES['countryImage']['name'];
    $countpublish = $_POST['publishCountryCheckbox'];

    if(empty($countname)){
        header('Location: manage-countries.php?error=emptyFields');
        exit();
    }
    else{
        $target = "../../Photos/Country Images/" . basename($countimg);
        if (!move_uploaded_file($_FILES['countryImage']['tmp_name'], $target)) {
            header('Location: manage-countries.php?error=imageNotUploaded');
            exit();
        } else {
            $sql = "INSERT INTO country_names (country_name, country_image, created_by, published) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn_2);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: manage-countries.php?error=sqlError1");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, 'ssss', $countname, $countimg, $_SESSION['userId'], $countpublish);
                if (!mysqli_stmt_execute($stmt)) {
                    header('Location: manage-countries.php?error=sqlError2');
                    exit();
                } else {
                    header('Location: manage-countries.php?error=&success=countryAdded');
                    exit();
                }
            }
        }
    }

} else {
    if ($_SESSION) { 
        $allcountries = getAllCountries();
        ?>

        <body>
            <?php require 'navbar.php';?>
            <head>
                <title>Manage Countries</title>
            </head>
            <form action="manage-countries.php" method="POST" enctype="multipart/form-data" class="manage-careers main">
                <h2>Manage Countries</h2>
                <div class="manage-careers-left">
                    <fieldset>
                        <legend>Country Image</legend>
                        <input type="file" name="countryImage">
                    </fieldset>
                    <input name="country-name" type="text" placeholder="Country Name*">
                    <input type="hidden" name="publishCountryCheckbox" value="0" />
                    <input type="checkbox" name="publishCountryCheckbox" value="1" />Publish
                    <button name="createCountry" type="submit">Create Country</button>
                </div>
                <div class="manage-careers-right">
                    <table>
                        <tr>
                            <td>Country Id</td>
                            <td>Country Name</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <tr>
                        <?php foreach($allcountries as $ac){ ?>
                            <td><?php echo $ac['country_id']?></td>
                            <td><?php echo $ac['country_name']?></td>
                            <td><a href="#" class="bg-blue"><i class='fas fa-pencil-alt'></i></a></td>
                            <td><a href="#" class="bg-red"><i class='fas fa-trash-alt'></i></a></td>
                        <?php }?>
                        </tr>
                    </table>
                </div>
            </form>

            <?php require 'footer.php'; ?>

    <?php
    } else {
        header('Location: ../index.php');
        exit();
    }
} ?>