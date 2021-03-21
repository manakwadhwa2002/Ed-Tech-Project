<?php require 'header.php' ?>
<?php
if (isset($_POST['filterBlogs'])) {
    $searchText = $_POST['searchText'];
    $searchBlogId = $_POST['searchBlogId']; ?>

    <?php require 'navbar.php' ?>
    <form action="#" method="POST" class="manage-blogs main">
        <h2>Manage Blogs</h2>
        <fieldset>
            <legend>Filter by:</legend>
            <input type="number" name="searchBlogId" placeholder="Blog ID" />
            <input type="text" name="searchText" placeholder="Blog Name" />
            <button name="filterBlogs" type="submit"><i class="fas fa-filter"></i> Filter</button>
        </fieldset>
    </form>

    <div class="display-manage-blog-output main">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Published</th>
                    <th>Edit</th>
                    <?php 
                        if($_SESSION['userRole'] == 'Admin'){
                    ?>
                    <th>Delete</th>
                    <?php }?>
                </tr>

    <?php
    $sql = "SELECT * FROM mtd_career_blogs WHERE title LIKE '%$searchText%' AND blog_id LIKE '%$searchBlogId%'";
    $result = mysqli_query($conn, $sql);
    $query_result = mysqli_num_rows($result);
    if($query_result>0){
        while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $row['blog_id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['published'] ?></td>
            <td style="text-align: center;"><a href="update-blog.php?editBlog=<?php echo $row['blog_id'] ?>" class="bg-blue"><i class='fas fa-pencil-alt'></i></a></td>
            <?php
                if($_SESSION['userRole'] == 'Admin'){
            ?>
            <td style="text-align: center;"><a href="includes/delete-blog.mtd.php?deleteBlog=<?php echo $row['blog_id'] ?>" class="bg-red"><i class='fas fa-trash-alt'></i></a></td>
            <?php
                }
            ?>
        </tr>
<?php   
        }
    }
    else{
        echo 'Not Found';
    }
} else {
    if($_SESSION){
    ?>
    <?php $getblogsarray = getAllCareerBlogs(); ?>

    <body>

        <head>
            <title>Manage Career Blogs</title>
        </head>
        <?php require 'navbar.php' ?>

        <form action="#" method="POST" class="manage-blogs main">
            <h2>Manage Career Blogs</h2>
            <fieldset>
                <legend>Filter by:</legend>
                <input type="number" name="searchBlogId" placeholder="Blog Id" />
                <input type="text" name="searchText" placeholder="Blog Name" />
                <button name="filterBlogs" type="submit"><i class="fas fa-filter"></i> Filter</button>
            </fieldset>
        </form>
        <div class="display-manage-blog-output main">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Published</th>
                    <th>Preview</th>
                    <th>Edit</th>
                    <?php 
                        if($_SESSION['userRole'] == 'Admin'){
                    ?>
                    <th>Delete</th>
                    <?php }?>
                </tr>
                <?php foreach ($getblogsarray as $singleblogdata) { ?>
                    <tr>
                        <td><?php echo $singleblogdata['blog_id'] ?></td>
                        <td><?php echo $singleblogdata['car_career'] . ' in ' . $singleblogdata['car_country'] ?></td>
                        <td><?php echo $singleblogdata['published'] ?></td>
                        <td class="blog-preview"><a href="preview-career-blog.php?blog_career=<?php echo $singleblogdata['car_career'] ?>&blog_country=<?php echo $singleblogdata['car_country'] ?>">Preview</a></td>
                        <td style="text-align: center;"><a href="update-career-blog.php?editBlog=<?php echo $singleblogdata['blog_id'] ?>" class="bg-blue"><i class='fas fa-pencil-alt'></i></a></td>
                        <?php 
                        if($_SESSION['userRole'] == 'Admin'){
                        ?>
                        <td style="text-align: center;"><a href="includes/delete-career-blog.mtd.php?deleteBlog=<?php echo $singleblogdata['blog_id'] ?>" class="bg-red"><i class='fas fa-trash-alt'></i></a></td>
                        <?php }?>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <?php }
    else{
        header('Location: ../index.php');
        exit();
    }
} ?>
<?php require 'footer.php'; ?>