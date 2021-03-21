<?php require 'header.php' ?>
<?php
if (isset($_POST['postBlogButton'])) {

    $blogtitle = $_POST['blog-title'];
    $blogfeaturedimage = $_FILES['blogFeaturedImage']['name'];
    $blogytlink = $_POST['createYtVideoLink'];
    $blogbodytext = $_POST['blog-body-sec'];
    $blogpublishstatus = $_POST['publishBlogCheckbox'];

    if (empty($_SESSION['userId']) || empty($blogtitle) || empty($blogbodytext) || empty($blogfeaturedimage)) {
        header('Location: post-general-blog.php?error=emptyFields');
        exit();
    } else {
        $target = "../../Photos/Posted Blogs Images/" . basename($blogfeaturedimage);
        if (!move_uploaded_file($_FILES['blogFeaturedImage']['tmp_name'], $target)) {
            header('Location: post-general-blog.php?error=imageNotUploaded');
            exit();
        } else {
            $sql = "INSERT INTO mtd_general_blogs (team_uid, blog_title, blog_img, gen_yt_link, blog_text, published) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn_2);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: post-general-blog.php?error=sqlError1");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "isssss", $_SESSION['userId'], $blogtitle, $blogfeaturedimage, $blogytlink, $blogbodytext, $blogpublishstatus);
                if (!mysqli_stmt_execute($stmt)) {
                    header('Location: post-general-blog.php?error=sqlError2');
                    exit();
                } else {
                    header('Location: post-general-blog.php?error=none&success=blogAddedSuccessfully');
                    exit();
                }
            }
        }
    }
} else {
    if ($_SESSION) {

?>

        <body>

            <head>
                <title>Post Blog</title>
            </head>
            <?php require 'navbar.php' ?>

            <form action="post-general-blog.php" method="POST" enctype="multipart/form-data" class="post-blog main">
                <h2>Create a General Blog</h2>
                <?php
                require '../errors.php';
                ?>
                <input type="text" name="blog-title" placeholder="Blog Title*">
                <fieldset>
                    <legend>Choose Featured Image:</legend>
                    <input type="file" name="blogFeaturedImage"/>
                </fieldset>
                <input type="text" placeholder="Youtube Video Link" name="createYtVideoLink" />
                <div class="text-editor-outer-class">
                    <h4>Blog Body</h4>
                    <textarea name="blog-body-sec" id="body-text-editor" required></textarea>
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
                CKEDITOR.replace('body-text-editor');
            </script>

    <?php require 'footer.php';
    } else {
        header('Location: ../index.php');
        exit();
    }
} ?>