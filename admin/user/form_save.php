<?php
if(!empty($_POST)) {
	$id = getPost('id');
	$fullname = getPost('fullname');
	$email = getPost('email');
	$phone = getPost('phone');
	$address = getPost('address');
	$password = getPost('password');
	if($password != '') {
		$password = getSecurityMD5($password);
	}
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$created_at = $updated_at = date("Y-m-d H:i:s");

	$role_id = getPost('role_id');

	if($id > 0) {
		//update
		$sql = "SELECT * FROM User WHERE email = '$email' AND id <> $id";
		$userItem = executeResult($sql, true);

		if($userItem != null) {
			$msg = 'This email is already being used!!!';
		} else {
			if($password != '') {
				$sql = "UPDATE User SET fullname = '$fullname', email = '$email', phone = '$phone', address = '$address', password = '$password', updated_at = '$updated_at', role_id = $role_id WHERE id = $id";
			} else {
				$sql = "UPDATE User SET fullname = '$fullname', email = '$email', phone = '$phone', address = '$address', updated_at = '$updated_at', role_id = $role_id WHERE id = $id";
			}
			execute($sql);
			echo '<a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
						<i class="fa fa-arrow-left" aria-hidden="true" style="color: #f40000"> User</i>
					</a>';
			echo '<br>';
			echo '<br>';
			echo '<h3 class="text-center" style="color:  #fa0000">Changed information saved.</h3>';
			die();
		}
	} else {
		$sql = "SELECT * FROM User WHERE email = '$email'";
		$userItem = executeResult($sql, true);
		if($userItem == null) {
			$sql = "INSERT INTO User(fullname, email, phone, address, password, role_id, created_at, updated_at, deleted) VALUES ('$fullname', '$email', '$phone', '$address', '$password', '$role_id', '$created_at', '$updated_at', 0)";
			execute($sql);
			echo '<a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
						<i class="fa fa-arrow-left" aria-hidden="true" style="color: #f40000"> User</i>
					</a>';
			echo '<h3 class="text-center" style="color:  #fa0000">Account added successfully.</h3>';
			echo '<br>';
			echo '<br>';
			echo '<h3 class="text-center" style="color:  #fa0000">Changed information saved.</h3>';
			die();
		} else {
			$msg = '  This email is already being used!!!';
			
		}
	}
}