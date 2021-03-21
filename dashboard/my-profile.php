<?php
require 'header-bar.php';
require 'navbar.php';
?>
<div class="my-profile-container-main">
    <p style="font-weight: bold;">My Profile</p>
    <div class="my-profile-nav">
        <button type="button" onclick="loadpd()" id="pdtbtn"><i class="fas fa-user"></i><br />Personal Details</button>
        <button type="button"><i class="fas fa-book"></i><br />Educational Details</button>
        <button type="button"><i class="fas fa-users"></i><br />Family Details</button>
        <button type="button"><i class="fas fa-graduation-cap"></i><br />Academic Details</button>
    </div>
    <div class="clearfix"></div>
    <div id="display-my-profile-content-tab-id" class="display-my-profile-content-tab">

    </div>
</div>
<div id="personal-details">
    <div class="pd-left">
        <img src="../Photos/Our Team/avatar.png" /><br />
        <label for="upload-photo">Select Image</label><br />
        <input type="file" name="photo" id="upload-photo" hidden />
        <span>(upload png/jpg, max 500kb)</span>
    </div>
    <div class="pd-right">
        <fieldset>
            <legend>Name</legend>
            <input type="text" placeholder="<?php echo $_SESSION['userName']?>" readonly>
        </fieldset>
        <fieldset>
            <legend>Phone Number</legend>
            <input type="number" placeholder="Enter Phone Number">
        </fieldset>
        <fieldset>
            <legend>Date of Birth</legend>
            <input type="date" value="">
        </fieldset>

        <div class="clearfix"></div>

        <fieldset id="pd-right-email-inp">
            <legend>Email Address</legend>
            <input type="email" placeholder="Enter Email Address">
        </fieldset>
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" id="male" name="gender" value="male">Male
            <input type="radio" id="female" name="gender" value="female">Female
        </fieldset>
    </div>
</div>
<?php
require 'footerbar.php'
?>