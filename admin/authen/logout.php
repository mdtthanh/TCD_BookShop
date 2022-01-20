<?php
session_start();

require_once('../../utils/utility.php');
require_once('../../db/dbhelper.php');

$user = getUserToken();
if($user != null) {
	$token = getCookie('token');
	$id = $user['id'];
	$sql = "DELETE FROM Token WHERE user_id = '$id' AND token = '$token'";
	execute($sql);
	setcookie('token', '', time() - 100, '/');
}
header('Location: login.php');

session_destroy();
?>