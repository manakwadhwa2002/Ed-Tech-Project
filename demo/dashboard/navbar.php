<div class="sidenav">
    <img src="../../Photos/Our Team/avatar.png" alt="Avatar User">
    <p><?php echo $_SESSION['userName']?></p>
    <a href="index.php"><i class="fas fa-chalkboard-teacher"></i> Dashboard</a>
    <a href="my-profile.php"><i class="far fa-user"></i> My Profile</a>
    <?php if($_SESSION['userTeir'] == 1){ ?>
    <button class="dropdown-btn"><i class="far fa-file-alt"></i> My Assessment
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-toolbox"></i> My Planning Tools
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
    <button class="dropdown-btn"><i class="far fa-calendar-alt"></i> My Sessions
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
    <button class="dropdown-btn"><i class="fas fa-book-open"></i> My Resources
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
    <?php } else{
        }?>
    <a href="#contact"><i class="fas fa-user-plus"></i> Refer Friend</a>
    <a href="#contact"><i class="far fa-question-circle"></i> Help</a>
</div>