<?php 
	session_start();
	session_unset($_SESSION['userName']);
	session_unset($_SESSION['userId']);
	session_unset($_SESSION['userRole']);
	session_destroy();
	header('Location: index.php');
?>