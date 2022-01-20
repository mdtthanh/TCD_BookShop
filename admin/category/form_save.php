<?php
if(!empty($_POST)) {
	$id = getPost("id");
	$name = getPost("name");

	if($id > 0) {
		//update
		$sql = "UPDATE Category SET name = '$name' WHERE id = $id";
		execute($sql);
	} else {
		//insert
		$sql = "INSERT INTO Category(name) VALUES ('$name')";
		execute($sql);
	}
}