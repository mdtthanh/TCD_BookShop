<?php
$fullname = $email = $msg = '';

if(!empty($_POST)) {
	$fullname = getPost('fullname');
	$email = getPost('email');
	$pwd = getPost('password');


	if(empty($fullname) || empty($email) || empty($pwd) || strlen($pwd) < 8) {
	
    } else {

		$userExist = executeResult("SELECT * FROM User WHERE email = '$email'", true);
		if($userExist != null) {
			$msg = 'This email is already being used';
		} else {
			$created_at = $updated_at = date('Y-m-d H:i:s');
			$pwd = getSecurityMD5($pwd);

			$sql = "INSERT INTO User (fullname, email, password, role_id, created_at, updated_at, deleted) 
                    VALUES ('$fullname', '$email', '$pwd', 2, '$created_at', '$updated_at', 0)";
			execute($sql);
			header('Location: login.php');
			die();
		}
	}
}
?>