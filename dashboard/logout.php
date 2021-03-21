<?php 
	session_start();
	session_unset($_SESSION['userName']);
	session_unset($_SESSION['userId']);
	session_unset($_SESSION['userTeir']);
	session_destroy();
	header('Location: ../index.php');
?>