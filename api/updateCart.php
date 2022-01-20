<?php
    ob_start();
    session_start();
    include('../db/connect.php');

    if(isset($_POST["id"]) && isset($_POST["num"])) {
        $id = $_POST["id"];
        if(isset($_SESSION["cart"])){
            $cart = $_SESSION["cart"];
            // echo "<pre>";
            // print_r($cart);

            if(array_key_exists($id, $cart)) {
                if($_POST["num"]){
                    $cart[$id] = array(
                        'name'=>$cart[$id]["name"],
                        'image' => $cart[$id]["image"],
                        'price' => $cart[$id]["price"],
                        'descrip' => $cart[$id]["descrip"],
                        'number' => $_POST["num"]
                    );
                } else {
                    unset($cart[$id]);
                }
                $_SESSION["cart"] = $cart;
			}
		}
    }
    
	// unset($_SESSION['cart']);

?>