<div class="sidenav">
        <div class="profile-user">
            <i class="fas fa-user"></i>
            <span><?php echo $_SESSION["userName"]?></span>
        </div>
        <a href="index.php"><i class="fas fa-house-user"></i> Home</a>
        <button class="dropdown-btn"><i class="fas fa-school"></i> Assoc Schools
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="post-blog.php"> Add School</a>
            <a href="manage-blogs.php"> Manage School</a>
            <a href="manage-blogs.php"> Manage School User</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-university"></i> Assoc Colleges
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="post-blog.php"> Add College</a>
            <a href="manage-blogs.php"> Manage College</a>
            <a href="manage-blogs.php"> Manage College Users</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-blog"></i> Blog
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="post-career-blog.php"> Post Career Blog</a>
            <a href="post-general-blog.php"> Post General Blog</a>
            <a href="manage-career-blog.php"> Manage Career Blogs</a>
            <a href="manage-general-blog.php"> Manage General Blogs</a>
            <a href="manage-blogs-category.php"> Manage Blog Category</a>
            <a href="manage-careers.php"> Manage Careers</a>
            <a href="manage-countries.php"> Manage Countries</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-money-check"></i> Coupon Codes
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="post-blog.php"> Manage Coupons</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-database"></i> College Data
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="post-blog.php"> Add College Data</a>
            <a href="manage-blogs.php"> Manage College Data</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-question"></i> FAQ's
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="post-blog.php"> Add College Data</a>
            <a href="manage-blogs.php"> Manage College Data</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-money-bill-alt"></i> Payments
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="post-blog.php"> Manage Payments</a>
        </div>
        <button class="dropdown-btn"><i class="fas fa-database"></i> Scholarships Data
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="post-blog.php"> Add Scholarships Data</a>
            <a href="manage-blogs.php"> Manage Scholarships Data</a>
        </div>
        <?php 
            if($_SESSION['userRole'] == 'Admin'){
        ?>
        <button class="dropdown-btn"><i class="fas fa-users"></i> Team
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="manage-team.php"><i class="fas fa-user-friends"></i> Manage Team</a>
        </div>
        <?php
            }
        ?>
        <button class="dropdown-btn"><i class="fas fa-user-friends"></i> Users
            <i class="fas fa-caret-right"></i>
        </button>
        <div class="dropdown-container">
            <a href="post-blog.php"> Add Users</a>
            <a href="manage-blogs.php"> Manage Users</a>
        </div>
        <!--<a href="#"><i class="fas fa-user-cog"></i> Settings</a>-->
        <a href="../logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>