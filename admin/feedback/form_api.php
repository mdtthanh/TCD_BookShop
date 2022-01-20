<?php
session_start();
require_once('../../utils/utility.php');
require_once('../../db/dbhelper.php');

$user = getUserToken();
if($user == null) {
	die();
}

if(!empty($_POST)) {
	$action = getPost('action');

	switch ($action) {
		case 'mark':
			deleteUser();
			break;
	}
}

function deleteUser() {
	$id = getPost('id');
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$updated_at = date("Y-m-d H:i:s");
	$sql = "UPDATE feedback SET status = 1, updated_at = '$updated_at' WHERE id = $id";
	execute($sql);
}