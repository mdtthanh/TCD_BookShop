<?php
ob_start();
session_start();
include('../db/connect.php');
// include('../utils/utility.php');


	if(isset($_POST["id"])) {
		$id = $_POST["id"];
		$num = $_POST["num"];
		$sqlSelect = "SELECT * FROM book where id = " . $id;
		$result = mysqli_query($con, $sqlSelect);
		$row = mysqli_fetch_row($result);

		if(!isset($_SESSION["cart"])){
			$cart[$id] = array(
				'name'=>$row[4],
				'image' => $row[6],
				'price' => $row[9],
				'descrip' => $row[11],
				'number' => $num
			);
		}else{
			$cart = $_SESSION["cart"];
			if(array_key_exists($id, $cart)) {
				$cart[$id] = array(
					'name'=>$row[4],
					'image' => $row[6],
					'price' => $row[9],
					'descrip' => $row[11],
					'number' => (int)$cart[$id]["number"] + $num
				);
			} else {
				$cart[$id] = array(
					'name'=>$row[4],
					'image' => $row[6],
					'price' => $row[9],
					'descrip' => $row[11],
					'number' => $num
				);
			}
		}
		$_SESSION["cart"] = $cart;
		// echo "<prE>";
		// print_r($_SESSION["cart"]);
		$number = 0;
		$total = 0;
		foreach($cart as $value) {
			$number += (int)$value["number"];
			$total += (int)$value["number"]*(int)$value["price"];
		}
		echo $number ."-". $total;
	}
	
	// unset($_SESSION['cart']);

?>