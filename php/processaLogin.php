<?php
	$user = $_POST['user'];
	$pass = $_POST['password'];

	require_once('login.php');
	$Login = new Login();
	$logar = $Login->logar($user,$pass);
	
?>