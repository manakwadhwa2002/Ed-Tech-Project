<?php
require 'header-bar.php';
require 'navbar.php';
if($_SESSION['userName']){
?>
<div class="dashboard-container-main">

</div>

<?php
require 'footerbar.php';
}else{
    header("Location: ../index.php");
    exit();
}
?>