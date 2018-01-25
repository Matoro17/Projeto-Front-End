<?php
	session_start();
	unset($_SESSION["auth"]);
	unset($_SESSION["member"]);
	session_destroy();
	header("location:../index.php");
	exit;
?>