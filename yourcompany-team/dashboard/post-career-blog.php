<?php require 'header.php' ?>
<?php
if (isset($_POST['postBlogButton'])) {

    $blogcareer = $_POST['blogCareer'];
    $blogcountry = $_POST['blogCountry'];
    $blogfeaturedimage = $_FILES['blogFeaturedImage']['name'];
    $blogytlink = $_POST['createYtVideoLink'];
    $blogsumtext = $_POST['summary-sec'];
    $blogwestext = $_POST['wes-sec'];
    $blogsrtext = $_POST['sr-sec'];
    $blogetctext = $_POST['etc-sec'];
    $blogjostext = $_POST['jos-sec'];
    $blogttentext = $_POST['tten-sec'];
    $blogsctext = $_POST['sc-sec'];
    $blogpublishstatus = $_POST['publishBlogCheckbox'];

    if (empty($_SESSION['userId']) || empty($blogcareer) || empty($blogcountry) || empty($blogfeaturedimage) || empty($blogytlink)) {
        header('Location: post-career-blog.php?error=emptyFields');
        exit();
    } else {
        $target = "../../Photos/Posted Blogs Images/" . basename($blogfeaturedimage);
        if (!move_uploaded_file($_FILES['blogFeaturedImage']['tmp_name'], $target)) {
            header('Location: post-career-blog.php?error=imageNotUploaded');
            exit();
        } else {
            $sql = "INSERT INTO mtd_career_blogs (team_uid, car_career, car_country, car_img, car_yt_link, car_summary, car_work_sch, car_skill, car_edu, car_job_out, car_top_ten, car_sim_car, published) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn_2);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: post-career-blog.php?error=sqlError1");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "issssssssssss", $_SESSION['userId'], $blogcareer, $blogcountry, $blogfeaturedimage, $blogytlink, $blogsumtext, $blogwestext, $blogsrtext, $blogetctext, $blogjostext, $blogttentext, $blogsctext, $blogpublishstatus);
                if (!mysqli_stmt_execute($stmt)) {
                    header('Location: post-career-blog.php?error=sqlError2');
                    exit();
                } else {
                    header('Location: post-career-blog.php?error=none&success=blogAddedSuccessfully');
                    exit();
                }
            }
        }
    }
} else {
    if ($_SESSION) {

        $allcareers = getAllCareers();
        $allcountries = getAllCountries();
?>

        <body>

            <head>
                <title>Post Blog</title>
            </head>
            <?php require 'navbar.php' ?>

            <form action="post-career-blog.php" method="POST" enctype="multipart/form-data" class="post-blog main">
                <h2>Create a Career Blog</h2>
                <?php
                require '../errors.php';
                ?>
                <select name="blogCareer">
                    <option value="">Choose Career</option>
                    <?php
                        foreach($allcareers as $ac){
                    ?>
                    <option value="<?php echo $ac['car_name'] ?>"><?php echo $ac['car_name'] ?></option>
                    <?php    
                    }?>
                </select>
                <select name="blogCountry">
                    <option value="">Choose Country</option>
                    <?php
                        foreach($allcountries as $acs){
                    ?>
                    <option value="<?php echo $acs['country_name'] ?>"><?php echo $acs['country_name'] ?></option>
                    <?php    
                    }?>
                </select>
                <fieldset>
                    <legend>Choose Featured Image:</legend>
                    <input type="file" name="blogFeaturedImage" />
                </fieldset>
                <input type="text" placeholder="Youtube Video Link" name="createYtVideoLink" />
                <div class="text-editor-outer-class">
                    <h4>Summary</h4>
                    <textarea name="summary-sec" id="summary-text-editor" required></textarea>
                </div>
                <div class="text-editor-outer-class">
                    <h4>Work Environment and Schedule</h4>
                    <textarea name="wes-sec" id="wes-text-editor" required></textarea>
                </div>
                <div class="text-editor-outer-class">
                    <h4>Skills and Responsibilities</h4>
                    <textarea name="sr-sec" id="sr-text-editor" required></textarea>
                </div>
                <div class="text-editor-outer-class">
                    <h4>Education Training and Certification</h4>
                    <textarea name="etc-sec" id="etc-text-editor" required></textarea>
                </div>
                <div class="text-editor-outer-class">
                    <h4>Job Outlook and Salary</h4>
                    <textarea name="jos-sec" id="jos-text-editor" required></textarea>
                </div>
                <div class="text-editor-outer-class">
                    <h4>Top 10 Universities for the Career</h4>
                    <textarea name="tten-sec" id="tten-text-editor" required></textarea>
                </div>
                <div class="text-editor-outer-class">
                    <h4>Similar Careers</h4>
                    <textarea name="sc-sec" id="sc-text-editor" required></textarea>
                </div>
                <br />
                <?php
                if ($_SESSION['userRole'] == 'Admin') {
                ?>
                    <input type="hidden" name="publishBlogCheckbox" value="0" />
                    <input type="checkbox" name="publishBlogCheckbox" value="1" />Publish
                <?php
                }
                ?>
                <?php
                if ($_SESSION['userRole'] == 'Admin') {
                ?>
                    <button type="submit" name="postBlogButton">Post Blog</button>
                <?php
                } else {
                ?>

                    <button type="submit" name="postBlogButton">Submit Blog Request</button>

                <?php } ?>
            </form>

            <script>
                CKEDITOR.replace('summary-text-editor');
                CKEDITOR.replace('wes-text-editor');
                CKEDITOR.replace('sr-text-editor');
                CKEDITOR.replace('etc-text-editor');
                CKEDITOR.replace('jos-text-editor');
                CKEDITOR.replace('tten-text-editor');
                CKEDITOR.replace('sc-text-editor');
            </script>

    <?php require 'footer.php';
    } else {
        header('Location: ../index.php');
        exit();
    }
} ?>