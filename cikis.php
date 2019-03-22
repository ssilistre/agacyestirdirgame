<?php 
	session_start();
	session_unset($_SESSION['agac']);
	session_destroy();
	header('location: index.php');
?>