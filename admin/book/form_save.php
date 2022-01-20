<?php
if(!empty($_POST)) {
	$id = getPost('id');
	$title = getPost('title');
	$price = getPost('price');
	$discount = getPost('discount');
	$thumbnail = moveFile('thumbnail');
	$author = getPost('author');
	$publisher = getPost('publisher');
	$publish_year = getPost('publish_year');
	$total_page = getPost('total_page');
	$description = getPost('description');
	$category_id = getPost('category_id');
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$created_at = $updated_at = date('Y-m-d H:s:i');

	if($id > 0) {
		//update
		if($thumbnail != '') {
			$sql = "UPDATE book SET publish_year = '$publish_year', author = '$author', total_page = '$total_page', publisher = '$publisher',  thumbnail = '$thumbnail', title = '$title', price = $price, discount = $discount, description = '$description', updated_at = '$updated_at', category_id = '$category_id' WHERE id = $id";
		} else {
			$sql = "UPDATE book SET publish_year = '$publish_year', author = '$author', total_page = '$total_page', publisher = '$publisher', title = '$title', price = $price, discount = $discount, description = '$description', updated_at = '$updated_at', category_id = '$category_id' WHERE id = $id";
		}
		execute($sql);
			echo '<a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
						<i class="fa fa-arrow-left" aria-hidden="true" style="color: #f40000"> Book</i>
					</a>';
			echo '<br>';
			echo '<br>';
			echo '<h3 class="text-center" style="color:  #fa0000">Changed information saved.</h3>';
		die();
	} else {
		//insert
		$sql = "INSERT INTO book(author, publisher, publish_year, total_page, thumbnail, title, price, discount, description, updated_at, created_at, deleted, category_id) VALUES ('$author', '$publisher', '$publish_year', '$total_page' ,'$thumbnail', '$title', '$price', '$discount', '$description', '$updated_at', '$created_at', 0, $category_id)";
		execute($sql);
		echo '<a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
					<i class="fa fa-arrow-left" aria-hidden="true" style="color: #f40000"> Book</i>
				</a>';
		echo '<br>';
		echo '<br>';
		echo '<h3 class="text-center" style="color:  #fa0000">Book added successfully.</h3>';
		die();
	}
}