<?php require 'header.php'; ?>
<?php

if (isset($_POST['updateBlogButton'])) {

    $updateid = $_POST['blogUpdateId'];
    $updateblogfeaturedimage = $_FILES['updateFeaturedImage']['name'];
    $blogyoutubelink = $_POST['blogYoutubeLink'];
    $updateblogyoutubelink = $_POST['blogUpdateYoutubeLink'];
    $updateblogsumtext = $_POST['updated-summ-text-editor'];
    $updateblogwestext = $_POST['updated-wes-text-editor'];
    $updateblogsrtext = $_POST['updated-sr-text-editor'];
    $updateblogetctext = $_POST['updated-etc-text-editor'];
    $updateblogjostext = $_POST['updated-jos-text-editor'];
    $updateblogttentext = $_POST['updated-tten-text-editor'];
    $updateblogsctext = $_POST['updated-sc-text-editor'];
    $updatedpublish = $_POST['updatedPublishBlogCheckbox'];

    if(empty($updateblogyoutubelink) && empty($updateblogfeaturedimage)) {
        $sql = "UPDATE mtd_career_blogs SET car_yt_link='$blogyoutubelink', car_summary='$updateblogsumtext', car_work_sch='$updateblogwestext', car_skill='$updateblogsrtext', car_edu='$updateblogetctext', car_job_out='$updateblogjostext', car_top_ten='$updateblogsumtext', car_sim_car='$updateblogsumtext', published='$updatedpublish' WHERE blog_id=$updateid";
        if ($conn_2->query($sql) === TRUE) {
            header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=none&success=blogUpdate');
            exit();
        } else {
            header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=imageAlgoSqlError&success=');
            exit();
        }
    }elseif(empty($updateblogyoutubelink)){
        $target = "../../Photos/Posted Blogs Images/" . basename($updateblogfeaturedimage);
        if (!move_uploaded_file($_FILES['updateFeaturedImage']['tmp_name'], $target)) {
            header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=imageNotUploaded&success=');
            exit();
        } else {
            $sql = "UPDATE mtd_career_blogs SET car_img='$updateblogfeaturedimage', car_yt_link='$blogyoutubelink', car_summary='$updateblogsumtext', car_work_sch='$updateblogwestext', car_skill='$updateblogsrtext', car_edu='$updateblogetctext', car_job_out='$updateblogjostext', car_top_ten='$updateblogsumtext', car_sim_car='$updateblogsumtext', published='$updatedpublish' WHERE blog_id=$updateid";
            if ($conn_2->query($sql) === TRUE) {
                header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=none&success=blogUpdate');
                exit();
            } else {
                header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=ytAlgoSqlError&success=');
                exit();
            }
        }
    }elseif (empty($updateblogfeaturedimage)) {
        $sql = "UPDATE mtd_career_blogs SET car_yt_link='$updateblogyoutubelink', car_summary='$updateblogsumtext', car_work_sch='$updateblogwestext', car_skill='$updateblogsrtext', car_edu='$updateblogetctext', car_job_out='$updateblogjostext', car_top_ten='$updateblogsumtext', car_sim_car='$updateblogsumtext', published='$updatedpublish' WHERE blog_id=$updateid";
        if ($conn_2->query($sql) === TRUE) {
            header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=none&success=blogUpdate');
            exit();
        } else {
            header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=imageAlgoSqlError&success=');
            exit();
        }
    }/*elseif(empty($updateblogyoutubelink) && empty($updateblogfeaturedimage)) {
        $sql = "UPDATE mtd_career_blogs SET car_summary='$updateblogsumtext', car_work_sch='$updateblogwestext', car_skill='$updateblogsrtext', car_edu='$updateblogetctext', car_job_out='$updateblogjostext', car_top_ten='$updateblogsumtext', car_sim_car='$updateblogsumtext', published='$updatedpublish' WHERE blog_id=$updateid";
        if ($conn_2->query($sql) === TRUE) {
            header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=none&success=blogUpdate');
            exit();
        } else {
            header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=imageAlgoSqlError&success=');
            exit();
        }*/
    } else {
        $target = "../../Photos/Posted Blogs Images/" . basename($updateblogfeaturedimage);
        if (!move_uploaded_file($_FILES['updateFeaturedImage']['tmp_name'], $target)) {
            header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=imageNotUploaded&success=');
            exit();
        } else {
            $sql = "UPDATE mtd_career_blogs SET car_yt_link='$updateblogyoutubelink', car_img='$updateblogfeaturedimage', car_summary='$updateblogsumtext', car_work_sch='$updateblogwestext', car_skill='$updateblogsrtext', car_edu='$updateblogetctext', car_job_out='$updateblogjostext', car_top_ten='$updateblogsumtext', car_sim_car='$updateblogsumtext', published='$updatedpublish' WHERE blog_id=$updateid";
            if ($conn_2->query($sql) === TRUE) {
                header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=none&success=blogUpdate');
                exit();
            } else {
                header('Location: update-career-blog.php?editBlog=' . $updateid . '&error=ytandimageAlgoSqlError&success=');
                exit();
            }
        }
    }
} else {
    if ($_SESSION) {

        if (isset($_GET['editBlog'])) {

            $blogEditId = $_GET['editBlog'];

            $sql = "SELECT * FROM mtd_career_blogs WHERE blog_id=$blogEditId";
            $result = mysqli_query($conn_2, $sql);
            $blogdata = mysqli_fetch_assoc($result);
?>

            <body>

                <head>
                    <title>Edit Career Blog</title>
                </head>
                <?php require 'navbar.php' ?>

                <form action="update-career-blog.php" method="POST" enctype="multipart/form-data" class="post-blog main">
                    <h2>Edit Career Blog for <?php echo $blogdata['car_career']?> in <?php echo $blogdata['car_country']?></h2>
                    <?php
                    require '../errors.php';
                    ?>
                    <input type="hidden" name="blogUpdateId" value="<?php echo $blogEditId ?>" />
                    <input type="hidden" name="blogYoutubeLink" value="<?php echo $blogdata['car_yt_link'] ?>" />
                    Your Image:<br /><img style="text-align: center;" src="../../Photos/Posted Blogs Images/<?php echo $blogdata['car_img'] ?>"><br/><br/>
                    Your Youtube Video:<br/><br/><iframe width="30%" height="auto" src="https://www.youtube.com/embed/<?php echo $blogdata['car_yt_link']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <input name="blogUpdateYoutubeLink" type="text" placeholder="Update Youtube Link*">
                    <fieldset>
                        <legend>Change Featured Image:</legend>
                        <input type="file" name="updateFeaturedImage" />
                    </fieldset>
                    <div class="text-editor-outer-class">
                        <h4>Summary</h4>
                        <textarea name="updated-summ-text-editor" id="updated-summary-text-editor"><?php echo $blogdata['car_summary'] ?></textarea>
                        <h4>Work Environment and Schedule</h4>
                        <textarea name="updated-wes-text-editor" id="updated-wes-text-editor"><?php echo $blogdata['car_work_sch'] ?></textarea>
                        <h4>Skills and Responsibilities</h4>
                        <textarea name="updated-sr-text-editor" id="updated-sr-text-editor"><?php echo $blogdata['car_skill'] ?></textarea>
                        <h4>Education Training and Certification</h4>
                        <textarea name="updated-etc-text-editor" id="updated-etc-text-editor"><?php echo $blogdata['car_edu'] ?></textarea>
                        <h4>Job Outlook and Salary</h4>
                        <textarea name="updated-jos-text-editor" id="updated-jos-text-editor"><?php echo $blogdata['car_job_out'] ?></textarea>
                        <h4>Top 10 Universities for the Career</h4>
                        <textarea name="updated-tten-text-editor" id="updated-tten-text-editor"><?php echo $blogdata['car_top_ten'] ?></textarea>
                        <h4>Similar Careers</h4>
                        <textarea name="updated-sc-text-editor" id="updated-sc-text-editor"><?php echo $blogdata['car_sim_car'] ?></textarea>
                    </div>
                    <br />
                    <?php
                    if ($_SESSION['userRole'] == 'Admin') {
                    ?>
                        <input type="hidden" name="updatedPublishBlogCheckbox" value="0" />
                        <input type="checkbox" name="updatedPublishBlogCheckbox" value="1" />Publish
                    <?php
                    }
                    ?>
                    <?php
                    if ($_SESSION['userRole'] == 'Admin') {
                    ?>
                        <button type="submit" name="updateBlogButton">Update Blog</button>
                    <?php
                    } else {
                    ?>

                        <button type="submit" name="updateBlogButton">Submit Update Blog Request</button>

                    <?php } ?>
                </form>

                <script>
                    CKEDITOR.replace('updated-summary-text-editor');
                    CKEDITOR.replace('updated-wes-text-editor');
                    CKEDITOR.replace('updated-sr-text-editor');
                    CKEDITOR.replace('updated-etc-text-editor');
                    CKEDITOR.replace('updated-jos-text-editor');
                    CKEDITOR.replace('updated-tten-text-editor');
                    CKEDITOR.replace('updated-sc-text-editor');
                </script>
                <?php require 'footer.php'; ?>
    <?php
        } else {
            header('Location: manage-career-blog.php');
            exit();
        }
    } else {
        header('Location: ../index.php');
        exit();
    }
} ?>