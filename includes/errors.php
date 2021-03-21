<?php
// Login Page Errors

if(isset($_GET['error'])){
    if($_GET['error'] == "emptyFields"){
        echo"<p style='color:red;'>Empty Fields</p>";
    }
    elseif($_GET['error'] == "wrongPassword"){
        echo"<p style='color:red;'>Invalid Password</p>";
    }
    elseif($_GET['error'] == "notAuthenticated"){
        echo"<p style='color:red;'>Not Authenticated</p>";
    }
    elseif($_GET['error'] == "sqlError"){
        echo"<p style='color:red;'>SQL Error</p>";
    }
    elseif($_GET['error'] == "imageNotUploaded"){
        echo"<p style='color:red;'>Image Not Uploaded</p>";
    }
    elseif($_GET['error'] == "sqlError1"){
        echo"<p style='color:red;'>SQL Error 1 Post Blog</p>";
    }
    elseif($_GET['error'] == "sqlError2"){
        echo"<p style='color:red;'>SQL Error 2 Post Blog</p>";
    }
    elseif($_GET['success'] == "blogAddedSuccessfully"){
        echo"<p style='color:green;'>Blog Added Successfully</p>";
    }
    elseif($_GET['success'] == "blogUpdate"){
        echo"<p style='color:green;'>Blog Updated Successfully</p>";
    }
    elseif($_GET['error'] == "imageAlgoSqlError"){
        echo"<p style='color:red;'>Image Algo SQL Error</p>";
    }
    elseif($_GET['success'] == "blogAddedSuccessfully"){
        echo"<p style='color:green;'>Blog Added Successfully</p>";
    }
}