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
		case 'delete':
			deleteCategory();
			break;
	}
}

function deleteCategory() {
	$id = getPost('id');

	$sql = "SELECT count(*) AS total FROM book WHERE category_id = $id AND deleted = 0";
	$data = executeResult($sql, true);
	// var_dump($data);
	$total = $data['total'];
	if($total > 0) {
		echo 'The list contains products, not deleted!!!';
		die();
	}

	$sql = "delete from Category where id = $id";
	execute($sql);
}