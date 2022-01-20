<?php
$fullname = $email = $msg = '';

if(!empty($_POST)) {
	$email = getPost('email');
	$pwd = getPost('password');
	$pwd = getSecurityMD5($pwd);

	$sql = "SELECT * FROM User WHERE email = '$email' and password = '$pwd' AND role_id = 1 AND deleted = 0";
	$userExist = executeResult($sql, true);
	if($userExist == null) {
		$msg = 'Login Failed. Please check email/password.';
	} else{
		$token = getSecurityMD5($userExist['email'].time());
		setcookie('token', $token, time() + 1*24*60*60, '/');
		$created_at = date('Y-m-d H:i:s');

		$_SESSION['user'] = $userExist;

		$userId = $userExist['id'];
		$sql = "INSERT INTO Token (user_id, token, created_at) VALUES ('$userId', '$token', '$created_at')";
		execute($sql);

		header('Location: ../');
		die();
	}
}