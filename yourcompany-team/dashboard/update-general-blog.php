<?php require 'header.php'; ?>
<?php

if (isset($_POST['updateBlogButton'])) {

    $updateid = $_POST['blogUpdateId'];
    $blogyoutubelink = $_POST['blogYoutubeLink'];
    $updateblogfeaturedimage = $_FILES['updateFeaturedImage']['name'];
    $updateblogyoutubelink = $_POST['blogUpdateYoutubeLink'];
    $updateblogbody = $_POST['updated-body-text-editor'];
    $updatedpublish = $_POST['updatedPublishBlogCheckbox'];

    if(empty($updateblogyoutubelink) && empty($updateblogfeaturedimage)) {
        $sql = "UPDATE mtd_general_blogs SET blog_text='$updateblogbody', published='$updatedpublish' WHERE blog_id=$updateid";
        if ($conn_2->query($sql) === TRUE) {
            header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=none&success=blogUpdate');
            exit();
        } else {
            header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=imageAlgoSqlError&success=');
            exit();
        }
    }elseif(empty($updateblogyoutubelink)){
        $target = "../../Photos/Posted Blogs Images/" . basename($updateblogfeaturedimage);
        if (!move_uploaded_file($_FILES['updateFeaturedImage']['tmp_name'], $target)) {
            header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=imageNotUploaded&success=');
            exit();
        } else {
            $sql = "UPDATE mtd_general_blogs SET blog_img='$updateblogfeaturedimage', blog_text='$updateblogbody', published='$updatedpublish' WHERE blog_id=$updateid";
            if ($conn_2->query($sql) === TRUE) {
                header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=none&success=blogUpdate');
                exit();
            } else {
                header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=ytAlgoSqlError&success=');
                exit();
            }
        }
    }elseif (empty($updateblogfeaturedimage)) {
        $sql = "UPDATE mtd_general_blogs SET gen_yt_link='$updateblogyoutubelink', blog_text='$updateblogbody', published='$updatedpublish' WHERE blog_id=$updateid";
        if ($conn_2->query($sql) === TRUE) {
            header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=none&success=blogUpdate');
            exit();
        } else {
            header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=imageAlgoSqlError&success=');
            exit();
        }
    } else {
        $target = "../../Photos/Posted Blogs Images/" . basename($updateblogfeaturedimage);
        if (!move_uploaded_file($_FILES['updateFeaturedImage']['tmp_name'], $target)) {
            header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=imageNotUploaded&success=');
            exit();
        } else {
            $sql = "UPDATE mtd_general_blogs SET blog_img='$updateblogfeaturedimage', gen_yt_link='$updateblogyoutubelink', blog_text='$updateblogbody', published='$updatedpublish' WHERE blog_id=$updateid";
            if ($conn_2->query($sql) === TRUE) {
                header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=none&success=blogUpdate');
                exit();
            } else {
                header('Location: update-general-blog.php?editBlog=' . $updateid . '&error=ytandimageAlgoSqlError&success=');
                exit();
            }
        }
    }
} else {
    if ($_SESSION) {

        if (isset($_GET['editBlog'])) {

            $blogEditId = $_GET['editBlog'];

            $sql = "SELECT * FROM mtd_general_blogs WHERE blog_id=$blogEditId";
            $result = mysqli_query($conn_2, $sql);
            $blogdata = mysqli_fetch_assoc($result);
?>

            <body>

                <head>
                    <title>Edit General Blog</title>
                </head>
                <?php require 'navbar.php' ?>

                <form action="update-general-blog.php" method="POST" enctype="multipart/form-data" class="post-blog main">
                    <h2>Edit General Blog</h2>
                    <?php
                    require '../errors.php';
                    ?>
                    <input type="hidden" name="blogUpdateId" value="<?php echo $blogEditId ?>" />
                    <input type="hidden" name="blogYoutubeLink" value="<?php echo $blogdata['gen_yt_link'] ?>" />
                    Your Image:<br /><img style="text-align: center;" src="../../Photos/Posted Blogs Images/<?php echo $blogdata['blog_img'] ?>"><br/><br/>
                    Your Youtube Video:<br/><br/><iframe width="30%" height="auto" src="https://www.youtube.com/embed/<?php echo $blogdata['gen_yt_link']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <input name="blogUpdateYoutubeLink" type="text" placeholder="Update Youtube Link*">
                    <fieldset>
                        <legend>Change Featured Image:</legend>
                        <input type="file" name="updateFeaturedImage" />
                    </fieldset>
                    <div class="text-editor-outer-class">
                        <h4>Blog Body</h4>
                        <textarea name="updated-body-text-editor" id="updated-blog-text-editor"><?php echo $blogdata['blog_text'] ?></textarea>
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
                    CKEDITOR.replace('updated-blog-text-editor');
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