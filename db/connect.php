<?php
//Kết nối
$con = mysqli_connect("localhost", "root", "", "bookstore") or die('Not connected DB!');

//Yêu cầu lưu trữ UTF8 (Tiếng Việt)
    mysqli_set_charset($con, "utf8");
?>