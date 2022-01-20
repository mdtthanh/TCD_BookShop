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
		case 'update_status':
			updateStatus();
			break;
	}
}

function updateStatus() {
	$id = getPost('id');
	$status = getPost('status');

	$sql = "UPDATE orders SET status = $status WHERE id = $id";
	execute($sql);
}