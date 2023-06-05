<?php 
	session_start();
	if(isset($_SESSION['user'])) { 
		header("Refresh:0; url=index.php");
		session_destroy();
	}
?>